<?php

use App\Http\Controllers\CalculadoraFrontController;
use App\Http\Controllers\ContarPalabrasController;
use App\Http\Controllers\ConversorController;
use App\Http\Controllers\AdivinaNumeroController;
use App\Http\Controllers\ParesController;
use Illuminate\Support\Facades\Route;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);

Route::get('/adivina', [AdivinaNumeroController::class, 'mensaje']);

Route::match(['get', 'post'], '/contador', [ContarPalabrasController::class, 'contar']);

Route::get('/calculadora', [CalculadoraFrontController::class, 'index']);

Route::post('/calculadora/resolver', [CalculadoraFrontController::class, 'resolver']);

Route::get('/conversor', function () {
    return view('conversor');
});

Route::post('/convertir', [ConversorController::class, 'convertir']);

Route::get('/pares', [ParesController::class, 'index']);

Route::post('/pares', [ParesController::class, 'isEven']);