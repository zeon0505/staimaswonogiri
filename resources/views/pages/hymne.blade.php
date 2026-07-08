@extends('layouts.app')
@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 text-center max-w-4xl mx-auto">
  
  {{-- Section Hymne --}}
  <div class="mb-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Hymne STAIMAS Wonogiri</h2>
    
    {{-- Video YouTube Hymne --}}
    <div class="aspect-video max-w-2xl mx-auto mb-8 rounded-2xl overflow-hidden shadow-md border border-gray-100">
      <iframe class="w-full h-full" src="https://www.youtube.com/embed/76ndbw_CVFQ" title="Hymne STAIMAS Wonogiri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="text-gray-600 leading-loose italic space-y-1">
      <p>Disini kami mengabdi</p>
      <p>Padamu ibu pertiwi</p>
      <p>Dalam membangun negeri</p>
      <p>Kami tingkatkan prestasi</p>
      <p class="pt-4">Tumbuh tunas-tunas muda</p>
      <p>Kami dari mahasiswa</p>
      <p>Teguh berpegang tridharma</p>
      <p>Demi pancasila jaya</p>
      <p class="pt-4">Di STAIMAS ku serahkan</p>
      <p>Ku gantungkan semua cita</p>
      <p>Kan diukir jiwa dan raga</p>
      <p>Semoga dapat karunia-Nya</p>
      <p>Semoga dapat karunia-Nya</p>
    </div>
  </div>

  {{-- Section Mars --}}
  <div class="border-t border-gray-100 pt-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Mars STAIMAS Wonogiri</h2>

    {{-- Video YouTube Mars --}}
    <div class="aspect-video max-w-2xl mx-auto mb-8 rounded-2xl overflow-hidden shadow-md border border-gray-100">
      <iframe class="w-full h-full" src="https://www.youtube.com/embed/1qncQHKHxcE" title="Mars STAIMAS Wonogiri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="text-gray-600 leading-loose font-medium space-y-1">
      <p>Bersama dalam menuntut ilmu</p>
      <p>Meraih cita-cita</p>
      <p>Di dalam kampus yang tercinta</p>
      <p>STAIMAS Wonogiri</p>
      <p class="pt-4">Membina rohani yang islami</p>
      <p>Berbakti pada negri</p>
      <p>Religi kekaryaan dalam</p>
      <p>Tridharma perguruan tinggi</p>
      <p class="pt-4">Majulah STAIMAS Wonogiri</p>
      <p>Jayalah STAIMAS Wonogiri</p>
      <p>Di sini kita kan meraih mimpi</p>
      <p>Menggapai ridho illahi</p>
    </div>
  </div>
</div>
@endsection
