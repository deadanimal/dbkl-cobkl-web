<?php

use App\Http\Controllers\CobController;

use Illuminate\Support\Facades\Route;


Route::get('/cob/temujanji/', [CobController::class, 'temujanji_senarai']);
Route::post('/cob/temujanji/', [CobController::class, 'temujanji_cipta']);
Route::put('/cob/temujanji/{id}', [CobController::class, 'temujanji_kemaskini']);

Route::get('/cob/cadangan/', [CobController::class, 'cadangan_senarai']);
Route::post('/cob/cadangan/', [CobController::class, 'cadangan_cipta']);
Route::put('/cob/cadangan/{id}', [CobController::class, 'cadangan_kemaskini']);

Route::get('/cob/kursus/', [CobController::class, 'kursus_senarai']);
Route::post('/cob/kursus/', [CobController::class, 'kursus_cipta']);
Route::put('/cob/kursus/{id}', [CobController::class, 'kursus_kemaskini']);

Route::get('/cob/pertanyaan/', [CobController::class, 'pertanyaan_senarai']);
Route::post('/cob/pertanyaan/', [CobController::class, 'pertanyaan_cipta']);
Route::put('/cob/pertanyaan/{id}', [CobController::class, 'pertanyaan_kemaskini']);

Route::get('/cob/pemantauan/', [CobController::class, 'pemantauan_senarai']);
Route::post('/cob/pemantauan/', [CobController::class, 'pemantauan_cipta']);
Route::put('/cob/pemantauan/{id}', [CobController::class, 'pemantauan_kemaskini']);

Route::get('/cob/mesyuarat/', [CobController::class, 'mesyuarat_senarai']);
Route::post('/cob/mesyuarat/', [CobController::class, 'mesyuarat_cipta']);
Route::put('/cob/mesyuarat/{id}', [CobController::class, 'mesyuarat_kemaskini']);

Route::get('/cob/maklumbalas/', [CobController::class, 'maklumbalas_senarai']);
Route::post('/cob/maklumbalas/', [CobController::class, 'maklumbalas_cipta']);
Route::put('/cob/maklumbalas/{id}', [CobController::class, 'maklumbalas_kemaskini']);

Route::get('/cob/agm/', [CobController::class, 'agm_senarai']);
Route::post('/cob/agm/', [CobController::class, 'agm_cipta']);
Route::put('/cob/agm/{id}', [CobController::class, 'agm_kemaskini']);