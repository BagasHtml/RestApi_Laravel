<?php

use App\Http\Controllers\dataController;
use Illuminate\Support\Facades\Route;

Route::get('/api', [dataController::class, 'index'])->middleware(\App\Http\Middleware\CheckApiKey::class);
Route::get('/api/{id}', [dataController::class, 'show']);
