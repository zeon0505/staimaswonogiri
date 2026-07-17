@extends('layouts.app')

@section('content')
<div class="space-y-12">

  <p class="text-gray-500 text-sm text-center">Tenaga pendidik STAIMAS Wonogiri didukung oleh pengajar yang berkualifikasi tinggi, profesional, dan berdedikasi.</p>

  {{-- FORM PENCARIAN --}}
  <div class="max-w-md mx-auto mb-12">
    <form action="{{ route('pages.dosen') }}" method="GET">
      <div class="relative">
        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none" style="z-index:1;"></i>
        <input type="text" name="search" value="{{ request('search') }}"
               placeholder="Cari nama dosen atau jabatan..."
               style="padding-left: 2.25rem; padding-right: 2.5rem;"
               class="w-full py-2.5 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-transparent transition-all shadow-sm">
        @if(request('search'))
          <a href="{{ route('pages.dosen') }}" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
            <i class="fas fa-times-circle text-sm"></i>
          </a>
        @endif
      </div>
    </form>
  </div>

  @php
    $categories = [
        ['title' => 'Dosen Prodi Pendidikan Agama Islam (PAI)', 'items' => $dosenPAI],
        ['title' => 'Dosen Prodi Ekonomi Syariah (ES)', 'items' => $dosenES],
        ['title' => 'Dosen Prodi Hukum Tata Negara (HTN)', 'items' => $dosenHTN],
        ['title' => 'Dosen Prodi Komunikasi dan Penyiaran Islam (KPI)', 'items' => $dosenKPI],
        ['title' => 'Dosen Lainnya', 'items' => $dosenLain],
    ];
    $hasResults = false;
  @endphp

  @foreach($categories as $category)
    @if($category['items']->count() > 0)
      @php $hasResults = true; @endphp
      <div class="space-y-6 pt-4">
        {{-- NAMA PRODI DI TENGAH --}}
        <div class="text-center">
          <h3 class="inline-block text-lg font-bold text-gray-800 border-b-2 border-teal-600 pb-2 uppercase tracking-wide">
            {{ $category['title'] }}
          </h3>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
          @foreach($category['items'] as $dosen)
          <a href="{{ $dosen->slug ? route('pages.dosen.show', $dosen->slug) : '#' }}" class="block bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-lg transition-all group text-center">
            <div class="aspect-[3/4] w-full overflow-hidden bg-gray-100">
              @if($dosen->foto)
              <img src="{{ str_starts_with($dosen->foto, 'http') ? $dosen->foto : asset('storage/' . $dosen->foto) }}"
                   alt="{{ $dosen->nama }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                   style="object-position: center 10%;">
              @else
              <div class="w-full h-full bg-teal-100 flex items-center justify-center"><i class="fas fa-user text-teal-400 text-4xl"></i></div>
              @endif
            </div>
            <div class="p-4 space-y-1">
              <h4 class="font-bold text-gray-800 text-sm leading-snug">{{ $dosen->nama }}</h4>
              <span class="inline-block text-[11px] font-semibold text-teal-700 bg-teal-50 px-2 py-0.5 rounded-full">{{ $dosen->jabatan }}</span>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    @endif
  @endforeach

  @if(!$hasResults)
    <div class="py-16 text-center text-gray-400">
      <i class="fas fa-user-tie text-5xl mb-3 block opacity-30"></i>
      <p class="text-sm">Tidak ditemukan data dosen yang cocok dengan pencarian Anda.</p>
    </div>
  @endif

  {{-- CTA --}}
  <div class="bg-gradient-to-br from-teal-800 to-teal-900 rounded-3xl p-8 text-center text-white space-y-4">
    <h3 class="text-2xl font-black">Bergabunglah dengan Keluarga Besar STAIMAS</h3>
    <p class="text-teal-100 text-sm max-w-lg mx-auto">Belajar di bawah bimbingan para pengajar berpengalaman yang siap menginspirasi dan mendampingi perjalanan akademismu.</p>
    <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="inline-flex items-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-gray-950 font-bold px-6 py-3 rounded-xl text-sm transition-all shadow-md">
      <i class="fas fa-user-plus"></i> Daftar PMB 2026
    </a>
  </div>

</div>
@endsection