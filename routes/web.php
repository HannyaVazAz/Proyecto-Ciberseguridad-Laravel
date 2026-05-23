<?php

use App\Http\Controllers\ContarPalabrasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ConversorController;

Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);

Route::match(['get', 'post'], '/contador', [ContarPalabrasController::class, 'contar']);
