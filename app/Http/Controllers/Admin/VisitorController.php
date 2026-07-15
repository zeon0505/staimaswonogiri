<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'visits');
        $search = $request->get('search');

        $query = Visitor::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('country_name', 'like', "%{$search}%")
                  ->orWhere('country_code', 'like', "%{$search}%")
                  ->orWhere('ip', 'like', "%{$search}%");
            });
        }

        $visitors = $query->orderByDesc($sort === 'recent' ? 'last_visit_at' : 'visits')
            ->paginate(25);

        $byCountry = Visitor::whereNotNull('country_code')
            ->selectRaw('country_code, country_name, SUM(visits) as total_visits, COUNT(*) as unique_ips')
            ->groupBy('country_code', 'country_name')
            ->orderByDesc('total_visits')
            ->get();

        $totalVisits  = Visitor::sum('visits');
        $totalUnique  = Visitor::count();

        return view('admin.visitors.index', compact(
            'visitors', 'byCountry', 'totalVisits', 'totalUnique', 'sort', 'search'
        ));
    }

    public function destroy(Visitor $visitor)
    {
        $visitor->delete();
        return back()->with('success', 'Data pengunjung dihapus.');
    }

    public function destroyAll()
    {
        Visitor::truncate();
        return back()->with('success', 'Semua data pengunjung berhasil dihapus.');
    }
}
