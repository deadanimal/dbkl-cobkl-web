<?php

use App\Http\Controllers\PengurusanPenggunaController;
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
    return view('layouts.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/pendaftaran', function () {
    return view('daftar.pendaftaran');
})->middleware(['auth'])->name('pendaftaran');

Route::get('senarai', [PengurusanPenggunaController::class, 'senarai']);
Route::get('pengguna', [PengurusanPenggunaController::class, 'borangAdmin']);
Route::post('pengguna', [PengurusanPenggunaController::class, 'ciptaPengguna']);
Route::get('pengguna/{id}', [PengurusanPenggunaController::class, 'satuPengguna']);
Route::put('kemaskiniPengguna/{id}', [PengurusanPenggunaController::class, 'kemaskiniPengguna']);



Route::get('penggunaAwam', [PengurusanPenggunaController::class, 'borangAwam']);
Route::get('staff', [PengurusanPenggunaController::class, 'borangStaff']);



require __DIR__.'/auth.php';
