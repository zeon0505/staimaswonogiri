  @extends('layouts.app')

@section('content')
<div class="space-y-12">
  <!-- Hero / Introduction Box -->
  <div class="bg-gradient-to-br from-teal-800 to-teal-900 rounded-3xl p-8 sm:p-12 text-white shadow-xl relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.15),transparent_60%)]"></div>
    <div class="relative z-10 max-w-3xl space-y-4">
      <span class="inline-block bg-yellow-500/20 text-yellow-300 border border-yellow-500/30 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">S1 - Terakreditasi B</span>
      <h2 class="text-3xl sm:text-4xl font-black leading-tight">Hukum Tata Negara STAIMAS Wonogiri: Menegakkan Keadilan dan Konstitusi</h2>
      <p class="text-teal-100 text-sm sm:text-base leading-relaxed">
        Ingin menguasai hukum konstitusi, tata kelola negara, dan hukum Islam secara integratif? Prodi Hukum Tata Negara (HTN) STAIMAS Wonogiri mencetak sarjana hukum yang berintegritas tinggi, berwawasan luas, dan siap berkiprah di lembaga negara serta praktisi hukum.
      </p>
      <div class="pt-4 flex flex-wrap gap-4">
        <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-gray-950 font-bold px-6 py-3 rounded-xl text-sm transition-all shadow-md shadow-yellow-500/20 flex items-center gap-2">
          <i class="fas fa-user-plus"></i> Daftar PMB Hukum 2025
        </a>
        <a href="#kurikulum" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 font-bold px-6 py-3 rounded-xl text-sm transition-all flex items-center gap-2">
          <i class="fas fa-file-download"></i> Kurikulum Hukum
        </a>
      </div>
    </div>
  </div>

  <!-- Visi, Misi, Tujuan, Strategi Tabs -->
  <div class="bg-white rounded-3xl border border-gray-100 p-6 sm:p-8 shadow-sm space-y-6">
    <div class="border-b border-gray-100">
      <div class="flex overflow-x-auto gap-4 sm:gap-8 pb-px no-scrollbar">
        <button onclick="switchTab('visi')" id="tab-visi" class="tab-btn pb-4 text-sm font-bold text-teal-700 border-b-2 border-teal-700 transition-all whitespace-nowrap focus:outline-none">
          Visi Keilmuan
        </button>
        <button onclick="switchTab('misi')" id="tab-misi" class="tab-btn pb-4 text-sm font-bold text-gray-400 hover:text-teal-700 border-b-2 border-transparent transition-all whitespace-nowrap focus:outline-none">
          Misi Keilmuan
        </button>
        <button onclick="switchTab('tujuan')" id="tab-tujuan" class="tab-btn pb-4 text-sm font-bold text-gray-400 hover:text-teal-700 border-b-2 border-transparent transition-all whitespace-nowrap focus:outline-none">
          Tujuan
        </button>
        <button onclick="switchTab('strategi')" id="tab-strategi" class="tab-btn pb-4 text-sm font-bold text-gray-400 hover:text-teal-700 border-b-2 border-transparent transition-all whitespace-nowrap focus:outline-none">
          Strategi
        </button>
      </div>
    </div>

    <!-- Tab Contents -->
    <div class="min-h-[200px]">
      <!-- VISI -->
      <div id="content-visi" class="tab-content block space-y-4 animate-fadeIn">
        <div class="bg-teal-50/50 border-l-4 border-teal-600 p-6 rounded-r-2xl">
          <h4 class="font-bold text-gray-800 text-lg mb-2">Visi Keilmuan Program Studi Hukum Tata Negara</h4>
          <p class="text-gray-700 text-sm leading-relaxed italic">
            "Mengembangkan program studi yang unggul dalam melahirkan sarjana Hukum Tata Negara yang profesional, adil, berintegritas tinggi serta berlandaskan nilai-nilai hukum Islam dan konstitusi."
          </p>
        </div>
      </div>

      <!-- MISI -->
      <div id="content-misi" class="tab-content hidden space-y-4 animate-fadeIn">
        <h4 class="font-bold text-gray-800 text-lg">Misi Keilmuan Program Studi Hukum Tata Negara</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          @foreach([
            'Menyelenggarakan pendidikan hukum tata negara yang integratif antara hukum positif dan syariat Islam.',
            'Melaksanakan penelitian kritis solutif di bidang konstitusi, otonomi daerah, dan kebijakan publik.',
            'Memberikan penyuluhan hukum dan bantuan hukum kepada masyarakat luas.',
            'Membangun jejaring kerja sama dengan lembaga legislatif, eksekutif, dan yudikatif.'
          ] as $i => $misi)
          <div class="p-5 bg-gray-50 rounded-2xl flex gap-3">
            <span class="w-8 h-8 rounded-xl bg-teal-100 text-teal-700 text-sm font-bold flex items-center justify-center flex-shrink-0">{{ $i + 1 }}</span>
            <p class="text-gray-600 text-sm leading-relaxed">{{ $misi }}</p>
          </div>
          @endforeach
        </div>
      </div>
 
      <!-- TUJUAN -->
      <div id="content-tujuan" class="tab-content hidden space-y-4 animate-fadeIn">
        <h4 class="font-bold text-gray-800 text-lg">Tujuan Program Studi Hukum Tata Negara</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          @foreach([
            'Menghasilkan sarjana hukum tata negara yang berintegritas, kritis, dan menguasai litigasi konstitusi.',
            'Menghasilkan karya riset inovatif sebagai bahan rekomendasi kebijakan tata kelola negara.',
            'Meningkatkan kesadaran hukum masyarakat melalui penyuluhan dan pendampingan.',
            'Menjalin kolaborasi dengan instansi hukum tingkat nasional untuk peningkatan kompetensi praktis mahasiswa.'
          ] as $i => $tujuan)
          <div class="p-5 bg-gray-50 rounded-2xl flex gap-3">
            <span class="w-8 h-8 rounded-xl bg-teal-100 text-teal-700 text-sm font-bold flex items-center justify-center flex-shrink-0">{{ $i + 1 }}</span>
            <p class="text-gray-600 text-sm leading-relaxed">{{ $tujuan }}</p>
          </div>
          @endforeach
        </div>
      </div>
 
      <!-- STRATEGI -->
      <div id="content-strategi" class="tab-content hidden space-y-4 animate-fadeIn">
        <h4 class="font-bold text-gray-800 text-lg">Strategi Program Studi Hukum Tata Negara</h4>
        <div class="space-y-3">
          @foreach([
            'Menyelenggarakan peradilan semu (Moot Court) secara intensif bagi mahasiswa.',
            'Memfasilitasi magang mahasiswa di Pengadilan Negeri, Pengadilan Agama, KPU, Bawaslu, atau DPRD.',
            'Mengadakan seminar hukum konstitusi nasional dengan menghadirkan pakar hukum tata negara.',
            'Mendorong keikutsertaan mahasiswa dalam kompetisi debat hukum dan karya tulis ilmiah hukum.'
          ] as $i => $strategi)
          <div class="p-4 bg-gray-50 rounded-xl flex items-center gap-4">
            <i class="fas fa-check-circle text-teal-600 flex-shrink-0 text-lg"></i>
            <p class="text-gray-700 text-sm leading-relaxed">{{ $strategi }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
 
  <!-- Dosen Pengajar Hukum Tata Negara -->
  <div class="space-y-6">
    <div class="text-center max-w-xl mx-auto space-y-2">
      <h3 class="text-2xl font-bold text-gray-800">Dosen Pengajar Hukum Tata Negara</h3>
      <p class="text-sm text-gray-500">Profil para dosen profesional yang siap membimbing langkah akademismu di bidang Hukum Tata Negara.</p>
    </div>
    
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
      @forelse($dosens as $dosen)
      <a href="{{ $dosen->slug ? route('pages.dosen.show', $dosen->slug) : '#' }}" class="block bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-lg transition-all group text-center p-4">
        <div class="aspect-[3/4] w-full rounded-xl overflow-hidden mb-3 bg-gray-50">
          @if($dosen->foto)
          <img src="{{ str_starts_with($dosen->foto, 'http') ? $dosen->foto : asset('storage/' . $dosen->foto) }}"
               alt="{{ $dosen->nama }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
               style="object-position: center 10%;">
          @else
          <div class="w-full h-full bg-teal-100 flex items-center justify-center"><i class="fas fa-user text-teal-400 text-4xl"></i></div>
          @endif
        </div>
        <h4 class="font-bold text-gray-800 text-sm leading-snug">{{ $dosen->nama }}</h4>
        <span class="inline-block text-[10px] font-semibold text-teal-700 bg-teal-50 px-2 py-0.5 rounded-full mt-1">{{ $dosen->jabatan }}</span>
      </a>
      @empty
      <div class="col-span-4 py-12 text-center text-gray-400">
        <i class="fas fa-user-tie text-4xl mb-2 block opacity-30"></i>
        <p class="text-sm">Belum ada dosen pengajar di prodi ini.</p>
      </div>
      @endforelse
    </div>
  </div>
 
  <!-- Kurikulum / Download Section -->
  <div id="kurikulum" class="bg-gray-100/70 border border-gray-200/50 rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
    <div class="flex items-center gap-4">
      <div class="w-14 h-14 bg-teal-600 text-white rounded-2xl flex items-center justify-center text-xl shadow-lg shadow-teal-600/10">
        <i class="fas fa-file-pdf"></i>
      </div>
      <div>
        <h4 class="font-bold text-gray-800 text-lg">Struktur Kurikulum Hukum Tata Negara</h4>
        <p class="text-sm text-gray-500">Download struktur kurikulum mata kuliah program studi Hukum Tata Negara (HTN).</p>
      </div>
    </div>
    <a href="#" class="w-full md:w-auto bg-teal-700 hover:bg-teal-800 text-white font-bold px-8 py-3.5 rounded-xl text-sm shadow transition-colors flex items-center justify-center gap-2">
      <i class="fas fa-cloud-download-alt"></i> Download PDF
    </a>
  </div>

</div>

<script>
  function switchTab(tabId) {
    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(content => {
      content.classList.add('hidden');
      content.classList.remove('block');
    });

    // Remove active styles from all buttons
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.classList.remove('text-teal-700', 'border-teal-700');
      btn.classList.add('text-gray-400', 'border-transparent');
    });

    // Show selected tab content
    const activeContent = document.getElementById('content-' + tabId);
    if (activeContent) {
      activeContent.classList.remove('hidden');
      activeContent.classList.add('block');
    }

    // Add active styles to clicked button
    const activeBtn = document.getElementById('tab-' + tabId);
    if (activeBtn) {
      activeBtn.classList.remove('text-gray-400', 'border-transparent');
      activeBtn.classList.add('text-teal-700', 'border-teal-700');
    }
  }
</script>

<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(4px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fadeIn {
    animation: fadeIn 0.3s ease-out forwards;
  }
</style>
@endsection