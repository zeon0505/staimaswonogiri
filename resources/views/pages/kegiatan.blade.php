@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
  @foreach([
    ['BEM STAIMAS', 'Badan Eksekutif Mahasiswa', 'Organisasi eksekutif mahasiswa tingkat institusi sebagai wadah aspirasi dan kreativitas mahasiswa', 'fa-flag', 'teal'],
    ['DEMA STAIMAS', 'Dewan Eksekutif Mahasiswa', 'Lembaga legislatif mahasiswa yang menampung dan memperjuangkan aspirasi seluruh mahasiswa', 'fa-gavel', 'blue'],
    ['UKM Seni & Budaya', 'Unit Kegiatan Mahasiswa', 'Wadah pengembangan bakat seni budaya mahasiswa STAIMAS', 'fa-palette', 'yellow'],
    ['UKM Olahraga', 'Unit Kegiatan Mahasiswa', 'Mengembangkan minat dan bakat olahraga mahasiswa kampus', 'fa-football-ball', 'green'],
    ['Kelompok Studi Hukum', 'Kelompok Studi', 'Forum diskusi dan kajian hukum Islam antar mahasiswa', 'fa-balance-scale', 'purple'],
    ['Komunitas Quran', 'Komunitas Kampus', 'Komunitas tahfidz dan tadarus Al-Quran mahasiswa STAIMAS', 'fa-quran', 'red']
  ] as $item)
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-all">
    <div class="flex items-start gap-4">
      <div class="w-12 h-12 bg-{{ $item[4] }}-50 rounded-xl flex items-center justify-center text-{{ $item[4] }}-600 flex-shrink-0">
        <i class="fas {{ $item[3] }}"></i>
      </div>
      <div>
        <span class="text-xs text-{{ $item[4] }}-600 font-semibold bg-{{ $item[4] }}-50 px-2 py-0.5 rounded-full">{{ $item[1] }}</span>
        <h3 class="font-bold text-gray-800 mt-1 mb-2">{{ $item[0] }}</h3>
        <p class="text-sm text-gray-600 leading-relaxed">{{ $item[2] }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
