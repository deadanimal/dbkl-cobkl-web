<?php

use App\Models\PengurusanPengguna;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('laman_utama.landing');
});

Route::get('/mengenai-kami', function () {
    return view('laman_utama.mengenai_kami');
});

Route::get('/direktori', function () {
    return view('laman_utama.direktori');
});

Route::get('/soalan-lazim', function () {
    return view('laman_utama.soalan_lazim');
});

Route::get('/pengumuman', function () {
    return view('laman_utama.pengumuman');
});

Route::get('/perkhidmatan-kami', function () {
    return view('laman_utama.perkhidmatan_kami');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/pendaftaran', function () {
    return view('daftar.pendaftaran');
})->middleware(['auth'])->name('pendaftaran');

// Route::get('pengguna', [PengurusanPengguna::class, '']);
Route::post('pengguna', [PengurusanPengguna::class, 'ciptaPengguna']);

require __DIR__.'/auth.php';
