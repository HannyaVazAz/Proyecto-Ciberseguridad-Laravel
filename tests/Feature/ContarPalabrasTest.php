<?php

namespace Tests\Unit;

use App\Http\Controllers\ContarPalabrasController;
use Illuminate\Http\Request;
use Tests\TestCase;

class ContarPalabrasTest extends TestCase
{
    public function test_contador_palabras_resultado(): void
    {
        $controller = new ContarPalabrasController;

        // Creamos la petición simulada con un texto de 4 palabras
        $request = Request::create('/contar', 'POST', ['texto' => 'Hola mundo desde Laravel']);

        // Ejecutamos el método del controlador
        $response = $controller->contar($request);

        // Verificamos que los datos pasados a la vista sumen exactamente 4
        $this->assertEquals(4, $response->getData()['resultado']);
    }
}
