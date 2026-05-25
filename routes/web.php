<?php

use App\Http\Controllers\AdivinaNumeroController;
use App\Http\Controllers\CalculadoraFrontController;
use App\Http\Controllers\ContarPalabrasController;
use App\Http\Controllers\ConversorController;
use App\Http\Controllers\ParesController;
use Illuminate\Support\Facades\Route;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/envio', function () {
    return view('envio');
});

Route::post('/envio/calcular', function (\Illuminate\Http\Request $request) {

    $envio = new \App\Http\Controllers\EnvioController();

    $resultado = $envio->calcularEnvio(
        $request->peso,
        $request->distancia,
        $request->tipo
    );

    return view('envio', compact('resultado'));
});