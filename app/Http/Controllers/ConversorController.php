<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversorController extends Controller
{
    public function convertir(Request $request)
    {
        $cantidad = $request->cantidad;
        $de = $request->de;
        $a = $request->a;

        $tasas = [
            'USD_MXN' => 18.5,
            'MXN_USD' => 0.054,
            'EUR_MXN' => 21,
            'MXN_EUR' => 0.047,
            'USD_EUR' => 0.92,
            'EUR_USD' => 1.08,
        ];

        $clave = $de.'_'.$a;

        if (! isset($tasas[$clave])) {
            return back()->with('error', 'Conversión no soportada');
        }

        $resultado = $cantidad * $tasas[$clave];

        return view('conversor', [
            'resultado' => $resultado,
            'cantidad' => $cantidad,
            'de' => $de,
            'a' => $a,
        ]);
    }
}
