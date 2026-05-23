<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraFrontController extends Controller
{
    // Función para mostrar la página en blanco
    public function index()
    {
        return view('calculadora');
    }

    // Función para procesar el botón de "Calcular"
    public function resolver(Request $request)
    {
        $num1 = (float) $request->input('num1');
        $num2 = (float) $request->input('num2');
        $operacion = $request->input('operacion');

        $resultado = 0;

        // Aquí van todas las funciones del equipo
        if ($operacion == 'suma') {
            $resultado = $num1 + $num2;
        } elseif ($operacion == 'resta') {
            $resultado = $num1 - $num2;
        } elseif ($operacion == 'potencia') {
            $resultado = pow($num1, $num2);
        }

        // Devolvemos la misma vista, pero inyectándole la variable del resultado
        return view('calculadora', ['resultado' => $resultado]);
    }
}
