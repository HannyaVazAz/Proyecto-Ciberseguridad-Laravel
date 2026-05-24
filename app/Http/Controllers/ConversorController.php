public function convertir($cantidad, $moneda)
{
    $tasas = [
        'usd' => 18.5,
        'mxn' => 0.054,
    ];

    if (!isset($tasas[$moneda])) {
        return response()->json([
            'error' => 'Moneda inválida'
        ], 400);
    }

    $resultado = $cantidad * $tasas[$moneda];

    return response()->json([
        'cantidad' => $cantidad,
        'moneda' => $moneda,
        'resultado' => $resultado
    ], 200);
}