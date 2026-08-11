@extends('layouts.app')

@section('content')
<div class="space-y-10">

  {{-- Header Informasi --}}
  <div class="bg-gradient-to-r from-teal-50 to-blue-50 border border-teal-100 rounded-3xl p-7 flex flex-col sm:flex-row items-start sm:items-center gap-5">
    <div class="w-16 h-16 bg-teal-700 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-teal-700/20 shrink-0">
      <i class="fas fa-folder-open"></i>
    </div>
    <div>
      <h2 class="text-lg font-extrabold text-gray-800">Formulir Akademik Resmi</h2>
      <p class="text-sm text-gray-500 mt-1 leading-relaxed">
        Klik <strong>Lihat</strong> untuk membuka formulir di browser, atau klik <strong>Unduh</strong> untuk menyimpan ke perangkat Anda. Pastikan menggunakan formulir terbaru.
      </p>
    </div>
  </div>

  {{-- Grid Formulir --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    @foreach($formulirs as $f)
      @php
        $palette = [
          'teal'   => ['header' => '#0d9488', 'light' => '#f0fdfa', 'border' => '#99f6e4', 'btn' => '#0d9488', 'btnHover' => '#0f766e'],
          'blue'   => ['header' => '#2563eb', 'light' => '#eff6ff', 'border' => '#bfdbfe', 'btn' => '#2563eb', 'btnHover' => '#1d4ed8'],
          'indigo' => ['header' => '#4f46e5', 'light' => '#eef2ff', 'border' => '#c7d2fe', 'btn' => '#4f46e5', 'btnHover' => '#4338ca'],
          'orange' => ['header' => '#f97316', 'light' => '#fff7ed', 'border' => '#fed7aa', 'btn' => '#f97316', 'btnHover' => '#ea580c'],
        ];
        $p = $palette[$f['warna']] ?? $palette['teal'];
        $fileUrl = asset($f['file']);
        $viewerUrl = 'https://docs.google.com/viewer?url=' . urlencode($fileUrl) . '&embedded=true';
      @endphp
      <div class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">

        {{-- Card Header (inline style agar tidak di-purge Tailwind) --}}
        <div style="background-color: {{ $p['header'] }};" class="px-6 py-5 flex items-center gap-4">
          <div class="w-12 h-12 rounded-xl flex items-center justify-center text-white text-xl" style="background-color: rgba(255,255,255,0.2);">
            <i class="fas {{ $f['icon'] }}"></i>
          </div>
          <div>
            <span class="block text-[10px] font-black uppercase tracking-widest" style="color: rgba(255,255,255,0.65);">Formulir Resmi</span>
            <h3 class="text-base font-extrabold text-white leading-tight">{{ $f['nama'] }}</h3>
          </div>
        </div>

        {{-- Card Body --}}
        <div class="px-6 py-5 space-y-4">
          <p class="text-sm text-gray-500 leading-relaxed">{{ $f['desc'] }}</p>

          <div class="rounded-xl px-4 py-3 flex items-center gap-3 border" style="background-color: {{ $p['light'] }}; border-color: {{ $p['border'] }};">
            <i class="fas fa-file-word text-blue-500 text-xl shrink-0"></i>
            <div class="min-w-0">
              <p class="text-[11px] font-bold text-gray-600 truncate">{{ basename($f['file']) }}</p>
              <p class="text-[10px] text-gray-400">Microsoft Word (.docx)</p>
            </div>
          </div>

          {{-- Tombol Aksi --}}
          <div class="flex gap-3 pt-1">
            {{-- Lihat: buka di Google Docs Viewer --}}
            <a href="{{ $viewerUrl }}" target="_blank"
               class="flex-1 flex items-center justify-center gap-2 border border-gray-200 hover:border-gray-300 text-gray-600 hover:text-gray-800 font-semibold text-xs py-2.5 rounded-xl transition-all bg-gray-50 hover:bg-gray-100">
              <i class="fas fa-eye text-xs"></i> Lihat
            </a>
            {{-- Unduh: download file langsung --}}
            <a href="{{ $fileUrl }}" download
               class="flex-1 flex items-center justify-center gap-2 text-white font-bold text-xs py-2.5 rounded-xl transition-all shadow-md"
               style="background-color: {{ $p['btn'] }};">
              <i class="fas fa-download text-xs"></i> Unduh
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  {{-- Catatan Penting --}}
  <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5 flex gap-4">
    <i class="fas fa-exclamation-triangle text-amber-500 text-lg shrink-0 mt-0.5"></i>
    <div class="text-sm text-amber-800 space-y-1">
      <p class="font-bold">Catatan Penting</p>
      <ul class="list-disc list-inside space-y-1 text-xs text-amber-700 leading-relaxed">
        <li>Isi formulir dengan data yang lengkap dan benar.</li>
        <li>Cetak formulir dan tanda tangani sebelum diserahkan ke bagian administrasi.</li>
        <li>Hubungi Bagian Akademik jika membutuhkan bantuan pengisian formulir.</li>
      </ul>
    </div>
  </div>

</div>
@endsection
