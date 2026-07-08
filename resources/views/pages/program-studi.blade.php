@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
  @foreach([
    ['Pendidikan Agama Islam', 'PAI', 'Terakreditasi B', 'pai', 'Mempersiapkan pendidik profesional dan berkarakter Islami', 'teal'],
    ['Komunikasi & Penyiaran Islam', 'KPI', 'Terakreditasi B', 'kpi', 'Mencetak komunikator dakwah yang handal dan profesional', 'blue'],
    ['Ekonomi Syariah', 'ES', 'Terakreditasi B', 'ekonomi', 'Membentuk ahli ekonomi berbasis nilai syariah Islam', 'yellow'],
    ['Hukum Tata Negara', 'HTN', 'Terakreditasi B', 'hukum', 'Menghasilkan pakar hukum Islam yang kompeten dan berintegritas', 'green'],
  ] as $prodi)
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
    <div class="p-6 @if($prodi[1] === 'PAI') bg-teal-brand/10 border-b-4 border-teal-brand/20 @elseif($prodi[1] === 'KPI') bg-blue-600/10 border-b-4 border-blue-600/20 @elseif($prodi[1] === 'ES') bg-yellow-400/10 border-b-4 border-yellow-400/20 @else bg-green-500/10 border-b-4 border-green-500/20 @endif">
      <div class="relative w-full h-32 rounded-xl mb-4 flex items-center justify-center p-2">
        @if($prodi[2])
        <span class="absolute top-2 left-2 bg-{{ $prodi[5] }}-600 text-white text-xs font-bold px-2 py-1 rounded-md">{{ $prodi[2] }}</span>
        @endif
        
        @if($prodi[3])
        <img src="{{ asset('assest/' . $prodi[3] . '.png') }}" alt="Logo {{ $prodi[1] }}" class="h-full w-auto object-contain">
        @else
        <i class="fas fa-balance-scale text-5xl text-gray-300"></i>
        @endif
      </div>
      <h4 class="font-bold text-gray-800 mb-1 text-base leading-snug">{{ $prodi[0] }}</h4>
      <p class="text-xs text-gray-500 leading-relaxed mb-4">{{ $prodi[4] }}</p>
      <a href="{{ $prodi[1] === 'PAI' ? route('pages.pai') : route('pages.akademik') }}" class="text-xs font-semibold text-{{ $prodi[5] }}-700 hover:underline flex items-center gap-1">Lihat Kurikulum <i class="fas fa-arrow-right text-[10px]"></i></a>
    </div>
  </div>
  @endforeach
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <h2 class="text-xl font-bold text-gray-800 mb-6">Fasilitas Pendukung</h2>
    <ul class="space-y-4">
      @foreach([
        ['fa-wifi','Wifi Kampus','Internet berkecepatan tinggi di seluruh area kampus'],
        ['fa-laptop','Laboratorium Komputer','Fasilitas lab komputer modern untuk kebutuhan praktikum'],
        ['fa-book','Perpustakaan','Koleksi ribuan buku, jurnal, dan e-resource akademik'],
        ['fa-mosque','Masjid Kampus','Sarana ibadah dan kajian keislaman mahasiswa'],
        ['fa-dorm','Asrama Mahasiswa','Tersedia asrama putra dan putri di area kampus'],
      ] as $item)
      <li class="flex items-start gap-3">
        <div class="w-9 h-9 bg-teal-50 rounded-lg flex items-center justify-center text-teal-700 flex-shrink-0 mt-0.5"><i class="fas {{ $item[0] }} text-sm"></i></div>
        <div>
          <h5 class="font-semibold text-gray-800 text-sm">{{ $item[1] }}</h5>
          <p class="text-xs text-gray-500 mt-0.5">{{ $item[2] }}</p>
        </div>
      </li>
      @endforeach
    </ul>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <h2 class="text-xl font-bold text-gray-800 mb-6">Syarat Pendaftaran PMB 2026</h2>
    <ol class="space-y-3">
      @foreach([
        'Lulusan SMA/MA/SMK atau sederajat',
        'Melampirkan fotokopi ijazah / SKHU',
        'Pas foto berwarna ukuran 3x4 (2 lembar)',
        'Fotokopi KTP / Kartu Keluarga',
        'Mengisi formulir pendaftaran online',
        'Membayar biaya registrasi pendaftaran',
      ] as $i => $syarat)
      <li class="flex items-center gap-3 text-sm text-gray-700">
        <span class="w-6 h-6 rounded-full bg-teal-700 text-white text-xs flex items-center justify-center font-bold flex-shrink-0">{{ $i + 1 }}</span>
        {{ $syarat }}
      </li>
      @endforeach
    </ol>
    <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="mt-6 flex items-center justify-center gap-2 bg-teal-700 hover:bg-teal-800 text-white py-3 rounded-xl text-sm font-bold transition-colors">
      <i class="fas fa-user-plus"></i> Daftar Sekarang
    </a>
  </div>
</div>
@endsection