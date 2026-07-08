<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'STAIMAS Wonogiri' }} – Sekolah Tinggi Agama Islam Mulia Astuti</title>
  <meta name="description" content="{{ $description ?? 'STAIMAS Wonogiri – Kampus Islami terpercaya di Jawa Tengah.' }}" />
  <link rel="icon" type="image/png" href="{{ asset('assest/LOGO STAIMAS AI.png') }}" />
  
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    .topbar-hidden { transform: translateY(-100%); margin-bottom: -40px; }
    .navbar-scrolled {
      background-color: rgba(255,255,255,0.95) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
      border-bottom: 1px solid rgba(229,231,235,0.8);
    }
    .mobile-dropdown { max-height: 0; overflow-y: hidden; transition: max-height 0.4s ease-in-out; }
    .mobile-dropdown.open { max-height: calc(100vh - 80px); overflow-y: auto; -webkit-overflow-scrolling: touch; }
    .mobile-sub-list { display: none; }
    .mobile-sub-list.open { display: block; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans">

  <!-- TOP BAR -->
  <div class="bg-[#074e50] text-gray-200 text-xs py-2 px-4 z-50 relative transition-all duration-300" id="topbar">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
      <div class="flex items-center gap-4">
        <a href="tel:082223204552" class="hover:text-yellow-400 transition-colors"><i class="fas fa-phone mr-1.5 text-yellow-400"></i> 082223204552</a>
        <a href="mailto:staimaswonogiri@gmail.com" class="hover:text-yellow-400 transition-colors"><i class="fas fa-envelope mr-1.5 text-yellow-400"></i> staimaswonogiri@gmail.com</a>
      </div>
      <div class="flex items-center gap-4">
        <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="bg-yellow-500 text-gray-900 px-3 py-1 rounded font-semibold hover:bg-yellow-600 transition-colors"><i class="fas fa-user-plus mr-1"></i> PMB 2026</a>
        <a href="https://staimaswonogiri.ecampuz.com/eakademikportal/" target="_blank" class="hover:text-yellow-400 transition-colors">SIAKAD</a>
        <a href="https://e-journal.staimaswonogiri.ac.id/" target="_blank" class="hover:text-yellow-400 transition-colors">E-Journal</a>
        <div class="flex items-center gap-2.5 ml-2 border-l border-teal-700 pl-3">
          <a href="https://www.facebook.com/people/staimaswonogiri/100068071263429/" target="_blank" class="hover:text-yellow-400"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/staimaswonogiri/" target="_blank" class="hover:text-yellow-400"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/@STAIMASWONOGIRI/featured" target="_blank" class="hover:text-yellow-400"><i class="fab fa-youtube"></i></a>
          <a href="https://open.spotify.com/show/0o5IEOghzkmdb9J7UJ2io6" target="_blank" class="hover:text-yellow-400"><i class="fab fa-spotify"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- NAVBAR -->
  <header class="sticky top-0 bg-white border-b border-gray-100 z-40 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <a href="{{ route('home') }}" class="flex items-center gap-3 group">
        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center border-2 border-yellow-500 shadow-md overflow-hidden">
          <img src="{{ asset('assest/LOGO STAIMAS AI.png') }}" alt="STAIMAS Logo" class="w-full h-full object-contain p-0.5">
        </div>
        <div>
          <span class="block text-lg font-extrabold text-teal-700 tracking-tight leading-none">STAIMAS</span>
          <span class="text-xs font-semibold text-yellow-500 tracking-widest uppercase">Wonogiri</span>
        </div>
      </a>

      <nav class="hidden lg:block">
        <ul class="flex items-center gap-6 text-[14px] font-medium text-gray-600">
          <li><a href="{{ route('home') }}" class="hover:text-teal-700 transition-colors py-2 {{ request()->routeIs('home') ? 'text-teal-700 font-bold' : '' }}">BERANDA</a></li>

          <li class="nav-item-dropdown relative">
            <button class="flex items-center gap-1 hover:text-teal-700 transition-colors py-2 cursor-pointer">PENDIDIKAN <i class="fas fa-chevron-down text-[10px]"></i></button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-60 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.akademik') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-graduation-cap text-teal-600 w-4"></i> Akademik</a></li>
              <li><a href="{{ route('pages.pusat-data') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-database text-teal-600 w-4"></i> Pusat Data & Informasi</a></li>
              <li><a href="{{ route('pages.program-studi') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-book-open text-teal-600 w-4"></i> Program Studi</a></li>
              <li><a href="{{ route('pages.dosen') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-chalkboard-teacher text-teal-600 w-4"></i> Dosen & Staff</a></li>
            </ul>
          </li>

          <li class="nav-item-dropdown relative">
            <button class="flex items-center gap-1 hover:text-teal-700 transition-colors py-2 cursor-pointer">TENTANG <i class="fas fa-chevron-down text-[10px]"></i></button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-56 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.sambutan') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-comment text-teal-600 w-4"></i> Sambutan Ketua</a></li>
              <li><a href="{{ route('pages.makna-lambang') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-shield-alt text-teal-600 w-4"></i> Makna Lambang</a></li>
              <li><a href="{{ route('pages.sejarah') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-history text-teal-600 w-4"></i> Sejarah</a></li>
              <li><a href="{{ route('pages.hymne') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-music text-teal-600 w-4"></i> Hymne STAIMAS</a></li>
              <li><a href="{{ route('pages.visi-misi') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-eye text-teal-600 w-4"></i> Visi & Misi</a></li>
            </ul>
          </li>

          <li class="nav-item-dropdown relative">
            <button class="flex items-center gap-1 hover:text-teal-700 transition-colors py-2 cursor-pointer">MANAJEMEN <i class="fas fa-chevron-down text-[10px]"></i></button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-60 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.yayasan') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-building text-teal-600 w-4"></i> Yayasan</a></li>
              <li><a href="{{ route('pages.senat') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-user-tie text-teal-600 w-4"></i> Senat STAIMAS</a></li>
              <li><a href="{{ route('pages.tendik') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-users text-teal-600 w-4"></i> Tendik STAIMAS</a></li>
              <li><a href="{{ route('pages.struktur-organisasi') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-sitemap text-teal-600 w-4"></i> Struktur Organisasi</a></li>
            </ul>
          </li>

          <li class="nav-item-dropdown relative">
            <button class="flex items-center gap-1 hover:text-teal-700 transition-colors py-2 cursor-pointer">KEMAHASISWAAN <i class="fas fa-chevron-down text-[10px]"></i></button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-60 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.beasiswa') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-medal text-teal-600 w-4"></i> Beasiswa</a></li>
              <li><a href="{{ route('pages.prestasi') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-trophy text-teal-600 w-4"></i> Prestasi</a></li>
              <li><a href="{{ route('pages.kegiatan') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-calendar-check text-teal-600 w-4"></i> Kegiatan Kemahasiswaan</a></li>
              <li><a href="{{ route('pages.fasilitas') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-school text-teal-600 w-4"></i> Fasilitas</a></li>
            </ul>
          </li>

          <li class="nav-item-dropdown relative">
            <button class="flex items-center gap-1 hover:text-teal-700 transition-colors py-2 cursor-pointer">UNIT <i class="fas fa-chevron-down text-[10px]"></i></button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-60 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.perpustakaan') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-book text-teal-600 w-4"></i> Perpustakaan</a></li>
              <li><a href="{{ route('pages.lppm') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-flask text-teal-600 w-4"></i> LPPM</a></li>
              <li><a href="{{ route('pages.lpm') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-check-circle text-teal-600 w-4"></i> LPM</a></li>
              <li><a href="{{ route('pages.ejournal') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-newspaper text-teal-600 w-4"></i> E-Journal</a></li>
              <li><a href="{{ route('pages.keuangan') }}" class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg hover:bg-teal-50 hover:text-teal-700 transition-all"><i class="fas fa-wallet text-teal-600 w-4"></i> Keuangan</a></li>
            </ul>
          </li>

          <li><a href="{{ route('pages.berita') }}" class="hover:text-teal-700 transition-colors py-2 {{ request()->routeIs('pages.berita') ? 'text-teal-700 font-bold' : '' }}">BERITA</a></li>
          <li><a href="{{ route('pages.pengumuman') }}" class="hover:text-teal-700 transition-colors py-2 {{ request()->routeIs('pages.pengumuman') ? 'text-teal-700 font-bold' : '' }}">PENGUMUMAN</a></li>
          <li><a href="{{ route('pages.akreditasi') }}" class="hover:text-teal-700 transition-colors py-2 {{ request()->routeIs('pages.akreditasi') ? 'text-teal-700 font-bold' : '' }}">AKREDITASI</a></li>
        </ul>
      </nav>

      <div class="flex items-center gap-3">
        <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="hidden lg:inline-flex items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white px-4 py-2 rounded-lg font-semibold text-sm transition-colors shadow">
          <i class="fas fa-graduation-cap"></i> PMB 2026
        </a>
        <button class="lg:hidden text-gray-600 hover:text-teal-700 text-2xl p-1" id="nav-toggle">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Dropdown -->
    <div class="mobile-dropdown lg:hidden border-t border-gray-100 bg-white shadow-lg" id="mobile-menu">
      <ul class="flex flex-col px-4 py-2">
        <li><a href="{{ route('home') }}" class="flex items-center gap-3 py-3 border-b border-gray-100 text-sm font-semibold text-gray-700 hover:text-teal-700"><i class="fas fa-home w-4 text-teal-600"></i> Beranda</a></li>

        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-book-open w-4 text-teal-600"></i> Pendidikan</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.akademik') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-graduation-cap text-teal-500 text-xs w-3"></i> Akademik</a></li>
            <li><a href="{{ route('pages.pusat-data') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-database text-teal-500 text-xs w-3"></i> Pusat Data & Informasi</a></li>
            <li><a href="{{ route('pages.program-studi') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-list text-teal-500 text-xs w-3"></i> Program Studi</a></li>
            <li><a href="{{ route('pages.dosen') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700"><i class="fas fa-chalkboard-teacher text-teal-500 text-xs w-3"></i> Dosen & Staff</a></li>
          </ul>
        </li>

        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-university w-4 text-teal-600"></i> Tentang STAIMAS</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.sambutan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-comment text-teal-500 text-xs w-3"></i> Sambutan Ketua</a></li>
            <li><a href="{{ route('pages.makna-lambang') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-shield-alt text-teal-500 text-xs w-3"></i> Makna Lambang</a></li>
            <li><a href="{{ route('pages.sejarah') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-history text-teal-500 text-xs w-3"></i> Sejarah</a></li>
            <li><a href="{{ route('pages.hymne') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-music text-teal-500 text-xs w-3"></i> Hymne STAIMAS</a></li>
            <li><a href="{{ route('pages.visi-misi') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700"><i class="fas fa-eye text-teal-500 text-xs w-3"></i> Visi & Misi</a></li>
          </ul>
        </li>

        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-sitemap w-4 text-teal-600"></i> Manajemen</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.yayasan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-building text-teal-500 text-xs w-3"></i> Yayasan</a></li>
            <li><a href="{{ route('pages.senat') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-user-tie text-teal-500 text-xs w-3"></i> Senat STAIMAS</a></li>
            <li><a href="{{ route('pages.tendik') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-users text-teal-500 text-xs w-3"></i> Tendik STAIMAS</a></li>
            <li><a href="{{ route('pages.struktur-organisasi') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700"><i class="fas fa-project-diagram text-teal-500 text-xs w-3"></i> Struktur Organisasi</a></li>
          </ul>
        </li>

        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-users w-4 text-teal-600"></i> Kemahasiswaan</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.beasiswa') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-medal text-teal-500 text-xs w-3"></i> Beasiswa</a></li>
            <li><a href="{{ route('pages.prestasi') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-trophy text-teal-500 text-xs w-3"></i> Prestasi</a></li>
            <li><a href="{{ route('pages.kegiatan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-calendar-check text-teal-500 text-xs w-3"></i> Kegiatan Kemahasiswaan</a></li>
            <li><a href="{{ route('pages.fasilitas') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700"><i class="fas fa-school text-teal-500 text-xs w-3"></i> Fasilitas</a></li>
          </ul>
        </li>

        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-layer-group w-4 text-teal-600"></i> Unit</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.perpustakaan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-book text-teal-500 text-xs w-3"></i> Perpustakaan</a></li>
            <li><a href="{{ route('pages.lppm') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-flask text-teal-500 text-xs w-3"></i> LPPM</a></li>
            <li><a href="{{ route('pages.lpm') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-check-circle text-teal-500 text-xs w-3"></i> LPM</a></li>
            <li><a href="{{ route('pages.ejournal') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700 border-b border-gray-100/70"><i class="fas fa-newspaper text-teal-500 text-xs w-3"></i> E-Journal</a></li>
            <li><a href="{{ route('pages.keuangan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-700"><i class="fas fa-wallet text-teal-500 text-xs w-3"></i> Keuangan</a></li>
          </ul>
        </li>

        <li><a href="{{ route('pages.pengumuman') }}" class="flex items-center gap-3 py-3 border-b border-gray-100 text-sm font-semibold text-gray-700 hover:text-teal-700"><i class="fas fa-bell w-4 text-teal-600"></i> Pengumuman</a></li>
        <li><a href="{{ route('pages.akreditasi') }}" class="flex items-center gap-3 py-3 border-b border-gray-100 text-sm font-semibold text-gray-700 hover:text-teal-700"><i class="fas fa-certificate w-4 text-teal-600"></i> Akreditasi</a></li>
        <li class="py-4">
          <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="flex justify-center items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white py-3 rounded-xl font-bold text-sm shadow transition-colors">
            <i class="fas fa-graduation-cap"></i> Daftar PMB 2025
          </a>
        </li>
      </ul>
    </div>
  </header>

  <!-- PAGE HERO -->
  @if(isset($title))
  <section class="bg-gradient-to-br from-teal-800 to-teal-600 text-white py-12 px-4">
    <div class="max-w-7xl mx-auto">
      <div class="flex items-center gap-2 text-sm text-teal-200 mb-3">
        <a href="{{ route('home') }}" class="hover:text-white">Beranda</a>
        <span>/</span>
        <span class="text-white font-medium">{{ $title }}</span>
      </div>
      <h1 class="text-3xl sm:text-4xl font-extrabold">{{ $title }}</h1>
      @if(isset($subtitle))<p class="text-teal-100 mt-2 text-base">{{ $subtitle }}</p>@endif
    </div>
  </section>
  @endif

  <!-- KONTEN UTAMA -->
  <main class="max-w-7xl mx-auto px-4 py-12">
    @yield('content')
  </main>

  <!-- FOOTER -->
  <footer class="bg-teal-900 text-gray-300">
    <div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-4 gap-8 text-xs">
      <div class="space-y-3">
        <h3 class="font-extrabold text-white text-sm">STAIMAS Wonogiri</h3>
        <p class="text-gray-400 leading-relaxed">Mendidik lulusan unggul berakhlak mulia melalui ajaran Islam terpercaya.</p>
      </div>
      <div class="space-y-3">
        <h4 class="font-bold text-white uppercase tracking-wider">Program Studi</h4>
        <ul class="space-y-2 text-gray-400">
          <li><a href="{{ route('pages.program-studi') }}" class="hover:text-yellow-400">Pendidikan Agama Islam</a></li>
          <li><a href="{{ route('pages.program-studi') }}" class="hover:text-yellow-400">Komunikasi Penyiaran Islam</a></li>
          <li><a href="{{ route('pages.program-studi') }}" class="hover:text-yellow-400">Ekonomi Syariah</a></li>
          <li><a href="{{ route('pages.program-studi') }}" class="hover:text-yellow-400">Hukum Tata Negara</a></li>
        </ul>
      </div>
      <div class="space-y-3">
        <h4 class="font-bold text-white uppercase tracking-wider">Layanan</h4>
        <ul class="space-y-2 text-gray-400">
          <li><a href="https://staimaswonogiri.ecampuz.com/eadmisi/" class="hover:text-yellow-400">PMB Online</a></li>
          <li><a href="https://staimaswonogiri.ecampuz.com/eakademikportal/" class="hover:text-yellow-400">SIAKAD</a></li>
          <li><a href="https://e-journal.staimaswonogiri.ac.id/" class="hover:text-yellow-400">E-Journal</a></li>
        </ul>
      </div>
      <div class="space-y-3">
        <h4 class="font-bold text-white uppercase tracking-wider">Kontak</h4>
        <p class="text-gray-400">Jl. Cempaka 6, Wonoboyo, Wonogiri 57615</p>
        <p class="text-gray-400">WhatsApp: 082223204552</p>
      </div>
    </div>
    <div class="border-t border-teal-800 py-4 text-center text-[10px] text-gray-500">
      © 2025 STAIMAS Wonogiri. All Rights Reserved.
    </div>
  </footer>

  <style>
    .nav-item-dropdown:hover .nav-dropdown-menu {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateX(-50%) translateY(0) !important;
    }
    .nav-dropdown-menu {
      transform: translateX(-50%) translateY(8px);
    }
  </style>

</body>
</html>