@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
  <h2 class="text-2xl font-bold text-gray-800 mb-4">Lembaga Penelitian dan Pengabdian kepada Masyarakat (LPPM)</h2>
  
  <p class="text-gray-600 leading-relaxed mb-6">
    LPPM STAIMAS Wonogiri bertugas mengoordinasikan, memfasilitasi, dan memantau pelaksanaan kegiatan penelitian serta pengabdian kepada masyarakat oleh para dosen dan mahasiswa.
  </p>

  <!-- BANNER VISIT OFFICIAL LPPM WEBSITE -->
  <div class="mb-8 p-6 bg-teal-50 border border-teal-200 rounded-xl flex flex-col sm:flex-row items-center justify-between gap-4">
    <div class="flex items-center gap-4">
      <div class="w-12 h-12 rounded-full bg-teal-700 text-white flex items-center justify-center shrink-0 shadow-md">
        <i class="fas fa-globe text-xl"></i>
      </div>
      <div>
        <h4 class="font-bold text-gray-900 text-base mb-1">Website Resmi LPPM STAIMAS</h4>
        <p class="text-xs text-gray-600">Akses informasi penelitian, pengabdian masyarakat, jurnal ilmiah, dan portal dokumen LPPM selengkapnya.</p>
      </div>
    </div>
    <a href="https://lppmstaimas.staimaswonogiri.ac.id/" target="_blank" class="inline-flex items-center gap-2 px-5 py-3 bg-teal-700 hover:bg-teal-800 text-white font-bold text-sm rounded-xl shadow-sm transition-colors shrink-0">
      <span>Kunjungi Website LPPM</span>
      <i class="fas fa-external-link-alt text-xs"></i>
    </a>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    <div class="p-6 border border-gray-100 rounded-xl hover:shadow-sm transition-shadow">
      <i class="fas fa-search-dollar text-teal-600 text-3xl mb-4"></i>
      <h4 class="font-bold text-gray-800 mb-2">Fokus Penelitian</h4>
      <p class="text-sm text-gray-600">Pengembangan ilmu-ilmu keislaman, pendidikan Islam, ekonomi syariah, dan hukum tata negara.</p>
    </div>
    <div class="p-6 border border-gray-100 rounded-xl hover:shadow-sm transition-shadow">
      <i class="fas fa-hands-helping text-teal-600 text-3xl mb-4"></i>
      <h4 class="font-bold text-gray-800 mb-2">Pengabdian Masyarakat</h4>
      <p class="text-sm text-gray-600">Pemberdayaan masyarakat berbasis nilai keagamaan, penyuluhan, dan program KKN mahasiswa.</p>
    </div>
  </div>
</div>
@endsection
