<?php

use App\Http\Controllers\CalculadoraFrontController;
use App\Http\Controllers\ContarPalabrasController;
use App\Http\Controllers\ConversorController;
use Illuminate\Support\Facades\Route;

// Ruta de bienvenida por defecto
Route::get('/', function () {
    return view('welcome');
});

Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);

Route::match(['get', 'post'], '/contador', [ContarPalabrasController::class, 'contar']);

Route::get('/calculadora', [CalculadoraFrontController::class, 'index']);

// Ruta oculta que recibe el formulario cuando le dan clic al botón
Route::post('/calculadora/resolver', [CalculadoraFrontController::class, 'resolver']);
