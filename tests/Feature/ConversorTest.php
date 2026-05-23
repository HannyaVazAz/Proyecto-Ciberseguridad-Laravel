<?php

namespace Tests\Feature;

use Tests\TestCase;

class ConversorTest extends TestCase
{
    public function test_conversion_usd()
    {
        $response = $this->get('/convertir/10/usd');

        $response->assertStatus(200);
    }

    public function test_moneda_invalida()
    {
        $response = $this->get('/convertir/10/yen');

        $response->assertStatus(400);
    }
}
