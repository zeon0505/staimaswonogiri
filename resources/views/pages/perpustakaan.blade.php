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
  </div>

  <p class="text-gray-600 leading-relaxed">
    Perpustakaan menyediakan ribuan koleksi buku cetak, jurnal ilmiah, serta layanan e-resource digital untuk mendukung kegiatan akademik, pembelajaran, dan penelitian civitas akademika STAIMAS Wonogiri.
  </p>

  <!-- BANNER PORTAL PERPUSTAKAAN DIGITAL (E-PUSTAKA ECAMPUZ) -->
  <div class="p-6 sm:p-8 border-2 border-gray-200 rounded-2xl bg-gray-50 flex flex-col sm:flex-row items-center justify-between gap-6">
    <div class="flex items-center gap-5">
      <div class="w-14 h-14 rounded-2xl bg-teal-700 text-white flex items-center justify-center shrink-0">
        <i class="fas fa-book-open text-2xl"></i>
      </div>
      <div class="space-y-1">
        <p class="text-xs font-bold text-teal-700 uppercase tracking-wider">Portal eCampuz GT-Pustaka Online</p>
        <h3 class="font-extrabold text-xl text-gray-800 leading-snug">Akses Katalog & Layanan Pustaka Digital</h3>
        <p class="text-sm text-gray-500 leading-relaxed">
          Cari koleksi buku, cek ketersediaan pustaka, dan akses portal perpustakaan digital eCampuz STAIMAS secara online.
        </p>
      </div>
    </div>
    <a href="https://staimaswonogiri.ecampuz.com/gtpustaka_portal/" target="_blank"
       class="inline-flex items-center gap-2 px-6 py-3.5 bg-teal-700 hover:bg-teal-800 text-white font-bold text-sm rounded-xl shadow transition-all shrink-0">
      Ke Halaman eCampuz Pustaka <i class="fas fa-arrow-right text-xs"></i>
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
