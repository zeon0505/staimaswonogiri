@extends('layouts.app')
@section('title', $poster->judul . ' - STAIMAS Wonogiri')

@section('content')
<div class="max-w-5xl mx-auto space-y-8">

  {{-- Card Utama Detail Poster (Instagram & Official Layout) --}}
  <div class="bg-white rounded-3xl border border-gray-100 shadow-xl overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-12 min-h-[500px]">

      {{-- Kolom Kiri: Gambar Poster --}}
      <div class="md:col-span-6 bg-slate-950 flex items-center justify-center p-4 sm:p-6 relative group border-b md:border-b-0 md:border-r border-gray-800">
        @if($poster->gambar)
          <img src="{{ asset('storage/' . $poster->gambar) }}"
               alt="{{ $poster->judul }}"
               class="max-h-[650px] w-auto max-w-full object-contain rounded-xl shadow-2xl transition-transform duration-300 group-hover:scale-[1.01]" />
        @else
          <div class="flex flex-col items-center justify-center text-slate-500 py-24 space-y-3">
            <i class="fas fa-image text-5xl"></i>
            <span class="text-sm font-semibold">Tidak ada gambar poster</span>
          </div>
        @endif

        {{-- Badge Category Overlay --}}
        <div class="absolute top-4 left-4 bg-teal-700/90 backdrop-blur-md text-white text-xs font-bold px-3 py-1.5 rounded-full shadow">
          <i class="fas fa-tag text-[10px] mr-1"></i> {{ $poster->kategori ?? 'Umum' }}
        </div>
      </div>

      {{-- Kolom Kanan: Keterangan & Detail Caption --}}
      <div class="md:col-span-6 p-6 sm:p-8 flex flex-col justify-between space-y-6">

        <div class="space-y-5">
          {{-- Account / Publisher Header ala Instagram --}}
          <div class="flex items-center justify-between border-b border-gray-100 pb-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-teal-50 border border-teal-200 flex items-center justify-center overflow-hidden">
                <img src="{{ asset('assest/LOGO STAIMAS AI.png') }}" alt="STAIMAS Logo" class="w-7 h-7 object-contain">
              </div>
              <div>
                <h4 class="font-extrabold text-gray-900 text-sm leading-tight">STAIMAS Wonogiri</h4>
                <p class="text-[11px] font-semibold text-teal-600">Humas & Informasi Kampus</p>
              </div>
            </div>
            <span class="text-xs text-gray-400 font-medium">
              <i class="far fa-clock mr-1"></i> {{ $poster->created_at->isoFormat('D MMMM Y') }}
            </span>
          </div>

          {{-- Judul & Deskripsi --}}
          <div class="space-y-3">
            <h1 class="text-xl sm:text-2xl font-extrabold text-gray-900 leading-snug tracking-tight">
              {{ $poster->judul }}
            </h1>

            @if($poster->deskripsi)
              <p class="text-sm font-semibold text-teal-700 bg-teal-50/70 p-3 rounded-xl border border-teal-100/80 leading-relaxed">
                {{ $poster->deskripsi }}
              </p>
            @endif
          </div>

          {{-- Isi / Keterangan Penjelasan Poster (Caption Style) --}}
          <div class="prose prose-sm text-gray-700 max-w-none leading-relaxed space-y-3 text-sm whitespace-pre-line border-t border-gray-100 pt-4">
            @if($poster->konten)
              {!! nl2br(e($poster->konten)) !!}
            @else
              <p class="text-gray-400 italic">Tidak ada rincian keterangan tambahan untuk poster ini.</p>
            @endif
          </div>
        </div>

        {{-- Footer Action Buttons (Bagikan & Unduh) --}}
        <div class="border-t border-gray-100 pt-5 space-y-3">
          <div class="flex items-center justify-between">
            <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Bagikan Informasi</span>
            @if($poster->gambar)
              <a href="{{ asset('storage/' . $poster->gambar) }}" download
                 class="text-xs font-semibold text-teal-700 hover:text-teal-800 flex items-center gap-1">
                <i class="fas fa-download"></i> Unduh Poster
              </a>
            @endif
          </div>

          <div class="grid grid-cols-2 gap-3">
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
        </div>

      </div>
    </div>
  </div>

  {{-- Poster / Pengumuman Lainnya --}}
  @if(isset($otherPosters) && $otherPosters->count() > 0)
  <div class="pt-6 space-y-4">
    <div class="flex items-center justify-between">
      <h3 class="text-lg font-extrabold text-gray-900">Poster & Pengumuman Lainnya</h3>
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
