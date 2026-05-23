<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContarPalabrasController extends Controller
{
    public function contar(Request $request)
    {
        $texto = $request->input('texto', '');
        $contador = str_word_count($texto);

        return view('contador', ['resultado' => $contador,
            'textoOriginal' => $texto]);
    }
}
