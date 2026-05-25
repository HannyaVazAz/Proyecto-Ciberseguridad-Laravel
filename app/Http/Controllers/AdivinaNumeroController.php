<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdivinaNumeroController extends Controller
{
    public function adivinar(Request $request)
    {
        // Número correcto fijo
        $numeroCorrecto = 7;

        // Intentos iniciales
        $intentos = $request->input('intentos', 3);

        // Resultado vacío
        $resultado = '';

        // Verifica si el usuario escribió un número
        if ($request->has('numero')) {

            // Número del usuario
            $numeroUsuario = $request->numero;

            // Restar intento
            $intentos--;

            // Si adivina
            if ($numeroUsuario == $numeroCorrecto) {

                $resultado = '🎉 ¡Lo lograste! Adivinaste el número.';

            } else {

                // Pistas
                if ($numeroUsuario < $numeroCorrecto) {

                    $resultado = '🔺 El número correcto es mayor.';

                } else {

                    $resultado = '🔻 El número correcto es menor.';
                }

                // Si ya no tiene intentos
                if ($intentos == 0) {

                    $resultado = '❌ Ya no tienes intentos. El número correcto era: '.$numeroCorrecto;
                }
            }
        }

        return view('adivina', compact('resultado', 'intentos'));
    }
}
