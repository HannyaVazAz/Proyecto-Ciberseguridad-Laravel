<?php

use App\Http\Controllers\CalculadoraFrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ConversorController;

Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);

// Ruta para ver el formulario
Route::get('/calculadora', [CalculadoraFrontController::class, 'index']);

// Ruta oculta que recibe el formulario cuando le dan clic al botón
Route::post('/calculadora/resolver', [CalculadoraFrontController::class, 'resolver']);
