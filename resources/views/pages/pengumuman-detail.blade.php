@extends('layouts.app')
@section('title', $poster->judul . ' - STAIMAS Wonogiri')

@section('content')
<div class="max-w-5xl mx-auto space-y-8 py-2">

  {{-- Minimalist Card Container --}}
  <div class="bg-white rounded-3xl border border-gray-100 shadow-xl shadow-gray-100/50 overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-12">

      {{-- Kolom Kiri: Gambar Poster --}}
      <div class="lg:col-span-6 bg-slate-900/95 p-4 sm:p-6 flex items-center justify-center relative min-h-[350px]">
        @if($poster->gambar)
          <img src="{{ asset('storage/' . $poster->gambar) }}"
               alt="{{ $poster->judul }}"
               class="max-h-[520px] w-auto max-w-full object-contain rounded-xl shadow-2xl transition-transform duration-300 hover:scale-[1.01]" />
        @else
          <div class="flex flex-col items-center justify-center text-slate-400 py-16 space-y-2">
            <i class="fas fa-image text-4xl"></i>
            <span class="text-xs font-semibold">Tidak ada gambar</span>
          </div>
        @endif

        <span class="absolute top-4 left-4 bg-teal-600/90 backdrop-blur-md text-white text-[11px] font-bold px-3 py-1 rounded-full shadow-sm">
          {{ $poster->kategori ?? 'Pengumuman' }}
        </span>
      </div>

      {{-- Kolom Kanan: Rincian & Keterangan --}}
      <div class="lg:col-span-6 p-6 sm:p-8 flex flex-col justify-between space-y-6">

        <div class="space-y-4">
          {{-- Category & Date Header --}}
          <div class="flex items-center justify-between text-xs text-gray-400 font-medium pb-2 border-b border-gray-100">
            <span class="text-teal-700 font-bold uppercase tracking-wider text-[11px]">STAIMAS Info</span>
            <span><i class="far fa-calendar-alt mr-1"></i> {{ $poster->created_at->isoFormat('D MMMM Y') }}</span>
          </div>

          {{-- Title & Subtitle --}}
          <div class="space-y-2">
            <h1 class="text-xl sm:text-2xl font-extrabold text-gray-900 leading-snug tracking-tight">
              {{ $poster->judul }}
            </h1>
            @if($poster->deskripsi)
              <p class="text-xs font-medium text-teal-800 bg-teal-50/80 px-3.5 py-2.5 rounded-xl border border-teal-100 leading-relaxed">
                {{ $poster->deskripsi }}
              </p>
            @endif
          </div>

          {{-- Description Content / Caption --}}
          <div class="text-xs sm:text-sm text-gray-600 leading-relaxed space-y-2 whitespace-pre-line pt-2">
            @if($poster->konten)
              {!! nl2br(e($poster->konten)) !!}
            @else
              <p class="text-gray-400 italic text-xs">Poster pengumuman resmi STAIMAS Wonogiri.</p>
            @endif
          </div>
        </div>

        {{-- Action Buttons --}}
        <div class="pt-4 border-t border-gray-100 space-y-2.5">
          <div class="grid grid-cols-2 gap-2.5">
            <a href="https://api.whatsapp.com/send?text={{ urlencode($poster->judul . ' - ' . url()->current()) }}"
               target="_blank"
               class="flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2.5 px-4 rounded-xl text-xs transition-colors shadow-sm">
              <i class="fab fa-whatsapp text-sm"></i> Bagikan WA
            </a>

            <button onclick="copyCurrentUrl()"
                    class="flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-2.5 px-4 rounded-xl text-xs transition-colors">
              <i class="fas fa-link text-xs"></i> <span id="copy-btn-text">Salin Tautan</span>
            </button>
          </div>

          @if($poster->gambar)
            <a href="{{ asset('storage/' . $poster->gambar) }}" download
               class="w-full flex items-center justify-center gap-2 border border-gray-200 hover:bg-gray-50 text-gray-700 font-semibold py-2 rounded-xl text-xs transition-colors">
              <i class="fas fa-download"></i> Unduh File Poster
            </a>
          @endif
        </div>

      </div>
    </div>
  </div>

  {{-- Section Poster Lainnya --}}
  @if(isset($otherPosters) && $otherPosters->count() > 0)
  <div class="pt-4 space-y-4">
    <div class="flex items-center justify-between">
      <h3 class="text-base font-extrabold text-gray-900">Pengumuman Lainnya</h3>
      <a href="{{ route('pages.pengumuman') }}" class="text-xs font-bold text-teal-700 hover:underline">
        Lihat Semua <i class="fas fa-arrow-right text-[10px] ml-1"></i>
      </a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      @foreach($otherPosters as $item)
      <a href="{{ route('pages.pengumuman.show', $item->slug ?? $item->id) }}"
         class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all overflow-hidden flex flex-col">
        <div class="aspect-[3/4] bg-slate-900 relative overflow-hidden">
          @if($item->gambar)
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
          @else
            <div class="w-full h-full flex items-center justify-center text-slate-500">
              <i class="fas fa-image text-2xl"></i>
            </div>
          @endif
          <span class="absolute top-2 left-2 bg-teal-700/90 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">
            {{ $item->kategori ?? 'Umum' }}
          </span>
        </div>
        <div class="p-3 flex-1 flex flex-col justify-between">
          <h4 class="font-bold text-xs text-gray-900 group-hover:text-teal-700 transition-colors line-clamp-2">
            {{ $item->judul }}
          </h4>
          <span class="text-[10px] text-gray-400 mt-2 block">
            {{ $item->created_at->format('d M Y') }}
          </span>
        </div>
      </a>
      @endforeach
    </div>
  </div>
  @endif

</div>

<script>
function copyCurrentUrl() {
  navigator.clipboard.writeText(window.location.href).then(() => {
    const btnText = document.getElementById('copy-btn-text');
    btnText.textContent = 'Tersalin!';
    setTimeout(() => { btnText.textContent = 'Salin Tautan'; }, 2000);
  });
}
</script>
@endsection
