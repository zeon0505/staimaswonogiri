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
    <h3 class="text-xl font-bold text-gray-800 mb-6 pt-4 border-t border-gray-100">
      Berkas Sertifikat Akreditasi
    </h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
      
      {{-- Akreditasi Institusi --}}
      <div class="lg:col-span-3 bg-[#074e50] rounded-2xl p-6 text-white flex flex-col md:flex-row items-center justify-between gap-4 shadow-sm hover-preview-trigger cursor-pointer" data-preview-img="{{ asset('assest/akreditasi.jpg') }}" data-preview-title="Akreditasi Institusi" onclick="openModal('{{ asset('assest/akreditasi.jpg') }}', 'image', 'Sertifikat Akreditasi Institusi')">
        <div class="space-y-2">
          <span class="text-xs font-semibold uppercase tracking-widest text-teal-200">Akreditasi Institusi</span>
          <h4 class="font-bold text-2xl">STAIMAS Wonogiri</h4>
          <p class="text-teal-100 text-sm max-w-xl">Sekolah Tinggi Agama Islam Mulia Astuti (STAIMAS) Wonogiri telah meraih peringkat <strong>"Baik"</strong> dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT).</p>
        </div>
        <div class="shrink-0">
          <button onclick="event.stopPropagation(); openModal('{{ asset('assest/akreditasi.jpg') }}', 'image', 'Sertifikat Akreditasi Institusi')" class="bg-teal-900/60 hover:bg-teal-900 border border-teal-600 text-white font-semibold py-2.5 px-5 rounded-lg transition-colors flex items-center gap-2 text-sm">
            <i class="fas fa-eye"></i> Lihat Sertifikat
          </button>
        </div>
      </div>

      {{-- PAI --}}
      <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex flex-col overflow-hidden">
        {{-- Thumbnail GAMBAR sertifikat agar mouse pointer events tidak terblokir --}}
        <div class="relative cursor-pointer group h-52 overflow-hidden bg-gray-100 hover-preview-trigger" data-preview-img="{{ asset('assest/sertifikat-pai.png') }}" data-preview-title="Sertifikat Akreditasi PAI" onclick="openModal('{{ asset('assest/Sertifikat Akreditasi PAI.pdf') }}', 'pdf', 'Sertifikat PAI')">
          <img src="{{ asset('assest/sertifikat-pai.png') }}" alt="Sertifikat PAI" class="w-full h-full object-cover object-top transition-transform duration-300 group-hover:scale-105">
          <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition-all flex items-center justify-center">
            <span class="bg-white text-teal-700 font-bold px-4 py-2 rounded-lg text-sm flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity shadow">
              <i class="fas fa-search-plus"></i> Lihat Penuh
            </span>
          </div>
        </div>
        <div class="p-4 flex flex-col flex-1 justify-between space-y-3">
          <div>
            <h4 class="font-bold text-gray-800">Pendidikan Agama Islam (PAI)</h4>
            <p class="text-xs text-gray-500 mt-1">Sertifikat Akreditasi BAN-PT</p>
          </div>
          <div class="flex gap-2">
            <button onclick="openModal('{{ asset('assest/Sertifikat Akreditasi PAI.pdf') }}', 'pdf', 'Sertifikat PAI')" class="flex-1 bg-teal-50 text-teal-700 hover:bg-teal-100 font-bold py-2 px-4 rounded-lg text-sm transition-colors text-center hover-preview-trigger" data-preview-img="{{ asset('assest/sertifikat-pai.png') }}" data-preview-title="Sertifikat Akreditasi PAI">
              <i class="fas fa-eye mr-1"></i> Pratinjau
            </button>
            <a href="{{ asset('assest/Sertifikat Akreditasi PAI.pdf') }}" target="_blank" class="bg-gray-50 text-gray-600 hover:bg-gray-100 font-bold py-2 px-3 rounded-lg text-sm transition-colors" title="Buka di tab baru">
              <i class="fas fa-external-link-alt"></i>
            </a>
          </div>
        </div>
      </div>

      {{-- KPI --}}
      <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex flex-col overflow-hidden">
        <div class="relative cursor-pointer group h-52 overflow-hidden bg-gray-100 hover-preview-trigger" data-preview-img="{{ asset('assest/sertifikat-kpi.png') }}" data-preview-title="Sertifikat Akreditasi KPI" onclick="openModal('{{ asset('assest/Sertifikat Akreditasi KPI.pdf') }}', 'pdf', 'Sertifikat KPI')">
          <img src="{{ asset('assest/sertifikat-kpi.png') }}" alt="Sertifikat KPI" class="w-full h-full object-cover object-top transition-transform duration-300 group-hover:scale-105">
          <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition-all flex items-center justify-center">
            <span class="bg-white text-teal-700 font-bold px-4 py-2 rounded-lg text-sm flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity shadow">
              <i class="fas fa-search-plus"></i> Lihat Penuh
            </span>
          </div>
        </div>
        <div class="p-4 flex flex-col flex-1 justify-between space-y-3">
          <div>
            <h4 class="font-bold text-gray-800">Komunikasi Penyiaran Islam (KPI)</h4>
            <p class="text-xs text-gray-500 mt-1">Sertifikat Akreditasi BAN-PT</p>
          </div>
          <div class="flex gap-2">
            <button onclick="openModal('{{ asset('assest/Sertifikat Akreditasi KPI.pdf') }}', 'pdf', 'Sertifikat KPI')" class="flex-1 bg-teal-50 text-teal-700 hover:bg-teal-100 font-bold py-2 px-4 rounded-lg text-sm transition-colors text-center hover-preview-trigger" data-preview-img="{{ asset('assest/sertifikat-kpi.png') }}" data-preview-title="Sertifikat Akreditasi KPI">
              <i class="fas fa-eye mr-1"></i> Pratinjau
            </button>
            <a href="{{ asset('assest/Sertifikat Akreditasi KPI.pdf') }}" target="_blank" class="bg-gray-50 text-gray-600 hover:bg-gray-100 font-bold py-2 px-3 rounded-lg text-sm transition-colors" title="Buka di tab baru">
              <i class="fas fa-external-link-alt"></i>
            </a>
          </div>
        </div>
      </div>

      {{-- ES --}}
      <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex flex-col overflow-hidden">
        <div class="relative cursor-pointer group h-52 overflow-hidden bg-gray-100 hover-preview-trigger" data-preview-img="{{ asset('assest/sertifikat-es.png') }}" data-preview-title="Sertifikat Akreditasi ES" onclick="openModal('{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}', 'pdf', 'Sertifikat ES')">
          <img src="{{ asset('assest/sertifikat-es.png') }}" alt="Sertifikat ES" class="w-full h-full object-cover object-top transition-transform duration-300 group-hover:scale-105">
          <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition-all flex items-center justify-center">
            <span class="bg-white text-teal-700 font-bold px-4 py-2 rounded-lg text-sm flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity shadow">
              <i class="fas fa-search-plus"></i> Lihat Penuh
            </span>
          </div>
        </div>
        <div class="p-4 flex flex-col flex-1 justify-between space-y-3">
          <div>
            <h4 class="font-bold text-gray-800">Ekonomi Syariah (ES)</h4>
            <p class="text-xs text-gray-500 mt-1">Sertifikat Akreditasi BAN-PT</p>
          </div>
          <div class="flex gap-2">
            <button onclick="openModal('{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}', 'pdf', 'Sertifikat ES')" class="flex-1 bg-teal-50 text-teal-700 hover:bg-teal-100 font-bold py-2 px-4 rounded-lg text-sm transition-colors text-center hover-preview-trigger" data-preview-img="{{ asset('assest/sertifikat-es.png') }}" data-preview-title="Sertifikat Akreditasi ES">
              <i class="fas fa-eye mr-1"></i> Pratinjau
            </button>
            <a href="{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}" target="_blank" class="bg-gray-50 text-gray-600 hover:bg-gray-100 font-bold py-2 px-3 rounded-lg text-sm transition-colors" title="Buka di tab baru">
              <i class="fas fa-external-link-alt"></i>
            </a>
          </div>
        </div>
      </div>

      {{-- HTN --}}
      <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex flex-col overflow-hidden">
        <div class="relative cursor-pointer group h-52 overflow-hidden bg-gray-100 hover-preview-trigger" data-preview-img="{{ asset('assest/sertifikat-htn.png') }}" data-preview-title="Sertifikat Akreditasi HTN" onclick="openModal('{{ asset('assest/Sertifikat Akreditasi HTN.pdf') }}', 'pdf', 'Sertifikat HTN')">
          <img src="{{ asset('assest/sertifikat-htn.png') }}" alt="Sertifikat HTN" class="w-full h-full object-cover object-top transition-transform duration-300 group-hover:scale-105">
          <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition-all flex items-center justify-center">
            <span class="bg-white text-teal-700 font-bold px-4 py-2 rounded-lg text-sm flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity shadow">
              <i class="fas fa-search-plus"></i> Lihat Penuh
            </span>
          </div>
        </div>
        <div class="p-4 flex flex-col flex-1 justify-between space-y-3">
          <div>
            <h4 class="font-bold text-gray-800">Hukum Tata Negara (HTN)</h4>
            <p class="text-xs text-gray-500 mt-1">Sertifikat Akreditasi BAN-PT</p>
          </div>
          <div class="flex gap-2">
            <button onclick="openModal('{{ asset('assest/Sertifikat Akreditasi HTN.pdf') }}', 'pdf', 'Sertifikat HTN')" class="flex-1 bg-teal-50 text-teal-700 hover:bg-teal-100 font-bold py-2 px-4 rounded-lg text-sm transition-colors text-center hover-preview-trigger" data-preview-img="{{ asset('assest/sertifikat-htn.png') }}" data-preview-title="Sertifikat Akreditasi HTN">
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
</div>

