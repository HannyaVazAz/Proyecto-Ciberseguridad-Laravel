<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculadoraFrontController;
use App\Http\Controllers\ContarPalabrasController;
use App\Http\Controllers\ConversorController;
use App\Http\Controllers\AdivinaNumeroController;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Conversor
Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);

// 🎮 Juego Adivina el Número
Route::get('/adivina', [AdivinaNumeroController::class, 'adivinar']);
