<?php

namespace App\Http\Controllers;

class EnvioController extends Controller
{
    public function calcularEnvio($peso, $distancia, $prioridad)
    {
        if ($peso <= 0 || $distancia <= 0) {
            return 'Datos inválidos';
        }

        $costo = ($peso * 10) + ($distancia * 2);

        if ($prioridad === 'express') {
            $costo += 100;
        }

        return $costo;
    }
}
