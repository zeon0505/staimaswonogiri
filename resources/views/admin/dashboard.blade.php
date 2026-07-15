@extends('layouts.admin')
@section('title', 'Dashboard')
@section('breadcrumb', 'Selamat datang di Admin Panel STAIMAS Wonogiri')

@section('content')
{{-- Stats Cards --}}
<div class="grid grid-cols-2 lg:grid-cols-3 gap-4 mb-3">
  @foreach([
    ['label'=>'Total Berita','value'=>$totalBerita,'icon'=>'fas fa-newspaper','bg'=>'bg-blue-50','text'=>'text-blue-600','route'=>'admin.beritas.index'],
    ['label'=>'Total Dosen','value'=>$totalDosen,'icon'=>'fas fa-user-tie','bg'=>'bg-teal-50','text'=>'text-teal-600','route'=>'admin.dosens.index'],
    ['label'=>'Hero Slider','value'=>$totalSlide,'icon'=>'fas fa-images','bg'=>'bg-purple-50','text'=>'text-purple-600','route'=>'admin.slides.index'],
  ] as $stat)
  <a href="{{ route($stat['route']) }}" class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
    <div class="w-11 h-11 {{ $stat['bg'] }} {{ $stat['text'] }} rounded-xl flex items-center justify-center text-lg flex-shrink-0">
      <i class="{{ $stat['icon'] }}"></i>
    </div>
    <div>
      <p class="text-2xl font-black text-gray-800">{{ $stat['value'] }}</p>
      <p class="text-xs text-gray-500 font-medium">{{ $stat['label'] }}</p>
    </div>
  </a>
  @endforeach
</div>

{{-- Visitor + Poster Stats Row --}}
<div class="grid grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
  <a href="{{ route('admin.posters.index') }}" class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
    <div class="w-11 h-11 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center text-lg flex-shrink-0">
      <i class="fas fa-flag"></i>
    </div>
    <div>
      <p class="text-2xl font-black text-gray-800">{{ $totalPoster }}</p>
      <p class="text-xs text-gray-500 font-medium">Poster</p>
    </div>
  </a>
  <a href="{{ route('admin.visitors.index') }}" class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
    <div class="w-11 h-11 bg-green-50 text-green-600 rounded-xl flex items-center justify-center text-lg flex-shrink-0">
      <i class="fas fa-eye"></i>
    </div>
    <div>
      <p class="text-2xl font-black text-gray-800">{{ number_format($totalVisits) }}</p>
      <p class="text-xs text-gray-500 font-medium">Total Kunjungan</p>
    </div>
  </a>
  <a href="{{ route('admin.visitors.index') }}" class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
    <div class="w-11 h-11 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center text-lg flex-shrink-0">
      <i class="fas fa-globe"></i>
    </div>
    <div>
      <p class="text-2xl font-black text-gray-800">{{ number_format($totalUnique) }}</p>
      <p class="text-xs text-gray-500 font-medium">Pengunjung Unik</p>
    </div>
  </a>
</div>

