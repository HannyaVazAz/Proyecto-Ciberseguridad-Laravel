<?php

namespace Tests\Feature;

use Tests\TestCase;

class CalculadoraFrontTest extends TestCase
{
    public function test_carga_la_vista_de_la_calculadora(): void
    {
        // Simulamos entrar a la URL
        $response = $this->get('/calculadora');

        // Verificamos que cargue bien (200) y que muestre el título
        $response->assertStatus(200)
            ->assertSee('Calculadora del Equipo');
    }

    public function test_resuelve_operacion_en_la_vista(): void
    {
        // Simulamos llenar el formulario con 10 + 5 y darle a "Calcular"
        $response = $this->post('/calculadora/resolver', [
            'num1' => 10,
            'num2' => 5,
            'operacion' => 'suma',
        ]);

        // Verificamos que la página responda bien y muestre el 15
        $response->assertStatus(200)
            ->assertSee('Resultado:')
            ->assertSee('15');
    }
}
