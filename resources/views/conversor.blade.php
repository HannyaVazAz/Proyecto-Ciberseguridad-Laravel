<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Monedas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #141e30, #243b55);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contenedor {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 20px;
            width: 350px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #00c6ff;
            background: linear-gradient(to right, #0072ff, #00c6ff);
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.03);
        }

        .resultado {
            margin-top: 25px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        .error {
            margin-top: 20px;
            background: rgba(255,0,0,0.2);
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h1>💱 Conversor</h1>

        <form method="POST" action="/convertir">
            @csrf

            <label>Cantidad</label>
            <input type="number" step="0.01" name="cantidad" required>

            <label>De</label>
            <select name="de">
                <option value="USD">USD</option>
                <option value="MXN">MXN</option>
                <option value="EUR">EUR</option>
            </select>

            <label>A</label>
            <select name="a">
                <option value="MXN">MXN</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
            </select>

            <button type="submit">
                Convertir
            </button>
        </form>

        @isset($resultado)
            <div class="resultado">
                {{ $cantidad }} {{ $de }}
                =
                {{ round($resultado, 2) }} {{ $a }}
            </div>
        @endisset

        @if(session('error'))
            <div class="error">
                {{ session('error') }}
            </div>
        @endif

    </div>

</body>
</html>