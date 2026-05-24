<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>🎮 Adivina el Número</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            color: #333;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        h1 {
            margin-bottom: 10px;
        }

        .resultado {
            margin: 15px 0;
            font-weight: bold;
        }

        input {
            padding: 10px;
            width: 80%;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            background: #2a5298;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1e3c72;
        }

        .intentos {
            margin-top: 10px;
            font-size: 14px;
            color: gray;
        }
    </style>
</head>

<body>

<div class="card">

    <h1>🎮 Adivina el Número</h1>

    <p class="resultado">{{ $resultado }}</p>

    <form method="GET" action="/adivina">

        <input type="number" name="numero" placeholder="Escribe un número" required>

        <input type="hidden" name="intentos" value="{{ $intentos }}">

        <br>

        <button type="submit">Probar</button>
    </form>

    <p class="intentos">Intentos restantes: {{ $intentos }}</p>

</div>

</body>
</html>