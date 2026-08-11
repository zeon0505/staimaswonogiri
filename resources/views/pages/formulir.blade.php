@extends('layouts.app')

@section('content')
<div class="space-y-10">

  {{-- Header Informasi --}}
  <div class="bg-gradient-to-r from-teal-50 to-blue-50 border border-teal-100 rounded-3xl p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6">
    <div class="w-16 h-16 bg-teal-700 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-teal-700/20 shrink-0">
      <i class="fas fa-folder-open"></i>
    </div>
    <div>
      <h2 class="text-xl font-extrabold text-gray-800">Formulir Akademik Resmi</h2>
      <p class="text-sm text-gray-500 mt-1.5 leading-relaxed max-w-2xl">
        Klik <strong class="text-teal-700">Lihat</strong> untuk membuka formulir di browser, atau klik <strong class="text-teal-700">Unduh</strong> untuk menyimpan ke perangkat Anda. Pastikan menggunakan formulir terbaru.
      </p>
    </div>
  </div>

  {{-- Grid Formulir --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
    @foreach($formulirs as $f)
      @php
        $palette = [
          'teal'   => ['header' => '#0d9488', 'light' => '#f0fdfa', 'border' => '#99f6e4', 'btn' => '#0d9488'],
          'blue'   => ['header' => '#2563eb', 'light' => '#eff6ff', 'border' => '#bfdbfe', 'btn' => '#2563eb'],
          'indigo' => ['header' => '#4f46e5', 'light' => '#eef2ff', 'border' => '#c7d2fe', 'btn' => '#4f46e5'],
          'orange' => ['header' => '#f97316', 'light' => '#fff7ed', 'border' => '#fed7aa', 'btn' => '#f97316'],
        ];
        $p = $palette[$f['warna']] ?? $palette['teal'];
        $fileUrl = asset($f['file']);
        $viewerUrl = 'https://docs.google.com/viewer?url=' . urlencode($fileUrl) . '&embedded=true';
      @endphp

      <div class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col">

        {{-- Card Header --}}
        <div style="background-color: {{ $p['header'] }};" class="px-7 py-6 flex items-center gap-5">
          <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl shrink-0" style="background-color: rgba(255,255,255,0.18);">
            <i class="fas {{ $f['icon'] }} text-white"></i>
          </div>
          <div class="min-w-0">
            <span class="block text-[10px] font-black uppercase tracking-widest mb-1" style="color: rgba(255,255,255,0.6);">Formulir Resmi</span>
            <h3 class="text-lg font-extrabold text-white leading-snug">{{ $f['nama'] }}</h3>
          </div>
        </div>

        {{-- Card Body --}}
        <div class="px-7 py-6 flex flex-col flex-1 gap-5">

          {{-- Deskripsi --}}
          <p class="text-sm text-gray-500 leading-relaxed">{{ $f['desc'] }}</p>

          {{-- File Info Box --}}
          <div class="rounded-2xl px-5 py-4 flex items-center gap-4 border" style="background-color: {{ $p['light'] }}; border-color: {{ $p['border'] }};">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-sm shrink-0">
              <i class="fas fa-file-word text-blue-500 text-lg"></i>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-bold text-gray-700 truncate">{{ basename($f['file']) }}</p>
              <p class="text-xs text-gray-400 mt-0.5">Microsoft Word (.docx)</p>
            </div>
          </div>

          {{-- Tombol Aksi --}}
          <div class="flex gap-3 mt-auto pt-1">
            <a href="{{ $viewerUrl }}" target="_blank"
               class="flex-1 flex items-center justify-center gap-2 border-2 border-gray-200 hover:border-gray-300 text-gray-600 hover:text-gray-800 font-bold text-sm py-3 rounded-2xl transition-all bg-white hover:bg-gray-50">
              <i class="fas fa-eye"></i>
              <span>Lihat</span>
            </a>
            <a href="{{ $fileUrl }}" download
               class="flex-1 flex items-center justify-center gap-2 text-white font-bold text-sm py-3 rounded-2xl transition-all shadow-md hover:opacity-90"
               style="background-color: {{ $p['btn'] }};">
              <i class="fas fa-download"></i>
              <span>Unduh</span>
            </a>
          </div>
        </div>

      </div>
    @endforeach
  </div>

  {{-- Catatan Penting --}}
  <div class="bg-amber-50 border border-amber-200 rounded-2xl p-6 flex gap-5">
    <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center shrink-0">
      <i class="fas fa-exclamation-triangle text-amber-500"></i>
    </div>
    <div class="space-y-2">
      <p class="font-bold text-amber-800">Catatan Penting</p>
      <ul class="list-disc list-inside space-y-1.5 text-sm text-amber-700 leading-relaxed">
        <li>Isi formulir dengan data yang lengkap dan benar.</li>
        <li>Cetak formulir dan tanda tangani sebelum diserahkan ke bagian administrasi.</li>
        <li>Hubungi Bagian Akademik jika membutuhkan bantuan pengisian formulir.</li>
      </ul>
    </div>
  </div>

</div>
@endsection