{{-- Tooltip Hover Preview Mengambang --}}
<div id="hoverPreview" class="fixed pointer-events-none z-[120] hidden bg-white p-2 rounded-xl shadow-2xl border border-gray-200 transition-opacity duration-150 opacity-0 w-80 sm:w-96 overflow-hidden">
  <div class="text-xs font-bold text-gray-700 mb-1 px-1 flex justify-between items-center">
    <span id="hoverPreviewTitle">Pratinjau</span>
    <span class="text-[10px] text-teal-600 font-normal bg-teal-50 px-1.5 py-0.5 rounded">Mengikuti Kursor</span>
  </div>
  <div class="relative w-full aspect-[4/3] bg-gray-50 rounded-lg overflow-hidden border border-gray-100">
    <img id="hoverPreviewImg" src="" alt="Pratinjau Sertifikat" class="w-full h-full object-contain">
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
    <div class="flex-grow h-[calc(100%-60px)] p-4 bg-gray-100 overflow-hidden relative" id="modalBody">
      <!-- Content injected via JS -->
    </div>
    
  </div>
</div>

<script>
  // Tooltip Hover Preview Logic
  const hoverPreview = document.getElementById('hoverPreview');
  const hoverPreviewImg = document.getElementById('hoverPreviewImg');
  const hoverPreviewTitle = document.getElementById('hoverPreviewTitle');

  function initHoverPreview() {
    // Gunakan event delegation global agar 100% mendeteksi gerakan mouse tanpa kendala binding
    document.addEventListener('mouseover', (e) => {
      const trigger = e.target.closest('.hover-preview-trigger');
      if (!trigger) return;

      const imgUrl = trigger.getAttribute('data-preview-img');
      const title = trigger.getAttribute('data-preview-title');
      if (!imgUrl) return;

      hoverPreviewImg.src = imgUrl;
      hoverPreviewTitle.textContent = title;
      hoverPreview.classList.remove('hidden');
      
      // Hitung posisi awal instan
      const offset = 20;
      let x = e.clientX + offset;
      let y = e.clientY + offset;
      hoverPreview.style.left = x + 'px';
      hoverPreview.style.top = y + 'px';

      setTimeout(() => {
        hoverPreview.classList.add('opacity-100');
      }, 10);
    });

    document.addEventListener('mousemove', (e) => {
      const trigger = e.target.closest('.hover-preview-trigger');
      if (!trigger || hoverPreview.classList.contains('hidden')) return;

      const offset = 20;
      let x = e.clientX + offset;
      let y = e.clientY + offset;

      const tooltipWidth = hoverPreview.offsetWidth || 350;
      const tooltipHeight = hoverPreview.offsetHeight || 250;
      
      if (x + tooltipWidth > window.innerWidth) {
        x = e.clientX - tooltipWidth - offset;
      }
      if (y + tooltipHeight > window.innerHeight) {
        y = e.clientY - tooltipHeight - offset;
      }

      hoverPreview.style.left = x + 'px';
      hoverPreview.style.top = y + 'px';
    });

    document.addEventListener('mouseout', (e) => {
      const trigger = e.target.closest('.hover-preview-trigger');
      if (!trigger) return;

      // Hanya sembunyikan jika mouse benar-benar meninggalkan elemen trigger
      const relatedTarget = e.relatedTarget;
      if (relatedTarget && trigger.contains(relatedTarget)) return;

      hoverPreview.classList.remove('opacity-100');
      hoverPreview.classList.add('hidden');
      hoverPreviewImg.src = '';
    });
  }

  // Jalankan inisialisasi
  initHoverPreview();

  // Modal Logic
  function openModal(fileUrl, type, title) {
    const modal = document.getElementById('certModal');
    const modalContent = document.getElementById('certModalContent');
    const modalTitle = document.getElementById('modalTitle');
    const modalBody = document.getElementById('modalBody');
    
    modalTitle.textContent = title;
    
    if (type === 'pdf') {
      modalBody.innerHTML = `<iframe src="${fileUrl}" class="w-full h-full min-h-[70vh] rounded-lg shadow-sm border-0 bg-white"></iframe>`;
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