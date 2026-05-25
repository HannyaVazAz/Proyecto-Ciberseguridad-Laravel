<?php

namespace Tests\Feature;

use Tests\TestCase;

class OtroAdivinaNumeroTest extends TestCase
{
    public function test_la_ruta_funciona()
    {
        $response = $this->get('/adivina');

        $response->assertStatus(200);
    }
}