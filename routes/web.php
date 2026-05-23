<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversorController;
use App\Http\Controllers\ParesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/convertir/{cantidad}/{moneda}', [ConversorController::class, 'convertir']);

Route::get('/conversor', function () {
    return view('conversor');
});

Route::post('/convertir', [ConversorController::class, 'convertir']);

Route::get('/conversor', function () {
    return view('conversor');
});

Route::get('/pares/{num}', [ParesController::class, 'isEven']);