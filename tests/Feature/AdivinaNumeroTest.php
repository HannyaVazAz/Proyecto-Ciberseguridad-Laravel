<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdivinaNumeroTest extends TestCase
{
    // Verifica que la ruta del juego funcione correctamente
    public function test_adivina_route()
    {
        // Entrar a la ruta del juego
        $response = $this->get('/adivina');

        // Verificar que la página cargue correctamente
        $response->assertStatus(200);

        // Verificar que aparezca el texto del juego
        $response->assertSee('Juego Adivina el Número');
    }
}