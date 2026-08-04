  @extends('layouts.app')

@section('content')
<div class="space-y-12">
  <!-- Hero / Introduction Box -->
  <div class="bg-gradient-to-br from-teal-800 to-teal-900 rounded-3xl p-8 sm:p-12 text-white shadow-xl relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.15),transparent_60%)]"></div>
    <div class="relative z-10 max-w-3xl space-y-4">
      <span class="inline-block bg-yellow-500/20 text-yellow-300 border border-yellow-500/30 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">S1 - Terakreditasi B</span>
      <h2 class="text-3xl sm:text-4xl font-black leading-tight">PAI STAIMAS Wonogiri: Tempatmu Tumbuh Menjadi Guru yang Menginspirasi</h2>
      <p class="text-teal-100 text-sm sm:text-base leading-relaxed">
        Ingin jadi pendidik yang tak hanya cerdas, tapi juga mampu menanamkan nilai-nilai Islam dalam setiap langkah? Prodi Pendidikan Agama Islam (PAI) STAIMAS Wonogiri hadir untuk mencetak generasi guru yang berilmu, berakhlak, dan berdedikasi. Yuk, gabung dan wujudkan cita-citamu bersama kami!
      </p>
      <div class="pt-4 flex flex-wrap gap-4">
        <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-gray-950 font-bold px-6 py-3 rounded-xl text-sm transition-all shadow-md shadow-yellow-500/20 flex items-center gap-2">
          <i class="fas fa-user-plus"></i> Daftar PMB PAI 2026
        </a>
        <a href="#kurikulum" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 font-bold px-6 py-3 rounded-xl text-sm transition-all flex items-center gap-2">
          <i class="fas fa-file-download"></i> Kurikulum PAI
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
          <h4 class="font-bold text-gray-800 text-lg mb-2">Visi Keilmuan Program Studi PAI</h4>
          <p class="text-gray-700 text-sm leading-relaxed italic">
            "Mengembangkan program studi yang unggul dalam melahirkan sarjana Pendidikan Agama Islam yang profesional dan berjiwa edupreneurship berbasis pemberdayaan masyarakat, nilai-nilai keindonesiaan dan religius kekaryaan."
          </p>
        </div>
      </div>

      <!-- MISI -->
      <div id="content-misi" class="tab-content hidden space-y-4 animate-fadeIn">
        <h4 class="font-bold text-gray-800 text-lg">Misi Keilmuan Program Studi PAI</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          @foreach([
            'Menyelenggarakan pendidikan dan pembelajaran inovatif untuk menghasilkan lulusan PAI yang kompeten di bidang pengajaran dan edupreneurship.',
            'Menyelenggarakan penelitian dan pengabdian masyarakat di bidang pengajaran dan edupreneurship.',
            'Memperluas kerjasama nasional dan internasional di bidang pengajaran dan edupreneur untuk meningkatkan kompetensi lulusan prodi PAI.',
            'Mengembangkan soft skills dan hard skills lulusan PAI terutama di bidang pengajaran dan edupreneurship.'
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
        <h4 class="font-bold text-gray-800 text-lg">Tujuan Program Studi PAI</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          @foreach([
            'Menghasilkan lulusan pada prodi PAI yang kompeten di bidang Ilmu Pendidikan Agama Islam dan Edupreneurship.',
            'Menghasilkan proses perkuliahan, penelitian dan pengabdian kepada masyarakat pada prodi PAI untuk mengembangkan lulusan yang kompeten di bidang pengajaran dan edupreneurship.',
            'Menghasilkan lulusan prodi PAI yang memiliki karakter Islami, kreatif dan mandiri dengan berlandaskan etika keislaman dan keindonesiaan pada bidang pengajaran dan edupreneurship.',
            'Menjalin kerjasama dengan pihak lain di bidang pengajaran dan edupreneurship dalam lingkup regional, nasional dan internasional.'
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
        <h4 class="font-bold text-gray-800 text-lg">Strategi Program Studi PAI</h4>
        <div class="space-y-3">
          @foreach([
            'Meningkatkan standar mutu pendidikan, pembelajaran, penelitian dan pengabdian kepada masyarakat dalam bidang ilmu Pendidikan Agama Islam dan Edupreneurship yang berintegritas dan modern untuk mencapai kualifikasi unggul dan kompetitif.',
            'Meningkatkan capaian prestasi dan lulusan mahasiswa prodi PAI pada tingkat nasional dan internasional di bidang Pendidikan Agama Islam dan Edupreneurship.',
            'Meningkatkan layanan kelembagaan prodi PAI dan kerjasama dalam/luar negeri.',
            'Meningkatkan kualifikasi dan kompetensi dosen dalam menguasai materi penelitian dan pengabdian di bidang Pendidikan Agama Islam dan Edupreneurship.',
            'Meningkatkan kualitas sarana prasarana pendidikan dan pembelajaran untuk mendukung proses pembelajaran pada prodi Pendidikan Agama Islam.'
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

  <!-- Dosen Pengajar PAI -->
  <div class="space-y-6">
    <div class="text-center max-w-xl mx-auto space-y-2">
      <h3 class="text-2xl font-bold text-gray-800">Dosen Pengajar PAI</h3>
      <p class="text-sm text-gray-500">Profil para dosen profesional yang siap membimbing dan menginspirasi langkah akademismu.</p>
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

  {{-- Akreditasi Section --}}
  @php $paiPdfUrl = asset('assest/Sertifikat Akreditasi PAI.pdf'); @endphp
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="flex flex-col sm:flex-row">

      {{-- Certificate Thumbnail --}}
      <div class="relative sm:w-52 shrink-0 cursor-pointer group bg-gray-50 border-b sm:border-b-0 sm:border-r border-gray-100"
           data-url="{{ $paiPdfUrl }}"
           onclick="openSertifModal(this.dataset.url)"
           style="min-height:200px;height:200px;">
        <iframe src="{{ $paiPdfUrl }}#toolbar=0&navpanes=0&scrollbar=0&view=FitH"
          class="w-full border-0 pointer-events-none"
          style="height:200px;display:block;" scrolling="no" tabindex="-1"></iframe>
        <div class="absolute inset-0 bg-transparent group-hover:bg-black/25 transition-all duration-200 flex items-center justify-center">
          <span class="text-white font-semibold text-xs px-3 py-1.5 bg-black/50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-1.5">
            <i class="fas fa-expand-alt text-[10px]"></i> Perbesar
          </span>
        </div>
      </div>

      {{-- Info --}}
      <div class="flex-1 p-6 flex flex-col justify-center gap-5">
        <div>
          <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-widest text-teal-600 mb-2">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
            Akreditasi BAN-PT
          </span>
          <h3 class="text-xl font-bold text-gray-900">Terakreditasi <span class="text-teal-600">"Baik"</span></h3>
          <p class="text-sm text-gray-400 mt-0.5">Pendidikan Agama Islam (PAI) &nbsp;·&nbsp; Sarjana (S1)</p>
        </div>

        <div class="flex items-center gap-6 text-sm">
          <div>
            <p class="text-[10px] font-semibold uppercase tracking-wide text-gray-400">Lembaga</p>
            <p class="font-semibold text-gray-700 mt-0.5">BAN-PT</p>
          </div>
          <div class="h-8 w-px bg-gray-100"></div>
          <div>
            <p class="text-[10px] font-semibold uppercase tracking-wide text-gray-400">Peringkat</p>
            <p class="font-semibold text-gray-700 mt-0.5">Baik / B</p>
          </div>
          <div class="h-8 w-px bg-gray-100"></div>
          <div>
            <p class="text-[10px] font-semibold uppercase tracking-wide text-gray-400">Berlaku s/d</p>
            <p class="font-semibold text-gray-700 mt-0.5">2028</p>
          </div>
        </div>

        <div class="flex items-center gap-2">
          <button data-url="{{ $paiPdfUrl }}"
            onclick="openSertifModal(this.dataset.url)"
            class="inline-flex items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white text-xs font-semibold px-4 py-2 rounded-lg transition-colors">
            <i class="fas fa-eye"></i> Lihat Sertifikat
          </button>
          <a href="{{ $paiPdfUrl }}" target="_blank"
            class="inline-flex items-center gap-2 border border-gray-200 hover:border-gray-300 hover:bg-gray-50 text-gray-600 text-xs font-semibold px-4 py-2 rounded-lg transition-colors">
            <i class="fas fa-download"></i> Unduh PDF
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Sertifikat --}}
  <div id="sertifModal" class="fixed inset-0 z-[200] hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-200">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-4xl flex flex-col transform scale-95 transition-transform duration-200" id="sertifModalContent" style="height:88vh;">
      <div class="px-5 py-3 border-b border-gray-100 flex justify-between items-center shrink-0">
        <span class="font-semibold text-gray-700 text-sm">Sertifikat Akreditasi PAI</span>
        <button onclick="closeSertifModal()" class="w-7 h-7 flex items-center justify-center rounded-lg bg-gray-100 text-gray-500 hover:bg-red-50 hover:text-red-500 transition-colors text-xs">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="flex-1 min-h-0 p-2 bg-gray-50">
        <iframe id="sertifFrame" src="" class="w-full h-full rounded-lg border-0" style="min-height:calc(88vh - 56px);"></iframe>
      </div>
    </div>
  </div>
  <script>
    function openSertifModal(url) {
      const modal = document.getElementById('sertifModal');
      const content = document.getElementById('sertifModalContent');
      document.getElementById('sertifFrame').src = url + '#toolbar=1&navpanes=0&view=FitH';
      modal.classList.remove('hidden'); void modal.offsetWidth;
      modal.classList.remove('opacity-0'); content.classList.remove('scale-95');
      document.body.style.overflow = 'hidden';
    }
    function closeSertifModal() {
      const modal = document.getElementById('sertifModal');
      const content = document.getElementById('sertifModalContent');
      modal.classList.add('opacity-0'); content.classList.add('scale-95');
      setTimeout(() => { modal.classList.add('hidden'); document.getElementById('sertifFrame').src = ''; document.body.style.overflow = ''; }, 200);
    }
    document.getElementById('sertifModal').addEventListener('click', function(e) { if (e.target === this) closeSertifModal(); });
  </script>

  {{-- Kurikulum / Download Section --}}
  <div id="kurikulum" class="bg-gray-100/70 border border-gray-200/50 rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
    <div class="flex items-center gap-4">
      <div class="w-14 h-14 bg-teal-600 text-white rounded-2xl flex items-center justify-center text-xl shadow-lg shadow-teal-600/10">
        <i class="fas fa-file-pdf"></i>
      </div>
      <div>
        <h4 class="font-bold text-gray-800 text-lg">Struktur Kurikulum PAI</h4>
        <p class="text-sm text-gray-500">Download struktur kurikulum mata kuliah program studi Pendidikan Agama Islam.</p>
      </div>
    </div>
    <a href="https://drive.google.com/file/d/1Xh-8eYSYaGyTPKhzxoENRqqnvY7ydzk5/view?usp=sharing" target="_blank" class="w-full md:w-auto bg-teal-700 hover:bg-teal-800 text-white font-bold px-8 py-3.5 rounded-xl text-sm shadow transition-colors flex items-center justify-center gap-2">
      <i class="fas fa-cloud-download-alt"></i> Download PDF
    </a>
  </div>

  <div class="text-center pt-8">
    <p class="text-gray-500 mb-3">Baca lebih lanjut tentang prodi PAI.</p>
    <a href="https://prodipai.staimaswonogiri.ac.id/" target="_blank" class="inline-block bg-teal-700 hover:bg-teal-800 text-white font-bold px-6 py-3 rounded-xl text-sm transition-all shadow-md">
        Selengkapnya
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