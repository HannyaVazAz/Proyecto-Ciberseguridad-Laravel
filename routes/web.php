<?php

use App\Http\Controllers\ConversorController;
use Illuminate\Support\Facades\Route;

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
