<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STAIMAS Wonogiri – Sekolah Tinggi Agama Islam Mulia Astuti</title>
  <meta name="description" content="STAIMAS Wonogiri – Sekolah Tinggi Agama Islam Mulia Astuti Wonogiri. Kampus islami terpercaya di Jawa Tengah dengan program studi KPI, PAI, Ekonomi Syariah, dan Hukum Tata Negara." />
  <meta property="og:title" content="STAIMAS Wonogiri" />
  <meta property="og:description" content="Sekolah Tinggi Agama Islam Mulia Astuti Wonogiri – Kampus Islami Terpercaya di Jawa Tengah" />
  <meta property="og:type" content="website" />
  <link rel="icon" type="image/png" href="{{ asset('assest/LOGO STAIMAS AI.png') }}" />
  
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Amiri:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    .topbar-hidden {
      transform: translateY(-100%);
      margin-bottom: -40px;
    }
    .navbar-scrolled {
      background-color: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
      border-bottom: 1px solid rgba(229, 231, 235, 0.8);
    }
    .mobile-menu.open {
      transform: translateX(0);
    }
    .mobile-menu-overlay.active {
      opacity: 1;
      visibility: visible;
    }
    .mobile-sub-list.active {
      display: block !important;
    }
    .vm-tab.active {
      border-bottom-width: 2px;
      border-color: #0d7c7d;
      color: #0d7c7d;
      font-weight: 700;
    }
    
    /* Carousel styles */
    .carousel-container {
      position: relative;
      width: 100%;
      overflow: hidden;
    }
    .carousel-track {
      display: flex;
      transition: transform 0.5s ease-in-out;
      width: 100%;
    }
    .carousel-slide {
      min-width: 100%;
      box-sizing: border-box;
      background-size: cover;
      background-position: center;
    }

    /* Mobile Dropdown Nav */
    .mobile-dropdown {
      max-height: 0;
      overflow-y: hidden;
      overflow-x: hidden;
      transition: max-height 0.4s ease-in-out;
    }
    .mobile-dropdown.open {
      max-height: calc(100vh - 80px);
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
    }
    .mobile-sub-list {
      display: none;
    }
    .mobile-sub-list.open {
      display: block;
    }

    @media (max-width: 768px) {
      .carousel-slide {
        height: 40vh !important;
        min-height: 40vh !important;
      }
      .carousel-container {
        height: 40vh !important;
        min-height: 40vh !important;
      }
    }
  </style>
