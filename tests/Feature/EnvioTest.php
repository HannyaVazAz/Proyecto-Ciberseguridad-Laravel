<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\EnvioController;

class EnvioTest extends TestCase
{
    public function test_envio_normal()
    {
        $envio = new EnvioController();

        $resultado = $envio->calcularEnvio(2, 20, "normal");

        $this->assertEquals(150, $resultado);
    }

    public function test_envio_express()
    {
        $envio = new EnvioController();

        $resultado = $envio->calcularEnvio(2, 20, "express");

        $this->assertEquals(250, $resultado);
    }

    public function test_envio_distancia_larga()
    {
        $envio = new EnvioController();

        $resultado = $envio->calcularEnvio(6, 100, "normal");

        $this->assertEquals(300, $resultado);
    }

    public function test_datos_invalidos()
    {
        $envio = new EnvioController();

        $resultado = $envio->calcularEnvio(-1, 20, "normal");

        $this->assertEquals("Datos inválidos", $resultado);
    }
}