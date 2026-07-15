<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'ip',
        'country_code',
        'country_name',
        'visits',
        'last_visit_at',
    ];

    protected $casts = [
        'last_visit_at' => 'datetime',
    ];

    public static function totalUnique(): int
    {
        return self::count();
    }

    public static function totalVisits(): int
    {
        return (int) self::sum('visits');
    }

    public static function topCountries(int $limit = 10)
    {
        return self::whereNotNull('country_code')
            ->selectRaw('country_code, country_name, SUM(visits) as total_visits')
            ->groupBy('country_code', 'country_name')
            ->orderByDesc('total_visits')
            ->limit($limit)
            ->get();
    }
}
