<?php

use App\Http\Controllers\MediasiController;

use Illuminate\Support\Facades\Route;


Route::get('/mediasi/panggilan/', [MediasiController::class, 'panggilan_senarai']);
Route::post('/mediasi/panggilan/', [MediasiController::class, 'panggilan_cipta']);
Route::put('/mediasi/panggilan/{id}', [MediasiController::class, 'panggilan_kemaskini']);

Route::get('/mediasi/borang/', [MediasiController::class, 'borang_senarai']);
Route::post('/mediasi/borang/', [MediasiController::class, 'borang_cipta']);
Route::put('/mediasi/borang/{id}', [MediasiController::class, 'borang_kemaskini']);
Route::post('/mediasi/borang-upload', [MediasiController::class, 'borang_upload']);
