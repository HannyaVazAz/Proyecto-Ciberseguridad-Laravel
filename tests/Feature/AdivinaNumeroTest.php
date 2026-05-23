<?php

namespace Tests\Feature;


class AdivinaNumeroTest extends TestCase
{
    public function test_adivina_route()
    {
        $response = $this->get('/adivina');

        $response->assertStatus(200);
    }
}