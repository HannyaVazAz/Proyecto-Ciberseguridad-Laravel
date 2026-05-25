<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Envío</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f6f9;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .card{
            background:white;
            padding:40px;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
            width:350px;
        }

        h1{
            text-align:center;
            margin-bottom:25px;
        }

        input, select, button{
            width:100%;
            padding:10px;
            margin-top:10px;
            border-radius:8px;
            border:1px solid #ccc;
        }

        button{
            background:#28a745;
            color:white;
            font-weight:bold;
            cursor:pointer;
        }

        button:hover{
            background:#218838;
        }

        .resultado{
            margin-top:20px;
            text-align:center;
            font-size:24px;
            color:green;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="card">

    <h1>📦 Cálculo de Envío</h1>

    <form method="POST" action="/envio/calcular">
        @csrf

        <input type="number" name="peso" placeholder="Peso en kg" required>

        <input type="number" name="distancia" placeholder="Distancia en km" required>

        <select name="tipo">
            <option value="normal">Normal</option>
            <option value="express">Express</option>
        </select>

        <button type="submit">
            Calcular Envío
        </button>
    </form>

    @isset($resultado)
        <div class="resultado">
            Total: ${{ $resultado }}
        </div>
    @endisset

</div>

</body>
</html>