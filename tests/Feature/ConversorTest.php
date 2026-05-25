<?php

namespace Tests\Feature;

use Tests\TestCase;

class ConversorTest extends TestCase
{
    public function test_conversor_page_loads()
    {
        $response = $this->get('/conversor');

        $response->assertStatus(200);
    }

    public function test_conversion_usd_to_mxn()
    {
        $response = $this->post('/convertir', [
            'cantidad' => 10,
            'de' => 'USD',
            'a' => 'MXN'
        ]);

        $response->assertStatus(200);

        $response->assertSee('185');
    }

    public function test_invalid_conversion()
    {
        $response = $this->post('/convertir', [
            'cantidad' => 10,
            'de' => 'USD',
            'a' => 'YEN'
        ]);

        $response->assertSessionHas('error');
    }
}