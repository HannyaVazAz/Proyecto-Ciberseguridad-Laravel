<?php

use App\Http\Controllers\CalculadoraFrontController;
use App\Http\Controllers\ContarPalabrasController;use App\Http\Controllers\ConversorController;
use App\Http\Controllers\AdivinaNumeroController;
use Illuminate\Support\Facades\Route;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);
