<?php

use App\Http\Controllers\PengurusanPenggunaController;

use Illuminate\Support\Facades\Route;

Route::get('/profil', [PengurusanPenggunaController::class, 'profil']);
Route::get('/pengguna/senarai', [PengurusanPenggunaController::class, 'senarai']);
Route::get('/pengguna/daftar', [PengurusanPenggunaController::class, 'daftar']);
Route::get('/pengguna/{id}', [PengurusanPenggunaController::class, 'satu']);
Route::put('/pengguna/{id}', [PengurusanPenggunaController::class, 'kemaskini']);