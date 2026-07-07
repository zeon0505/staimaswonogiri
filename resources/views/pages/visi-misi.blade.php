@extends('layouts.app')
@section('content')
<div class="space-y-8">
  
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <div class="flex items-center gap-4 mb-6">
      <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center text-gray-600"><i class="fas fa-file-alt text-xl"></i></div>
      <h2 class="text-2xl font-bold text-gray-800">Dokumen Visi & Misi</h2>
    </div>
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Dokumen</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tautan Dokumen</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 text-sm">
          <tr><td class="px-6 py-4">Dokumen Pemutakhiran VMTS</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2022/08/dokumen-pemutakhiran-VMTS.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Induk Pengembangan STAIMAS 2017-2041</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/?page_id=5176" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Strategis STAIMAS 2017-2021 (milestone I)</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2022/08/PEMUTAKHIRAN-RENSTRA-2017-2021-STAIMAS.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Strategis STAIMAS 2017-2021 (milestone II)</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2023/09/renstra-milestone-2.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Operasional STAIMAS 2018</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2022/11/RENOP-STAIMAS-2018.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Operasional STAIMAS 2019</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2022/11/RENOP-STAIMAS-2019.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Operasional STAIMAS 2020</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2022/11/RENOP-STAIMAS-2020.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Operasional STAIMAS 2021</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2022/11/RENOP-STAIMAS-2021.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Operasional STAIMAS 2022</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2023/06/RENOP-2022.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Rencana Operasional STAIMAS 2023</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/wp-content/uploads/2023/06/RENOP-2023.pdf" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
          <tr><td class="px-6 py-4">Indikator Kinerja Tambahan</td><td class="px-6 py-4"><a href="https://www.staimaswonogiri.ac.id/?page_id=5181" class="text-teal-600 hover:underline" target="_blank">Klik disini</a></td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <div class="flex items-center gap-4 mb-6">
      <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center text-teal-600"><i class="fas fa-eye text-xl"></i></div>
      <h2 class="text-2xl font-bold text-gray-800">VISI</h2>
    </div>
    <div class="prose prose-gray max-w-none text-gray-600 leading-loose text-justify space-y-4">
      <p class="text-xl font-medium text-gray-800 italic">"Menjadi Perguruan Tinggi Islam yang unggul dalam kajian ilmu pengetahuan berbasis prinsip pemberdayaan masyarakat, nilai-nilai ke-Indonesiaan, dan religius kekaryaan di tingkat Asia Tenggara pada tahun 2042"</p>
      <h3 class="text-lg font-bold text-gray-800 mt-6">Makna Visi:</h3>
      <ul class="list-disc pl-5 space-y-2">
        <li><strong>Unggul dalam Kajian Ilmu Pengetahuan (Tri Dharma Perguruan Tinggi):</strong> STAIMAS Wonogiri memiliki nilai lebih dalam kajian keilmuan yang integratif antara ilmu keislaman dan ilmu modern; melakukan yang terbaik demi menghasilkan karya pengajaran, penelitian, dan pengabdian pada masyarakat; sehingga diakui tidak hanya secara nasional tetapi juga Asia Tenggara.</li>
        <li><strong>Pemberdayaan Masyarakat:</strong> Strategi pembangunan dengan mempertimbangkan potensi dan menjaga nilai-nilai kearifan lokal demi terwujudnya masyarakat yang berdaya menghadapi tantangan zaman.</li>
        <li><strong>Nilai-nilai Keindonesiaan:</strong> Nilai-nilai toleransi dan saling menghargai antar sesama serta menjunjung tinggi kebhinekaan.</li>
        <li><strong>Religius:</strong> Hubungan manusia dengan Allah SWT yang meliputi takwa, cinta kepada Allah dan Rasulullah, keyakinan diri, dan kesabaran berasaskan tauhid.</li>
        <li><strong>Kekaryaan:</strong> Civitas akademika STAIMAS Wonogiri harus mampu menghasilkan karya ilmiah yang bermanfaat, memiliki prestasi, etos kerja yang tinggi, kompetensi sesuai bidangnya, dan mendapat pengakuan atas karya-karya tersebut.</li>
      </ul>
      <h3 class="text-lg font-bold text-gray-800 mt-6">Indikator Ketercapaian Visi STAIMAS Wonogiri:</h3>
      <ul class="list-disc pl-5 space-y-2">
        <li>50% dosen memiliki jabatan akademik Lektor Kepala serta memiliki bidang keahlian sesuai dengan kompetensi inti program studi.</li>
        <li>Penjaminan Mutu berjalan efektif.</li>
        <li>Perguruan tinggi memiliki kurikulum yang mengacu pada benchmark dengan institusi internasional dan isu terkini.</li>
        <li>Perolehan sertifikasi/akreditasi eksternal oleh lembaga internasional atau nasional bereputasi.</li>
        <li>Perolehan akreditasi program studi oleh lembaga akreditasi internasional bereputasi.</li>
        <li>Perolehan status terakreditasi seluruh program studi oleh BAN-PT atau Lembaga Akreditasi Mandiri (LAM).</li>
        <li>Menjalin kerjasama tridharma tingkat internasional.</li>
        <li>Dosen dan mahasiswa memiliki sejumlah penelitian dan PkM dengan biaya luar negeri dan dalam negeri di luar PT.</li>
        <li>Dosen dan mahasiswa memiliki sejumlah publikasi penelitian dan PkM di jurnal, seminar, dan tulisan tingkat internasional dan nasional bereputasi.</li>
        <li>Mahasiswa memiliki prestasi akademik dan nonakademik di tingkat internasional dan nasional.</li>
      </ul>
      <h3 class="text-lg font-bold text-gray-800 mt-6">Tagline STAIMAS Wonogiri: PASTI</h3>
      <p>Singkatan dari <strong>Produktif, Aktif, Solutif, Transformatif, Inovatif</strong>. Civitas akademika STAIMAS aktif dan produktif untuk menyelesaikan masalah (solutif) dan terus melakukan perubahan (transformasi) yang lebih baik melalui pembaharuan/inovasi.</p>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <div class="flex items-center gap-4 mb-6">
      <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600"><i class="fas fa-bullseye text-xl"></i></div>
      <h2 class="text-2xl font-bold text-gray-800">MISI</h2>
    </div>
    <div class="prose prose-gray max-w-none text-gray-600 leading-loose text-justify">
      <ol class="list-decimal pl-5 space-y-2">
        <li>Melaksanakan pendidikan dan pengajaran dalam rangka mengembangkan ilmu pengetahuan yang berbasis pada pemberdayaan masyarakat, Ke-Indonesiaan dan Religius Kekaryaan</li>
        <li>Menyelenggarakan penelitian dan pengabdian masyarakat berdasarkan potensi dan kearifan lokal</li>
        <li>Meningkatkan kerjasama di bidang Tri Dharma Perguruan Tinggi dalam rangka pencapaian visi.</li>
        <li>Meningkatkan peran dan kontribusi STAIMAS dalam pemberdayaan masyarakat.</li>
      </ol>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <div class="flex items-center gap-4 mb-6">
      <div class="w-12 h-12 bg-yellow-50 rounded-xl flex items-center justify-center text-yellow-600"><i class="fas fa-flag-checkered text-xl"></i></div>
      <h2 class="text-2xl font-bold text-gray-800">TUJUAN</h2>
    </div>
    <div class="prose prose-gray max-w-none text-gray-600 leading-loose text-justify">
      <ol class="list-decimal pl-5 space-y-2">
        <li>Menghasilkan lulusan yang memiliki karakter religius kekaryaan, menguasai iptek dan mampu memberikan manfaat bagi umat.</li>
        <li>Meningkatkan pengembangan ilmu pengetahuan dalam rangka menghasilkan penelitian, pengabdian masyarakat dan menyebarluaskannya dalam skala regional, nasional.</li>
        <li>Mewujudkan pengelolaan atau manajemen universitas sesuai dengan prinsip Good University Governance.</li>
        <li>Menjalin kerjasama dengan pihak lain di bidang Tri Dharma Perguruan Tinggi dalam lingkup regional, nasional.</li>
        <li>Mewujudkan civitas akademika yang mampu menjadi ibadullah yang religius kekaryaan dalam kehidupan.</li>
      </ol>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <div class="flex items-center gap-4 mb-6">
      <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600"><i class="fas fa-tasks text-xl"></i></div>
      <h2 class="text-2xl font-bold text-gray-800">SASARAN PROGRAM DAN SASARAN KEGIATAN</h2>
    </div>
    <p class="text-gray-600 mb-6">Merupakan Penjabaran arah kebijakan STAIMAS Wonogiri yaitu:</p>
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-12">No.</th>
            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sasaran Program</th>
            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sasaran Kegiatan</th>
            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-32">PIC</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 text-sm">
          <tr><td class="px-4 py-3 text-gray-500">1</td><td class="px-4 py-3">Meningkatnya akses pendidikan tinggi</td><td class="px-4 py-3">Memiliki visi, isi, tujuan, dan strategi yang jelas</td><td class="px-4 py-3 font-medium">Ketua</td></tr>
          
          <tr><td class="px-4 py-3 text-gray-500" rowspan="3">2</td><td class="px-4 py-3" rowspan="3">Meningkatnya kualitas manajemen</td><td class="px-4 py-3 border-b border-gray-100">Implementasi tata pamong yang bermutu tinggi</td><td class="px-4 py-3 font-medium border-b border-gray-100">Ketua</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Implementasi kepemimpinan para pejabat struktural</td><td class="px-4 py-3 font-medium border-b border-gray-100">Ketua</td></tr>
          <tr><td class="px-4 py-3">Implementasi tata kelola yang bermutu tinggi</td><td class="px-4 py-3 font-medium">Ketua</td></tr>
          
          <tr><td class="px-4 py-3 text-gray-500">3</td><td class="px-4 py-3">Terwujudnya budaya mutu yang unggul</td><td class="px-4 py-3">Melaksanakan dan mengevaluasi SPMI</td><td class="px-4 py-3 font-medium">LPM</td></tr>
          
          <tr><td class="px-4 py-3 text-gray-500">4</td><td class="px-4 py-3">Meningkatnya manfaat kerjasama</td><td class="px-4 py-3">Menjalin kerjasama dengan lembaga pemerintah dan swasta serta perguruan tinggi</td><td class="px-4 py-3 font-medium">Waket 3</td></tr>
          
          <tr><td class="px-4 py-3 text-gray-500" rowspan="2">5</td><td class="px-4 py-3" rowspan="2">Meningkatnya partisipasi kuliah masyarakat</td><td class="px-4 py-3 border-b border-gray-100">Meningkatkan kualitas input mahasiswa</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 3</td></tr>
          <tr><td class="px-4 py-3">Meningkatkan layanan mahasiswa</td><td class="px-4 py-3 font-medium">Waket 3</td></tr>

          <tr><td class="px-4 py-3 text-gray-500" rowspan="2">6</td><td class="px-4 py-3" rowspan="2">Meningkatnya kualitas dan kuantitas sumberdaya manusia</td><td class="px-4 py-3 border-b border-gray-100">Mewujudkan profil dosen dan tendik yang berkualitas dan religius</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 2</td></tr>
          <tr><td class="px-4 py-3">Mengembangkan dosen dan tendik</td><td class="px-4 py-3 font-medium">Waket 2</td></tr>
          
          <tr><td class="px-4 py-3 text-gray-500">7</td><td class="px-4 py-3">Meningkatnya pendanaan PT</td><td class="px-4 py-3">Mengupayakan pendanaan pendidikan tinggi</td><td class="px-4 py-3 font-medium">Waket 2</td></tr>
          
          <tr><td class="px-4 py-3 text-gray-500" rowspan="4">8</td><td class="px-4 py-3" rowspan="4">Meningkatnya kualitas dan kuantitas sarana dan prasarana</td><td class="px-4 py-3 border-b border-gray-100">Mengadakan Sarana & Prasarana Perkuliahan</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 2</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Mengadakan Sarana & Prasarana Perpustakaan</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 2</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Mengadakan Sarana TIK</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 2</td></tr>
          <tr><td class="px-4 py-3">Mengadakan Sarana & Prasarana Dosen</td><td class="px-4 py-3 font-medium">Waket 1</td></tr>

          <tr><td class="px-4 py-3 text-gray-500" rowspan="12">9</td><td class="px-4 py-3" rowspan="12">Meningkatnya kualitas pembelajaran</td><td class="px-4 py-3 border-b border-gray-100">Menyusun Kurikulum sesuai KKNI</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 1</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Menetapkan Karakteristik Proses Pembelajaran</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 1</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Menyusun RPS</td><td class="px-4 py-3 font-medium border-b border-gray-100">Kaprodi</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Melaksanakan Proses Pembelajaran</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 1</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Melakukan Monitoring dan evaluasi pelaksanaan proses pembelajaran</td><td class="px-4 py-3 font-medium border-b border-gray-100">Kaprodi, LPM</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Melakukan Penilaian Pembelajaran</td><td class="px-4 py-3 font-medium border-b border-gray-100">Kaprodi</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Menentukan teknik dan instrumen penilaian</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 1</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Menetapkan Mekanisme dan Prosedur Penilaian</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 1</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Melakukan pelaporan penilaian</td><td class="px-4 py-3 font-medium border-b border-gray-100">Kaprodi</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Mengintegrasi kegiatan penelitian dan PkM dalam pembelajaran</td><td class="px-4 py-3 font-medium border-b border-gray-100">Kaprodi</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Menciptakan suasana akademik yang kondusif dan religius kekaryaan</td><td class="px-4 py-3 font-medium border-b border-gray-100">Waket 1</td></tr>
          <tr><td class="px-4 py-3">Melakukan survey kepuasan mahasiswa terkait pendidikan</td><td class="px-4 py-3 font-medium">LPM</td></tr>
          
          <tr><td class="px-4 py-3 text-gray-500" rowspan="5">10</td><td class="px-4 py-3" rowspan="5">Meningkatnya kualitas penelitian dan PkM</td><td class="px-4 py-3 border-b border-gray-100">Melaksanakan penelitian dan pengabdian masyarakat yang relevan dengan roadmap</td><td class="px-4 py-3 font-medium border-b border-gray-100">LPPM</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Memiliki kelompok riset dan pelaksana PkM</td><td class="px-4 py-3 font-medium border-b border-gray-100">LPPM</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Melibatkan Mahasiswa dalam penelitian dan PkM</td><td class="px-4 py-3 font-medium border-b border-gray-100">LPPM</td></tr>
          <tr><td class="px-4 py-3 border-b border-gray-100">Menghasilkan publikasi penelitian dan PkM</td><td class="px-4 py-3 font-medium border-b border-gray-100">LPPM</td></tr>
          <tr><td class="px-4 py-3">Memiliki jurnal penelitian dan PkM</td><td class="px-4 py-3 font-medium">LPPM</td></tr>

          <tr><td class="px-4 py-3 text-gray-500">11</td><td class="px-4 py-3">Meningkatnya kualitas lulusan</td><td class="px-4 py-3">Menghasilkan luaran mahasiswa</td><td class="px-4 py-3 font-medium">Waket 3</td></tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection
