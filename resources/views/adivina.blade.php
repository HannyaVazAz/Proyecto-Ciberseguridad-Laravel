<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>🎮 Adivina el Número</title>

    <!-- Fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            padding: 35px;
            border-radius: 20px;
            width: 360px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
            backdrop-filter: blur(10px);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #1e3a8a;
        }

        .resultado {
            margin: 15px 0;
            font-weight: 600;
            color: #111;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            text-align: center;
            font-size: 14px;
        }

        input:focus {
            border-color: #1e3a8a;
            box-shadow: 0 0 8px rgba(30, 58, 138, 0.3);
        }

        button {
            width: 100%;
            margin-top: 15px;
            padding: 12px;
            border: none;
            background: #1e3a8a;
            color: white;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0f172a;
            transform: scale(1.03);
        }

        .intentos {
            margin-top: 12px;
            font-size: 13px;
            color: #666;
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

        <button type="submit">Probar</button>
    </form>

    <p class="intentos">Intentos restantes: {{ $intentos }}</p>

</div>

</body>
</html>