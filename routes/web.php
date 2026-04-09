<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\dataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', [dataController::class, 'index'])
    ->middleware(\App\Http\Middleware\CheckApiKey::class)
    ->name('user');
    
Route::get('/api/{id}', [dataController::class, 'show']);

Route::get('/api/barang', [BarangController::class, 'index'])
    ->middleware(\App\Http\Middleware\CheckApiKey::class)
    ->name('barang');
