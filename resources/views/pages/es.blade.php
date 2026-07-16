  @extends('layouts.app')

@section('content')
<div class="space-y-12">
  <!-- Hero / Introduction Box -->
  <div class="bg-gradient-to-br from-teal-800 to-teal-900 rounded-3xl p-8 sm:p-12 text-white shadow-xl relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.15),transparent_60%)]"></div>
    <div class="relative z-10 max-w-3xl space-y-4">
      <span class="inline-block bg-yellow-500/20 text-yellow-300 border border-yellow-500/30 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">S1 - Terakreditasi B</span>
      <h2 class="text-3xl sm:text-4xl font-black leading-tight">Ekonomi Syariah STAIMAS Wonogiri: Membentuk Ahli Ekonomi Berbasis Nilai Syariah</h2>
      <p class="text-teal-100 text-sm sm:text-base leading-relaxed">
        Siap menjadi profesional di bidang perbankan syariah, lembaga keuangan mikro, atau wirausaha sosial berbasis nilai-nilai Islam? Prodi Ekonomi Syariah (ES) STAIMAS Wonogiri membekali Anda ilmu ekonomi modern dan prinsip hukum muamalah.
      </p>
      <div class="pt-4 flex flex-wrap gap-4">
        <a href="https://staimaswonogiri.ecampuz.com/eadmisi/" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-gray-950 font-bold px-6 py-3 rounded-xl text-sm transition-all shadow-md shadow-yellow-500/20 flex items-center gap-2">
          <i class="fas fa-user-plus"></i> Daftar PMB ES 2025
        </a>
        <a href="#kurikulum" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 font-bold px-6 py-3 rounded-xl text-sm transition-all flex items-center gap-2">
          <i class="fas fa-file-download"></i> Kurikulum ES
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
          <h4 class="font-bold text-gray-800 text-lg mb-2">Visi Keilmuan Program Studi Ekonomi Syariah</h4>
          <p class="text-gray-700 text-sm leading-relaxed italic">
            "Menjadi pusat kajian ilmu ekonomi syariah di bidang ekonomi pembangunan dan keuangan syariah serta entrepreneur bisnis yang berbasis prinsip pemberdayaan masyarakat, nilai-nilai keindonesiaan, dan religius kekaryaan."
          </p>
        </div>
      </div>

      <!-- MISI -->
      <div id="content-misi" class="tab-content hidden space-y-4 animate-fadeIn">
        <h4 class="font-bold text-gray-800 text-lg">Misi Keilmuan Program Studi Ekonomi Syariah</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          @foreach([
            'Menyelenggarakan pendidikan dan pengajaran ekonomi syariah yang memenuhi standarisasi pendidikan ekonomi syariah di Indonesia.',
            'Menyelenggarakan penelitian dan pengembangan bidang ekonomi syariah berlandaskan nilai-nilai Islam.',
            'Melaksanakan pengabdian bidang ekonomi syariah di masyarakat.',
            'Menyelenggarakan kerjasama dengan institusi lain dalam pengembangan keilmuan and praktik ekonomi syariah.'
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
        <h4 class="font-bold text-gray-800 text-lg">Tujuan Program Studi Ekonomi Syariah</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          @foreach([
            'Menghasilkan lulusan Ekonomi Syariah yang berintegritas tinggi serta kompeten di bidang analisis ekonomi pembangunan dan keuangan syariah.',
            'Menghasilkan kajian ilmiah dan hasil penelitian inovatif yang berkontribusi pada pengembangan praktik perbankan dan lembaga keuangan syariah.',
            'Mewujudkan program pemberdayaan ekonomi masyarakat berbasis prinsip-prinsip syariah secara berkelanjutan.',
            'Membangun jaringan kemitraan strategis dengan industri perbankan, koperasi syariah, serta lembaga bisnis untuk mempercepat serapan kerja lulusan.'
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
        <h4 class="font-bold text-gray-800 text-lg">Strategi Program Studi Ekonomi Syariah</h4>
        <div class="space-y-3">
          @foreach([
            'Meningkatkan mutu kurikulum secara periodik selaras dengan perkembangan industri keuangan sosial islam dan fintech syariah.',
            'Mengakselerasi publikasi ilmiah dosen dan mahasiswa pada jurnal terakreditasi nasional maupun internasional.',
            'Melaksanakan pembimbingan bisnis dan inkubasi wirausaha bagi mahasiswa guna mencetak lulusan berjiwa entrepreneur.',
            'Mengoptimalkan pemanfaatan laboratorium mini bank syariah dan instrumen digital pendukung pembelajaran praktis.'
          ] as $i => $strategi)
          <div class="p-4 bg-gray-50 rounded-xl flex items-start gap-4">
            <div class="w-8 h-8 rounded-full bg-teal-600 text-white text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5">{{ $i + 1 }}</div>
            <p class="text-gray-700 text-sm leading-relaxed">{{ $strategi }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
 
  <!-- Dosen Pengajar Ekonomi Syariah -->
  <div class="space-y-6">
    <div class="text-center max-w-xl mx-auto space-y-2">
      <h3 class="text-2xl font-bold text-gray-800">Dosen Pengajar Ekonomi Syariah</h3>
      <p class="text-sm text-gray-500">Profil para dosen profesional yang siap membimbing langkah akademismu di bidang Ekonomi Syariah.</p>
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
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="flex flex-col sm:flex-row">
      <div class="relative sm:w-52 shrink-0 cursor-pointer group bg-gray-50 border-b sm:border-b-0 sm:border-r border-gray-100"
           onclick="openSertifModal('{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}')"
           style="min-height:200px;height:200px;">
        <iframe src="{{ asset('assest/Sertifikat Akreditasi ES.pdf') }}#toolbar=0&navpanes=0&scrollbar=0&view=FitH"
          class="w-full border-0 pointer-events-none"
          style="height:200px;display:block;" scrolling="no" tabindex="-1"></iframe>
        <div class="absolute inset-0 bg-transparent group-hover:bg-black/25 transition-all duration-200 flex items-center justify-center">
          <span class="text-white font-semibold text-xs px-3 py-1.5 bg-black/50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-1.5">
            <i class="fas fa-expand-alt text-[10px]"></i> Perbesar
          </span>
        </div>
      </div>
      <div class="flex-1 p-6 flex flex-col justify-center gap-5">
        <div>
          <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-widest text-teal-600 mb-2">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
            Akreditasi BAN-PT
          </span>
          <h3 class="text-xl font-bold text-gray-900">Terakreditasi <span class="text-teal-600">"Baik"</span></h3>
          <p class="text-sm text-gray-400 mt-0.5">Ekonomi Syariah (ES) &nbsp;·&nbsp; Sarjana (S1)</p>
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
          <button onclick="openSertifModal('{{ asset('assets/Sertifikat Akreditasi ES.pdf') }}')"
            class="inline-flex items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white text-xs font-semibold px-4 py-2 rounded-lg transition-colors">
            <i class="fas fa-eye"></i> Lihat Sertifikat
          </button>
          <a href="{{ asset('assets/Sertifikat Akreditasi ES.pdf') }}" target="_blank"
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
        <span class="font-semibold text-gray-700 text-sm">Sertifikat Akreditasi Ekonomi Syariah</span>
        <button onclick="closeSertifModal()" class="w-7 h-7 flex items-center justify-center rounded-lg bg-gray-100 text-gray-500 hover:bg-red-50 hover:text-red-500 transition-colors text-xs"><i class="fas fa-times"></i></button>
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

  <!-- Kurikulum / Download Section -->
  <div id="kurikulum" class="bg-gray-100/70 border border-gray-200/50 rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
    <div class="flex items-center gap-4">
      <div class="w-14 h-14 bg-teal-600 text-white rounded-2xl flex items-center justify-center text-xl shadow-lg shadow-teal-600/10">
        <i class="fas fa-file-pdf"></i>
      </div>
      <div>
        <h4 class="font-bold text-gray-800 text-lg">Struktur Kurikulum Ekonomi Syariah</h4>
        <p class="text-sm text-gray-500">Download struktur kurikulum mata kuliah program studi Ekonomi Syariah.</p>
      </div>
    </div>
    <a href="https://drive.google.com/file/d/1Xh-8eYSYaGyTPKhzxoENRqqnvY7ydzk5/view?usp=sharing" target="_blank" class="w-full md:w-auto bg-teal-700 hover:bg-teal-800 text-white font-bold px-8 py-3.5 rounded-xl text-sm shadow transition-colors flex items-center justify-center gap-2">
      <i class="fas fa-cloud-download-alt"></i> Download PDF
    </a>
  </div>

  <!-- Contact & Map Section -->
  <div id="kontak" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start pt-6">
    <div class="lg:col-span-7 bg-white rounded-3xl border border-gray-100 p-8 shadow-sm">
      <h3 class="font-bold text-gray-900 text-lg mb-6">Ajukan Pertanyaan</h3>
      <form class="space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <input type="text" placeholder="Nama Lengkap" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-teal-brand" required />
          <input type="tel" placeholder="Nomor Telepon/WA" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-teal-brand" />
        </div>
        <input type="email" placeholder="Alamat Email" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-teal-brand" required />
        <textarea rows="4" placeholder="Tulis pesan Anda..." class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 text-sm focus:outline-none focus:border-teal-brand" required></textarea>
        <button type="submit" class="w-full bg-teal-700 hover:bg-teal-800 text-white font-bold py-3.5 rounded-lg shadow transition-colors">Kirim Pesan</button>
      </form>
    </div>

    <div class="lg:col-span-5 space-y-4">
      <div class="bg-white rounded-2xl border border-gray-100 p-5 flex gap-4 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-brand text-lg shrink-0"><i class="fas fa-map-marker-alt"></i></div>
        <div>
          <h4 class="font-bold text-gray-900 text-sm">Alamat Kampus</h4>
          <p class="text-xs text-gray-500 mt-1">Jl. Cempaka 6, Wonoboyo, Kec. Wonogiri, Wonogiri, Jawa Tengah 57615</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl border border-gray-100 p-5 flex gap-4 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center text-teal-brand text-lg shrink-0"><i class="fab fa-whatsapp"></i></div>
        <div>
          <h4 class="font-bold text-gray-900 text-sm">WhatsApp</h4>
          <p class="text-xs text-gray-500 mt-1">082223204552</p>
        </div>
      </div>

      <div class="kontak-map rounded-2xl overflow-hidden shadow-sm border border-gray-100">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2044.960527882958!2d110.93878935266353!3d-7.813874308778577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2e51f116d5bb%3A0x26cbc235ed5a2edc!2sSTAIMAS%20(Sekolah%20Tinggi%20Agama%20Islam%20Mulia%20Astuti)!5e1!3m2!1sid!2sid!4v1741595178278!5m2!1sid!2sid"
          width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi Kampus Ekonomi Syariah STAIMAS"></iframe>
      </div>
    </div>
  </div>

  <div class="text-center pt-8">
    <p class="text-gray-500 mb-3">Baca lebih lanjut tentang prodi Ekonomi Syariah.</p>
    <a href="http://ekonomi-syariah.test/" target="_blank" class="inline-block bg-teal-700 hover:bg-teal-800 text-white font-bold px-6 py-3 rounded-xl text-sm transition-all shadow-md">
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