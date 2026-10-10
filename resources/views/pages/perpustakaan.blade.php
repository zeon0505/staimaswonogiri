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
    <a href="https://staimaswonogiri.ecampuz.com/gtpustaka_portal/" target="_blank"
       style="background-color: #115e59; color: #ffffff;"
       class="inline-flex items-center gap-2 px-5 py-2.5 font-bold text-xs rounded-xl shadow transition-all shrink-0 hover:opacity-90">
      <i class="fas fa-external-link-alt"></i> Buka Portal eCampuz Pustaka
    </a>
  </div>

  <p class="text-gray-600 leading-relaxed">
    Perpustakaan menyediakan ribuan koleksi buku cetak, jurnal ilmiah, serta layanan e-resource digital untuk mendukung kegiatan akademik, pembelajaran, dan penelitian civitas akademika STAIMAS Wonogiri.
  </p>

  <!-- BANNER PORTAL PERPUSTAKAAN DIGITAL (E-PUSTAKA ECAMPUZ) -->
  <div style="background-color: #0f3d3e; color: #ffffff;" class="p-6 sm:p-8 rounded-2xl shadow-md flex flex-col sm:flex-row items-center justify-between gap-6 relative overflow-hidden">
    <div class="flex items-center gap-5">
      <div style="background-color: #eab308; color: #000000;" class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0 shadow-md">
        <i class="fas fa-book-open text-2xl"></i>
      </div>
      <div class="space-y-1">
        <span style="background-color: #eab308; color: #000000; font-weight: 800;" class="inline-block px-3 py-0.5 rounded-full text-xs uppercase tracking-wider">
          Portal eCampuz GT-Pustaka Online
        </span>
        <h3 style="color: #ffffff; margin: 4px 0 0 0;" class="font-extrabold text-xl leading-snug">Akses Katalog & Layanan Pustaka Digital</h3>
        <p style="color: #d1fae5; margin: 0;" class="text-sm leading-relaxed">
          Cari koleksi buku, cek ketersediaan pustaka, dan akses portal perpustakaan digital eCampuz STAIMAS secara online.
        </p>
      </div>
    </div>
    <a href="https://staimaswonogiri.ecampuz.com/gtpustaka_portal/" target="_blank"
       style="background-color: #eab308; color: #000000; text-decoration: none; font-weight: 800;"
       class="inline-flex items-center gap-2 px-6 py-3.5 text-sm rounded-xl shadow-lg transition-all shrink-0 hover:opacity-90">
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
