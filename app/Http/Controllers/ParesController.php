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
        $num = (int) $request->num;

        if (($num % 2) == 0) {
            $resultado = 'Es un número par :D';
        } else {
            $resultado = 'Es un número impar :o';
        }

        return view('pares', compact('resultado', 'num'));
    }
}
