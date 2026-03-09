<?php

use App\Http\Controllers\BusQueryController;
use App\Http\Controllers\BusEloquentController;

Route::prefix('query')->group(function () {

    Route::get('/bus', [BusQueryController::class,'index']);
    Route::get('/bus-aktif', [BusQueryController::class,'busAktif']);
    Route::get('/bus-kota', [BusQueryController::class,'busKota']);

});

Route::prefix('eloquent')->group(function () {

    Route::get('/bus', [BusEloquentController::class,'index']);
    Route::get('/bus-relasi', [BusEloquentController::class,'relasi']);
    Route::get('/bus-terbaru', [BusEloquentController::class,'terbaru']);

});