<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParesController extends Controller
{
    public function index()
    {
        return view('pares');
    }

    public function isEven(Request $request)
    {
        $num = $request->num;

        if (!is_numeric($num) || intval($num) != $num) {
            $resultado = 'Solo se permiten números enteros';
        } elseif (($num % 2) == 0) {
            $resultado = 'Es un número par';
        } else {
            $resultado = 'Es un número impar';
        }

        return view('pares', compact('resultado'));
    }
}