<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PosterController;

Route::get('/', [PageController::class, 'home'])->name('home');

// ===== PENDIDIKAN =====
Route::get('/akademik', [PageController::class, 'akademik'])->name('pages.akademik');
Route::get('/pusat-data', [PageController::class, 'pusatData'])->name('pages.pusat-data');
Route::get('/program-studi', [PageController::class, 'programStudi'])->name('pages.program-studi');
Route::get('/program-studi/pai', [PageController::class, 'pai'])->name('pages.pai');
Route::get('/program-studi/kpi', [PageController::class, 'kpi'])->name('pages.kpi');
Route::get('/program-studi/es', [PageController::class, 'es'])->name('pages.es');
Route::get('/program-studi/hukum', [PageController::class, 'hukum'])->name('pages.hukum');

// ===== TENTANG STAIMAS =====
Route::get('/sambutan-ketua', [PageController::class, 'sambutan'])->name('pages.sambutan');
Route::get('/makna-lambang', [PageController::class, 'maknaLambang'])->name('pages.makna-lambang');
Route::get('/sejarah', [PageController::class, 'sejarah'])->name('pages.sejarah');
Route::get('/hymne', [PageController::class, 'hymne'])->name('pages.hymne');
Route::get('/visi-misi', [PageController::class, 'visiMisi'])->name('pages.visi-misi');

// ===== MANAJEMEN =====
Route::get('/yayasan', [PageController::class, 'yayasan'])->name('pages.yayasan');
Route::get('/senat', [PageController::class, 'senat'])->name('pages.senat');
Route::get('/tendik', [PageController::class, 'tendik'])->name('pages.tendik');
Route::get('/struktur-organisasi', [PageController::class, 'strukturOrganisasi'])->name('pages.struktur-organisasi');

// ===== KEMAHASISWAAN =====
Route::get('/beasiswa', [PageController::class, 'beasiswa'])->name('pages.beasiswa');
Route::get('/prestasi', [PageController::class, 'prestasi'])->name('pages.prestasi');
Route::get('/kegiatan-kemahasiswaan', [PageController::class, 'kegiatan'])->name('pages.kegiatan');
Route::get('/fasilitas', [PageController::class, 'fasilitas'])->name('pages.fasilitas');

// ===== UNIT =====
Route::get('/perpustakaan', [PageController::class, 'perpustakaan'])->name('pages.perpustakaan');
Route::get('/lppm', [PageController::class, 'lppm'])->name('pages.lppm');
Route::get('/lpm', [PageController::class, 'lpm'])->name('pages.lpm');
Route::get('/ejournal', [PageController::class, 'ejournal'])->name('pages.ejournal');
Route::get('/keuangan', [PageController::class, 'keuangan'])->name('pages.keuangan');

// ===== UMUM =====
Route::get('/pengumuman', [PageController::class, 'pengumuman'])->name('pages.pengumuman');
Route::get('/akreditasi', [PageController::class, 'akreditasi'])->name('pages.akreditasi');

// ===== DOSEN & BERITA =====
Route::get('/dosen',      [PageController::class, 'dosen'])->name('pages.dosen');
Route::get('/dosen/{slug}', [PageController::class, 'dosenShow'])->name('pages.dosen.show');
Route::get('/berita',     [PageController::class, 'berita'])->name('pages.berita');
Route::get('/berita/{slug}', [PageController::class, 'beritaShow'])->name('pages.berita.show');

// ═══════════════════════════════════════════
//  ADMIN ROUTES (tersembunyi dari publik)
// ═══════════════════════════════════════════
Route::prefix('admin')->name('admin.')->group(function () {
    // Login (tanpa auth)
    Route::get('/login',  [AdminController::class, 'loginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.post');

    // Route terproteksi
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::resource('slides',   SlideController::class)->except(['show']);
        Route::resource('dosens',   DosenController::class)->except(['show']);
        Route::resource('kategoris', KategoriController::class)->except(['show']);
        Route::resource('beritas',  BeritaController::class)->except(['show']);
        Route::resource('posters',  PosterController::class)->except(['show']);
    });
});

Route::get('/link-storage', function () {
    $target = storage_path('app/public');
    
    // 1. Coba deteksi apakah folder public_html ada di sebelah folder project (sibling)
    $projectDir = base_path();
    $parentDir = dirname($projectDir);
    $publicHtml = $parentDir . '/public_html';
    $results = [];

    // Hapus symlink lama di public bawaan Laravel jika ada
    $defaultStorageLink = public_path('storage');
    if (file_exists($defaultStorageLink) || is_link($defaultStorageLink)) {
        @unlink($defaultStorageLink);
    }
    
    // Jalankan perintah bawaan Laravel
    try {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        $results[] = "Artisan storage:link berhasil dijalankan.";
    } catch (\Exception $e) {
        $results[] = "Artisan storage:link error: " . $e->getMessage();
    }

    // 2. Jika ada folder public_html, buat symlink di dalam public_html juga
    if (is_dir($publicHtml)) {
        $publicHtmlStorage = $publicHtml . '/storage';
        if (file_exists($publicHtmlStorage) || is_link($publicHtmlStorage)) {
            @unlink($publicHtmlStorage);
        }
        if (symlink($target, $publicHtmlStorage)) {
            $results[] = "Symlink untuk public_html berhasil dibuat!";
        } else {
            $results[] = "Gagal membuat symlink untuk public_html.";
        }
    } else {
        $results[] = "Folder public_html tidak terdeteksi di: " . $publicHtml;
    }

    return response()->json([
        'status' => 'Proses Selesai',
        'log' => $results,
        'base_path' => base_path(),
        'public_path' => public_path(),
    ]);
});

