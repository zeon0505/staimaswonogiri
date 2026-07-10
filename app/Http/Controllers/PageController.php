<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slide;
use App\Models\Berita;
use App\Models\Poster;
use App\Models\Dosen;
use App\Models\Kategori;

class PageController extends Controller
{
    public function home()
    {
        $slides = Slide::where('aktif', true)->orderBy('urutan')->get();
        // Berita & Pengumuman
        $beritas = Berita::where('aktif', true)->orderBy('created_at', 'desc')->take(6)->get();
        $posters = Poster::where('aktif', true)->get();
        
        return view('welcome', compact('slides', 'beritas', 'posters'));
    }
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
        $dosens = Dosen::where('aktif', true)->where('program_studi', 'PAI')->orderBy('urutan')->get();
        return view('pages.pai', [
            'title' => 'Pendidikan Agama Islam (PAI)', 
            'subtitle' => 'Program Studi Pendidikan Agama Islam – Jenjang S1',
            'dosens' => $dosens
        ]);
    }

    public function kpi()
    {
        $dosens = Dosen::where('aktif', true)->where('program_studi', 'KPI')->orderBy('urutan')->get();
        return view('pages.kpi', [
            'title' => 'Komunikasi dan Penyiaran Islam (KPI)', 
            'subtitle' => 'Program Studi Komunikasi dan Penyiaran Islam – Jenjang S1',
            'dosens' => $dosens
        ]);
    }

    public function es()
    {
        $dosens = Dosen::where('aktif', true)->where('program_studi', 'ES')->orderBy('urutan')->get();
        return view('pages.es', [
            'title' => 'Ekonomi Syariah (ES)', 
            'subtitle' => 'Program Studi Ekonomi Syariah – Jenjang S1',
            'dosens' => $dosens
        ]);
    }

    public function hukum()
    {
        $dosens = Dosen::where('aktif', true)->where('program_studi', 'HTN')->orderBy('urutan')->get();
        return view('pages.hukum', [
            'title' => 'Hukum Tata Negara (HTN)', 
            'subtitle' => 'Program Studi Hukum Tata Negara – Jenjang S1',
            'dosens' => $dosens
        ]);
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
        return view('pages.akreditasi', ['title' => 'Akreditasi', 'subtitle' => 'Status Akreditasi Institusi dan Program Studi STAIMAS Wonogiri']);
    }

    // ===== DOSEN =====
    public function dosen(Request $request)
    {
        $query = Dosen::where('aktif', true);
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('nama', 'like', "%{$search}%")
                  ->orWhere('jabatan', 'like', "%{$search}%");
        }
        $dosens = $query->paginate(12)->withQueryString();
        
        return view('pages.dosen', [
            'title' => 'Tenaga Pengajar',
            'subtitle' => 'Dosen-Dosen STAIMAS',
            'dosens' => $dosens
        ]);
    }

    public function dosenShow($slug)
    {
        $dosen = Dosen::where('slug', $slug)->firstOrFail();
        return view('pages.dosen-detail', [
            'title' => $dosen->nama,
            'subtitle' => 'Profil Dosen',
            'dosen' => $dosen
        ]);
    }

    // ===== BERITA =====
    public function berita(Request $request)
    {
        $query = Berita::where('aktif', true);
        
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('judul', 'like', "%{$search}%")
                  ->orWhere('konten', 'like', "%{$search}%");
        }

        if ($request->filled('kategori')) {
            $query->whereHas('kategori', fn($q) => $q->where('slug', $request->kategori));
        }
        
        $beritas = $query->orderBy('created_at', 'desc')->paginate(9)->withQueryString();
        $kategoris = Kategori::orderBy('nama')->get();
        $posters = Poster::where('aktif', true)->orderBy('created_at', 'desc')->get();
        
        return view('pages.berita', [
            'title' => 'Berita & Pengumuman',
            'subtitle' => 'Informasi terbaru seputar STAIMAS Wonogiri',
            'beritas' => $beritas,
            'kategoris' => $kategoris,
            'posters' => $posters
        ]);
    }

    public function beritaShow($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        
        $prev = Berita::where('aktif', true)
                      ->where('created_at', '<', $berita->created_at)
                      ->orderBy('created_at', 'desc')
                      ->first();
                      
        $next = Berita::where('aktif', true)
                      ->where('created_at', '>', $berita->created_at)
                      ->orderBy('created_at', 'asc')
                      ->first();

        $related = Berita::where('aktif', true)
                         ->where('kategori_id', $berita->kategori_id)
                         ->where('id', '!=', $berita->id)
                         ->orderBy('created_at', 'desc')
                         ->take(5)
                         ->get();

        $otherBeritas = Berita::where('aktif', true)
                              ->where('id', '!=', $berita->id)
                              ->orderBy('created_at', 'desc')
                              ->take(5)
                              ->get();
                                 
        return view('pages.berita-detail', [
            'title' => $berita->judul,
            'subtitle' => 'Berita STAIMAS',
            'berita' => $berita,
            'related' => $related,
            'otherBeritas' => $otherBeritas,
            'prev' => $prev,
            'next' => $next
        ]);
    }
}
