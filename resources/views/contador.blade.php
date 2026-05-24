<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Palabras</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-2xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-2 flex items-center gap-2">
            Contador de Palabras
        </h1>
        <p class="text-gray-600 mb-6">
            Ingresa tu texto aquí abajo para calcular la cantidad exacta de palabras en tiempo real.
        </p>

        <form action="/contador" method="POST" class="space-y-4">
            @csrf 
            
            <div>
                <label for="texto" class="block text-sm font-medium text-gray-700 mb-2">
                    Tu texto o párrafo:
                </label>
                <textarea 
                    id="texto" 
                    name="texto" 
                    rows="6" 
                    class="w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700 placeholder-gray-400"
                    placeholder="Escribe o pega algo interesante aquí..."
                    required>{{ $textoOriginal ?? '' }}</textarea>
            </div>

            <div class="flex gap-4">
                <button 
                    type="submit" 
                    class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200 shadow-sm cursor-pointer">
                    Calcular palabras
                </button>

                <button 
                    type="button" 
                    onclick="limpiarTexto()"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-3 px-6 rounded-lg transition duration-200 shadow-sm cursor-pointer">
                    Borrar todo
                </button>
            </div>
        </form>

        @if(isset($resultado))
            <div id="seccion-resultado" class="mt-8 pt-6 border-t border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Resultado del Análisis:</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-4 rounded-lg border border-blue-100 flex flex-col justify-center items-center">
                        <span class="text-sm text-blue-700 font-medium uppercase tracking-wider">Total de Palabras</span>
                        <span class="text-4xl font-extrabold text-blue-900 mt-1">{{ $resultado }}</span>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <script>
        function limpiarTexto() {
            // Vacía el cuadro de texto
            document.getElementById('texto').value = '';
            
            // Si el cuadro de resultados está en pantalla, lo esconde
            const resultado = document.getElementById('seccion-resultado');
            if (resultado) {
                resultado.style.display = 'none';
            }
        }
    </script>

</body>
</html>