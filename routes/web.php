<?php

use App\Http\Controllers\PengurusanPenggunaController;
use App\Http\Controllers\SistemController;
use App\Http\Controllers\KandunganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


use App\Models\KandunganDirektori;
use App\Models\KandunganFaq;
use App\Models\KandunganLain;
use App\Models\KandunganProgram;

Route::get('/', function () {
    Alert::info('COBKL', 'Selamat Datang ke Pesuruhjaya Bangunan Kuala Lumpur');
    return view('laman_utama.landing');
});

Route::get('/mengenai-kami', function () {
    return view('laman_utama.mengenai_kami');
});

Route::get('/direktori', function () {
    $direktoris = KandunganDirektori::all();
    return view('laman_utama.direktori', compact('direktoris'));
});

Route::get('/soalan-lazim', function () {
    $faqs = KandunganFaq::all();
    return view('laman_utama.soalan_lazim', compact('faqs'));
});

Route::post('/soalan-lazim/carian', function (Request $request) {
    $carian = $request->carian;
    $faqs = KandunganFaq::where('jawapan','LIKE',"%{$carian}%")->get();
    return view('laman_utama.soalan_lazim', compact('faqs'));
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

// Route::get('senarai', [PengurusanPenggunaController::class, 'senarai']);
// Route::get('pengguna', [PengurusanPenggunaController::class, 'borangAdmin']);
// Route::post('pengguna', [PengurusanPenggunaController::class, 'ciptaPengguna']);
// Route::get('pengguna/{id}', [PengurusanPenggunaController::class, 'satuPengguna']);
// Route::put('kemaskiniPengguna/{id}', [PengurusanPenggunaController::class, 'kemaskiniPengguna']);


Route::get('penggunaAwam', [PengurusanPenggunaController::class, 'borangAwam']);
Route::get('penggunaAwam/{id}', [PengurusanPenggunaController::class, 'satuAwam']);
Route::put('kemaskiniAwam/{id}', [PengurusanPenggunaController::class, 'kemaskiniAwam']);

Route::get('staff', [PengurusanPenggunaController::class, 'borangStaff']);
Route::get('staff/{id}', [PengurusanPenggunaController::class, 'satuStaff']);
Route::put('kemaskiniStaff/{id}', [PengurusanPenggunaController::class, 'kemaskiniStaff']);


Route::get('audit', [SistemController::class, 'senarai_audit']);
Route::get('notifikasi', [SistemController::class, 'senarai_notifikasi']);
Route::get('laporan', [SistemController::class, 'senarai_laporan']);

Route::get('/kandungan/faq', [KandunganController::class, 'senarai_faq']);
Route::post('/kandungan/faq/carian', [KandunganController::class, 'carian_faq']);
Route::get('/kandungan/direktoris', [KandunganController::class, 'senarai_direktoris']);
Route::get('/kandungan/program', [KandunganController::class, 'senarai_program']);
Route::get('/kandungan/lain', [KandunganController::class, 'senarai_lain']);

Route::post('/kandungan/faq', [KandunganController::class, 'cipta_faq']);
Route::post('/kandungan/direktoris', [KandunganController::class, 'cipta_direktoris']);
Route::post('/kandungan/program', [KandunganController::class, 'cipta_program']);
Route::post('/kandungan/lain', [KandunganController::class, 'cipta_lain']);

Route::put('/kandungan/faq/{id}', [KandunganController::class, 'kemaskini_faq']);
Route::put('/kandungan/direktori/{id}', [KandunganController::class, 'kemaskini_direktoris']);
Route::put('/kandungan/program/{id}', [KandunganController::class, 'kemaskini_program']);
Route::put('/kandungan/lain/{id}', [KandunganController::class, 'kemaskini_lain']);

require __DIR__.'/modul/pengguna.php';

require __DIR__.'/modul/aduan.php';


require __DIR__.'/auth.php';
