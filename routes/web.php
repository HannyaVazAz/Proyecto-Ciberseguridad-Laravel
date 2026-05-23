<?php

use App\Http\Controllers\CalculadoraFrontController;
use App\Http\Controllers\ContarPalabrasController;
use App\Http\Controllers\ConversorController;
use Illuminate\Support\Facades\Route;

// Ruta de bienvenida por defecto
Route::get('/', function () {
    return view('welcome');
});

// Ruta del Conversor (de tu equipo)
Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);

// --- TUS RUTAS: CONTADOR DE PALABRAS ---
Route::match(['get', 'post'], '/contador', [ContarPalabrasController::class, 'contar']);

// --- RUTAS DE TU COMPAÑERA: CALCULADORA ---
// Ruta para ver el formulario
Route::get('/calculadora', [CalculadoraFrontController::class, 'index']);

// Ruta oculta que recibe el formulario cuando le dan clic al botón
Route::post('/calculadora/resolver', [CalculadoraFrontController::class, 'resolver']);