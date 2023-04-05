<?php

use App\Http\Controllers\AduanController;
use App\Http\Controllers\SistemController;
use App\Http\Controllers\KandunganController;

use Illuminate\Support\Facades\Route;


Route::get('/aduan/umum', [AduanController::class, 'umum_senarai']);
Route::get('/aduan/umum/{id}', [AduanController::class, 'umum_satu']);