@extends('layouts.admin')
@section('title', $berita ? 'Edit Berita' : 'Tulis Berita')
@section('breadcrumb', 'Berita PAI / ' . ($berita ? 'Edit' : 'Tulis Baru'))

@section('content')
<form action="{{ $berita ? route('admin.beritas.update', $berita) : route('admin.beritas.store') }}"
      method="POST" enctype="multipart/form-data">
  @csrf
  @if($berita) @method('PUT') @endif

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- Kolom Kiri: Konten --}}
    <div class="lg:col-span-2 space-y-5">
      <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-5">
        <div class="space-y-1.5">
          <label class="text-sm font-semibold text-gray-700">Judul Berita <span class="text-red-500">*</span></label>
          <input type="text" name="judul" value="{{ old('judul', $berita?->judul) }}" required autofocus
            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500"
            placeholder="Tulis judul berita yang menarik...">
        </div>
 
         <div class="space-y-1.5">
           <label class="text-sm font-semibold text-gray-700">Link Berita <span class="text-gray-400">(opsional, gambar akan otomatis diambil dari link)</span></label>
           <div class="flex gap-2">
            <input type="url" name="link" id="link-url-input" value="{{ old('link', $berita?->link) }}"
              class="flex-1 px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500"
              placeholder="https://example.com/berita-staimas...">
            <button type="button" id="btn-fetch-link" class="bg-teal-600 hover:bg-teal-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition-colors flex items-center gap-1.5 whitespace-nowrap">
              <i class="fas fa-sync-alt" id="fetch-spinner"></i> Ambil Data Link
            </button>
          </div>
         </div>

        <div class="space-y-1.5">
          <label class="text-sm font-semibold text-gray-700">Isi Berita <span class="text-red-500">*</span></label>
          <textarea name="konten" rows="14" required
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500 leading-relaxed resize-y"
            placeholder="Tulis isi berita lengkap di sini...">{{ old('konten', $berita?->konten) }}</textarea>
        </div>
      </div>

      {{-- Gambar --}}
      <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-4">
        <h3 class="font-bold text-gray-800 text-sm">Gambar Berita</h3>

        @if($berita && $berita->gambar)
        <div class="space-y-1.5">
          <p class="text-xs text-gray-500 font-semibold">Gambar Saat Ini</p>
          <div class="aspect-video w-full max-w-md rounded-xl overflow-hidden bg-gray-100 border border-gray-200">
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Preview" class="w-full h-full object-cover">
          </div>
        </div>
        @endif

        <div class="space-y-1.5">
          <label class="text-sm font-semibold text-gray-700">{{ $berita ? 'Ganti Gambar' : 'Upload Gambar' }} <span class="text-gray-400">(opsional, maks 5MB)</span></label>
          <input type="file" name="gambar" accept="image/*" id="gambar-input"
            class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-teal-50 file:text-teal-700 file:font-semibold hover:file:bg-teal-100">
          <div id="preview-container" class="hidden mt-2">
            <img id="preview-img" src="" alt="Preview" class="aspect-video w-full max-w-md object-cover rounded-xl border border-gray-200">
          </div>
        </div>
      </div>
    </div>

    {{-- Kolom Kanan: Meta --}}
    <div class="space-y-5">
      <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-5">
        <h3 class="font-bold text-gray-800 text-sm">Pengaturan Berita</h3>

        <div class="space-y-1.5">
          <label class="text-sm font-semibold text-gray-700">Kategori</label>
          <select name="kategori_id" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
            <option value="">— Tanpa Kategori —</option>
            @foreach($kategoris as $kat)
            <option value="{{ $kat->id }}" {{ old('kategori_id', $berita?->kategori_id) == $kat->id ? 'selected' : '' }}>
              {{ $kat->nama }}
            </option>
            @endforeach
          </select>
        </div>

        <div class="space-y-1.5">
          <label class="text-sm font-semibold text-gray-700">Tanggal Terbit <span class="text-red-500">*</span></label>
          <input type="date" name="tanggal" value="{{ old('tanggal', $berita?->tanggal?->format('Y-m-d') ?? date('Y-m-d')) }}" required
            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
        </div>

        <div class="space-y-1.5">
          <label class="text-sm font-semibold text-gray-700">Status Publikasi</label>
          <select name="aktif" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
            <option value="1" {{ old('aktif', $berita?->aktif ?? 1) == 1 ? 'selected' : '' }}>✅ Aktif (Tampil di publik)</option>
            <option value="0" {{ old('aktif', $berita?->aktif) == 0 ? 'selected' : '' }}>📝 Draft (Tidak tampil)</option>
          </select>
        </div>
      </div>

      <div class="flex flex-col gap-3">
        <button type="submit" class="w-full bg-teal-700 hover:bg-teal-800 text-white font-bold px-6 py-3 rounded-xl text-sm shadow transition-colors flex items-center justify-center gap-2">
          <i class="fas fa-save"></i> {{ $berita ? 'Perbarui Berita' : 'Terbitkan Berita' }}
        </button>
        <a href="{{ route('admin.beritas.index') }}" class="w-full text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-6 py-2.5 rounded-xl text-sm transition-colors">
          Batal
        </a>
      </div>
    </div>
  </div>
</form>

