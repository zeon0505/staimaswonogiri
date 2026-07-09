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
    $projectDir = base_path();
    $parentDir = dirname($projectDir);
    $publicHtml = $parentDir . '/public_html';
    $results = [];

    // Cek apakah target ada
    $results['target_exists'] = is_dir($target);
    if (is_dir($target)) {
        $results['target_contents'] = scandir($target);
        $slidesDir = $target . '/slides';
        if (is_dir($slidesDir)) {
            $results['slides_contents'] = scandir($slidesDir);
        } else {
            $results['slides_contents'] = 'slides dir does not exist';
        }
    }

    // Default Laravel storage link
    $defaultStorageLink = public_path('storage');
    $results['default_link_before'] = [
        'exists' => file_exists($defaultStorageLink),
        'is_link' => is_link($defaultStorageLink),
        'is_dir' => is_dir($defaultStorageLink)
    ];

    if (file_exists($defaultStorageLink) || is_link($defaultStorageLink)) {
        if (is_link($defaultStorageLink)) {
            @unlink($defaultStorageLink);
        } else if (is_dir($defaultStorageLink)) {
            @rmdir($defaultStorageLink); 
        }
    }

    try {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        $results['artisan_call'] = "Success";
    } catch (\Exception $e) {
        $results['artisan_call'] = "Error: " . $e->getMessage();
    }

    // public_html storage link
    if (is_dir($publicHtml)) {
        $publicHtmlStorage = $publicHtml . '/storage';
        $results['public_html_before'] = [
            'exists' => file_exists($publicHtmlStorage),
            'is_link' => is_link($publicHtmlStorage),
            'is_dir' => is_dir($publicHtmlStorage)
        ];

        if (file_exists($publicHtmlStorage) || is_link($publicHtmlStorage)) {
            if (is_link($publicHtmlStorage)) {
                @unlink($publicHtmlStorage);
            } else if (is_dir($publicHtmlStorage)) {
                $files = glob($publicHtmlStorage . '/*');
                foreach ($files as $file) {
                    if (is_file($file)) @unlink($file);
                }
                @rmdir($publicHtmlStorage);
            }
        }

        if (symlink($target, $publicHtmlStorage)) {
            $results['public_html_symlink'] = "Success";
        } else {
            $results['public_html_symlink'] = "Failed";
        }

        $results['public_html_after'] = [
            'exists' => file_exists($publicHtmlStorage),
            'is_link' => is_link($publicHtmlStorage),
            'is_dir' => is_dir($publicHtmlStorage),
            'contents' => is_dir($publicHtmlStorage) ? array_slice(scandir($publicHtmlStorage), 0, 10) : 'not a dir'
        ];
        
        $publicHtmlSlides = $publicHtmlStorage . '/slides';
        if (is_dir($publicHtmlSlides)) {
            $results['public_html_slides_contents'] = scandir($publicHtmlSlides);
        } else {
            $results['public_html_slides_contents'] = 'not a dir';
        }
    } else {
        $results['public_html'] = "Not found at " . $publicHtml;
    }

    return response()->json($results);
});

Route::get('/debug-error', function () {
    $logPath = storage_path('logs/laravel.log');
    if (!file_exists($logPath)) {
        return 'Log file tidak ditemukan di: ' . $logPath;
    }
    $content = file_get_contents($logPath);
    $lines = array_slice(explode("\n", $content), -80);
    return response('<pre>' . htmlspecialchars(implode("\n", $lines)) . '</pre>');
});
