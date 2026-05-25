<?php

namespace Tests\Feature;

use Tests\TestCase;

class SegundoAdivinaNumeroTest extends TestCase
{
    public function test_pagina_adivina_funciona()
    {
        $response = $this->get('/adivina');

        $response->assertStatus(200);
    }
}
