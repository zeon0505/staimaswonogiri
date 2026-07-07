@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  @foreach([
    ['Beasiswa KIP-K', 'Kartu Indonesia Pintar Kuliah dari Kemendikbud untuk mahasiswa tidak mampu', 'fa-id-card', 'green', 'Hingga Lulus'],
    ['Beasiswa Tahfidz', 'Bagi mahasiswa penghafal Al-Quran minimal 10 juz', 'fa-quran', 'teal', 'Tiap Semester'],
    ['Beasiswa Prestasi', 'Untuk mahasiswa berprestasi akademik IPK >= 3,75', 'fa-trophy', 'yellow', 'Tiap Semester'],
    ['Beasiswa Yayasan', 'Bantuan dari Yayasan Mulia Astuti bagi yang membutuhkan', 'fa-building', 'blue', 'Setahun Sekali'],
    ['Beasiswa Alumni', 'Program dukungan dari Alumni STAIMAS Wonogiri', 'fa-users', 'purple', 'Per Tahun'],
    ['Beasiswa BAZNAS', 'Kerjasama dengan BAZNAS Kabupaten Wonogiri', 'fa-hand-holding-heart', 'red', 'Tiap Semester']
  ] as $item)
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all">
    <div class="bg-{{ $item[3] }}-600 text-white p-5">
      <i class="fas {{ $item[2] }} text-3xl"></i>
    </div>
    <div class="p-6">
      <h3 class="font-bold text-gray-800 mb-2">{{ $item[0] }}</h3>
      <p class="text-sm text-gray-600 mb-3 leading-relaxed">{{ $item[1] }}</p>
      <span class="text-xs bg-{{ $item[3] }}-50 text-{{ $item[3] }}-700 px-3 py-1 rounded-full font-semibold">{{ $item[4] }}</span>
    </div>
  </div>
  @endforeach
</div>

<div class="mt-8 bg-teal-700 text-white rounded-2xl p-8 flex flex-col sm:flex-row items-center justify-between gap-4">
  <div>
    <h3 class="font-bold text-xl">Tertarik Mendaftar Beasiswa?</h3>
    <p class="text-teal-100 text-sm mt-1">Hubungi bagian kemahasiswaan untuk informasi persyaratan lengkap</p>
  </div>
  <a href="https://wa.me/6282223204552" target="_blank" class="bg-white text-teal-700 px-6 py-3 rounded-xl font-bold text-sm hover:bg-teal-50 transition-colors">
    <i class="fab fa-whatsapp mr-2"></i>Hubungi Kami
  </a>
</div>
@endsection