</head>
<body class="bg-gray-50/50 text-gray-800 antialiased font-sans">

  <!-- ===== TOP BAR ===== -->
  <div class="topbar bg-[#074e50] text-gray-200 text-xs py-2 px-4 transition-all duration-300 z-50 relative" id="topbar">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
      <div class="flex items-center gap-4">
        <a href="tel:082223204552" class="hover:text-gold-brand transition-colors"><i class="fas fa-phone mr-1.5 text-gold-brand"></i> 082223204552</a>
        <a href="mailto:staimaswonogiri@gmail.com" class="hover:text-gold-brand transition-colors"><i class="fas fa-envelope mr-1.5 text-gold-brand"></i> staimaswonogiri@gmail.com</a>
      </div>
      <div class="flex items-center gap-4">
        <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="bg-gold-brand text-gray-900 px-3 py-1 rounded font-semibold hover:bg-yellow-600 transition-colors"><i class="fas fa-user-plus mr-1"></i> PMB 2026</a>
        <a href="https://staimaswonogiri.ecampuz.com/eakademikportal/" target="_blank" class="hover:text-gold-brand transition-colors">SIAKAD</a>
        <a href="https://e-journal.staimaswonogiri.ac.id/" target="_blank" class="hover:text-gold-brand transition-colors">E-Journal</a>
        <div class="flex items-center gap-2.5 ml-2 border-l border-teal-800 pl-3">
          <a href="https://www.facebook.com/people/staimaswonogiri/100068071263429/" target="_blank" class="hover:text-gold-brand transition-colors"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/staimaswonogiri/" target="_blank" class="hover:text-gold-brand transition-colors"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/@STAIMASWONOGIRI/featured" target="_blank" class="hover:text-gold-brand transition-colors"><i class="fab fa-youtube"></i></a>
          <a href="https://open.spotify.com/show/0o5IEOghzkmdb9J7UJ2io6" target="_blank" class="hover:text-gold-brand transition-colors"><i class="fab fa-spotify"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== NAVBAR ===== -->
  <header class="navbar sticky top-0 bg-white border-b border-gray-100 z-40 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
      <!-- Logo -->
      <a href="#" class="flex items-center gap-3 group" id="nav-brand">
        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center border-2 border-gold-brand shadow-md overflow-hidden">
          <img src="{{ asset('assest/LOGO STAIMAS AI.png') }}" alt="STAIMAS Logo" class="w-full h-full object-contain p-0.5">
        </div>
        <div class="flex flex-col">
          <span class="text-lg font-extrabold text-teal-brand tracking-tight leading-none group-hover:text-teal-brand-dark transition-colors">STAIMAS</span>
          <span class="text-xs font-semibold text-gold-brand tracking-widest uppercase">Wonogiri</span>
        </div>
      </a>

      <!-- Desktop Nav -->
      <nav class="hidden lg:block" aria-label="Navigasi utama">
        <ul class="flex items-center gap-6">
          <li><a href="{{ route('home') }}" class="nav-link font-medium text-gray-600 hover:text-teal-brand transition-colors py-2 text-[14px]" id="link-beranda">BERANDA</a></li>
          
          <li class="nav-item-dropdown relative">
            <button class="nav-link flex items-center gap-1 font-medium text-gray-600 hover:text-teal-brand transition-colors py-2 text-[14px] cursor-pointer">
              PENDIDIKAN <i class="fas fa-chevron-down text-[10px] transition-transform duration-300"></i>
            </button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-60 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.akademik') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-graduation-cap w-4 text-teal-brand"></i> Akademik</a></li>
              <li><a href="{{ route('pages.pusat-data') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-database w-4 text-teal-brand"></i> Pusat Data & Informasi</a></li>
              <li><a href="{{ route('pages.program-studi') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-book-open w-4 text-teal-brand"></i> Program Studi</a></li>
              <li><a href="{{ route('pages.dosen') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-chalkboard-teacher w-4 text-teal-brand"></i> Dosen & Staff</a></li>
            </ul>
          </li>

          <li class="nav-item-dropdown relative">
            <button class="nav-link flex items-center gap-1 font-medium text-gray-600 hover:text-teal-brand transition-colors py-2 text-[14px] cursor-pointer">
              TENTANG STAIMAS <i class="fas fa-chevron-down text-[10px]"></i>
            </button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-56 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.sambutan') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Sambutan Ketua</a></li>
              <li><a href="{{ route('pages.makna-lambang') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Makna Lambang</a></li>
              <li><a href="{{ route('pages.sejarah') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Sejarah</a></li>
              <li><a href="{{ route('pages.hymne') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Hymne STAIMAS</a></li>
              <li><a href="{{ route('pages.visi-misi') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Visi & Misi</a></li>
            </ul>
          </li>

          <li class="nav-item-dropdown relative">
            <button class="nav-link flex items-center gap-1 font-medium text-gray-600 hover:text-teal-brand transition-colors py-2 text-[14px] cursor-pointer">
              MANAJEMEN <i class="fas fa-chevron-down text-[10px]"></i>
            </button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-60 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.yayasan') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Yayasan</a></li>
              <li><a href="{{ route('pages.senat') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Senat STAIMAS</a></li>
              <li><a href="{{ route('pages.tendik') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Tendik STAIMAS</a></li>
              <li><a href="{{ route('pages.struktur-organisasi') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Struktur Organisasi</a></li>
            </ul>
          </li>

          <li class="nav-item-dropdown relative">
            <button class="nav-link flex items-center gap-1 font-medium text-gray-600 hover:text-teal-brand transition-colors py-2 text-[14px] cursor-pointer">
              KEMAHASISWAAN <i class="fas fa-chevron-down text-[10px]"></i>
            </button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-60 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.beasiswa') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Beasiswa</a></li>
              <li><a href="{{ route('pages.prestasi') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Prestasi</a></li>
              <li><a href="{{ route('pages.kegiatan') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Kegiatan</a></li>
              <li><a href="{{ route('pages.fasilitas') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all">Fasilitas</a></li>
            </ul>
          </li>

          <li class="nav-item-dropdown relative">
            <button class="nav-link flex items-center gap-1 font-medium text-gray-600 hover:text-teal-brand transition-colors py-2 text-[14px] cursor-pointer">
              UNIT <i class="fas fa-chevron-down text-[10px]"></i>
            </button>
            <ul class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 bg-white border border-gray-100 rounded-xl p-2 w-60 shadow-xl z-50 opacity-0 invisible translate-y-2 transition-all duration-200">
              <li><a href="{{ route('pages.perpustakaan') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-book w-4 text-teal-brand"></i> Perpustakaan</a></li>
              <li><a href="{{ route('pages.lppm') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-flask w-4 text-teal-brand"></i> LPPM</a></li>
              <li><a href="{{ route('pages.lpm') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-check-circle w-4 text-teal-brand"></i> LPM</a></li>
              <li><a href="{{ route('pages.ejournal') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-newspaper w-4 text-teal-brand"></i> E-Journal</a></li>
              <li><a href="{{ route('pages.keuangan') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-teal-50 hover:text-teal-brand rounded-lg transition-all"><i class="fas fa-wallet w-4 text-teal-brand"></i> Keuangan</a></li>
            </ul>
          </li>

          <li><a href="{{ route('pages.berita') }}" class="nav-link font-medium text-gray-600 hover:text-teal-brand transition-colors py-2 text-[14px]">BERITA</a></li>
          <li><a href="{{ route('pages.akreditasi') }}" class="nav-link font-medium text-gray-600 hover:text-teal-brand transition-colors py-2 text-[14px]">AKREDITASI</a></li>
        </ul>
      </nav>

      <!-- PMB Online Button -->
      <div class="flex items-center gap-4">
        <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="hidden lg:inline-flex items-center gap-2 bg-teal-brand hover:bg-teal-brand-dark text-white px-4 py-2 rounded-lg font-semibold text-sm transition-colors shadow-md shadow-teal-brand/10">
          <i class="fas fa-graduation-cap"></i> PMB 2026
        </a>
        <button class="lg:hidden text-gray-600 hover:text-teal-brand text-2xl focus:outline-none p-1" id="nav-toggle" aria-label="Toggle menu">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div class="mobile-dropdown lg:hidden border-t border-gray-100 bg-white shadow-lg" id="mobile-menu">
      <ul class="flex flex-col px-4 py-2">

        <!-- BERANDA -->
        <li><a href="{{ route('home') }}" class="flex items-center gap-3 py-3 border-b border-gray-100 text-sm font-semibold text-gray-700 hover:text-teal-brand transition-colors"><i class="fas fa-home w-4 text-teal-brand"></i> Beranda</a></li>

        <!-- PENDIDIKAN -->
        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-book-open w-4 text-teal-brand"></i> Pendidikan</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.akademik') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-graduation-cap text-teal-brand/60 text-xs w-3"></i> Akademik</a></li>
            <li><a href="{{ route('pages.pusat-data') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-database text-teal-brand/60 text-xs w-3"></i> Pusat Data & Informasi</a></li>
            <li><a href="{{ route('pages.program-studi') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-list text-teal-brand/60 text-xs w-3"></i> Program Studi</a></li>
            <li><a href="{{ route('pages.dosen') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand"><i class="fas fa-chalkboard-teacher text-teal-brand/60 text-xs w-3"></i> Dosen & Staff</a></li>
          </ul>
        </li>

        <!-- TENTANG STAIMAS -->
        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-university w-4 text-teal-brand"></i> Tentang STAIMAS</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.sambutan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-comment text-teal-brand/60 text-xs w-3"></i> Sambutan Ketua</a></li>
            <li><a href="{{ route('pages.makna-lambang') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-shield-alt text-teal-brand/60 text-xs w-3"></i> Makna Lambang</a></li>
            <li><a href="{{ route('pages.sejarah') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-history text-teal-brand/60 text-xs w-3"></i> Sejarah</a></li>
            <li><a href="{{ route('pages.hymne') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-music text-teal-brand/60 text-xs w-3"></i> Hymne STAIMAS</a></li>
            <li><a href="{{ route('pages.visi-misi') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand"><i class="fas fa-eye text-teal-brand/60 text-xs w-3"></i> Visi & Misi</a></li>
          </ul>
        </li>

        <!-- MANAJEMEN -->
        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-sitemap w-4 text-teal-brand"></i> Manajemen</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.yayasan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-building text-teal-brand/60 text-xs w-3"></i> Yayasan</a></li>
            <li><a href="{{ route('pages.senat') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-user-tie text-teal-brand/60 text-xs w-3"></i> Senat STAIMAS</a></li>
            <li><a href="{{ route('pages.tendik') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-users text-teal-brand/60 text-xs w-3"></i> Tendik STAIMAS</a></li>
            <li><a href="{{ route('pages.struktur-organisasi') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand"><i class="fas fa-project-diagram text-teal-brand/60 text-xs w-3"></i> Struktur Organisasi</a></li>
          </ul>
        </li>

        <!-- KEMAHASISWAAN -->
        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-users w-4 text-teal-brand"></i> Kemahasiswaan</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.beasiswa') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-medal text-teal-brand/60 text-xs w-3"></i> Beasiswa</a></li>
            <li><a href="{{ route('pages.prestasi') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-trophy text-teal-brand/60 text-xs w-3"></i> Prestasi</a></li>
            <li><a href="{{ route('pages.kegiatan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-calendar-check text-teal-brand/60 text-xs w-3"></i> Kegiatan Kemahasiswaan</a></li>
            <li><a href="{{ route('pages.fasilitas') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand"><i class="fas fa-school text-teal-brand/60 text-xs w-3"></i> Fasilitas</a></li>
          </ul>
        </li>

        <!-- UNIT -->
        <li>
          <button class="mobile-sub-toggle w-full flex justify-between items-center py-3 border-b border-gray-100 text-sm font-semibold text-gray-700">
            <span class="flex items-center gap-3"><i class="fas fa-layer-group w-4 text-teal-brand"></i> Unit</span>
            <i class="fas fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
          </button>
          <ul class="mobile-sub-list bg-gray-50 rounded-lg mb-1">
            <li><a href="{{ route('pages.perpustakaan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-book text-teal-brand/60 text-xs w-3"></i> Perpustakaan</a></li>
            <li><a href="{{ route('pages.lppm') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-flask text-teal-brand/60 text-xs w-3"></i> LPPM</a></li>
            <li><a href="{{ route('pages.lpm') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-check-circle text-teal-brand/60 text-xs w-3"></i> LPM</a></li>
            <li><a href="{{ route('pages.ejournal') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand border-b border-gray-100/70"><i class="fas fa-newspaper text-teal-brand/60 text-xs w-3"></i> E-Journal</a></li>
            <li><a href="{{ route('pages.keuangan') }}" class="flex items-center gap-2 py-2.5 px-5 text-sm text-gray-600 hover:text-teal-brand"><i class="fas fa-wallet text-teal-brand/60 text-xs w-3"></i> Keuangan</a></li>
          </ul>
        </li>

        <!-- BERITA, PENGUMUMAN & AKREDITASI -->
        <li><a href="{{ route('pages.berita') }}" class="flex items-center gap-3 py-3 border-b border-gray-100 text-sm font-semibold text-gray-700 hover:text-teal-brand transition-colors"><i class="fas fa-newspaper w-4 text-teal-brand"></i> Berita</a></li>
        <li><a href="{{ route('pages.pengumuman') }}" class="flex items-center gap-3 py-3 border-b border-gray-100 text-sm font-semibold text-gray-700 hover:text-teal-brand transition-colors"><i class="fas fa-bell w-4 text-teal-brand"></i> Pengumuman</a></li>
        <li><a href="{{ route('pages.akreditasi') }}" class="flex items-center gap-3 py-3 border-b border-gray-100 text-sm font-semibold text-gray-700 hover:text-teal-brand transition-colors"><i class="fas fa-certificate w-4 text-teal-brand"></i> Akreditasi</a></li>

        <!-- PMB Button -->
        <li class="py-4">
          <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="flex justify-center items-center gap-2 bg-teal-brand hover:bg-teal-brand-dark text-white py-3 rounded-xl font-bold text-sm shadow transition-colors">
            <i class="fas fa-graduation-cap"></i> Daftar PMB 2025
          </a>
        </li>
      </ul>
    </div>
  </header>

  <!-- ===== HERO CAROUSEL ===== -->
  <section class="carousel-container min-h-[50vh] md:min-h-[70vh] bg-teal-brand-dark" id="beranda">
    <div class="carousel-track" id="carousel-track">
      @forelse($slides as $slide)
      <div class="carousel-slide relative min-h-[50vh] md:min-h-[70vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ Storage::url($slide->gambar) }}')">
        <div class="absolute inset-0 bg-black/10 z-0"></div>
      </div>
      @empty
      <div class="carousel-slide relative min-h-[50vh] md:min-h-[70vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('/slide1.png')">
        <div class="absolute inset-0 bg-black/10 z-0"></div>
      </div>
      @endforelse
    </div>
    
    <!-- Carousel Controls -->
    <button class="absolute top-1/2 left-4 -translate-y-1/2 w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 text-white flex items-center justify-center focus:outline-none transition-all" id="carousel-prev" aria-label="Slide sebelumnya"><i class="fas fa-chevron-left"></i></button>
    <button class="absolute top-1/2 right-4 -translate-y-1/2 w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 text-white flex items-center justify-center focus:outline-none transition-all" id="carousel-next" aria-label="Slide berikutnya"><i class="fas fa-chevron-right"></i></button>
  </section>

  <!-- ===== QUICK LINKS ===== -->
  <section class="relative z-25 -mt-8 px-4">
    <div class="max-w-7xl mx-auto bg-white rounded-2xl shadow-xl border border-gray-100 p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="flex items-center gap-3 p-3 rounded-xl hover:bg-teal-50/50 group transition-all">
        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-brand text-lg"><i class="fas fa-user-plus"></i></div>
        <div>
          <h4 class="font-bold text-gray-900 text-sm">PMB Online</h4>
          <p class="text-[10px] text-gray-500">Pendaftaran Mahasiswa Baru</p>
        </div>
      </a>
      <a href="https://staimaswonogiri.ecampuz.com/eakademikportal/" target="_blank" class="flex items-center gap-3 p-3 rounded-xl hover:bg-teal-50/50 group transition-all">
        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-brand text-lg"><i class="fas fa-laptop-code"></i></div>
        <div>
          <h4 class="font-bold text-gray-900 text-sm">SIAKAD Portal</h4>
          <p class="text-[10px] text-gray-500">Portal Akademik Mahasiswa</p>
        </div>
      </a>
      <a href="https://e-journal.staimaswonogiri.ac.id/" target="_blank" class="flex items-center gap-3 p-3 rounded-xl hover:bg-teal-50/50 group transition-all">
        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-brand text-lg"><i class="fas fa-book-open"></i></div>
        <div>
          <h4 class="font-bold text-gray-900 text-sm">E-Journal</h4>
          <p class="text-[10px] text-gray-500">Portal Jurnal Ilmiah</p>
        </div>
      </a>
      <a href="https://pddikti.kemdiktisaintek.go.id/" target="_blank" class="flex items-center gap-3 p-3 rounded-xl hover:bg-teal-50/50 group transition-all">
        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-brand text-lg"><i class="fas fa-database"></i></div>
        <div>
          <h4 class="font-bold text-gray-900 text-sm">PDDIKTI</h4>
          <p class="text-[10px] text-gray-500">Data Pendidikan Tinggi</p>
        </div>
      </a>
    </div>
  </section>

  <!-- ===== TENTANG STAIMAS ===== -->
  <section class="py-20" id="tentang">
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-5 relative">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
            <img src="https://www.staimaswonogiri.ac.id/wp-content/uploads/2025/02/AKREDITASI-KAMPUS-STAIMAS.jpg" alt="Akreditasi STAIMAS" class="w-full object-cover hover:scale-105 transition-transform duration-500" />
          </div>
        </div>
        <div class="lg:col-span-7">
          <span class="text-xs font-bold text-teal-brand uppercase tracking-wider bg-teal-50 px-3 py-1.5 rounded-full inline-block mb-4">Tentang STAIMAS</span>
          <h2 class="text-3xl font-bold text-teal-brand-dark">STAIMAS WONOGIRI TERAKREDITASI BAIK</h2>
          <p class="mt-4 text-gray-600 leading-relaxed text-sm">
            Raih gelar pendidikan tinggi Anda di Sekolah Tinggi Agama Islam Mulia Astuti Wonogiri (STAIMAS). Bersama STAIMAS, Anda akan menemukan pengalaman belajar yang memadukan pendalaman ilmu pengetahuan dengan landasan nilai keislaman untuk membentuk karakter yang berintegritas, serta didukung dengan lingkungan pembelajaran yang kondusif untuk mengembangkan potensi Anda.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== PROGRAM STUDI ===== -->
  <section class="py-20 bg-gray-50" id="prodi">
    <div class="max-w-7xl mx-auto px-4">
      <div class="text-center max-w-2xl mx-auto mb-12">
        <h2 class="text-3xl font-extrabold text-teal-brand-dark">Program Studi Pilihan</h2>
        <p class="text-gray-500 mt-2 text-sm">Pilih program studi yang sesuai dengan minat Anda untuk mewujudkan masa depan yang gemilang.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- KPI -->
        <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
          <div class="w-10 h-10 rounded-lg bg-teal-50 flex items-center justify-center text-teal-brand text-xl mb-4"><i class="fas fa-broadcast-tower"></i></div>
          <h3 class="font-bold text-gray-900 text-base leading-tight">Komunikasi dan Penyiaran Islam (KPI)</h3>
          <p class="text-xs text-gray-500 mt-2">Mempelajari komunikasi berbasis Islam, jurnalistik, dan media dakwah. Lulusannya siap menjadi komunikator profesional di berbagai platform.</p>
        </div>

        <!-- PAI -->
        <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
          <div class="w-10 h-10 rounded-lg bg-teal-50 flex items-center justify-center text-teal-brand text-xl mb-4"><i class="fas fa-chalkboard-teacher"></i></div>
          <h3 class="font-bold text-gray-900 text-base leading-tight">Pendidikan Agama Islam (PAI)</h3>
          <p class="text-xs text-gray-500 mt-2">Berfokus pada pengajaran dan pengembangan ilmu keislaman. Lulusannya dipersiapkan menjadi pendidik profesional yang mampu menyebarkan nilai-nilai Islam.</p>
        </div>

        <!-- ES -->
        <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
          <div class="w-10 h-10 rounded-lg bg-teal-50 flex items-center justify-center text-teal-brand text-xl mb-4"><i class="fas fa-coins"></i></div>
          <h3 class="font-bold text-gray-900 text-base leading-tight">Ekonomi Syariah (ES)</h3>
          <p class="text-xs text-gray-500 mt-2">Mempelajari prinsip ekonomi Islam, perbankan syariah, dan bisnis halal. Lulusannya siap berkarier di sektor keuangan dan bisnis berbasis syariah.</p>
        </div>

        <!-- HTN -->
        <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
          <div class="w-10 h-10 rounded-lg bg-teal-50 flex items-center justify-center text-teal-brand text-xl mb-4"><i class="fas fa-balance-scale"></i></div>
          <h3 class="font-bold text-gray-900 text-base leading-tight">Hukum Tata Negara (HTN)</h3>
          <p class="text-xs text-gray-500 mt-2">Mempelajari prinsip-prinsip hukum Islam dan ketatanegaraan. Lulusannya dipersiapkan untuk berkarier di bidang hukum, pemerintahan, dan legislatif.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== DUKUNGAN DOSEN & KAPRODI ===== -->
  <section class="py-20 bg-white" id="dosen">
    <div class="max-w-7xl mx-auto px-4">
      <div class="text-center max-w-2xl mx-auto mb-12">
        <span class="text-xs font-bold text-teal-brand uppercase tracking-wider bg-teal-50 px-3 py-1.5 rounded-full inline-block">Tenaga Pengajar</span>
        <h2 class="text-3xl font-extrabold text-teal-brand-dark mt-2">Pimpinan & Ketua Program Studi</h2>
        <p class="text-gray-500 mt-2 text-sm">Didukung oleh jajaran akademisi berkualitas yang ahli di bidang masing-masing.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gray-50 rounded-xl border border-gray-100 p-6 text-center group hover:bg-teal-50/50 transition-colors">
          <div class="w-24 h-24 mx-auto rounded-full bg-teal-brand/10 flex items-center justify-center text-teal-brand text-3xl mb-4"><i class="fas fa-user-tie"></i></div>
          <h4 class="font-bold text-gray-900 text-sm">Dr. H. Trianto, M.Pd.</h4>
          <p class="text-xs text-teal-brand font-semibold mt-1">Ketua Senat & Dosen Utama</p>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-100 p-6 text-center group hover:bg-teal-50/50 transition-colors">
          <div class="w-24 h-24 mx-auto rounded-full bg-teal-brand/10 flex items-center justify-center text-teal-brand text-3xl mb-4"><i class="fas fa-user-tie"></i></div>
          <h4 class="font-bold text-gray-900 text-sm">Kaprodi PAI</h4>
          <p class="text-xs text-teal-brand font-semibold mt-1">Ketua Program Studi PAI</p>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-100 p-6 text-center group hover:bg-teal-50/50 transition-colors">
          <div class="w-24 h-24 mx-auto rounded-full bg-teal-brand/10 flex items-center justify-center text-teal-brand text-3xl mb-4"><i class="fas fa-user-tie"></i></div>
          <h4 class="font-bold text-gray-900 text-sm">Kaprodi KPI</h4>
          <p class="text-xs text-teal-brand font-semibold mt-1">Ketua Program Studi KPI</p>
        </div>
        <div class="bg-gray-50 rounded-xl border border-gray-100 p-6 text-center group hover:bg-teal-50/50 transition-colors">
          <div class="w-24 h-24 mx-auto rounded-full bg-teal-brand/10 flex items-center justify-center text-teal-brand text-3xl mb-4"><i class="fas fa-user-tie"></i></div>
          <h4 class="font-bold text-gray-900 text-sm">Kaprodi ES / HTN</h4>
          <p class="text-xs text-teal-brand font-semibold mt-1">Ketua Program Studi ES & HTN</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== BERITA TERBARU (News & Updates) ===== -->
  <section class="py-20 bg-gray-50" id="berita">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
        <div>
          <span class="text-xs font-bold text-teal-brand uppercase tracking-wider bg-teal-50 px-3 py-1.5 rounded-full inline-block">News & Updates</span>
          <h2 class="text-3xl font-extrabold text-teal-brand-dark mt-2">Berita Terkini Kampus</h2>
        </div>
        <div class="mt-4 md:mt-0 flex gap-2">
          <a href="#" class="px-4 py-2 bg-teal-brand text-white rounded-lg text-xs font-bold">Semua Berita</a>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($beritas as $berita)
        <article class="bg-white border border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
          <div class="aspect-video bg-teal-brand/10 relative">
            <img src="{{ Storage::url($berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-full object-cover" onerror="this.style.display='none'"/>
          </div>
          <div class="p-5">
            <span class="text-[10px] text-teal-brand font-bold uppercase">{{ $berita->kategori->nama ?? 'Berita' }}</span>
            <h3 class="font-bold text-gray-900 text-base mt-2 leading-snug"><a href="#" class="hover:text-teal-brand">{{ $berita->judul }}</a></h3>
          </div>
        </article>
        @empty
        <div class="col-span-3 text-center py-10 text-gray-500 text-sm">Belum ada berita.</div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- ===== BROSUR & FLYER GALERI ===== -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <div class="text-center max-w-2xl mx-auto mb-12">
        <h2 class="text-3xl font-extrabold text-teal-brand-dark">Pusat Informasi Brosur</h2>
        <p class="text-gray-500 mt-2 text-sm">Download dan baca pamflet resmi informasi pendaftaran disini.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="https://drive.google.com/file/d/1Xh-8eYSYaGyTPKhzxoENRqqnvY7ydzk5/view?usp=sharing" target="_blank" class="rounded-xl overflow-hidden shadow border border-gray-100 block group">
          <img src="https://www.staimaswonogiri.ac.id/wp-content/uploads/2025/03/BROSURE-KECIL-scaled.jpg" alt="Brosur Pendaftaran" class="w-full object-cover aspect-[4/5] group-hover:scale-105 transition-transform duration-350"/>
        </a>
        <div class="rounded-xl overflow-hidden shadow border border-gray-100">
          <img src="https://www.staimaswonogiri.ac.id/wp-content/uploads/2025/05/PMB-GEL2-01-01-scaled.jpg" alt="Flyer Gelombang 2" class="w-full object-cover aspect-[4/5]"/>
        </div>
        <div class="rounded-xl overflow-hidden shadow border border-gray-100">
          <img src="https://www.staimaswonogiri.ac.id/wp-content/uploads/2025/05/PMB-GELOMBANG-II-01-scaled.jpg" alt="Pamflet Gelombang 2 Detail" class="w-full object-cover aspect-[4/5]"/>
        </div>
        <a href="https://drive.google.com/file/d/1u5CxJZ7TfskNvH01Gaq2akPdmFHkJoll/view?usp=sharing" target="_blank" class="rounded-xl overflow-hidden shadow border border-gray-100 block group">
          <img src="https://www.staimaswonogiri.ac.id/wp-content/uploads/2025/04/quotes1-01-scaled.jpg" alt="Quotes Beasiswa Asrama" class="w-full object-cover aspect-[4/5] group-hover:scale-105 transition-transform duration-350"/>
        </a>
      </div>
    </div>
  </section>

  <!-- ===== KONTAK SECTION ===== -->
  <section class="py-20 bg-gray-50" id="kontak">
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <div class="lg:col-span-7 bg-white rounded-2xl border border-gray-100 p-6 sm:p-8 shadow-sm">
          <h3 class="font-bold text-gray-900 text-lg mb-6">Ajukan Pertanyaan</h3>
          <form class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <input type="text" placeholder="Nama Lengkap" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-teal-brand" required />
              <input type="tel" placeholder="Nomor Telepon/WA" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-teal-brand" />
            </div>
            <input type="email" placeholder="Alamat Email" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-teal-brand" required />
            <textarea rows="4" placeholder="Tulis pesan Anda..." class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-teal-brand" required></textarea>
            <button type="submit" class="w-full bg-teal-brand hover:bg-teal-brand-dark text-white font-bold py-3.5 rounded-lg shadow transition-colors">Kirim Pesan</button>
          </form>
        </div>

        <div class="lg:col-span-5 space-y-4">
          <div class="bg-white rounded-2xl border border-gray-100 p-5 flex gap-4 shadow-sm">
            <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-brand text-lg shrink-0"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h4 class="font-bold text-gray-900 text-sm">Alamat Kampus</h4>
              <p class="text-xs text-gray-500 mt-1">Jl. Cempaka 6, Wonoboyo, Kec. Wonogiri, Wonogiri, Jawa Tengah 57615</p>
            </div>
          </div>
          <div class="bg-white rounded-2xl border border-gray-100 p-5 flex gap-4 shadow-sm">
            <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-brand text-lg shrink-0"><i class="fab fa-whatsapp"></i></div>
            <div>
              <h4 class="font-bold text-gray-900 text-sm">WhatsApp</h4>
              <p class="text-xs text-gray-500 mt-1">082223204552</p>
            </div>
          </div>

          <div class="kontak-map rounded-2xl overflow-hidden shadow-sm border border-gray-100">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2044.960527882958!2d110.93878935266353!3d-7.813874308778577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2e51f116d5bb%3A0x26cbc235ed5a2edc!2sSTAIMAS%20(Sekolah%20Tinggi%20Agama%20Islam%20Mulia%20Astuti)!5e1!3m2!1sid!2sid!4v1741595178278!5m2!1sid!2sid"
              width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi Kampus STAIMAS Wonogiri"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="bg-teal-brand-dark text-gray-300">
    <div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-4 gap-8 text-xs">
      <div class="space-y-3">
        <h3 class="font-extrabold text-white text-sm">STAIMAS Wonogiri</h3>
        <p class="text-gray-400 leading-relaxed">Mendidik lulusan unggul berakhlak mulia melalui perpaduan ajaran agama Islam terpercaya dengan kemajuan riset kontemporer.</p>
      </div>
      <div class="space-y-3">
        <h4 class="font-extrabold text-white text-xs uppercase tracking-wider">Program Studi</h4>
        <ul class="space-y-2">
          <li><a href="#prodi" class="hover:text-gold-brand transition-colors">Pendidikan Agama Islam (PAI)</a></li>
          <li><a href="#prodi" class="hover:text-gold-brand transition-colors">Komunikasi Penyiaran Islam (KPI)</a></li>
          <li><a href="#prodi" class="hover:text-gold-brand transition-colors">Ekonomi Syariah (ES)</a></li>
          <li><a href="#prodi" class="hover:text-gold-brand transition-colors">Hukum Tata Negara (HTN)</a></li>
        </ul>
      </div>
      <div class="space-y-3">
        <h4 class="font-extrabold text-white text-xs uppercase tracking-wider">Layanan</h4>
        <ul class="space-y-2">
          <li><a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="hover:text-gold-brand transition-colors">PMB Online</a></li>
          <li><a href="https://staimaswonogiri.ecampuz.com/eakademikportal/" target="_blank" class="hover:text-gold-brand transition-colors">SIAKAD</a></li>
          <li><a href="https://e-journal.staimaswonogiri.ac.id/" target="_blank" class="hover:text-gold-brand transition-colors">E-Journal</a></li>
        </ul>
      </div>
      <div class="space-y-3">
        <h4 class="font-extrabold text-white text-xs uppercase tracking-wider">Kontak</h4>
        <p class="text-gray-400">Jl. Cempaka 6, Wonoboyo, Wonogiri 57615</p>
        <p class="text-gray-400">WhatsApp: 082223204552</p>
      </div>
    </div>
    <div class="border-t border-teal-800 py-4 text-center text-[10px] text-gray-400">
      <p>© 2026 Sekolah Tinggi Agama Islam Mulia Astuti Wonogiri. All Rights Reserved.</p>
    </div>
  </footer>

</body>
</html>