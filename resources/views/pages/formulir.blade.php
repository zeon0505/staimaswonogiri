@extends('layouts.app')

@section('content')
<div class="space-y-12">

  {{-- Header Informasi --}}
  <div class="bg-gradient-to-r from-teal-50 to-blue-50 border border-teal-100 rounded-3xl p-10 flex flex-col sm:flex-row items-start sm:items-center gap-7">
    <div class="w-20 h-20 bg-teal-700 rounded-2xl flex items-center justify-center text-white text-3xl shadow-lg shrink-0">
      <i class="fas fa-folder-open"></i>
    </div>
    <div>
      <h2 class="text-2xl font-extrabold text-gray-800">Formulir Akademik Resmi</h2>
      <p class="text-sm text-gray-500 mt-3 leading-7 max-w-2xl">
        Klik <strong class="text-teal-700">Lihat</strong> untuk membuka formulir langsung di browser,
        atau klik <strong class="text-teal-700">Unduh</strong> untuk menyimpan file ke perangkat Anda.
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
        <div style="background-color: {{ $p['header'] }};" class="px-8 py-7 flex items-center gap-6">
          <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl shrink-0"
               style="background-color: rgba(255,255,255,0.18);">
            <i class="fas {{ $f['icon'] }} text-white"></i>
          </div>
          <div class="min-w-0">
            <span class="block text-[11px] font-black uppercase tracking-widest mb-2"
                  style="color: rgba(255,255,255,0.6);">Formulir Resmi</span>
            <h3 class="text-xl font-extrabold text-white leading-snug">{{ $f['nama'] }}</h3>
          </div>
        </div>

        {{-- Card Body --}}
        <div class="px-8 py-8 flex flex-col flex-1 gap-6">

          {{-- Deskripsi --}}
          <p class="text-sm text-gray-500 leading-7">{{ $f['desc'] }}</p>

          {{-- File Info Box --}}
          <div class="rounded-2xl px-6 py-5 flex items-center gap-5 border"
               style="background-color: {{ $p['light'] }}; border-color: {{ $p['border'] }};">
            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm shrink-0">
              <i class="fas fa-file-word text-blue-500 text-xl"></i>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-bold text-gray-700 truncate leading-5">{{ basename($f['file']) }}</p>
              <p class="text-xs text-gray-400 mt-1.5">Microsoft Word (.docx)</p>
            </div>
          </div>

          {{-- Tombol Aksi --}}
          <div class="flex gap-4 mt-auto pt-2">
            <a href="{{ $viewerUrl }}" target="_blank"
               class="flex-1 flex items-center justify-center gap-2.5 border-2 border-gray-200 hover:border-gray-400 text-gray-600 hover:text-gray-900 font-bold text-sm py-3.5 rounded-2xl transition-all bg-white hover:bg-gray-50">
              <i class="fas fa-eye"></i>
              <span>Lihat</span>
            </a>
            <a href="{{ $fileUrl }}" download
               class="flex-1 flex items-center justify-center gap-2.5 text-white font-bold text-sm py-3.5 rounded-2xl transition-all shadow-md hover:opacity-90"
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
  <div class="bg-amber-50 border border-amber-200 rounded-2xl p-8 flex gap-6">
    <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center shrink-0">
      <i class="fas fa-exclamation-triangle text-amber-500 text-lg"></i>
    </div>
    <div class="space-y-3">
      <p class="font-bold text-amber-800 text-base">Catatan Penting</p>
      <ul class="list-disc list-inside space-y-2 text-sm text-amber-700 leading-7">
        <li>Isi formulir dengan data yang lengkap dan benar.</li>
        <li>Cetak formulir dan tanda tangani sebelum diserahkan ke bagian administrasi.</li>
        <li>Hubungi Bagian Akademik jika membutuhkan bantuan pengisian formulir.</li>
      </ul>
    </div>
  </div>

</div>
@endsection
