@extends('layouts.app')

@section('content')
<div class="space-y-8">

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Sistem Akademik -->
    <div class="lg:col-span-2">
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 h-full flex flex-col justify-between">
        <div>
          <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center text-teal-700"><i class="fas fa-graduation-cap"></i></div>
            <h2 class="text-xl font-bold text-gray-800">Sistem Akademik</h2>
          </div>
          <p class="text-gray-600 leading-relaxed mb-6">STAIMAS Wonogiri menyelenggarakan pendidikan akademik dengan sistem semester yang mengacu pada Standar Nasional Pendidikan Tinggi (SN-Dikti). Proses perkuliahan dilaksanakan secara terstruktur dan terencana dengan mengutamakan mutu lulusan.</p>
        </div>
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

  <!-- Kalender & Jadwal Akademik (Full-width, 3 kolom) -->
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <div class="flex items-center gap-3 mb-2">
      <div class="w-10 h-10 bg-yellow-50 rounded-xl flex items-center justify-center text-yellow-600"><i class="fas fa-calendar-alt"></i></div>
      <h2 class="text-xl font-bold text-gray-800">Kalender & Jadwal Akademik 2026/2027</h2>
    </div>
    <p class="text-xs text-gray-400 mb-7 ml-[52px]">Klik kartu untuk membuka, atau gunakan tombol unduh untuk menyimpan dokumen.</p>

    @php
      $dokumenAkademik = [
        [
          'nama'    => 'Kalender Akademik',
          'subjudul'=> 'TA 2026/2027',
          'file'    => 'assest/258 SK KALDIK 2026.pdf',
          'logo'    => 'assest/LOGO STAIMAS AI.png',
          'color'   => '#0f766e',
        ],
        [
          'nama'    => 'Prodi PAI',
          'subjudul'=> 'Pendidikan Agama Islam',
          'file'    => 'assest/JADWAL PRODI PENDIDIKAN AGAMA ISLAM.pdf',
          'logo'    => 'assest/PAI.jpeg',
          'color'   => '#047857',
        ],
        [
          'nama'    => 'Prodi KPI',
          'subjudul'=> 'Komunikasi Penyiaran Islam',
          'file'    => 'assest/JADWAL PRODI KOMUNIKASI DAN PENYIARAN ISLAM.pdf',
          'logo'    => 'assest/LOGO PRODI KPI.png',
          'color'   => '#1d4ed8',
        ],
        [
          'nama'    => 'Prodi Ekonomi Syariah',
          'subjudul'=> 'Jadwal Perkuliahan ES',
          'file'    => 'assest/JADWAL PRODI EKONOMI SYARIAH.pdf',
          'logo'    => 'assest/ES.jpeg',
          'color'   => '#b45309',
        ],
        [
          'nama'    => 'Prodi Hukum Tata Negara',
          'subjudul'=> 'Jadwal Perkuliahan HTN',
          'file'    => 'assest/JADWAL PRODI HUKUM TATA NEGARA.pdf',
          'logo'    => 'assest/HTN.jpeg',
          'color'   => '#4338ca',
        ],
        [
          'nama'    => 'PAI Kelas Baitul Izza',
          'subjudul'=> 'Jadwal Kelas Khusus',
          'file'    => 'assest/JADWAL PRODI PAI KELAS BAITUL IZZA.pdf',
          'logo'    => 'assest/PAI.jpeg',
          'color'   => '#6d28d9',
        ],
      ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($dokumenAkademik as $doc)
      @php $fileUrl = asset($doc['file']); @endphp
      <div class="rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col bg-white">

        {{-- PDF Preview (Scrollable iframe) --}}
        <div class="relative bg-gray-50 overflow-hidden border-b border-gray-100" style="height: 230px;">
          <iframe
            src="{{ $fileUrl }}#toolbar=0&navpanes=0&view=FitH&page=1"
            class="w-full border-0"
            style="height: 100%;"
            loading="lazy"
            title="Preview {{ $doc['nama'] }}"
          ></iframe>
        </div>

        {{-- Judul di bawah preview --}}
        <div class="px-4 pt-3 pb-2">
          <div class="flex items-center gap-2.5">
            <div class="w-7 h-7 rounded-md overflow-hidden flex items-center justify-center bg-gray-50 border border-gray-100 shrink-0 p-0.5">
              <img src="{{ asset($doc['logo']) }}" alt="{{ $doc['nama'] }}" class="w-full h-full object-contain">
            </div>
            <div class="min-w-0">
              <p class="text-sm font-bold text-gray-900 leading-tight">{{ $doc['nama'] }}</p>
              <p class="text-[10px] text-gray-400">{{ $doc['subjudul'] }}</p>
            </div>
          </div>
        </div>

        {{-- Tombol Aksi --}}
        <div class="flex gap-2 px-4 pb-4 mt-auto">
          <a href="{{ $fileUrl }}" target="_blank"
             class="flex-1 flex items-center justify-center gap-1.5 border border-gray-200 hover:bg-gray-50 text-gray-600 font-bold text-xs py-2 rounded-xl transition-colors">
            <i class="fas fa-eye text-[10px]"></i> Buka
          </a>
          <a href="{{ $fileUrl }}" download
             class="flex-1 flex items-center justify-center gap-1.5 text-white font-bold text-xs py-2 rounded-xl transition-opacity hover:opacity-85 shadow-sm"
             style="background-color: {{ $doc['color'] }};">
            <i class="fas fa-download text-[10px]"></i> Unduh
          </a>
        </div>

      </div>
      @endforeach
    </div>
  </div>

</div>

  <!-- Jadwal Kelas Karyawan (Full-width) -->
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <div class="flex items-center gap-3 mb-2">
      <div class="w-10 h-10 bg-orange-50 rounded-xl flex items-center justify-center text-orange-500"><i class="fas fa-briefcase"></i></div>
      <div>
        <h2 class="text-xl font-bold text-gray-800">Jadwal Kelas Karyawan 2026/2027</h2>
      </div>
    </div>
    <p class="text-xs text-gray-400 mb-7 ml-[52px]">Jadwal perkuliahan khusus mahasiswa kelas karyawan (program kerjasama) Semester Ganjil TA 2026/2027.</p>

    @php
      $jadwalKaryawan = [
        [
          'nama'    => 'Kelas Karyawan Semester 1',
          'subjudul'=> 'Semua Prodi – Semester 1',
          'file'    => 'assest/JADWAL KELAS KARYAWAN SEMESTER 1.pdf',
          'logo'    => 'assest/LOGO STAIMAS AI.png',
          'color'   => '#0f766e',
        ],
        [
          'nama'    => 'Prodi ES – Kelas Karyawan Sem. 3',
          'subjudul'=> 'Ekonomi Syariah',
          'file'    => 'assest/JADWAL PRODI ES KELAS KARYAWAN SEMESTER 3.pdf',
          'logo'    => 'assest/ES.jpeg',
          'color'   => '#b45309',
        ],
        [
          'nama'    => 'Prodi ES – Kelas Karyawan Sem. 5',
          'subjudul'=> 'Ekonomi Syariah',
          'file'    => 'assest/JADWAL PRODI ES KELAS KARYAWAN SEMESTER 5.pdf',
          'logo'    => 'assest/ES.jpeg',
          'color'   => '#92400e',
        ],
        [
          'nama'    => 'Prodi HTN – Kelas Karyawan Sem. 3 & 5',
          'subjudul'=> 'Hukum Tata Negara',
          'file'    => 'assest/JADWAL PRODI HTN KELAS KARYAWAN SM 3&5.pdf',
          'logo'    => 'assest/HTN.jpeg',
          'color'   => '#4338ca',
        ],
        [
          'nama'    => 'Prodi PAI – Kelas Karyawan Sem. 3',
          'subjudul'=> 'Pendidikan Agama Islam',
          'file'    => 'assest/JADWAL PRODI PAI KELAS KARYAWAN SEMESTER 3.pdf',
          'logo'    => 'assest/PAI.jpeg',
          'color'   => '#047857',
        ],
      ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($jadwalKaryawan as $doc)
      @php $fileUrl = asset($doc['file']); @endphp
      <div class="rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col bg-white">

        {{-- PDF Preview (Scrollable iframe) --}}
        <div class="relative bg-gray-50 overflow-hidden border-b border-gray-100" style="height: 230px;">
          <iframe
            src="{{ $fileUrl }}#toolbar=0&navpanes=0&view=FitH&page=1"
            class="w-full border-0"
            style="height: 100%;"
            loading="lazy"
            title="Preview {{ $doc['nama'] }}"
          ></iframe>
        </div>

        {{-- Judul di bawah preview --}}
        <div class="px-4 pt-3 pb-2">
          <div class="flex items-center gap-2.5">
            <div class="w-7 h-7 rounded-md overflow-hidden flex items-center justify-center bg-gray-50 border border-gray-100 shrink-0 p-0.5">
              <img src="{{ asset($doc['logo']) }}" alt="{{ $doc['nama'] }}" class="w-full h-full object-contain">
            </div>
            <div class="min-w-0">
              <p class="text-sm font-bold text-gray-900 leading-tight">{{ $doc['nama'] }}</p>
              <p class="text-[10px] text-gray-400">{{ $doc['subjudul'] }}</p>
            </div>
          </div>
        </div>

        {{-- Tombol Aksi --}}
        <div class="flex gap-2 px-4 pb-4 mt-auto">
          <a href="{{ $fileUrl }}" target="_blank"
             class="flex-1 flex items-center justify-center gap-1.5 border border-gray-200 hover:bg-gray-50 text-gray-600 font-bold text-xs py-2 rounded-xl transition-colors">
            <i class="fas fa-eye text-[10px]"></i> Buka
          </a>
          <a href="{{ $fileUrl }}" download
             class="flex-1 flex items-center justify-center gap-1.5 text-white font-bold text-xs py-2 rounded-xl transition-opacity hover:opacity-85 shadow-sm"
             style="background-color: {{ $doc['color'] }};">
            <i class="fas fa-download text-[10px]"></i> Unduh
          </a>
        </div>

      </div>
      @endforeach
    </div>
  </div>
@endsection