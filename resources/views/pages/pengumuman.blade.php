@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
  <h2 class="text-2xl font-bold text-gray-800 mb-6">Pengumuman Resmi</h2>
  <div class="space-y-6">
    @foreach([
      ['Pengumuman Pelaksanaan KKN Reguler Tahun 2025', 'Maret 2025', 'Diberitahukan kepada seluruh mahasiswa semester 6 bahwa pendaftaran Kuliah Kerja Nyata (KKN) telah dibuka. Silakan hubungi LPPM.'],
      ['Pendaftaran Wisuda Sarjana Angkatan V', 'Januari 2025', 'Pendaftaran wisuda periode semester ganjil dibuka hingga akhir bulan ini. Silakan melengkapi berkas administrasi di loket akademik.'],
      ['Jadwal Ujian Akhir Semester (UAS) Ganjil', 'Desember 2024', 'UAS Semester Ganjil TA 2024/2025 akan dilaksanakan secara tertulis dan tatap muka. Kartu ujian dapat dicetak melalui SIAKAD.']
    ] as $item)
    <div class="p-5 bg-gray-50 rounded-xl hover:bg-teal-50/30 transition-colors">
      <span class="text-xs font-semibold text-gray-400 bg-white border border-gray-200 px-3 py-1 rounded-full">{{ $item[1] }}</span>
      <h4 class="font-bold text-gray-800 mt-3 mb-2">{{ $item[0] }}</h4>
      <p class="text-sm text-gray-600 leading-relaxed">{{ $item[2] }}</p>
    </div>
    @endforeach
  </div>
</div>
@endsection
