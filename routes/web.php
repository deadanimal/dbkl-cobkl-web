<?php

use App\Http\Controllers\PengurusanPenggunaController;
use App\Http\Controllers\SistemController;
use App\Http\Controllers\KandunganController;

use Illuminate\Support\Facades\Route;

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
Route::get('penggunaAwam/{id}', [PengurusanPenggunaController::class, 'satuAwam']);
Route::put('kemaskiniAwam/{id}', [PengurusanPenggunaController::class, 'kemaskiniAwam']);

Route::get('staff', [PengurusanPenggunaController::class, 'borangStaff']);
Route::get('staff/{id}', [PengurusanPenggunaController::class, 'satuStaff']);
Route::put('kemaskiniStaff/{id}', [PengurusanPenggunaController::class, 'kemaskiniStaff']);


Route::get('audit', [SistemController::class, 'senarai_audit']);
Route::get('notifikasi', [SistemController::class, 'senarai_notifikasi']);
Route::get('laporan', [SistemController::class, 'senarai_laporan']);

Route::get('faq', [KandunganController::class, 'senarai_faq']);
Route::get('direktoris', [KandunganController::class, 'senarai_direktoris']);
Route::get('laporan', [KandunganController::class, 'senarai_laporan']);
Route::get('lain', [KandunganController::class, 'senarai_lain']);

Route::post('faq', [KandunganController::class, 'cipta_faq']);
Route::post('direktoris', [KandunganController::class, 'cipta_direktoris']);
Route::post('laporan', [KandunganController::class, 'cipta_laporan']);
Route::post('lain', [KandunganController::class, 'cipta_lain']);

Route::put('faq/{id}', [KandunganController::class, 'kemaskini_faq']);
Route::put('direktoris/{id}', [KandunganController::class, 'kemaskini_direktoris']);
Route::put('laporan/{id}', [KandunganController::class, 'kemaskini_laporan']);
Route::put('lain/{id}', [KandunganController::class, 'kemaskini_lain']);



require __DIR__.'/auth.php';
