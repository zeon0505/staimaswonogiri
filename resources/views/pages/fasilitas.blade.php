@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
  @foreach([
    ['Gedung Perkuliahan', 'Ruang kuliah ber-AC dengan kapasitas memadai dan dilengkapi LCD projector', 'fa-building', 'teal'],
    ['Perpustakaan', 'Koleksi ribuan buku, jurnal ilmiah, dan e-resources untuk mendukung akademik', 'fa-book', 'blue'],
    ['Laboratorium Komputer', 'Lab komputer modern dengan koneksi internet cepat untuk praktikum mahasiswa', 'fa-desktop', 'yellow'],
    ['Masjid Kampus', 'Sarana ibadah dan pusat kegiatan keislaman mahasiswa selama di kampus', 'fa-mosque', 'green'],
    ['Asrama Mahasiswa', 'Asrama putra dan putri yang nyaman dan aman dalam lingkungan kampus', 'fa-home', 'purple'],
    ['Lapangan Olahraga', 'Area olahraga untuk mendukung aktivitas fisik dan kesehatan mahasiswa', 'fa-futbol', 'red'],
    ['Area Parkir Luas', 'Fasilitas parkir yang memadai untuk kendaraan roda dua dan roda empat', 'fa-parking', 'gray'],
    ['Kantin & Koperasi', 'Menyediakan makanan halal dan kebutuhan mahasiswa sehari-hari', 'fa-utensils', 'orange'],
    ['WiFi & Internet', 'Akses internet berkecepatan tinggi di seluruh area kampus', 'fa-wifi', 'teal']
  ] as $item)
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md hover:-translate-y-1 transition-all">
    <div class="w-14 h-14 bg-{{ $item[3] }}-50 rounded-2xl flex items-center justify-center text-{{ $item[3] }}-600 text-2xl mb-4">
      <i class="fas {{ $item[2] }}"></i>
    </div>
    <h3 class="font-bold text-gray-800 mb-2">{{ $item[0] }}</h3>
    <p class="text-sm text-gray-600 leading-relaxed">{{ $item[1] }}</p>
  </div>
  @endforeach
</div>
@endsection