{{-- Custom Modal Popup --}}
<div id="custom-modal" class="fixed inset-0 z-[999] flex items-center justify-center p-4 hidden" role="dialog" aria-modal="true">
  {{-- Backdrop --}}
  <div id="modal-backdrop" class="absolute inset-0 bg-black/50 backdrop-blur-sm transition-opacity duration-300 opacity-0"></div>
  {{-- Panel --}}
  <div id="modal-panel" class="relative bg-white rounded-2xl shadow-2xl max-w-sm w-full p-8 text-center transform scale-90 opacity-0 transition-all duration-300">
    {{-- Icon Ring --}}
    <div id="modal-icon-wrapper" class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
      <i id="modal-icon" class="text-3xl"></i>
    </div>
    <h3 id="modal-title" class="text-lg font-extrabold text-gray-900 mb-2"></h3>
    <p id="modal-message" class="text-sm text-gray-500 leading-relaxed mb-6"></p>
    <button id="modal-ok-btn"
      class="w-full py-3 rounded-xl font-bold text-sm text-white transition-all hover:-translate-y-0.5 shadow-md"
      onclick="closeModal()">
      OK
    </button>
  </div>
</div>

<script>
function showModal(type, title, message) {
  const modal   = document.getElementById('custom-modal');
  const backdrop = document.getElementById('modal-backdrop');
  const panel   = document.getElementById('modal-panel');
  const iconWrap = document.getElementById('modal-icon-wrapper');
  const icon    = document.getElementById('modal-icon');
  const btn     = document.getElementById('modal-ok-btn');

  document.getElementById('modal-title').textContent   = title;
  document.getElementById('modal-message').textContent = message;

  // Styling berdasarkan tipe
  if (type === 'success') {
    iconWrap.className = 'w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5 bg-teal-100';
    icon.className     = 'text-3xl fas fa-check-circle text-teal-600';
    btn.className      = 'w-full py-3 rounded-xl font-bold text-sm text-white transition-all hover:-translate-y-0.5 shadow-md bg-teal-600 hover:bg-teal-700';
  } else {
    iconWrap.className = 'w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5 bg-red-100';
    icon.className     = 'text-3xl fas fa-exclamation-triangle text-red-500';
    btn.className      = 'w-full py-3 rounded-xl font-bold text-sm text-white transition-all hover:-translate-y-0.5 shadow-md bg-red-500 hover:bg-red-600';
  }

  modal.classList.remove('hidden');
  requestAnimationFrame(() => {
    backdrop.classList.replace('opacity-0', 'opacity-100');
    panel.classList.replace('scale-90', 'scale-100');
    panel.classList.replace('opacity-0', 'opacity-100');
  });
}

function closeModal() {
  const modal   = document.getElementById('custom-modal');
  const backdrop = document.getElementById('modal-backdrop');
  const panel   = document.getElementById('modal-panel');

  backdrop.classList.replace('opacity-100', 'opacity-0');
  panel.classList.replace('scale-100', 'scale-90');
  panel.classList.replace('opacity-100', 'opacity-0');
  setTimeout(() => modal.classList.add('hidden'), 300);
}

// Tutup modal jika klik backdrop
document.getElementById('modal-backdrop').addEventListener('click', closeModal);

document.getElementById('gambar-input').addEventListener('change', function(e) {
  const file = e.target.files[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = evt => {
    document.getElementById('preview-img').src = evt.target.result;
    document.getElementById('preview-container').classList.remove('hidden');
  };
  reader.readAsDataURL(file);
});

document.getElementById('btn-fetch-link').addEventListener('click', function() {
  const urlInput = document.getElementById('link-url-input').value.trim();
  if (!urlInput) {
    showModal('error', 'URL Kosong!', 'Silakan tempel (paste) URL link berita terlebih dahulu sebelum mengambil data.');
    return;
  }

  const spinner = document.getElementById('fetch-spinner');
  const btn = document.getElementById('btn-fetch-link');

  spinner.classList.add('fa-spin');
  btn.disabled = true;
  btn.innerHTML = '<i class="fas fa-sync-alt fa-spin" id="fetch-spinner"></i> Mengambil data...';

  fetch('{{ route("admin.beritas.scrape") }}', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({ url: urlInput })
  })
  .then(response => {
    if (!response.ok) throw new Error('Gagal mengambil data. Pastikan URL valid dan dapat diakses.');
    return response.json();
  })
  .then(data => {
    if (data.success) {
      if (data.judul) document.querySelector('input[name="judul"]').value = data.judul;
      if (data.konten) document.querySelector('textarea[name="konten"]').value = data.konten;
      if (data.gambar_url) {
        document.getElementById('preview-img').src = data.gambar_url;
        document.getElementById('preview-container').classList.remove('hidden');
      }
      showModal('success', 'Berhasil!', 'Data berita (judul, isi, dan gambar) berhasil diambil otomatis dari link berita.');
    }
  })
  .catch(error => {
    showModal('error', 'Gagal Mengambil Data', error.message);
  })
  .finally(() => {
    document.getElementById('fetch-spinner')?.classList.remove('fa-spin');
    btn.disabled = false;
    btn.innerHTML = '<i class="fas fa-sync-alt" id="fetch-spinner"></i> Ambil Data Link';
  });
});
</script>
@endsection