{{-- Quick Actions --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
  <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
      <h3 class="font-bold text-gray-800 text-sm">Berita Terbaru</h3>
      <a href="{{ route('admin.beritas.create') }}" class="text-xs font-bold text-teal-700 hover:underline flex items-center gap-1">
        <i class="fas fa-plus"></i> Tambah Berita
      </a>
    </div>
    <div class="divide-y divide-gray-50">
      @forelse($beritaTerbaru as $b)
      <div class="px-6 py-3 flex items-center justify-between gap-4">
        <div class="min-w-0">
          <p class="text-sm font-semibold text-gray-800 truncate">{{ $b->judul }}</p>
          <p class="text-[11px] text-gray-400 mt-0.5">
            {{ $b->tanggal->format('d M Y') }}
            @if($b->kategori) · <span class="text-teal-600">{{ $b->kategori->nama }}</span>@endif
          </p>
        </div>
        <div class="flex items-center gap-2 flex-shrink-0">
          <span class="text-[10px] font-bold px-2 py-0.5 rounded-full {{ $b->aktif ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">
            {{ $b->aktif ? 'Aktif' : 'Draft' }}
          </span>
          <a href="{{ route('admin.beritas.edit', $b) }}" class="text-gray-400 hover:text-teal-600 text-sm"><i class="fas fa-pen"></i></a>
        </div>
      </div>
      @empty
      <div class="px-6 py-8 text-center text-sm text-gray-400">
        <i class="fas fa-newspaper text-2xl mb-2 block opacity-30"></i> Belum ada berita
      </div>
      @endforelse
    </div>
    <div class="px-6 py-3 bg-gray-50/50 border-t border-gray-100">
      <a href="{{ route('admin.beritas.index') }}" class="text-xs text-teal-700 font-bold hover:underline">Lihat semua berita →</a>
    </div>
  </div>

  <div class="space-y-4">
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-3">
      <h3 class="font-bold text-gray-800 text-sm">Aksi Cepat</h3>
      <a href="{{ route('admin.beritas.create') }}" class="flex items-center gap-3 p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-all">
        <i class="fas fa-plus-circle text-blue-600"></i>
        <span class="text-sm font-semibold text-blue-700">Tambah Berita Baru</span>
      </a>
      <a href="{{ route('admin.dosens.create') }}" class="flex items-center gap-3 p-3 rounded-xl bg-teal-50 hover:bg-teal-100 transition-all">
        <i class="fas fa-user-plus text-teal-600"></i>
        <span class="text-sm font-semibold text-teal-700">Tambah Dosen</span>
      </a>
      <a href="{{ route('admin.slides.create') }}" class="flex items-center gap-3 p-3 rounded-xl bg-purple-50 hover:bg-purple-100 transition-all">
        <i class="fas fa-image text-purple-600"></i>
        <span class="text-sm font-semibold text-purple-700">Upload Slide Baru</span>
      </a>
      <a href="{{ route('admin.posters.create') }}" class="flex items-center gap-3 p-3 rounded-xl bg-yellow-50 hover:bg-yellow-100 transition-all">
        <i class="fas fa-flag text-yellow-600"></i>
        <span class="text-sm font-semibold text-yellow-700">Tambah Poster</span>
      </a>
    </div>

    <div class="bg-gradient-to-br from-teal-700 to-teal-900 rounded-2xl p-5 text-white space-y-2">
      <p class="text-xs font-bold text-teal-300 uppercase tracking-wider">Info Login Admin</p>
      <p class="text-sm font-semibold">{{ auth()->user()->name }}</p>
      <p class="text-xs text-teal-300">{{ auth()->user()->email }}</p>
      <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center gap-1.5 mt-2 text-xs text-yellow-300 hover:text-yellow-200 font-semibold">
        <i class="fas fa-external-link-alt"></i> Buka Website PAI
      </a>
    </div>
  </div>
</div>

{{-- Visitor Countries Widget --}}
<div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden mb-6">
  <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
    <h3 class="font-bold text-gray-800 text-sm flex items-center gap-2">
      <i class="fas fa-globe text-teal-600"></i> Statistik Pengunjung per Negara
    </h3>
    <a href="{{ route('admin.visitors.index') }}" class="text-xs font-bold text-teal-700 hover:underline">Lihat semua →</a>
  </div>
  <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 divide-x divide-gray-50">
    @forelse($topCountries as $country)
    <div class="p-4 text-center hover:bg-gray-50 transition-colors">
      <img src="https://flagcdn.com/32x24/{{ strtolower($country->country_code) }}.png"
           alt="{{ $country->country_code }}"
           class="w-8 h-6 object-cover mx-auto mb-1.5 rounded-sm shadow-sm"
           onerror="this.src='https://flagcdn.com/32x24/un.png'">
      <p class="text-xs font-bold text-gray-700">{{ $country->country_code }}</p>
      <p class="text-sm font-black text-teal-700">{{ number_format($country->total_visits) }}</p>
    </div>
    @empty
    <div class="col-span-8 py-8 text-center text-gray-400 text-sm">
      <i class="fas fa-globe text-3xl mb-2 block opacity-20"></i>
      Belum ada data pengunjung — data akan muncul setelah ada yang mengunjungi website.
    </div>
    @endforelse
  </div>
</div>

@endsection
