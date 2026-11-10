@extends('layouts.app')
@section('content')
<div class="space-y-10 max-w-4xl mx-auto">
  
  {{-- Header Intro --}}
  <div class="bg-gradient-to-r from-teal-800 to-teal-900 text-white rounded-2xl p-8 shadow-sm text-center">
    <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mx-auto mb-4 text-white">
      <i class="fas fa-music text-2xl"></i>
    </div>
    <h1 class="text-3xl font-extrabold mb-2">Hymne & Mars STAIMAS Wonogiri</h1>
    <p class="text-teal-100 max-w-xl mx-auto text-sm leading-relaxed">
      Lagu kebanggaan dan identitas resmi Sekolah Tinggi Agama Islam Mulia Astuti Wonogiri yang mencerminkan semangat pengabdian, keilmuan, dan nilai religius kekaryaan.
    </p>
  </div>

  {{-- Section Hymne --}}
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-10">
    <div class="flex items-center gap-4 mb-6 pb-4 border-b border-gray-100">
      <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center text-teal-700">
        <i class="fas fa-feather-alt text-xl"></i>
      </div>
      <div>
        <h2 class="text-2xl font-bold text-gray-800">Hymne STAIMAS Wonogiri</h2>
        <p class="text-xs text-gray-500">Lagu Penuh Penghayatan & Pengabdian</p>
      </div>
    </div>
    
    {{-- Video YouTube Hymne --}}
    <div class="aspect-video max-w-2xl mx-auto mb-8 rounded-2xl overflow-hidden shadow-md border border-gray-100">
      <iframe class="w-full h-full" src="https://www.youtube.com/embed/_Y1Eh11feYI" title="Hymne STAIMAS Wonogiri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    {{-- Lirik Hymne --}}
    <div class="max-w-xl mx-auto my-8 bg-gradient-to-b from-teal-50/50 to-white rounded-2xl p-6 md:p-8 border border-teal-100/70 text-center shadow-xs">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-teal-100 text-teal-800 text-xs font-semibold mb-6">
        <i class="fas fa-align-center"></i> Lirik Lagu
      </div>

      <div class="text-gray-700 leading-relaxed space-y-5 text-sm md:text-base font-serif">
        <div class="space-y-1">
          <p>Disini kami mengabdi</p>
          <p>Padamu ibu pertiwi</p>
          <p>Dalam membangun negeri</p>
          <p class="font-medium text-teal-900">Kami tingkatkan prestasi</p>
        </div>

        <div class="w-12 h-0.5 bg-teal-200 mx-auto my-3"></div>

        <div class="space-y-1">
          <p>Tumbuh tunas-tunas muda</p>
          <p>Kami dari mahasiswa</p>
          <p>Teguh berpegang tridharma</p>
          <p class="font-medium text-teal-900">Demi pancasila jaya</p>
        </div>

        <div class="w-12 h-0.5 bg-teal-200 mx-auto my-3"></div>

        <div class="space-y-1">
          <p>Di STAIMAS ku serahkan</p>
          <p>Ku gantungkan semua cita</p>
          <p>Kan diukir jiwa dan raga</p>
          <p class="italic text-gray-600">Semoga dapat karunia-Nya</p>
          <p class="font-semibold text-teal-800 italic">Semoga dapat karunia-Nya</p>
        </div>
      </div>
    </div>

    {{-- Not Balok Hymne --}}
    <div class="mt-8 pt-6 border-t border-gray-100 text-center">
      <h3 class="text-sm font-bold text-gray-700 mb-4 inline-flex items-center gap-2">
        <i class="fas fa-file-invoice text-teal-600"></i> Partitur Not Balok Hymne STAIMAS
      </h3>
      <div class="max-w-2xl mx-auto rounded-xl overflow-hidden border border-gray-200 shadow-sm bg-gray-50 p-2">
        <img src="{{ asset('assest/not_balok_1.png') }}" onerror="this.onerror=null; this.src='{{ asset('assest/not_balok_1.webp') }}';" alt="Not Balok Hymne STAIMAS" class="w-full h-auto rounded-lg mx-auto">
      </div>
    </div>
  </div>

  {{-- Section Mars --}}
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-10">
    <div class="flex items-center gap-4 mb-6 pb-4 border-b border-gray-100">
      <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-amber-700">
        <i class="fas fa-bullhorn text-xl"></i>
      </div>
      <div>
        <h2 class="text-2xl font-bold text-gray-800">Mars STAIMAS Wonogiri</h2>
        <p class="text-xs text-gray-500">Lagu Semangat, Cita-cita, & Perjuangan</p>
      </div>
    </div>

    {{-- Video YouTube Mars --}}
    <div class="aspect-video max-w-2xl mx-auto mb-8 rounded-2xl overflow-hidden shadow-md border border-gray-100">
      <iframe class="w-full h-full" src="https://www.youtube.com/embed/1qncQHKHxcE" title="Mars STAIMAS Wonogiri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    {{-- Lirik Mars --}}
    <div class="max-w-xl mx-auto my-8 bg-gradient-to-b from-amber-50/50 to-white rounded-2xl p-6 md:p-8 border border-amber-100/70 text-center shadow-xs">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-semibold mb-6">
        <i class="fas fa-align-center"></i> Lirik Lagu
      </div>

      <div class="text-gray-700 leading-relaxed space-y-5 text-sm md:text-base font-serif">
        <div class="space-y-1">
          <p>Bersama dalam menuntut ilmu</p>
          <p>Meraih cita-cita</p>
          <p>Di dalam kampus yang tercinta</p>
          <p class="font-bold text-amber-900 tracking-wide">STAIMAS Wonogiri</p>
        </div>

        <div class="w-12 h-0.5 bg-amber-200 mx-auto my-3"></div>

        <div class="space-y-1">
          <p>Membina rohani yang islami</p>
          <p>Berbakti pada negri</p>
          <p>Religi kekaryaan dalam</p>
          <p class="font-medium text-amber-900">Tridharma perguruan tinggi</p>
        </div>

        <div class="w-12 h-0.5 bg-amber-200 mx-auto my-3"></div>

        <div class="space-y-1">
          <p class="font-semibold text-gray-800">Majulah STAIMAS Wonogiri</p>
          <p class="font-semibold text-gray-800">Jayalah STAIMAS Wonogiri</p>
          <p>Di sini kita kan meraih mimpi</p>
          <p class="font-bold text-amber-800 italic">Menggapai ridho illahi</p>
        </div>
      </div>
    </div>

    {{-- Not Balok Mars --}}
    <div class="mt-8 pt-6 border-t border-gray-100 text-center">
      <h3 class="text-sm font-bold text-gray-700 mb-4 inline-flex items-center gap-2">
        <i class="fas fa-file-invoice text-amber-600"></i> Partitur Not Balok Mars STAIMAS
      </h3>
      <div class="max-w-2xl mx-auto rounded-xl overflow-hidden border border-gray-200 shadow-sm bg-gray-50 p-2">
        <img src="{{ asset('assest/not_balok_2.png') }}" onerror="this.onerror=null; this.src='{{ asset('assest/not_balok_2.webp') }}';" alt="Not Balok Mars STAIMAS" class="w-full h-auto rounded-lg mx-auto">
      </div>
    </div>
  </div>

</div>
@endsection
