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
        Unduh formulir dalam format <strong>.docx</strong>, isi dengan lengkap, lalu serahkan ke bagian administrasi kampus atau dosen yang bersangkutan. Pastikan menggunakan formulir terbaru.
      </p>
    </div>
  </div>

  {{-- Grid Formulir --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    @foreach($formulirs as $f)
      @php
        $warna = $f['warna'];
        $colors = [
          'teal'   => ['bg' => 'bg-teal-600',   'light' => 'bg-teal-50',   'text' => 'text-teal-700',   'border' => 'border-teal-100',   'btn' => 'bg-teal-600 hover:bg-teal-700',   'badge' => 'bg-teal-100 text-teal-700'],
          'blue'   => ['bg' => 'bg-blue-600',   'light' => 'bg-blue-50',   'text' => 'text-blue-700',   'border' => 'border-blue-100',   'btn' => 'bg-blue-600 hover:bg-blue-700',   'badge' => 'bg-blue-100 text-blue-700'],
          'indigo' => ['bg' => 'bg-indigo-600', 'light' => 'bg-indigo-50', 'text' => 'text-indigo-700', 'border' => 'border-indigo-100', 'btn' => 'bg-indigo-600 hover:bg-indigo-700', 'badge' => 'bg-indigo-100 text-indigo-700'],
          'orange' => ['bg' => 'bg-orange-500', 'light' => 'bg-orange-50', 'text' => 'text-orange-700', 'border' => 'border-orange-100', 'btn' => 'bg-orange-500 hover:bg-orange-600', 'badge' => 'bg-orange-100 text-orange-700'],
        ];
        $c = $colors[$warna] ?? $colors['teal'];
      @endphp
      <div class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group">
        
        {{-- Card Header --}}
        <div class="{{ $c['bg'] }} px-6 py-5 flex items-center gap-4">
          <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center text-white text-xl">
            <i class="fas {{ $f['icon'] }}"></i>
          </div>
          <div>
            <span class="block text-[10px] font-black text-white/60 uppercase tracking-widest">Formulir Resmi</span>
            <h3 class="text-base font-extrabold text-white leading-tight">{{ $f['nama'] }}</h3>
          </div>
        </div>

        {{-- Card Body --}}
        <div class="px-6 py-5 space-y-4">
          <p class="text-sm text-gray-500 leading-relaxed">{{ $f['desc'] }}</p>

          <div class="{{ $c['light'] }} {{ $c['border'] }} border rounded-xl px-4 py-3 flex items-center gap-3">
            <i class="fas fa-file-word text-blue-500 text-xl shrink-0"></i>
            <div class="min-w-0">
              <p class="text-[11px] font-bold text-gray-600 truncate">{{ basename($f['file']) }}</p>
              <p class="text-[10px] text-gray-400">Microsoft Word (.docx)</p>
            </div>
          </div>

          {{-- Tombol Aksi --}}
          <div class="flex gap-3 pt-1">
            <a href="{{ asset($f['file']) }}" target="_blank"
               class="flex-1 flex items-center justify-center gap-2 border border-gray-200 hover:border-gray-300 text-gray-600 hover:text-gray-800 font-semibold text-xs py-2.5 rounded-xl transition-all bg-gray-50 hover:bg-gray-100">
              <i class="fas fa-eye text-xs"></i> Lihat
            </a>
            <a href="{{ asset($f['file']) }}" download
               class="flex-1 flex items-center justify-center gap-2 {{ $c['btn'] }} text-white font-bold text-xs py-2.5 rounded-xl transition-all shadow-md">
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
