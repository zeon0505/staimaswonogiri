@extends('layouts.app')

@section('title', 'Struktur Organisasi - STAIMAS Wonogiri')

@section('content')
<div class="struktur-organisasi-wrapper">

    <div class="so-header">
        <img src="{{ asset('assest/LOGO STAIMAS AI.png') }}" alt="Logo STAIMAS Wonogiri" class="so-logo">
        <div>
            <h1>Susunan Pejabat Struktural</h1>
            <p>STAIMAS Wonogiri &mdash; Periode 2025&ndash;2029</p>
        </div>
    </div>

    @php
        $ketua = ['nama' => 'Atik Nurfatmawati, S.E., M.I.Kom.', 'jabatan' => 'KETUA'];

        $wakilKetua = [
        ['nama' => 'Makhda Intan Sanusi, S.H., M.E.', 'jabatan' => 'Wakil Ketua I Bidang Akademik'],
        ['nama' => 'Drs. Sumardi, M.Pd.', 'jabatan' => 'Wakil Ketua II Bidang Administrasi dan Keuangan'],
        ['nama' => 'Sugiyanto, S.E., M.Si.', 'jabatan' => 'Wakil Ketua III Bidang Kemahasiswaan dan Kerja Sama'],
        ];

        $unitKerja = [
        [
            'kepala' => ['nama' => 'Indra Setiyawan, S.E., M.M.', 'jabatan' => 'Kepala Program Studi Ekonomi Syariah'],
            'sekretaris' => ['nama' => 'Hasbi, S.E., M.E.', 'jabatan' => 'Sekretaris Program Studi Ekonomi Syariah'],
        ],
        [
            'kepala' => ['nama' => 'Achmad Zaky Faiz, S.Sos., M.Sos.', 'jabatan' => 'Kepala Program Studi Komunikasi dan Penyiaran Islam'],
            'sekretaris' => ['nama' => 'M. Ibnu Naufal Maskuri, S.Sos., M.Sos.', 'jabatan' => 'Sekretaris Program Studi Komunikasi dan Penyiaran Islam'],
        ],
        [
            'kepala' => ['nama' => 'Ratih, S.Pd., M.Pd.', 'jabatan' => 'Kepala Program Studi Pendidikan Agama Islam'],
            'sekretaris' => ['nama' => 'Maulana Iskandar, S.Pd., M.Pd.', 'jabatan' => 'Sekretaris Program Studi Pendidikan Agama Islam'],
        ],
        [
            'kepala' => ['nama' => 'Dr. Ruslina Dwi Wahyuni, S.Sos, M.A.P.', 'jabatan' => 'Kepala Program Studi Siyasah Syariah (Hukum Tata Negara)'],
            'sekretaris' => ['nama' => 'Novan Wahyu Primadi, S.H., M.H.', 'jabatan' => 'Sekretaris Program Studi Siyasah Syariah (Hukum Tata Negara)'],
        ],
        [
            'kepala' => ['nama' => 'Amir Mukminin, S.Pd.I., M.Pd.', 'jabatan' => 'Kepala Lembaga Penjaminan Mutu'],
            'sekretaris' => ['nama' => 'Devina Melinawati, S.Pd., M.Pd.', 'jabatan' => 'Sekretaris Lembaga Penjaminan Mutu'],
        ],
        [
            'kepala' => ['nama' => 'Nadhiroh, S.Sos.I., M.I.Kom.', 'jabatan' => 'Kepala Lembaga Penelitian dan Pengabdian Masyarakat'],
            'sekretaris' => ['nama' => 'Muhammad Umar Khadafi, S.Sos., M.Sos.', 'jabatan' => 'Sekretaris Lembaga Penelitian dan Pengabdian Masyarakat'],
        ],
        ];
    @endphp

    <div class="so-chart">

        {{-- Ketua --}}
        <div class="so-node so-root">
            <div class="so-name">{{ $ketua['nama'] }}</div>
            <div class="so-role so-root-role">{{ $ketua['jabatan'] }}</div>
        </div>

        <div class="so-connector"></div>
        <div class="so-tier-label">WAKIL KETUA</div>

        {{-- Wakil Ketua I, II, III --}}
        @foreach ($wakilKetua as $wk)
            <div class="so-connector"></div>
            <div class="so-node so-wakil">
                <div class="so-name">{{ $wk['nama'] }}</div>
                <div class="so-role">{{ $wk['jabatan'] }}</div>
            </div>
        @endforeach

        <div class="so-connector"></div>
        <div class="so-tier-label">PROGRAM STUDI &amp; LEMBAGA</div>

        {{-- Kepala Program Studi / Lembaga beserta Sekretarisnya --}}
        @foreach ($unitKerja as $unit)
            <div class="so-connector"></div>
            <div class="so-node so-kepala">
                <div class="so-name">{{ $unit['kepala']['nama'] }}</div>
                <div class="so-role">{{ $unit['kepala']['jabatan'] }}</div>
            </div>

            <div class="so-connector"></div>
            <div class="so-node so-sekretaris">
                <div class="so-name">{{ $unit['sekretaris']['nama'] }}</div>
                <div class="so-role">{{ $unit['sekretaris']['jabatan'] }}</div>
            </div>
        @endforeach

    </div>
</div>
@endsection

@push('styles')
<style>
    .struktur-organisasi-wrapper {
        font-family: -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
        color: #2a2a2a;
        padding: 40px 24px 80px;
        max-width: 640px;
        margin: 0 auto;
    }
    .so-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 40px;
    }
    .so-header .so-logo {
        width: 80px;
        height: auto;
        flex-shrink: 0;
    }
    .so-header h1 {
        font-size: 22px;
        font-weight: 700;
        margin: 0 0 4px;
    }
    .so-header p {
        font-size: 13px;
        color: #7a7a75;
        margin: 0;
    }

    .so-chart {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .so-connector {
        width: 0;
        height: 22px;
        border-left: 2px solid #d0cfc8;
    }

    .so-tier-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .06em;
        color: #7a7a75;
        background: #f1efe8;
        padding: 5px 14px;
        border-radius: 20px;
        margin-bottom: 4px;
    }

    .so-node {
        width: 100%;
        background: #fff;
        border: 1px solid #d0cfc8;
        border-radius: 8px;
        padding: 12px 18px;
        text-align: center;
    }

    .so-node.so-root {
        background: #444441;
        border: none;
    }
    .so-node.so-root .so-name { color: #fff; font-size: 15px; }
    .so-node.so-root .so-root-role { color: #cfcfcb; font-size: 11px; margin-top: 3px; }

    .so-node.so-wakil {
        background: #EEEDFE;
        border-color: #CECBF6;
    }
    .so-node.so-wakil .so-name { color: #26215C; }
    .so-node.so-wakil .so-role { color: #4d4791; }

    .so-node.so-kepala {
        background: #E1F5EE;
        border-color: #9FE1CB;
        border-left: 4px solid #04342C;
        text-align: left;
    }

    .so-node.so-sekretaris {
        background: #fafaf8;
        text-align: left;
        width: calc(100% - 28px);
        margin-left: 28px;
    }

    .so-name { font-weight: 700; font-size: 13.5px; line-height: 1.35; }
    .so-role { font-size: 12px; color: #7a7a75; margin-top: 3px; }
</style>
@endpush