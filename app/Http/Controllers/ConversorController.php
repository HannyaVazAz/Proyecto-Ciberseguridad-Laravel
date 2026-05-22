<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversorController extends Controller
{
    public function convertir($cantidad, $moneda)
    {
        $resultado = 0;

        switch ($moneda) {
            case 'usd':
                $resultado = $cantidad * 18.5;
                break;

            case 'eur':
                $resultado = $cantidad * 21;
                break;

            default:
                return response()->json([
                    'error' => 'Moneda no soportada'
                ], 400);
        }

        return response()->json([
            'cantidad_original' => $cantidad,
            'moneda' => $moneda,
            'resultado_en_mxn' => $resultado
        ]);
    }
}