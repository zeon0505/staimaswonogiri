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
      <i class="fas fa-certificate text-teal-600"></i> Berkas Sertifikat Akreditasi
    </h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
      
      {{-- Akreditasi Institusi --}}
      <div class="lg:col-span-3 bg-gradient-to-br from-[#074e50] to-teal-800 rounded-2xl p-6 text-white text-center shadow-sm relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="absolute top-0 right-0 p-4 opacity-10">
          <i class="fas fa-award text-8xl"></i>
        </div>
        <div class="text-left relative z-10 space-y-2 md:w-1/2">
          <h4 class="font-bold text-2xl">Akreditasi Institusi STAIMAS</h4>
          <p class="text-teal-100 text-sm">Sekolah Tinggi Agama Islam Mulia Astuti (STAIMAS) Wonogiri telah meraih peringkat "Baik" dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT).</p>
        </div>
        <div class="relative z-10 md:w-1/2 flex justify-end">
          <button onclick="openModal('{{ asset('assest/akreditasi.jpg') }}', 'image', 'Sertifikat Akreditasi Institusi')" class="bg-white text-teal-800 hover:bg-teal-50 font-bold py-3 px-6 rounded-xl transition-all shadow-md flex items-center gap-2">
            <i class="fas fa-search-plus"></i> Lihat Sertifikat
          </button>
        </div>
      </div>

      {{-- PAI --}}
      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between space-y-4">
        <div>
          <div class="w-10 h-10 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center mb-4">
            <i class="fas fa-book-open"></i>
          </div>
          <h4 class="font-bold text-gray-800">Pendidikan Agama Islam (PAI)</h4>
          <p class="text-xs text-gray-500 mt-1">Sertifikat Akreditasi BAN-PT</p>
        </div>
        <div class="flex gap-2">
          <button onclick="openModal('{{ asset('assest/Sertifikat Akreditasi PAI.pdf') }}', 'pdf', 'Sertifikat PAI')" class="flex-1 bg-teal-50 text-teal-700 hover:bg-teal-100 font-bold py-2 px-4 rounded-lg text-sm transition-colors text-center">
            <i class="fas fa-eye mr-1"></i> Pratinjau
          </button>
          <a href="{{ asset('assest/Sertifikat Akreditasi PAI.pdf') }}" target="_blank" class="bg-gray-50 text-gray-600 hover:bg-gray-100 font-bold py-2 px-3 rounded-lg text-sm transition-colors" title="Buka di tab baru">
            <i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      </div>

      {{-- KPI --}}
      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between space-y-4">
        <div>
          <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-4">
            <i class="fas fa-broadcast-tower"></i>
          </div>
          <h4 class="font-bold text-gray-800">Komunikasi Penyiaran Islam</h4>
          <p class="text-xs text-gray-500 mt-1">Sertifikat Akreditasi BAN-PT</p>
        </div>
        <div class="flex gap-2">
          <button onclick="openModal('{{ asset('assest/Sertifikat Akreditasi KPI.pdf') }}', 'pdf', 'Sertifikat KPI')" class="flex-1 bg-teal-50 text-teal-700 hover:bg-teal-100 font-bold py-2 px-4 rounded-lg text-sm transition-colors text-center">
            <i class="fas fa-eye mr-1"></i> Pratinjau
          </button>
          <a href="{{ asset('assest/Sertifikat Akreditasi KPI.pdf') }}" target="_blank" class="bg-gray-50 text-gray-600 hover:bg-gray-100 font-bold py-2 px-3 rounded-lg text-sm transition-colors" title="Buka di tab baru">
            <i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      </div>

      {{-- ES --}}
      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between space-y-4">
        <div>
          <div class="w-10 h-10 bg-green-50 text-green-600 rounded-xl flex items-center justify-center mb-4">
            <i class="fas fa-chart-line"></i>
          </div>
          <h4 class="font-bold text-gray-800">Ekonomi Syariah (ES)</h4>
          <p class="text-xs text-gray-500 mt-1">Sertifikat Akreditasi BAN-PT</p>
        </div>
        <div class="flex gap-2">
          <button onclick="openModal('{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}', 'pdf', 'Sertifikat ES')" class="flex-1 bg-teal-50 text-teal-700 hover:bg-teal-100 font-bold py-2 px-4 rounded-lg text-sm transition-colors text-center">
            <i class="fas fa-eye mr-1"></i> Pratinjau
          </button>
          <a href="{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}" target="_blank" class="bg-gray-50 text-gray-600 hover:bg-gray-100 font-bold py-2 px-3 rounded-lg text-sm transition-colors" title="Buka di tab baru">
            <i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      </div>

      {{-- HTN --}}
      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between space-y-4">
        <div>
          <div class="w-10 h-10 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-4">
            <i class="fas fa-balance-scale"></i>
          </div>
          <h4 class="font-bold text-gray-800">Hukum Tata Negara (HTN)</h4>
          <p class="text-xs text-gray-500 mt-1">Sertifikat Akreditasi BAN-PT</p>
        </div>
        <div class="flex gap-2">
          <button onclick="openModal('{{ asset('assest/Sertifikat Akreditasi HTN.pdf') }}', 'pdf', 'Sertifikat HTN')" class="flex-1 bg-teal-50 text-teal-700 hover:bg-teal-100 font-bold py-2 px-4 rounded-lg text-sm transition-colors text-center">
            <i class="fas fa-eye mr-1"></i> Pratinjau
          </button>
          <a href="{{ asset('assest/Sertifikat Akreditasi HTN.pdf') }}" target="_blank" class="bg-gray-50 text-gray-600 hover:bg-gray-100 font-bold py-2 px-3 rounded-lg text-sm transition-colors" title="Buka di tab baru">
            <i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      </div>
      
    </div>
  </div>
