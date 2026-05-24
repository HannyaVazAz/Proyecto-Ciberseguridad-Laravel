<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversorController;
use App\Http\Controllers\AdivinaNumeroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);

// Ruta del juego Adivina el Número
Route::get('/adivina', [AdivinaNumeroController::class, 'adivinar']);