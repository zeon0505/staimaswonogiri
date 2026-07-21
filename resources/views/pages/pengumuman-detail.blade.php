@extends('layouts.app')
@section('title', $poster->judul . ' - STAIMAS Wonogiri')

@section('content')
<div class="max-w-4xl mx-auto py-4 px-2">

  {{-- Main Card --}}
  <div class="bg-white rounded-3xl border border-gray-100 shadow-xl overflow-hidden">
    
    {{-- Header Judul & Badge --}}
    <div class="p-6 sm:p-8 border-b border-gray-100 bg-gradient-to-r from-teal-900 to-teal-800 text-white flex flex-col md:flex-row md:items-center justify-between gap-4">
      <div>
        <div class="flex items-center gap-2 mb-2">
          <span class="bg-teal-700/80 text-teal-100 text-xs font-bold px-3 py-1 rounded-full border border-teal-500/30">
            {{ $poster->kategori ?? 'Pengumuman' }}
          </span>
          <span class="text-xs text-teal-200/80">
            <i class="far fa-calendar-alt mr-1"></i> {{ $poster->created_at->isoFormat('D MMMM Y') }}
          </span>
        </div>
        <h1 class="text-xl sm:text-2xl font-extrabold text-white leading-snug">
          {{ $poster->judul }}
        </h1>
      </div>
      
      <div class="flex items-center gap-2 shrink-0">
        <a href="https://api.whatsapp.com/send?text={{ urlencode($poster->judul . ' - ' . url()->current()) }}"
           target="_blank"
           class="bg-emerald-500 hover:bg-emerald-600 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition-all shadow-sm flex items-center gap-1.5">
          <i class="fab fa-whatsapp text-sm"></i> Bagikan
        </a>
        <button onclick="copyCurrentUrl()"
                class="bg-white/10 hover:bg-white/20 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition-all flex items-center gap-1.5">
          <i class="fas fa-link text-xs"></i> <span id="copy-btn-text">Salin Link</span>
        </button>
      </div>
    </div>

    {{-- Content Body (Gambar & Keterangan) --}}
    <div class="p-6 sm:p-8 space-y-8">

      {{-- Gambar Poster Center --}}
      @if($poster->gambar)
      <div class="bg-slate-900 rounded-2xl p-4 sm:p-6 flex flex-col items-center justify-center relative shadow-inner">
        <img src="{{ asset('storage/' . $poster->gambar) }}"
             alt="{{ $poster->judul }}"
             class="max-h-[600px] w-auto max-w-full object-contain rounded-lg shadow-2xl" />
        <div class="mt-4 flex justify-center">
          <a href="{{ asset('storage/' . $poster->gambar) }}" download
             class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white text-xs font-semibold px-4 py-2 rounded-lg transition-colors">
            <i class="fas fa-download"></i> Unduh Poster High-Res
          </a>
        </div>
      </div>
      @endif

      {{-- Deskripsi Highlight --}}
      @if($poster->deskripsi)
      <div class="bg-teal-50/70 rounded-2xl p-5 border border-teal-100 text-teal-900 text-sm font-semibold leading-relaxed">
        <i class="fas fa-info-circle text-teal-600 mr-1.5"></i> {{ $poster->deskripsi }}
      </div>
      @endif

      {{-- Konten / Penjelasan Detail --}}
      @if($poster->konten)
      <div class="space-y-3">
        <h3 class="text-sm font-extrabold uppercase tracking-wider text-gray-400">Rincian Informasi / Keterangan</h3>
        <div class="prose prose-teal max-w-none text-gray-700 text-sm sm:text-base leading-relaxed whitespace-pre-line bg-gray-50/50 p-6 rounded-2xl border border-gray-100">
          {!! nl2br(e($poster->konten)) !!}
        </div>
      </div>
      @endif

    </div>
  </div>

  {{-- Poster Lainnya --}}
  @if(isset($otherPosters) && $otherPosters->count() > 0)
  <div class="pt-6 space-y-4">
    <div class="flex items-center justify-between">
      <h3 class="text-base font-extrabold text-gray-900">Pengumuman & Poster Lainnya</h3>
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
    setTimeout(() => { btnText.textContent = 'Salin Link'; }, 2000);
  });
}
</script>
@endsection
