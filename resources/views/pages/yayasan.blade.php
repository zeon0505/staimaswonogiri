@extends('layouts.app')
@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-8">

  <div class="header">
    <img src="{{ asset('assest/LOGO STAIMAS AI.png') }}" alt="Logo STAIMAS" class="mx-auto w-24 h-auto flex-shrink-0 mb-4" onerror="this.src='https://staimaswonogiri.ac.id/wp-content/uploads/2023/06/YKEC.png'">
    <h1 class="text-2xl font-bold text-center text-gray-800">Yayasan Karya Emas Center</h1>
    <p class="text-sm text-center text-gray-500 mb-6 font-medium">Bagan Struktur Organisasi Yayasan</p>
  </div>
  
  <div class="chart-wrap">
    <div class="root-row">
      <div class="root-node">Yayasan Karya Emas Center</div>
    </div>
    
    <div class="root-connector"></div>
    <div class="trunk-line"></div>
    
    <div class="branches">
      <!-- Pendiri -->
      <div class="branch">
        <div class="group-header text-white" style="background: #a8a8a8;">Pendiri</div>
        <div class="connector-v"></div>
        <div class="member-list">
          <div class="member-card">
            <div class="member-name">Agus Mulyadi</div>
            <div class="member-role">-</div>
          </div>
        </div>
      </div>

      <!-- Pembina -->
      <div class="branch">
        <div class="group-header text-white" style="background: #a78bfa;">Pembina</div>
        <div class="connector-v"></div>
        <div class="member-list">
          <div class="member-card">
            <div class="member-name">Endang Maria Astuti</div>
            <div class="member-role">Ketua</div>
          </div>
        </div>
      </div>
      
      <!-- Pengurus -->
      <div class="branch">
        <div class="group-header text-white" style="background: #6ee7b7;">Pengurus</div>
        <div class="connector-v"></div>
        <div class="member-list">
          <div class="member-card">
            <div class="member-name">Farah Farida Hendar Setyowati</div>
            <div class="member-role">Ketua</div>
          </div>
          <div class="member-card">
            <div class="member-name">Dwi Haryatmo</div>
            <div class="member-role">Sekretaris</div>
          </div>
          <div class="member-card">
            <div class="member-name">Dewi Puspito Arumsari</div>
            <div class="member-role">Bendahara umum</div>
          </div>
          <div class="member-card">
            <div class="member-name">Anfasa Azwan Izza Perdana</div>
            <div class="member-role">Ketua umum</div>
          </div>
          <div class="member-card">
            <div class="member-name">Susiana Wijayanti Wulandari</div>
            <div class="member-role">Ketua</div>
          </div>
          <div class="member-card">
            <div class="member-name">Kristina Purnawanti Ambarsari</div>
            <div class="member-role">Sekretaris umum</div>
          </div>
          <div class="member-card">
            <div class="member-name">Novianto Dermawan Saputro</div>
            <div class="member-role">Sekretaris</div>
          </div>
          <div class="member-card">
            <div class="member-name">Agus Purwanto</div>
            <div class="member-role">Bendahara</div>
          </div>
          <div class="member-card">
            <div class="member-name">Afan Mahmud Al Haj</div>
            <div class="member-role">Ketua</div>
          </div>
          <div class="member-card">
            <div class="member-name">Khairani Nayla Salsa Jasmine Purwijayanti</div>
            <div class="member-role">Bendahara</div>
          </div>
        </div>
      </div>
      
      <!-- Pengawas -->
      <div class="branch">
        <div class="group-header text-white" style="background: #fca5a5;">Pengawas</div>
        <div class="connector-v"></div>
        <div class="member-list">
          <div class="member-card">
            <div class="member-name">Nurhidayatullah</div>
            <div class="member-role">Anggota</div>
          </div>
          <div class="member-card">
            <div class="member-name">Haji Tri Gunawan, Sarjana Sosial</div>
            <div class="member-role">Ketua</div>
          </div>
          <div class="member-card">
            <div class="member-name">Sumardi</div>
            <div class="member-role">Anggota</div>
          </div>
          <div class="member-card">
            <div class="member-name">Rasyidi Masyhur</div>
            <div class="member-role">Anggota</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  :root {
    --border: #d0cfc8;
    --text-secondary: #7a7a75;
    --text-primary: #2a2a2a;
    --root-bg: #444441;
  }
  * { box-sizing: border-box; }
  .header {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 1400px;
    margin: 0 auto 40px;
  }
  .header img {
    width: 90px;
    height: auto;
    flex-shrink: 0;
  }
  .header h1 {
    font-size: 26px;
    font-weight: 700;
    margin: 0 0 4px;
  }
  .header p {
    font-size: 15px;
    color: var(--text-secondary);
    margin: 0;
  }
  .chart-wrap {
    max-width: 1400px;
    margin: 0 auto;
    overflow-x: auto;
  }
  .root-row {
    display: flex;
    justify-content: center;
    margin-bottom: 0;
  }
  .root-node {
    background: var(--root-bg);
    color: #fff;
    font-weight: 700;
    font-size: 14px;
    padding: 14px 30px;
    border-radius: 8px;
    text-align: center;
  }
  .root-connector {
    height: 24px;
    border-left: 2px solid var(--border);
    margin: 0 auto;
    width: 0;
  }
  .trunk-line {
    height: 2px;
    background: var(--border);
    max-width: calc(100% - 160px);
    margin: 0 auto;
  }
  .branches {
    display: grid;
    grid-template-columns: repeat(4, minmax(230px, 1fr));
    gap: 24px;
    align-items: start;
  }
  .branch {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .group-header {
    width: 100%;
    text-align: center;
    font-weight: 700;
    font-size: 14px;
    padding: 9px 12px;
    border-radius: 8px;
  }
  .connector-v {
    height: 20px;
    border-left: 2px solid var(--border);
  }
  .member-list {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 20px;
    position: relative;
  }
  .member-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 6px;
    padding: 10px 14px;
    position: relative;
    text-align: center;
  }
  .member-card:not(:first-child)::before {
    content: "";
    position: absolute;
    left: 50%;
    top: -20px;
    height: 20px;
    border-left: 1px solid var(--border);
  }
  .member-name {
    font-weight: 700;
    font-size: 13px;
    line-height: 1.35;
  }
  .member-role {
    font-size: 12px;
    color: var(--text-secondary);
    margin-top: 2px;
  }
</style>
@endsection