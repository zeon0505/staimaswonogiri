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
      <i class="fas fa-certificate text-teal-600"></i> Sertifikat Akreditasi
    </h3>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      
      {{-- Akreditasi Institusi (Kiri / Atas) --}}
      <div class="lg:col-span-1 space-y-4">
        <div class="bg-gradient-to-br from-[#074e50] to-teal-800 rounded-2xl p-6 text-white text-center shadow-md relative overflow-hidden">
          <div class="absolute top-0 right-0 p-4 opacity-10">
            <i class="fas fa-award text-6xl"></i>
          </div>
          <h4 class="font-bold text-lg mb-2 relative z-10">Akreditasi Institusi STAIMAS</h4>
          <p class="text-teal-100 text-sm mb-6 relative z-10">Peringkat "Baik" dari BAN-PT</p>
          
          <div class="w-full bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex items-center justify-center p-2 mb-4 relative z-10">
            <img src="{{ asset('assest/akreditasi.jpg') }}" alt="Sertifikat Akreditasi Institusi" class="w-full h-auto object-contain hover:scale-[1.02] transition-transform duration-300 rounded-lg">
          </div>
        </div>
      </div>

      {{-- Akreditasi Prodi (Kanan / Bawah) --}}
      <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden flex flex-col h-full">
          
          {{-- Tabs Header --}}
          <div class="bg-gray-50 border-b border-gray-200 p-2 flex flex-wrap gap-2 justify-center sm:justify-start">
            <button onclick="switchTab('PAI')" id="tab-btn-PAI" class="tab-btn px-4 py-2 rounded-lg text-sm font-bold bg-teal-700 text-white shadow-sm transition-all">PAI</button>
            <button onclick="switchTab('KPI')" id="tab-btn-KPI" class="tab-btn px-4 py-2 rounded-lg text-sm font-bold bg-white text-gray-600 hover:bg-gray-100 transition-all">KPI</button>
            <button onclick="switchTab('ES')" id="tab-btn-ES" class="tab-btn px-4 py-2 rounded-lg text-sm font-bold bg-white text-gray-600 hover:bg-gray-100 transition-all">Ekonomi Syariah</button>
            <button onclick="switchTab('HTN')" id="tab-btn-HTN" class="tab-btn px-4 py-2 rounded-lg text-sm font-bold bg-white text-gray-600 hover:bg-gray-100 transition-all">Hukum Tata Negara</button>
          </div>
          
          {{-- Tab Contents --}}
          <div class="p-4 bg-gray-50 flex-grow relative min-h-[500px]">
            
            {{-- PAI Content --}}
            <div id="tab-content-PAI" class="tab-content w-full h-full absolute inset-0 p-4 transition-opacity duration-300">
              <div class="w-full h-full bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                <div class="bg-teal-50 px-4 py-3 border-b border-teal-100 flex justify-between items-center">
                  <span class="font-bold text-teal-800 text-sm">Sertifikat Pendidikan Agama Islam (PAI)</span>
                  <a href="{{ asset('assest/Sertifikat Akreditasi PAI.pdf') }}" target="_blank" class="text-xs bg-teal-700 text-white px-3 py-1.5 rounded-lg hover:bg-teal-800"><i class="fas fa-external-link-alt mr-1"></i> Buka Full</a>
                </div>
                <iframe src="{{ asset('assest/Sertifikat Akreditasi PAI.pdf') }}" class="w-full flex-grow border-0"></iframe>
              </div>
            </div>
            
            {{-- KPI Content --}}
            <div id="tab-content-KPI" class="tab-content w-full h-full absolute inset-0 p-4 opacity-0 pointer-events-none transition-opacity duration-300">
              <div class="w-full h-full bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                <div class="bg-teal-50 px-4 py-3 border-b border-teal-100 flex justify-between items-center">
                  <span class="font-bold text-teal-800 text-sm">Sertifikat Komunikasi Penyiaran Islam (KPI)</span>
                  <a href="{{ asset('assest/Sertifikat Akreditasi KPI.pdf') }}" target="_blank" class="text-xs bg-teal-700 text-white px-3 py-1.5 rounded-lg hover:bg-teal-800"><i class="fas fa-external-link-alt mr-1"></i> Buka Full</a>
                </div>
                <iframe src="{{ asset('assest/Sertifikat Akreditasi KPI.pdf') }}" class="w-full flex-grow border-0"></iframe>
              </div>
            </div>
            
            {{-- ES Content --}}
            <div id="tab-content-ES" class="tab-content w-full h-full absolute inset-0 p-4 opacity-0 pointer-events-none transition-opacity duration-300">
              <div class="w-full h-full bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                <div class="bg-teal-50 px-4 py-3 border-b border-teal-100 flex justify-between items-center">
                  <span class="font-bold text-teal-800 text-sm">Sertifikat Ekonomi Syariah (ES)</span>
                  <a href="{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}" target="_blank" class="text-xs bg-teal-700 text-white px-3 py-1.5 rounded-lg hover:bg-teal-800"><i class="fas fa-external-link-alt mr-1"></i> Buka Full</a>
                </div>
                <iframe src="{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}" class="w-full flex-grow border-0"></iframe>
              </div>
            </div>
            
            {{-- HTN Content --}}
            <div id="tab-content-HTN" class="tab-content w-full h-full absolute inset-0 p-4 opacity-0 pointer-events-none transition-opacity duration-300">
              <div class="w-full h-full bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                <div class="bg-teal-50 px-4 py-3 border-b border-teal-100 flex justify-between items-center">
                  <span class="font-bold text-teal-800 text-sm">Sertifikat Hukum Tata Negara (HTN)</span>
                  <a href="{{ asset('assest/Sertifikat Akreditasi HTN.pdf') }}" target="_blank" class="text-xs bg-teal-700 text-white px-3 py-1.5 rounded-lg hover:bg-teal-800"><i class="fas fa-external-link-alt mr-1"></i> Buka Full</a>
                </div>
                <iframe src="{{ asset('assest/Sertifikat Akreditasi HTN.pdf') }}" class="w-full flex-grow border-0"></iframe>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<script>
  function switchTab(tabId) {
    // Reset all buttons
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.className = 'tab-btn px-4 py-2 rounded-lg text-sm font-bold bg-white text-gray-600 hover:bg-gray-100 transition-all';
    });
    // Set active button
    const activeBtn = document.getElementById('tab-btn-' + tabId);
    activeBtn.className = 'tab-btn px-4 py-2 rounded-lg text-sm font-bold bg-teal-700 text-white shadow-sm transition-all';
    
    // Hide all contents
    document.querySelectorAll('.tab-content').forEach(content => {
      content.classList.add('opacity-0', 'pointer-events-none');
      content.classList.remove('z-10');
    });
    // Show active content
    const activeContent = document.getElementById('tab-content-' + tabId);
    activeContent.classList.remove('opacity-0', 'pointer-events-none');
    activeContent.classList.add('z-10');
  }
</script>
@endsection

