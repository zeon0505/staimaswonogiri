@extends('layouts.app')
@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
  <div class="text-center mb-8">
    <img src="{{ asset('assest/LOGO STAIMAS AI.png') }}" alt="Logo STAIMAS" class="mx-auto w-64 h-auto mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Makna Lambang STAIMAS Wonogiri</h2>
  </div>
  <div class="prose prose-gray max-w-none text-gray-600 leading-loose text-justify space-y-4">
    <p>STAIMAS Wonogiri memiliki lambang berbentuk segi lima, warna dasar Putih, didalamnya tertera Buku dan Lambang Kabupaten Wonogiri, Gambar Padi dan kapas dengan simbol Kemakmuran serta Sinar Ilmu menerangi yang mempunyai arti sebagai berikut :</p>
    <ul class="list-disc pl-5 mt-4 space-y-2">
      <li><strong>Segi Lima:</strong> Melambangkan Rukun Islam dan Pancasila.</li>
      <li><strong>Warna Dasar Putih:</strong> Kesucian niat dan keikhlasan dalam menuntut serta mengamalkan ilmu.</li>
      <li><strong>Buku:</strong> Melambangkan sumber ilmu pengetahuan dan semangat belajar sepanjang hayat.</li>
      <li><strong>Lambang Kabupaten Wonogiri:</strong> Menunjukkan identitas lokasi dan tekad STAIMAS untuk berkontribusi bagi kemajuan daerah.</li>
      <li><strong>Padi dan Kapas:</strong> Simbol kemakmuran, kesejahteraan, dan keadilan sosial yang ingin dicapai melalui pendidikan.</li>
      <li><strong>Sinar Ilmu:</strong> Melambangkan pencerahan dan hidayah yang dibawa oleh pendidikan tinggi Islam.</li>
    </ul>
    <div class="mt-8 text-center pt-8">
      <a href="https://drive.google.com/drive/folders/100iUphDeSL4_Yxp_Obh7qSRrKVVs4eQA?usp=drive_link" target="_blank" class="inline-flex items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white px-6 py-3 rounded-xl font-medium transition-colors">
        <i class="fas fa-download"></i> Download Logo STAIMAS
      </a>
    </div>
  </div>
</div>
@endsection
