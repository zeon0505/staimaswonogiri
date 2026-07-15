@extends('layouts.admin')
@section('title', 'Statistik Pengunjung')
@section('breadcrumb', 'Pantau pengunjung website STAIMAS berdasarkan negara asal')

@section('content')

{{-- Summary Cards --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
  <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm flex items-center gap-4">
    <div class="w-11 h-11 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center text-lg flex-shrink-0">
      <i class="fas fa-eye"></i>
    </div>
    <div>
      <p class="text-2xl font-black text-gray-800">{{ number_format($totalVisits) }}</p>
      <p class="text-xs text-gray-500 font-medium">Total Kunjungan</p>
    </div>
  </div>
  <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm flex items-center gap-4">
    <div class="w-11 h-11 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-lg flex-shrink-0">
      <i class="fas fa-users"></i>
    </div>
    <div>
      <p class="text-2xl font-black text-gray-800">{{ number_format($totalUnique) }}</p>
      <p class="text-xs text-gray-500 font-medium">IP Unik</p>
    </div>
  </div>
  <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm flex items-center gap-4">
    <div class="w-11 h-11 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center text-lg flex-shrink-0">
      <i class="fas fa-flag"></i>
    </div>
    <div>
      <p class="text-2xl font-black text-gray-800">{{ $byCountry->count() }}</p>
      <p class="text-xs text-gray-500 font-medium">Negara</p>
    </div>
  </div>
  <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm flex items-center gap-4">
    <div class="w-11 h-11 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center text-lg flex-shrink-0">
      <i class="fas fa-chart-bar"></i>
    </div>
    <div>
      <p class="text-2xl font-black text-gray-800">{{ $totalUnique > 0 ? number_format($totalVisits / $totalUnique, 1) : 0 }}</p>
      <p class="text-xs text-gray-500 font-medium">Rata-rata Kunjungan/IP</p>
    </div>
  </div>
</div>

{{-- By Country Table --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">

  {{-- Top Countries --}}
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
      <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
        <i class="fas fa-globe text-teal-600"></i> Pengunjung per Negara
      </h3>
    </div>
    <div class="divide-y divide-gray-50 max-h-[420px] overflow-y-auto">
      @forelse($byCountry as $i => $country)
      <div class="px-5 py-3 flex items-center gap-3">
        <span class="text-xs font-bold text-gray-400 w-5 text-right">{{ $i + 1 }}</span>
        <img src="https://flagcdn.com/24x18/{{ strtolower($country->country_code) }}.png"
             alt="{{ $country->country_code }}"
             class="w-6 h-4 object-cover rounded-sm shadow-sm flex-shrink-0"
             onerror="this.style.display='none'">
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-gray-800 truncate">{{ $country->country_name ?? 'Unknown' }}</p>
          <p class="text-[10px] text-gray-400">{{ $country->unique_ips }} IP unik</p>
        </div>
        <div class="text-right flex-shrink-0">
          <p class="text-sm font-black text-teal-700">{{ number_format($country->total_visits) }}</p>
          <p class="text-[10px] text-gray-400">kunjungan</p>
        </div>
        {{-- Bar --}}
        @if($byCountry->first()->total_visits > 0)
        <div class="w-16 bg-gray-100 rounded-full h-1.5 flex-shrink-0">
          <div class="bg-teal-500 h-1.5 rounded-full"
               style="width: {{ min(100, ($country->total_visits / $byCountry->first()->total_visits) * 100) }}%"></div>
        </div>
        @endif
      </div>
      @empty
      <div class="px-6 py-10 text-center text-gray-400">
        <i class="fas fa-globe text-3xl mb-2 block opacity-20"></i>
        <p class="text-sm">Belum ada data pengunjung.</p>
      </div>
      @endforelse
    </div>
  </div>

  {{-- Recent Visitors (IP Table) --}}
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
      <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
        <i class="fas fa-history text-blue-600"></i> Pengunjung Terbaru
      </h3>
      @if($visitors->total() > 0)
      <form method="POST" action="{{ route('admin.visitors.destroy-all') }}"
            onsubmit="return confirm('Reset semua data pengunjung?')">
        @csrf @method('DELETE')
        <button class="text-[11px] text-red-500 hover:text-red-700 font-semibold flex items-center gap-1">
          <i class="fas fa-trash"></i> Reset Data
        </button>
      </form>
      @endif
    </div>
    <div class="divide-y divide-gray-50 max-h-[420px] overflow-y-auto">
      @forelse($visitors as $v)
      <div class="px-5 py-2.5 flex items-center gap-3">
        <img src="https://flagcdn.com/24x18/{{ strtolower($v->country_code ?? 'un') }}.png"
             alt="{{ $v->country_code }}"
             class="w-5 h-3.5 object-cover rounded-sm flex-shrink-0"
             onerror="this.style.display='none'">
        <div class="flex-1 min-w-0">
          <p class="text-xs font-semibold text-gray-700 truncate">{{ $v->ip }}</p>
          <p class="text-[10px] text-gray-400">{{ $v->country_name ?? 'Unknown' }} &middot; Terakhir: {{ $v->last_visit_at?->diffForHumans() ?? '-' }}</p>
        </div>
        <span class="text-xs font-bold text-teal-700 bg-teal-50 px-2 py-0.5 rounded-full flex-shrink-0">
          {{ $v->visits }}x
        </span>
      </div>
      @empty
      <div class="px-6 py-10 text-center text-gray-400">
        <i class="fas fa-users text-3xl mb-2 block opacity-20"></i>
        <p class="text-sm">Belum ada data pengunjung.</p>
      </div>
      @endforelse
    </div>
    @if($visitors->hasPages())
    <div class="px-5 py-3 border-t border-gray-100 text-xs text-gray-400">
      {{ $visitors->links() }}
    </div>
    @endif
  </div>
</div>

@endsection
