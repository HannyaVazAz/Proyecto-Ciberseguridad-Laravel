<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Web</title>
    <script src="https://cdn.tailwindcss.com"></script> </head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">Calculadora del Equipo</h1>

        <form action="/calculadora/resolver" method="POST">
            @csrf <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Número 1 (o Base):</label>
                <input type="number" step="any" name="num1" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Operación:</label>
                <select name="operacion" class="w-full px-3 py-2 border rounded-lg">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="potencia">Potencia</option>
                </select>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Número 2 (o Exponente):</label>
                <input type="number" step="any" name="num2" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700">
                Calcular
            </button>
        </form>

        @if(isset($resultado))
            <div class="mt-6 p-4 bg-green-100 text-green-800 text-center rounded-lg border border-green-300">
                <span class="font-bold">Resultado:</span> {{ $resultado }}
            </div>
        @endif
    </div>

</body>
</html>