</div>

{{-- Modal Viewer --}}
<div id="certModal" class="fixed inset-0 z-[100] hidden bg-gray-900/80 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6 opacity-0 transition-opacity duration-300">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-5xl h-[85vh] flex flex-col transform scale-95 transition-transform duration-300" id="certModalContent">
    
    {{-- Modal Header --}}
    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 rounded-t-2xl">
      <h3 id="modalTitle" class="font-bold text-gray-800 text-lg">Pratinjau Sertifikat</h3>
      <button onclick="closeModal()" class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 hover:bg-red-100 hover:text-red-600 transition-colors">
        <i class="fas fa-times"></i>
      </button>
    </div>
    
    {{-- Modal Body --}}
    <div class="flex-grow p-4 bg-gray-100 overflow-hidden relative" id="modalBody">
      <!-- Content injected via JS -->
    </div>
    
  </div>
</div>

<script>
  function openModal(fileUrl, type, title) {
    const modal = document.getElementById('certModal');
    const modalContent = document.getElementById('certModalContent');
    const modalTitle = document.getElementById('modalTitle');
    const modalBody = document.getElementById('modalBody');
    
    modalTitle.textContent = title;
    
    if (type === 'pdf') {
      modalBody.innerHTML = `<iframe src="${fileUrl}" class="w-full h-full rounded-lg shadow-sm border-0 bg-white"></iframe>`;
    } else {
      modalBody.innerHTML = `<div class="w-full h-full flex items-center justify-center bg-white rounded-lg shadow-sm p-4"><img src="${fileUrl}" class="max-w-full max-h-full object-contain rounded"></div>`;
    }
    
    // Show modal
    modal.classList.remove('hidden');
    // Trigger reflow
    void modal.offsetWidth;
    // Fade in
    modal.classList.remove('opacity-0');
    modalContent.classList.remove('scale-95');
    
    // Prevent body scroll
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    const modal = document.getElementById('certModal');
    const modalContent = document.getElementById('certModalContent');
    const modalBody = document.getElementById('modalBody');
    
    modal.classList.add('opacity-0');
    modalContent.classList.add('scale-95');
    
    setTimeout(() => {
      modal.classList.add('hidden');
      modalBody.innerHTML = ''; // clear iframe to stop memory leaks
      document.body.style.overflow = ''; // restore scroll
    }, 300);
  }
  
  // Close on outside click
  document.getElementById('certModal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
  });
</script>
@endsection

