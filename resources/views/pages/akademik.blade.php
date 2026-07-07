@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
  <div class="lg:col-span-2 space-y-8">

    <!-- Sistem Akademik -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
      <div class="flex items-center gap-3 mb-6">
        <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center text-teal-700"><i class="fas fa-graduation-cap"></i></div>
        <h2 class="text-xl font-bold text-gray-800">Sistem Akademik</h2>
      </div>
      <p class="text-gray-600 leading-relaxed mb-6">STAIMAS Wonogiri menyelenggarakan pendidikan akademik dengan sistem semester yang mengacu pada Standar Nasional Pendidikan Tinggi (SN-Dikti). Proses perkuliahan dilaksanakan secara terstruktur dan terencana dengan mengutamakan mutu lulusan.</p>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="p-4 bg-teal-50 rounded-xl">
          <i class="fas fa-calendar-alt text-teal-600 text-xl mb-2"></i>
          <h4 class="font-semibold text-gray-800 mb-1">Sistem Semester</h4>
          <p class="text-sm text-gray-600">Perkuliahan dibagi dalam 2 semester per tahun akademik</p>
        </div>
        <div class="p-4 bg-teal-50 rounded-xl">
          <i class="fas fa-book text-teal-600 text-xl mb-2"></i>
          <h4 class="font-semibold text-gray-800 mb-1">Beban SKS</h4>
          <p class="text-sm text-gray-600">Minimal 144 SKS untuk jenjang Strata 1 (S1)</p>
        </div>
        <div class="p-4 bg-teal-50 rounded-xl">
          <i class="fas fa-clock text-teal-600 text-xl mb-2"></i>
          <h4 class="font-semibold text-gray-800 mb-1">Masa Studi</h4>
          <p class="text-sm text-gray-600">8 semester (4 tahun) dengan maksimal 14 semester</p>
        </div>
        <div class="p-4 bg-teal-50 rounded-xl">
          <i class="fas fa-laptop-code text-teal-600 text-xl mb-2"></i>
          <h4 class="font-semibold text-gray-800 mb-1">SIAKAD Online</h4>
          <p class="text-sm text-gray-600">Pengelolaan akademik terintegrasi via portal online</p>
        </div>
      </div>
    </div>

    <!-- Kalender Akademik -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
      <div class="flex items-center gap-3 mb-6">
        <div class="w-10 h-10 bg-yellow-50 rounded-xl flex items-center justify-center text-yellow-600"><i class="fas fa-calendar-check"></i></div>
        <h2 class="text-xl font-bold text-gray-800">Kalender Akademik 2026/2027</h2>
      </div>
      <div class="space-y-3">
        @foreach([
          ['Registrasi & Heregistrasi Mahasiswa', 'Agustus 2026', 'teal'],
          ['Awal Perkuliahan Semester Ganjil', 'September 2026', 'teal'],
          ['Ujian Tengah Semester (UTS)', 'November 2026', 'yellow'],
          ['Ujian Akhir Semester (UAS)', 'Januari 2027', 'red'],
          ['Registrasi Semester Genap', 'Februari 2027', 'teal'],
          ['Awal Perkuliahan Semester Genap', 'Februari 2027', 'teal'],
          ['UTS Semester Genap', 'April 2027', 'yellow'],
          ['UAS Semester Genap', 'Juni 2027', 'red'],
          ['Wisuda Sarjana', 'Oktober 2027', 'purple'],
        ] as $item)
        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-gray-50 transition-colors">
          <span class="w-2 h-2 rounded-full bg-{{ $item[2] }}-500 flex-shrink-0"></span>
          <span class="flex-1 text-sm text-gray-700">{{ $item[0] }}</span>
          <span class="text-xs font-semibold text-gray-500 bg-gray-100 px-3 py-1 rounded-full">{{ $item[1] }}</span>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Sidebar -->
  <div class="space-y-6">
    <div class="bg-teal-700 text-white rounded-2xl p-6">
      <h3 class="font-bold text-lg mb-4">Akses Cepat</h3>
      <div class="space-y-3">
        <a href="https://staimaswonogiri.ecampuz.com/eakademikportal/" target="_blank" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 p-3 rounded-xl text-sm transition-colors">
          <i class="fas fa-laptop-code text-yellow-400"></i> SIAKAD Mahasiswa
        </a>
        <a href="https://e-journal.staimaswonogiri.ac.id/" target="_blank" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 p-3 rounded-xl text-sm transition-colors">
          <i class="fas fa-newspaper text-yellow-400"></i> E-Journal
        </a>
        <a href="{{ route('pages.program-studi') }}" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 p-3 rounded-xl text-sm transition-colors">
          <i class="fas fa-book-open text-yellow-400"></i> Program Studi
        </a>
        <a href="{{ route('pages.pengumuman') }}" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 p-3 rounded-xl text-sm transition-colors">
          <i class="fas fa-bell text-yellow-400"></i> Pengumuman
        </a>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
      <h3 class="font-bold text-gray-800 mb-4">Perlu Bantuan?</h3>
      <p class="text-sm text-gray-600 mb-4">Hubungi bagian akademik STAIMAS Wonogiri untuk informasi lebih lanjut.</p>
      <a href="https://wa.me/6282223204552" target="_blank" class="flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white py-2.5 rounded-xl text-sm font-semibold transition-colors">
        <i class="fab fa-whatsapp text-base"></i> Hubungi via WhatsApp
      </a>
    </div>
  </div>
</div>
@endsection
