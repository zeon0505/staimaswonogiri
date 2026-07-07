<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // ===== PENDIDIKAN =====
    public function akademik()
    {
        return view('pages.akademik', ['title' => 'Akademik', 'subtitle' => 'Informasi dan layanan akademik STAIMAS Wonogiri']);
    }

    public function pusatData()
    {
        return view('pages.pusat-data', ['title' => 'Pusat Data & Informasi', 'subtitle' => 'Data dan informasi resmi kampus STAIMAS Wonogiri']);
    }

    public function programStudi()
    {
        return view('pages.program-studi', ['title' => 'Program Studi', 'subtitle' => 'Empat program studi unggulan STAIMAS Wonogiri']);
    }

    public function pai()
    {
        return view('pages.pai', ['title' => 'Pendidikan Agama Islam (PAI)', 'subtitle' => 'Program Studi Pendidikan Agama Islam – Jenjang S1']);
    }

    // ===== TENTANG STAIMAS =====
    public function sambutan()
    {
        return view('pages.sambutan', ['title' => 'Sambutan Ketua', 'subtitle' => 'Sambutan dari Ketua STAIMAS Wonogiri']);
    }

    public function maknaLambang()
    {
        return view('pages.makna-lambang', ['title' => 'Makna Lambang', 'subtitle' => 'Filosofi dan makna di balik lambang STAIMAS Wonogiri']);
    }

    public function sejarah()
    {
        return view('pages.sejarah', ['title' => 'Sejarah', 'subtitle' => 'Perjalanan dan sejarah berdirinya STAIMAS Wonogiri']);
    }

    public function hymne()
    {
        return view('pages.hymne', ['title' => 'Hymne STAIMAS', 'subtitle' => 'Hymne dan Mars kebanggaan STAIMAS Wonogiri']);
    }

    public function visiMisi()
    {
        return view('pages.visi-misi', ['title' => 'Visi & Misi', 'subtitle' => 'Visi, Misi, dan Tujuan STAIMAS Wonogiri']);
    }

    // ===== MANAJEMEN =====
    public function yayasan()
    {
        return view('pages.yayasan', ['title' => 'Yayasan', 'subtitle' => 'Yayasan Mulia Astuti Wonogiri']);
    }

    public function senat()
    {
        return view('pages.senat', ['title' => 'Senat STAIMAS', 'subtitle' => 'Senat Akademik STAIMAS Wonogiri']);
    }

    public function tendik()
    {
        return view('pages.tendik', ['title' => 'Tendik STAIMAS', 'subtitle' => 'Tenaga Kependidikan STAIMAS Wonogiri']);
    }

    public function strukturOrganisasi()
    {
        return view('pages.struktur-organisasi', ['title' => 'Struktur Organisasi', 'subtitle' => 'Struktur Organisasi STAIMAS Wonogiri']);
    }

    // ===== KEMAHASISWAAN =====
    public function beasiswa()
    {
        return view('pages.beasiswa', ['title' => 'Beasiswa', 'subtitle' => 'Program beasiswa untuk mahasiswa STAIMAS Wonogiri']);
    }

    public function prestasi()
    {
        return view('pages.prestasi', ['title' => 'Prestasi', 'subtitle' => 'Raihan prestasi mahasiswa STAIMAS Wonogiri']);
    }

    public function kegiatan()
    {
        return view('pages.kegiatan', ['title' => 'Kegiatan Kemahasiswaan', 'subtitle' => 'Berbagai kegiatan aktif organisasi mahasiswa STAIMAS']);
    }

    public function fasilitas()
    {
        return view('pages.fasilitas', ['title' => 'Fasilitas', 'subtitle' => 'Fasilitas kampus STAIMAS Wonogiri']);
    }

    // ===== UNIT =====
    public function perpustakaan()
    {
        return view('pages.perpustakaan', ['title' => 'Perpustakaan', 'subtitle' => 'Perpustakaan STAIMAS Wonogiri']);
    }

    public function lppm()
    {
        return view('pages.lppm', ['title' => 'LPPM', 'subtitle' => 'Lembaga Penelitian dan Pengabdian kepada Masyarakat']);
    }

    public function lpm()
    {
        return view('pages.lpm', ['title' => 'LPM', 'subtitle' => 'Lembaga Penjaminan Mutu STAIMAS Wonogiri']);
    }

    public function ejournal()
    {
        return view('pages.ejournal', ['title' => 'E-Journal STAIMAS', 'subtitle' => 'Jurnal Ilmiah STAIMAS Wonogiri']);
    }

    public function keuangan()
    {
        return view('pages.keuangan', ['title' => 'Keuangan', 'subtitle' => 'Informasi keuangan mahasiswa STAIMAS Wonogiri']);
    }

    // ===== UMUM =====
    public function pengumuman()
    {
        return view('pages.pengumuman', ['title' => 'Pengumuman', 'subtitle' => 'Pengumuman resmi dari STAIMAS Wonogiri']);
    }

    public function akreditasi()
    {
        return view('pages.akreditasi', ['title' => 'Akreditasi', 'subtitle' => 'Status akreditasi program studi STAIMAS Wonogiri']);
    }
}
