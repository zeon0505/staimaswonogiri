@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-8 space-y-8">
  <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 border-b border-gray-100 pb-6">
    <div>
      <h2 class="text-2xl font-extrabold text-gray-800 mb-1">Perpustakaan STAIMAS Wonogiri</h2>
      <p class="text-gray-500 text-sm">
        Layanan Perpustakaan & Pustaka Digital eCampuz GT-Pustaka
      </p>
    </div>
    <a href="https://staimaswonogiri.ecampuz.com/gtpustaka_portal/" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 bg-teal-700 hover:bg-teal-800 text-white font-bold text-xs rounded-xl shadow transition-all shrink-0">
      <i class="fas fa-external-link-alt"></i> Buka Portal eCampuz Pustaka
    </a>
  </div>

  <p class="text-gray-600 leading-relaxed">
    Perpustakaan menyediakan ribuan koleksi buku cetak, jurnal ilmiah, serta layanan e-resource digital untuk mendukung kegiatan akademik, pembelajaran, dan penelitian civitas akademika STAIMAS Wonogiri.
  </p>

  <!-- BANNER PORTAL PERPUSTAKAAN DIGITAL (E-PUSTAKA ECAMPUZ) -->
  <div class="p-6 sm:p-8 bg-gradient-to-r from-teal-800 to-teal-900 rounded-2xl text-white shadow-md flex flex-col sm:flex-row items-center justify-between gap-6 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(234,179,8,0.15),transparent_60%)]"></div>
    <div class="relative z-10 flex items-center gap-5">
      <div class="w-14 h-14 rounded-2xl bg-yellow-500 text-gray-950 flex items-center justify-center shrink-0 shadow-md">
        <i class="fas fa-book-open text-2xl"></i>
      </div>
      <div class="space-y-1">
        <span class="inline-block bg-yellow-500/20 text-yellow-300 border border-yellow-500/30 px-3 py-0.5 rounded-full text-[11px] font-bold uppercase tracking-wider">
          Portal eCampuz GT-Pustaka Online
        </span>
        <h3 class="font-extrabold text-xl leading-snug">Akses Katalog & Layanan Pustaka Digital</h3>
        <p class="text-xs text-teal-100 leading-relaxed">
          Cari koleksi buku, cek ketersediaan pustaka, dan akses portal perpustakaan digital eCampuz STAIMAS secara online.
        </p>
      </div>
    </div>
    <a href="https://staimaswonogiri.ecampuz.com/gtpustaka_portal/" target="_blank" class="relative z-10 inline-flex items-center gap-2 px-6 py-3.5 bg-yellow-500 hover:bg-yellow-600 text-gray-950 font-extrabold text-sm rounded-xl shadow-lg transition-all shrink-0">
      <span>Ke Halaman eCampuz Pustaka</span>
      <i class="fas fa-arrow-right text-xs"></i>
    </a>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="p-6 bg-gray-50 rounded-xl border border-gray-100">
      <h4 class="font-bold text-gray-800 mb-3 flex items-center gap-2">
        <i class="fas fa-clock text-teal-600"></i> Jam Layanan
      </h4>
      <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex justify-between border-b border-gray-200 pb-1.5">
          <span>Senin - Kamis</span>
          <span class="font-bold text-gray-800">08.00 - 15.00 WIB</span>
        </li>
        <li class="flex justify-between border-b border-gray-200 pb-1.5">
          <span>Jumat</span>
          <span class="font-bold text-gray-800">08.00 - 14.30 WIB</span>
        </li>
        <li class="flex justify-between text-gray-400">
          <span>Sabtu & Minggu</span>
          <span>Tutup</span>
        </li>
      </ul>
    </div>

    <div class="p-6 bg-gray-50 rounded-xl border border-gray-100">
      <h4 class="font-bold text-gray-800 mb-3 flex items-center gap-2">
        <i class="fas fa-list text-teal-600"></i> Fasilitas Perpustakaan
      </h4>
      <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-teal-600 text-xs"></i> Ruang baca yang tenang dan nyaman</li>
        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-teal-600 text-xs"></i> Akses OPAC (Online Public Access Catalog) eCampuz</li>
        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-teal-600 text-xs"></i> Area komputer dan hotspot internet cepat</li>
        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-teal-600 text-xs"></i> Layanan referensi & peminjaman mandiri</li>
      </ul>
    </div>
  </div>
</div>
@endsection
