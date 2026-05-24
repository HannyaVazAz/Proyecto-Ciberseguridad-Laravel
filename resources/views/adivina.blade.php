<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>

    <style>

        body{
            background-color: #f0f4f8;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contenedor{
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
        }

        h1{
            color: #333;
        }

        input{
            width: 80%;
            padding: 10px;
            margin-top: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button{
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover{
            background-color: #45a049;
        }

        .resultado{
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .intentos{
            margin-top: 15px;
            color: #555;
        }

        .reiniciar{
            background-color: #2196F3;
        }

    </style>

</head>
<body>

    <div class="contenedor">

        <h1>🎮 Juego Adivina el Número</h1>

        <p>Escribe un número del 1 al 10</p>

        <form action="/adivina" method="GET">

            <input type="number" name="numero" min="1" max="10" required>

            <input type="hidden" name="intentos" value="{{ $intentos ?? 3 }}">

            <br>

            <button type="submit">Adivinar</button>

        </form>

        <div class="intentos">
            Intentos restantes: {{ $intentos ?? 3 }}
        </div>

        @if(isset($resultado))
            <div class="resultado">
                {{ $resultado }}
            </div>
        @endif

        <br>

        <a href="/adivina">
            <button class="reiniciar">
                Volver a jugar
            </button>
        </a>

    </div>

</body>
</html>