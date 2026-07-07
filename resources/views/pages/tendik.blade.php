@extends('layouts.app')
@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
  <div class="mb-8 border-b border-gray-100 pb-6 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Tenaga Kependidikan (Tendik) STAIMAS Wonogiri</h2>
    <p class="text-gray-600 mb-6">Profil Tenaga Kependidikan STAIMAS Wonogiri Tahun 2025</p>
    <a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2025/12/PROFIL-TENDIK-2025.pdf" target="_blank" class="inline-flex items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white px-6 py-3 rounded-xl font-medium transition-colors mb-8 shadow-sm">
      <i class="fas fa-file-pdf"></i> Download Profil Tendik
    </a>
  </div>
  <div class="w-full h-screen max-h-[800px] rounded-xl overflow-hidden border border-gray-200">
    <object data="https://www.staimaswonogiri.ac.id/wp-content/uploads/2025/12/PROFIL-TENDIK-2025.pdf" type="application/pdf" class="w-full h-full">
      <div class="flex flex-col items-center justify-center h-full p-8 text-center bg-gray-50">
        <i class="fas fa-file-pdf text-4xl text-gray-400 mb-4"></i>
        <p class="text-gray-600">Browser Anda tidak mendukung preview PDF langsung.</p>
        <p class="text-gray-600 mt-2">Silakan klik tombol download di atas untuk melihat dokumen.</p>
      </div>
    </object>
  </div>
</div>
@endsection
