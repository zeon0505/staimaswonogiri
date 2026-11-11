@extends('layouts.app')

@section('content')
<div class="space-y-8">

  {{-- Header & Search Bar --}}
  <div class="bg-white rounded-2xl border border-gray-200/80 p-6 sm:p-8 shadow-sm">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
      
      {{-- Info Teks --}}
      <div class="max-w-2xl">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-teal-50 text-teal-700 border border-teal-200/60 mb-3">
          <i class="fas fa-folder-open"></i>
          <span>Layanan Administrasi BAAK</span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">Formulir Akademik Resmi</h2>
        <p class="text-sm text-gray-500 mt-2 leading-relaxed">
          Unduh formulir, blangko permohonan, dan template dokumen resmi mahasiswa STAIMAS Wonogiri dalam format Microsoft Word (.docx). Siap diisi dan dicetak.
        </p>
      </div>

      {{-- Kontrol Filter & Switcher --}}
      <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full lg:w-auto shrink-0">
        {{-- Input Pencarian --}}
        <div class="relative flex-1 sm:w-64">
          <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
          <input 
            type="text" 
            id="searchInput" 
            placeholder="Cari nama formulir..." 
            class="w-full pl-10 pr-4 py-2.5 text-sm bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:border-teal-600 focus:ring-2 focus:ring-teal-100 outline-none transition-all placeholder:text-gray-400"
          >
          <button id="clearSearch" class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 text-xs">
            <i class="fas fa-times-circle"></i>
          </button>
        </div>

        {{-- Switcher Tampilan Grid / Tabel --}}
        <div class="inline-flex p-1 bg-gray-100 rounded-xl border border-gray-200 shrink-0 self-end sm:self-auto">
          <button id="btnViewGrid" class="px-3.5 py-2 text-xs font-semibold rounded-lg bg-white text-teal-800 shadow-sm transition-all flex items-center gap-1.5" title="Tampilan Kartu">
            <i class="fas fa-th-large"></i>
            <span class="hidden sm:inline">Kartu</span>
          </button>
          <button id="btnViewTable" class="px-3.5 py-2 text-xs font-semibold rounded-lg text-gray-500 hover:text-gray-800 transition-all flex items-center gap-1.5" title="Tampilan Tabel">
            <i class="fas fa-table-list"></i>
            <span class="hidden sm:inline">Tabel</span>
          </button>
        </div>
      </div>

    </div>

    {{-- Filter Kategori Pills --}}
    <div class="flex items-center gap-2 mt-6 pt-5 border-t border-gray-100 overflow-x-auto pb-1 text-xs">
      <span class="text-gray-400 font-medium whitespace-nowrap mr-1">Kategori:</span>
      <button class="category-btn active px-3 py-1.5 rounded-lg font-semibold bg-teal-700 text-white transition-all whitespace-nowrap" data-category="all">
        Semua ({{ count($formulirs) }})
      </button>
      @php
        $categories = collect($formulirs)->pluck('kategori')->unique();
      @endphp
      @foreach($categories as $cat)
      <button class="category-btn px-3 py-1.5 rounded-lg font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-all whitespace-nowrap" data-category="{{ $cat }}">
        {{ $cat }}
      </button>
      @endforeach
    </div>
  </div>

  {{-- Kontainer Formulir --}}
  <div id="formsContainer">

    {{-- 1. TAMPILAN GRID KARTU (DEFAULT) --}}
    <div id="gridView" class="grid grid-cols-1 md:grid-cols-2 gap-5">
      @foreach($formulirs as $f)
        @php
          $fileUrl = asset($f['file']);
          $viewerUrl = 'https://docs.google.com/viewer?url=' . urlencode($fileUrl) . '&embedded=true';
        @endphp
        <div class="form-card bg-white rounded-2xl border border-gray-200/90 shadow-sm hover:shadow-md hover:border-teal-500/50 transition-all duration-200 p-6 flex flex-col justify-between group"
             data-name="{{ strtolower($f['nama']) }}"
             data-desc="{{ strtolower($f['desc']) }}"
             data-category="{{ $f['kategori'] }}">
          
          <div>
            {{-- Baris Atas: Icon, Kategori, & Format --}}
            <div class="flex items-start justify-between gap-4">
              <div class="w-12 h-12 rounded-xl bg-teal-50 border border-teal-100 text-teal-700 flex items-center justify-center text-xl group-hover:bg-teal-700 group-hover:text-white group-hover:border-teal-700 transition-colors shrink-0">
                <i class="fas {{ $f['icon'] }}"></i>
              </div>
              <div class="flex items-center gap-2">
                <span class="text-[11px] font-semibold px-2.5 py-1 rounded-md bg-gray-100 text-gray-600 border border-gray-200/60">
                  {{ $f['kategori'] }}
                </span>
                <span class="text-[11px] font-bold px-2 py-1 rounded-md bg-blue-50 text-blue-700 border border-blue-200/60 font-mono">
                  <i class="fas fa-file-word mr-1"></i>DOCX
                </span>
              </div>
            </div>

            {{-- Judul & Deskripsi --}}
            <h3 class="text-lg font-bold text-gray-900 mt-4 group-hover:text-teal-700 transition-colors">
              {{ $f['nama'] }}
            </h3>
            <p class="text-sm text-gray-500 mt-2 leading-relaxed">
              {{ $f['desc'] }}
            </p>
          </div>

          {{-- Bagian Bawah: Metadata & Tombol --}}
          <div class="mt-6 pt-4 border-t border-gray-100 space-y-3">
            <div class="flex items-center justify-between text-xs text-gray-400">
              <span class="flex items-center gap-1.5 font-mono text-gray-600 truncate max-w-[220px]" title="{{ basename($f['file']) }}">
                <i class="fas fa-paperclip text-gray-400"></i>
                <span class="truncate">{{ basename($f['file']) }}</span>
              </span>
              <span class="font-medium text-gray-500 shrink-0">
                <i class="fas fa-hdd mr-1 text-gray-400"></i> {{ $f['ukuran'] }}
              </span>
            </div>

            <div class="flex items-center gap-2.5">
              <a href="{{ $fileUrl }}" download class="flex-1 inline-flex items-center justify-center gap-2 bg-teal-700 hover:bg-teal-800 active:bg-teal-900 text-white font-semibold text-sm py-2.5 px-4 rounded-xl shadow-sm hover:shadow transition-all">
                <i class="fas fa-download text-xs"></i>
                <span>Unduh File</span>
              </a>
              <a href="{{ $viewerUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-1.5 bg-gray-50 hover:bg-gray-100 text-gray-700 border border-gray-200 font-medium text-sm py-2.5 px-4 rounded-xl transition-all" title="Pratinjau formulir">
                <i class="fas fa-eye text-xs text-gray-500"></i>
                <span>Pratinjau</span>
              </a>
            </div>
          </div>

        </div>
      @endforeach
    </div>

    {{-- 2. TAMPILAN TABEL (ALTERNATIF) --}}
    <div id="tableView" class="hidden bg-white rounded-2xl border border-gray-200/90 shadow-sm overflow-hidden">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-5 py-3.5 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-12 text-center">No</th>
              <th scope="col" class="px-6 py-3.5 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Nama Formulir & Keterangan</th>
              <th scope="col" class="px-6 py-3.5 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Kategori</th>
              <th scope="col" class="px-6 py-3.5 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Format & Ukuran</th>
              <th scope="col" class="px-6 py-3.5 text-center text-xs font-bold text-gray-500 uppercase tracking-wider w-56">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 bg-white">
            @foreach($formulirs as $idx => $f)
              @php
                $fileUrl = asset($f['file']);
                $viewerUrl = 'https://docs.google.com/viewer?url=' . urlencode($fileUrl) . '&embedded=true';
              @endphp
              <tr class="form-row hover:bg-teal-50/30 transition-colors"
                  data-name="{{ strtolower($f['nama']) }}"
                  data-desc="{{ strtolower($f['desc']) }}"
                  data-category="{{ $f['kategori'] }}">
                <td class="px-5 py-4 text-center font-semibold text-gray-400 text-xs">
                  {{ $idx + 1 }}
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-start gap-3">
                    <div class="w-9 h-9 rounded-lg bg-teal-50 text-teal-700 flex items-center justify-center shrink-0 mt-0.5">
                      <i class="fas {{ $f['icon'] }} text-sm"></i>
                    </div>
                    <div>
                      <p class="font-bold text-gray-900 hover:text-teal-700 transition-colors">{{ $f['nama'] }}</p>
                      <p class="text-xs text-gray-500 mt-1 leading-relaxed max-w-xl">{{ $f['desc'] }}</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="inline-flex text-xs font-semibold px-2.5 py-1 rounded-md bg-gray-100 text-gray-700">
                    {{ $f['kategori'] }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-xs">
                    <span class="font-bold font-mono text-blue-700 bg-blue-50 px-2 py-0.5 rounded border border-blue-200/50">DOCX</span>
                    <span class="text-gray-400 ml-1.5 font-medium">{{ $f['ukuran'] }}</span>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-center">
                  <div class="inline-flex items-center gap-2">
                    <a href="{{ $fileUrl }}" download class="inline-flex items-center gap-1.5 bg-teal-700 hover:bg-teal-800 text-white font-semibold text-xs py-2 px-3.5 rounded-lg shadow-sm transition-all">
                      <i class="fas fa-download"></i>
                      <span>Unduh</span>
                    </a>
                    <a href="{{ $viewerUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 bg-gray-50 hover:bg-gray-100 text-gray-700 border border-gray-200 font-medium text-xs py-2 px-3 rounded-lg transition-all" title="Pratinjau">
                      <i class="fas fa-eye text-gray-500"></i>
                      <span>Lihat</span>
                    </a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    {{-- Pesan Hasil Pencarian Kosong --}}
    <div id="emptyState" class="hidden bg-white rounded-2xl border border-gray-200 p-12 text-center">
      <div class="w-16 h-16 rounded-2xl bg-gray-100 text-gray-400 flex items-center justify-center mx-auto text-2xl mb-4">
        <i class="fas fa-file-circle-question"></i>
      </div>
      <h4 class="text-base font-bold text-gray-800">Formulir Tidak Ditemukan</h4>
      <p class="text-sm text-gray-500 mt-1 max-w-md mx-auto">Tidak ada formulir yang cocok dengan kata kunci pencarian Anda. Silakan coba kata kunci lain atau pilih kategori "Semua".</p>
      <button id="resetSearchBtn" class="mt-4 px-4 py-2 bg-teal-50 text-teal-700 hover:bg-teal-100 rounded-xl text-xs font-bold transition-colors">
        Tampilkan Semua Formulir
      </button>
    </div>

  </div>

  {{-- Alur Pengisian & Informasi Penting --}}
  <div class="bg-white rounded-2xl border border-gray-200/80 p-6 sm:p-8 shadow-sm">
    <div class="flex items-center gap-3 mb-6">
      <div class="w-10 h-10 rounded-xl bg-teal-50 text-teal-700 flex items-center justify-center text-lg">
        <i class="fas fa-list-check"></i>
      </div>
      <div>
        <h3 class="text-lg font-bold text-gray-900">Alur Pengisian & Penyerahan Formulir</h3>
        <p class="text-xs text-gray-500 mt-0.5">Ikuti langkah-langkah berikut untuk memproses pengajuan akademik Anda</p>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      
      {{-- Langkah 1 --}}
      <div class="bg-gray-50/70 border border-gray-100 rounded-xl p-5 relative">
        <span class="w-7 h-7 rounded-lg bg-teal-700 text-white text-xs font-bold flex items-center justify-center mb-3">1</span>
        <h4 class="text-sm font-bold text-gray-800">Unduh Dokumen</h4>
        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Pilih formulir sesuai keperluan akademik dan unduh file format .docx ke perangkat Anda.</p>
      </div>

      {{-- Langkah 2 --}}
      <div class="bg-gray-50/70 border border-gray-100 rounded-xl p-5 relative">
        <span class="w-7 h-7 rounded-lg bg-teal-700 text-white text-xs font-bold flex items-center justify-center mb-3">2</span>
        <h4 class="text-sm font-bold text-gray-800">Isi Data Lengkap</h4>
        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Buka dengan aplikasi Microsoft Word / pengolah kata, lalu lengkapi isian data dengan benar dan jujur.</p>
      </div>

      {{-- Langkah 3 --}}
      <div class="bg-gray-50/70 border border-gray-100 rounded-xl p-5 relative">
        <span class="w-7 h-7 rounded-lg bg-teal-700 text-white text-xs font-bold flex items-center justify-center mb-3">3</span>
        <h4 class="text-sm font-bold text-gray-800">Cetak & Tanda Tangan</h4>
        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Cetak di kertas standar A4, bubuhkan tanda tangan pemohon serta lampirkan berkas pendukung jika disyaratkan.</p>
      </div>

      {{-- Langkah 4 --}}
      <div class="bg-gray-50/70 border border-gray-100 rounded-xl p-5 relative">
        <span class="w-7 h-7 rounded-lg bg-teal-700 text-white text-xs font-bold flex items-center justify-center mb-3">4</span>
        <h4 class="text-sm font-bold text-gray-800">Serahkan ke BAAK</h4>
        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Serahkan berkas fisik ke loket Bagian Akademik (BAAK) atau ke dosen pengampu/pembimbing untuk diverifikasi.</p>
      </div>

    </div>

    {{-- Contact Help Bar --}}
    <div class="mt-6 pt-5 border-t border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-teal-50/50 rounded-xl p-4 border border-teal-100">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-lg bg-teal-100 text-teal-800 flex items-center justify-center text-sm shrink-0">
          <i class="fab fa-whatsapp"></i>
        </div>
        <div class="text-xs">
          <p class="font-bold text-teal-950">Butuh bantuan atau formulir belum tercantum?</p>
          <p class="text-teal-700">Hubungi petugas Administrasi Akademik STAIMAS Wonogiri di jam operasional.</p>
        </div>
      </div>
      <a href="https://wa.me/6282223204552?text=Halo%20Admin%20STAIMAS,%20saya%20ingin%20bertanya%20seputar%20formulir%20akademik" target="_blank" class="inline-flex items-center justify-center gap-2 bg-teal-700 hover:bg-teal-800 text-white text-xs font-bold py-2.5 px-4 rounded-lg shadow-sm transition-all whitespace-nowrap">
        <i class="fab fa-whatsapp"></i>
        <span>Chat WhatsApp (082223204552)</span>
      </a>
    </div>
  </div>

</div>

{{-- Interactive Client-Side Script: Live Search, Category Filter, View Switcher --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('searchInput');
  const clearSearch = document.getElementById('clearSearch');
  const resetSearchBtn = document.getElementById('resetSearchBtn');
  const categoryBtns = document.querySelectorAll('.category-btn');
  const gridCards = document.querySelectorAll('.form-card');
  const tableRows = document.querySelectorAll('.form-row');
  const emptyState = document.getElementById('emptyState');
  const btnViewGrid = document.getElementById('btnViewGrid');
  const btnViewTable = document.getElementById('btnViewTable');
  const gridView = document.getElementById('gridView');
  const tableView = document.getElementById('tableView');

  let currentCategory = 'all';
  let currentSearch = '';

  function filterItems() {
    let visibleCount = 0;

    // Filter Grid Cards
    gridCards.forEach(card => {
      const name = card.getAttribute('data-name');
      const desc = card.getAttribute('data-desc');
      const cat  = card.getAttribute('data-category');

      const matchesCat = (currentCategory === 'all' || cat === currentCategory);
      const matchesSearch = !currentSearch || name.includes(currentSearch) || desc.includes(currentSearch);

      if (matchesCat && matchesSearch) {
        card.classList.remove('hidden');
        visibleCount++;
      } else {
        card.classList.add('hidden');
      }
    });

    // Filter Table Rows
    tableRows.forEach(row => {
      const name = row.getAttribute('data-name');
      const desc = row.getAttribute('data-desc');
      const cat  = row.getAttribute('data-category');

      const matchesCat = (currentCategory === 'all' || cat === currentCategory);
      const matchesSearch = !currentSearch || name.includes(currentSearch) || desc.includes(currentSearch);

      if (matchesCat && matchesSearch) {
        row.classList.remove('hidden');
      } else {
        row.classList.add('hidden');
      }
    });

    // Toggle Empty State
    if (visibleCount === 0) {
      emptyState.classList.remove('hidden');
      if (gridView) gridView.classList.add('hidden');
      if (tableView) tableView.classList.add('hidden');
    } else {
      emptyState.classList.add('hidden');
      if (btnViewGrid.classList.contains('bg-white')) {
        gridView.classList.remove('hidden');
        tableView.classList.add('hidden');
      } else {
        gridView.classList.add('hidden');
        tableView.classList.remove('hidden');
      }
    }
  }

  // Live Search
  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      currentSearch = e.target.value.toLowerCase().trim();
      if (clearSearch) {
        clearSearch.classList.toggle('hidden', currentSearch.length === 0);
      }
      filterItems();
    });
  }

  if (clearSearch) {
    clearSearch.addEventListener('click', () => {
      searchInput.value = '';
      currentSearch = '';
      clearSearch.classList.add('hidden');
      filterItems();
      searchInput.focus();
    });
  }

  if (resetSearchBtn) {
    resetSearchBtn.addEventListener('click', () => {
      searchInput.value = '';
      currentSearch = '';
      if (clearSearch) clearSearch.classList.add('hidden');
      currentCategory = 'all';
      categoryBtns.forEach(btn => {
        if (btn.getAttribute('data-category') === 'all') {
          btn.className = 'category-btn active px-3 py-1.5 rounded-lg font-semibold bg-teal-700 text-white transition-all whitespace-nowrap';
        } else {
          btn.className = 'category-btn px-3 py-1.5 rounded-lg font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-all whitespace-nowrap';
        }
      });
      filterItems();
    });
  }

  // Category Filter Pills
  categoryBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      currentCategory = btn.getAttribute('data-category');

      categoryBtns.forEach(b => {
        b.className = 'category-btn px-3 py-1.5 rounded-lg font-medium bg-gray-100 text-gray-600 hover:bg-gray-200 transition-all whitespace-nowrap';
      });
      btn.className = 'category-btn active px-3 py-1.5 rounded-lg font-semibold bg-teal-700 text-white transition-all whitespace-nowrap';

      filterItems();
    });
  });

  // Switcher Grid vs Tabel
  if (btnViewGrid && btnViewTable) {
    btnViewGrid.addEventListener('click', () => {
      btnViewGrid.className = 'px-3.5 py-2 text-xs font-semibold rounded-lg bg-white text-teal-800 shadow-sm transition-all flex items-center gap-1.5';
      btnViewTable.className = 'px-3.5 py-2 text-xs font-semibold rounded-lg text-gray-500 hover:text-gray-800 transition-all flex items-center gap-1.5';
      if (!emptyState.classList.contains('hidden')) return;
      gridView.classList.remove('hidden');
      tableView.classList.add('hidden');
    });

    btnViewTable.addEventListener('click', () => {
      btnViewTable.className = 'px-3.5 py-2 text-xs font-semibold rounded-lg bg-white text-teal-800 shadow-sm transition-all flex items-center gap-1.5';
      btnViewGrid.className = 'px-3.5 py-2 text-xs font-semibold rounded-lg text-gray-500 hover:text-gray-800 transition-all flex items-center gap-1.5';
      if (!emptyState.classList.contains('hidden')) return;
      tableView.classList.remove('hidden');
      gridView.classList.add('hidden');
    });
  }
});
</script>
@endsection
