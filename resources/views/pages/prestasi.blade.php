@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-8">
  <h2 class="text-2xl font-bold text-gray-800 mb-6">Prestasi Mahasiswa STAIMAS Wonogiri</h2>
  <div class="space-y-4">
    @foreach([
      ['Juara 1 MTQ Tingkat Kabupaten Wonogiri', '2024', 'fa-quran', 'teal', 'Mahasiswa PAI'],
      ['Juara 2 Debat Bahasa Arab Tingkat Jawa Tengah', '2024', 'fa-comments', 'blue', 'Tim Delegasi STAIMAS'],
      ['Juara 1 Kompetisi Ekonomi Syariah Regional', '2023', 'fa-coins', 'yellow', 'Mahasiswa ES'],
      ['Delegasi PPAN (Program Pertukaran Antar Negara)', '2023', 'fa-globe', 'purple', 'Mahasiswa KPI'],
      ['Best Paper Seminar Nasional Hukum Islam', '2023', 'fa-scroll', 'green', 'Mahasiswa HTN'],
      ['Finalis Olimpiade PAI Nasional', '2022', 'fa-award', 'red', 'Mahasiswa PAI']
    ] as $item)
    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl hover:bg-teal-50 transition-colors">
      <div class="w-12 h-12 bg-{{ $item[3] }}-100 rounded-xl flex items-center justify-center text-{{ $item[3] }}-600 flex-shrink-0">
        <i class="fas {{ $item[2] }}"></i>
      </div>
      <div class="flex-1">
        <h4 class="font-semibold text-gray-800 text-sm">{{ $item[0] }}</h4>
        <p class="text-xs text-gray-500 mt-0.5">{{ $item[4] }}</p>
      </div>
      <span class="text-xs bg-white border border-gray-200 text-gray-600 px-3 py-1 rounded-full font-semibold">{{ $item[1] }}</span>
    </div>
    @endforeach
  </div>
</div>
@endsection
