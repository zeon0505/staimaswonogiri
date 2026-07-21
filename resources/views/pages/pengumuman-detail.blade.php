@extends('layouts.app')
@section('title', $poster->judul . ' - STAIMAS Wonogiri')

@section('content')
<div class="max-w-xl mx-auto py-2 px-2 space-y-6">

  {{-- Card Postering Bergaya Feed Instagram --}}
  <div class="bg-white rounded-2xl border border-gray-200 shadow-md overflow-hidden">

    {{-- 1. IG Post Header --}}
    <div class="p-3.5 sm:p-4 flex items-center justify-between border-b border-gray-100 bg-white">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-teal-50 border border-teal-500/30 p-0.5 flex items-center justify-center shrink-0">
          <img src="{{ asset('assest/LOGO STAIMAS AI.png') }}" alt="STAIMAS Logo" class="w-full h-full object-contain rounded-full">
        </div>
        <div class="leading-tight">
          <div class="flex items-center gap-1.5">
            <span class="font-extrabold text-gray-900 text-xs sm:text-sm">staimaswonogiri</span>
            <i class="fas fa-check-circle text-teal-600 text-[11px]" title="Akun Resmi STAIMAS"></i>
          </div>
          <span class="text-[10px] font-semibold text-gray-400 block">{{ $poster->created_at->isoFormat('D MMMM Y') }} &bull; {{ $poster->kategori ?? 'Umum' }}</span>
        </div>
      </div>

      <div class="flex items-center gap-1">
        <button onclick="copyCurrentUrl()" class="p-2 text-gray-400 hover:text-teal-700 transition-colors" title="Salin Link">
          <i class="fas fa-ellipsis-h text-sm"></i>
        </button>
      </div>
    </div>

    {{-- 2. IG Post Media / Gambar Poster --}}
    <div class="bg-slate-950 relative overflow-hidden flex items-center justify-center min-h-[300px] max-h-[550px]">
      @if($poster->gambar)
        <img src="{{ asset('storage/' . $poster->gambar) }}" alt="{{ $poster->judul }}" class="w-full h-full object-contain max-h-[550px]">
      @else
        <div class="py-20 text-center text-slate-500">
          <i class="fas fa-image text-4xl mb-2"></i>
          <p class="text-xs font-semibold">Tidak ada gambar</p>
        </div>
      @endif
    </div>

    {{-- 3. IG Action Bar (Icons) --}}
    <div class="px-4 pt-3 pb-1 flex items-center justify-between">
      <div class="flex items-center gap-4 text-gray-700 text-lg">
        <a href="https://api.whatsapp.com/send?text={{ urlencode($poster->judul . ' - ' . url()->current()) }}"
           target="_blank"
           class="hover:text-emerald-600 transition-colors"
           title="Bagikan ke WhatsApp">
          <i class="fab fa-whatsapp"></i>
        </a>
        <button onclick="copyCurrentUrl()" class="hover:text-teal-600 transition-colors" title="Salin Tautan">
          <i class="far fa-paper-plane"></i>
        </button>
      </div>

      @if($poster->gambar)
      <a href="{{ asset('storage/' . $poster->gambar) }}" download class="text-gray-700 hover:text-teal-700 transition-colors text-lg" title="Unduh Poster">
        <i class="far fa-bookmark"></i>
      </a>
      @endif
    </div>

    {{-- 4. IG Caption & Content Area --}}
    <div class="px-4 pb-5 pt-1 space-y-2.5 text-xs sm:text-sm">

      {{-- Judul Post --}}
      <div class="text-gray-900 leading-snug">
        <span class="font-extrabold mr-1.5">staimaswonogiri</span>
        <span class="font-bold text-gray-900">{{ $poster->judul }}</span>
      </div>

      {{-- Highlight Deskripsi --}}
      @if($poster->deskripsi)
      <p class="text-teal-800 bg-teal-50/80 p-2.5 rounded-xl border border-teal-100/70 text-xs leading-relaxed">
        {{ $poster->deskripsi }}
      </p>
      @endif

      {{-- Isi Keterangan Lengkap (Caption IG) --}}
      @if($poster->konten)
      <div class="text-gray-700 leading-relaxed whitespace-pre-line pt-1 text-xs border-t border-gray-100">
        {!! nl2br(e($poster->konten)) !!}
      </div>
      @endif

      {{-- Date stamp --}}
      <div class="pt-2 text-[10px] uppercase tracking-wider text-gray-400 font-semibold">
        {{ $poster->created_at->diffForHumans() }}
      </div>

    </div>

  </div>

  {{-- Notification toast for URL copy --}}
  <div id="toast-copy" class="fixed bottom-6 right-6 bg-gray-900/90 text-white text-xs font-semibold px-4 py-2.5 rounded-xl shadow-lg flex items-center gap-2 opacity-0 pointer-events-none transition-all duration-300 z-50">
    <i class="fas fa-check-circle text-emerald-400"></i> Link postingan berhasil disalin!
  </div>

  {{-- Recommended Items --}}
  @if(isset($otherPosters) && $otherPosters->count() > 0)
  <div class="pt-4 space-y-3">
    <div class="flex items-center justify-between">
      <h3 class="text-xs font-bold uppercase tracking-wider text-gray-500">Postingan Lainnya</h3>
      <a href="{{ route('pages.pengumuman') }}" class="text-xs font-bold text-teal-700 hover:underline">
        Lihat Semua
      </a>
    </div>

    <div class="grid grid-cols-4 gap-2">
      @foreach($otherPosters as $item)
      <a href="{{ route('pages.pengumuman.show', $item->slug ?? $item->id) }}"
         class="aspect-square bg-slate-900 rounded-xl overflow-hidden relative group border border-gray-100">
        @if($item->gambar)
          <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        @else
          <div class="w-full h-full flex items-center justify-center text-slate-500">
            <i class="fas fa-image text-lg"></i>
          </div>
        @endif
      </a>
      @endforeach
    </div>
  </div>
  @endif

</div>

<script>
function copyCurrentUrl() {
  navigator.clipboard.writeText(window.location.href).then(() => {
    const toast = document.getElementById('toast-copy');
    toast.classList.remove('opacity-0', 'pointer-events-none');
    toast.classList.add('opacity-100');
    setTimeout(() => {
      toast.classList.remove('opacity-100');
      toast.classList.add('opacity-0', 'pointer-events-none');
    }, 2000);
  });
}
</script>
@endsection
