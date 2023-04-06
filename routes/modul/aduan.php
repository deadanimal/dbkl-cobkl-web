<?php

use App\Http\Controllers\AduanController;
use App\Http\Controllers\SistemController;
use App\Http\Controllers\KandunganController;

use Illuminate\Support\Facades\Route;


Route::get('/aduan/umum/', [AduanController::class, 'umum_senarai']);
Route::post('/aduan/umum/', [AduanController::class, 'umum_cipta']);
Route::put('/aduan/umum/{id}', [AduanController::class, 'umum_kemaskini']);

Route::get('/aduan/bersemuka/', [AduanController::class, 'bersemuka_senarai']);
Route::post('/aduan/bersemuka/', [AduanController::class, 'bersemuka_cipta']);
Route::put('/aduan/bersemuka/{id}', [AduanController::class, 'bersemuka_kemaskini']);

Route::get('/aduan/sita/', [AduanController::class, 'sita_senarai']);
Route::post('/aduan/sita/', [AduanController::class, 'sita_cipta']);
Route::put('/aduan/sita/{id}', [AduanController::class, 'sita_kemaskini']);

Route::get('/aduan/ejen/', [AduanController::class, 'ejen_senarai']);
Route::post('/aduan/ejen/', [AduanController::class, 'ejen_cipta']);
Route::put('/aduan/ejen/{id}', [AduanController::class, 'ejen_kemaskini']);

Route::get('/aduan/borang29/', [AduanController::class, 'borang29_senarai']);
Route::post('/aduan/borang29/', [AduanController::class, 'borang29_cipta']);
Route::put('/aduan/borang29/{id}', [AduanController::class, 'borang29_kemaskini']);

Route::get('/aduan/jabatan/', [AduanController::class, 'jabatan_senarai']);
Route::post('/aduan/jabatan/', [AduanController::class, 'jabatan_cipta']);
Route::put('/aduan/jabatan/{id}', [AduanController::class, 'jabatan_kemaskini']);