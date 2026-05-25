<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdivinaNumeroTest extends TestCase
{
    public function test_adivina_route()
    {
        $response = $this->get('/adivina');

        $response->assertStatus(200);

        // ✔ este es el fix real
        $response->assertSee('Adivina el Número');
    }
}
