<?php

namespace App\Http\Controllers;

class EnvioController extends Controller
{
    public function calcularEnvio($peso, $distancia, $prioridad)
    {
        if ($peso <= 0 || $distancia <= 0) {
            return "Datos inválidos";
        }

        $costo = 0;

        if ($peso <= 1) {
            $costo = 80;
        } elseif ($peso <= 5) {
            $costo = 150;
        } else {
            $costo = 250;
        }

        if ($distancia > 50) {
            $costo += 50;
        }

        if ($prioridad === "express") {
            $costo += 100;
        }

        return $costo;
    }
}