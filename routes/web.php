<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// ===== PENDIDIKAN =====
Route::get('/akademik', [PageController::class, 'akademik'])->name('pages.akademik');
Route::get('/pusat-data', [PageController::class, 'pusatData'])->name('pages.pusat-data');
Route::get('/program-studi', [PageController::class, 'programStudi'])->name('pages.program-studi');
Route::get('/program-studi/pai', [PageController::class, 'pai'])->name('pages.pai');

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
