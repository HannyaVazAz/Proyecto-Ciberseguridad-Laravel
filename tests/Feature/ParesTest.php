<?php

namespace Tests\Feature;

use Tests\TestCase;

class ParesTest extends TestCase
{
    public function test_numero_par()
    {
        $response = $this->post('/pares', [
            'num' => 8,
        ]);

        $response->assertSee('Es un número par');
    }

    public function test_numero_impar()
    {
        $response = $this->post('/pares', [
            'num' => 7,
        ]);

        $response->assertSee('Es un número impar');
    }
}
