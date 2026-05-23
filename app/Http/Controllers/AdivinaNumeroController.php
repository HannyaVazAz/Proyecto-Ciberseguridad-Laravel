<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdivinaNumeroController extends Controller
{
    public function mensaje()
    {
        $numero = rand(1, 10);

        return "Adivina el número. Número generado: " . $numero;
    }
}