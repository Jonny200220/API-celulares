<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('marcas', App\Http\Controllers\MarcaController::class);
Route::resource('celulars', App\Http\Controllers\CelularController::class);
