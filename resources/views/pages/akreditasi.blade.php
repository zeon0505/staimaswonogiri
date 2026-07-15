@extends('layouts.app')

@section('content')
<div class="space-y-8">
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-2">Status Akreditasi STAIMAS Wonogiri</h2>
    <p class="text-gray-600 leading-relaxed mb-6">Seluruh program studi di Sekolah Tinggi Agama Islam Mulia Astuti (STAIMAS) Wonogiri telah terakreditasi resmi oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT). Berikut adalah detail peringkat beserta file sertifikat akreditasi resmi yang dapat diunduh.</p>
    
    <div class="overflow-x-auto mb-8">
      <table class="w-full text-sm">
        <thead>
          <tr class="bg-teal-700 text-white">
            <th class="px-6 py-3 text-left rounded-tl-xl">No</th>
            <th class="px-6 py-3 text-left">Program Studi</th>
            <th class="px-6 py-3 text-left">Jenjang</th>
            <th class="px-6 py-3 text-left">Peringkat</th>
            <th class="px-6 py-3 text-left">Masa Berlaku</th>
            <th class="px-6 py-3 text-center rounded-tr-xl">Unduh Berkas</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          @foreach([
            ['1', 'Pendidikan Agama Islam (PAI)', 'S1', 'Baik / B', '2028', 'Sertifikat Akreditasi PAI.pdf'],
            ['2', 'Komunikasi Penyiaran Islam (KPI)', 'S1', 'Baik / B', '2027', 'Sertifikat Akreditasi KPI.pdf'],
            ['3', 'Ekonomi Syariah (ES)', 'S1', 'Baik / B', '2028', 'Sertifikat Akreditasi ES.pdf'],
            ['4', 'Hukum Tata Negara (HTN)', 'S1', 'Baik', '2029', 'Sertifikat Akreditasi HTN.pdf']
          ] as $row)
          <tr class="hover:bg-gray-50/80 transition-colors">
            <td class="px-6 py-4 text-gray-500 font-medium">{{ $row[0] }}</td>
            <td class="px-6 py-4 font-bold text-gray-800">{{ $row[1] }}</td>
            <td class="px-6 py-4 text-gray-600 font-semibold">{{ $row[2] }}</td>
            <td class="px-6 py-4">
              <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-teal-50 text-teal-700 border border-teal-100">
                {{ $row[3] }}
              </span>
            </td>
            <td class="px-6 py-4 text-gray-500 font-medium">{{ $row[4] }}</td>
            <td class="px-6 py-4 text-center">
              <a href="{{ asset('assest/' . $row[5]) }}" target="_blank" class="inline-flex items-center gap-1 text-xs font-bold text-teal-600 hover:text-teal-800 bg-teal-50/50 hover:bg-teal-50 px-3 py-1.5 rounded-lg border border-teal-100/50 transition-all">
                <i class="fas fa-file-pdf"></i> Sertifikat (PDF)
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{-- Certificate Visual Preview Section --}}
    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 pt-4 border-t border-gray-100">
      <i class="fas fa-certificate text-teal-600"></i> Pratinjau Sertifikat Akreditasi
    </h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      {{-- PAI --}}
      <div class="bg-gray-50 rounded-2xl border border-gray-100 p-6 flex flex-col items-center text-center space-y-4">
        <h4 class="font-bold text-gray-800 text-sm">Sertifikat Akreditasi PAI</h4>
        <div class="w-full bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex items-center justify-center p-2 min-h-[300px]">
          <img src="{{ asset('assest/PAI.jpeg') }}" alt="Sertifikat Akreditasi PAI" class="max-h-[380px] w-auto object-contain hover:scale-[1.02] transition-transform duration-300 rounded-lg shadow-sm">
        </div>
        <a href="{{ asset('assest/Sertifikat Akreditasi PAI.pdf') }}" target="_blank" class="w-full text-center text-xs font-bold bg-teal-700 hover:bg-teal-800 text-white py-2.5 rounded-xl transition-colors shadow-sm">
          <i class="fas fa-download"></i> Unduh PDF PAI
        </a>
      </div>

      {{-- ES --}}
      <div class="bg-gray-50 rounded-2xl border border-gray-100 p-6 flex flex-col items-center text-center space-y-4">
        <h4 class="font-bold text-gray-800 text-sm">Sertifikat Akreditasi Ekonomi Syariah (ES)</h4>
        <div class="w-full bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex items-center justify-center p-2 min-h-[300px]">
          <img src="{{ asset('assest/ES.jpeg') }}" alt="Sertifikat Akreditasi ES" class="max-h-[380px] w-auto object-contain hover:scale-[1.02] transition-transform duration-300 rounded-lg shadow-sm">
        </div>
        <a href="{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}" target="_blank" class="w-full text-center text-xs font-bold bg-teal-700 hover:bg-teal-800 text-white py-2.5 rounded-xl transition-colors shadow-sm">
          <i class="fas fa-download"></i> Unduh PDF ES
        </a>
      </div>

      {{-- HTN --}}
      <div class="bg-gray-50 rounded-2xl border border-gray-100 p-6 flex flex-col items-center text-center space-y-4">
        <h4 class="font-bold text-gray-800 text-sm">Sertifikat Akreditasi Hukum Tata Negara (HTN)</h4>
        <div class="w-full bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex items-center justify-center p-2 min-h-[300px]">
          <img src="{{ asset('assest/HTN.jpeg') }}" alt="Sertifikat Akreditasi HTN" class="max-h-[380px] w-auto object-contain hover:scale-[1.02] transition-transform duration-300 rounded-lg shadow-sm">
        </div>
        <a href="{{ asset('assest/Sertifikat Akreditasi HTN.pdf') }}" target="_blank" class="w-full text-center text-xs font-bold bg-teal-700 hover:bg-teal-800 text-white py-2.5 rounded-xl transition-colors shadow-sm">
          <i class="fas fa-download"></i> Unduh PDF HTN
        </a>
      </div>

      {{-- KPI --}}
      <div class="bg-gray-50 rounded-2xl border border-gray-100 p-6 flex flex-col items-center text-center space-y-4">
        <h4 class="font-bold text-gray-800 text-sm">Sertifikat Akreditasi KPI</h4>
        <div class="w-full bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex items-center justify-center p-2 min-h-[300px]">
          {{-- KPI only has PDF, so we show an informative placeholder --}}
          <div class="flex flex-col items-center justify-center space-y-3 p-8 text-gray-400">
            <i class="fas fa-file-pdf text-5xl text-red-500 opacity-80"></i>
            <p class="text-xs font-medium max-w-[200px]">Sertifikat KPI tersedia dalam format dokumen PDF resmi.</p>
          </div>
        </div>
        <a href="{{ asset('assest/Sertifikat Akreditasi KPI.pdf') }}" target="_blank" class="w-full text-center text-xs font-bold bg-teal-700 hover:bg-teal-800 text-white py-2.5 rounded-xl transition-colors shadow-sm">
          <i class="fas fa-download"></i> Unduh PDF KPI
        </a>
      </div>
    </div>
  </div>
</div>
@endsection

