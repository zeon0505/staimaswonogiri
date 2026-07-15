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

        // Cache key per IP - track once per hour per IP to avoid repeated DB writes
        $cacheKey = 'visitor_tracked_' . md5($ip);

        if (!Cache::has($cacheKey)) {
            Cache::put($cacheKey, true, now()->addHour());

            $visitor = Visitor::where('ip', $ip)->first();

            if ($visitor) {
                // Increment existing visitor
                $visitor->increment('visits');
                $visitor->update(['last_visit_at' => now()]);
            } else {
                // New visitor - resolve country via ip-api.com
                $countryCode = null;
                $countryName = null;

                try {
                    $response = @file_get_contents("http://ip-api.com/json/{$ip}?fields=status,country,countryCode", false, stream_context_create([
                        'http' => ['timeout' => 2]
                    ]));

                    if ($response) {
                        $data = json_decode($response, true);
                        if (isset($data['status']) && $data['status'] === 'success') {
                            $countryCode = $data['countryCode'] ?? null;
                            $countryName = $data['country'] ?? null;
                        }
                    }
                } catch (\Throwable $e) {
                    // Silently fail - don't break the request
                }

                Visitor::create([
                    'ip'           => $ip,
                    'country_code' => $countryCode,
                    'country_name' => $countryName,
                    'visits'       => 1,
                    'last_visit_at' => now(),
                ]);
            }
        }

        return $next($request);
    }
}
