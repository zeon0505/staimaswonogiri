<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        // Skip admin routes and API requests
        if ($request->is('admin*') || $request->is('api*')) {
            return $next($request);
        }

        $ip = $request->ip();

        // If on localhost/private network, simulate a public IP for testing purposes
        if ($ip === '127.0.0.1' || $ip === '::1' || str_starts_with($ip, '192.168.')) {
            // Use a mock public IP (Indonesia) for localhost preview
            $ip = '103.146.185.171';
        }

        // Cache key per IP - track once per hour per IP to avoid repeated DB writes
        $cacheKey = 'visitor_tracked_' . md5($ip);

        try {
            if (!Cache::has($cacheKey)) {
                Cache::put($cacheKey, true, now()->addHour());

                $visitor = Visitor::where('ip', $ip)->first();

                if ($visitor) {
                    $visitor->increment('visits');
                    $visitor->update(['last_visit_at' => now()]);
                } else {
                    $countryCode = null;
                    $countryName = null;

                    try {
                        $response = \Illuminate\Support\Facades\Http::timeout(3)
                            ->withHeaders(['User-Agent' => 'Mozilla/5.0'])
                            ->get("http://ip-api.com/json/{$ip}?fields=status,country,countryCode");

                        if ($response->successful()) {
                            $data = $response->json();
                            if (isset($data['status']) && $data['status'] === 'success') {
                                $countryCode = $data['countryCode'] ?? null;
                                $countryName = $data['country'] ?? null;
                            }
                        }
                    } catch (\Throwable $e) {}

                    Visitor::create([
                        'ip'            => $ip,
                        'country_code'  => $countryCode,
                        'country_name'  => $countryName,
                        'visits'        => 1,
                        'last_visit_at' => now(),
                    ]);
                }
            }
        } catch (\Throwable $e) {
            // Tabel belum ada atau error DB — skip, halaman tetap jalan
        }

        return $next($request);
    }
}
