<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('makam/info', [App\Http\Controllers\MakamController::class, 'info'])->name('makam.info');
Route::get('makam/qr', [App\Http\Controllers\MakamController::class, 'qr'])->name('makam.qr');
