<!DOCTYPE html>
<html>
<head>
    <title>Números pares</title>

    <style>
        body {
            background-color: #18134F;
            font-family: Arial, sans-serif;
            color: white;

            display: flex;
            justify-content: center;
            align-items: center;

            height: 100vh;
            margin: 0;
        }

        .contenedor {
            background-color: white;
            color: #F4700B;

            padding: 40px;
            border-radius: 15px;

            text-align: center;

            width: 350px;

            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        input {
            padding: 10px;
            width: 80%;
            margin-top: 15px;

            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #18134F;
            color: white;

            border: none;
            padding: 10px 20px;

            margin-top: 15px;

            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h1>Verificador de números pares e impares</h1>

        <form action="/pares" method="POST">
            @csrf

            <input type="number" name="num" placeholder="Ingresa un número" value="{{ old('num', $num ?? '') }}">

            <br>

            <button type="submit">Verificar</button>
        </form>

        @if(isset($resultado))
            <h2>{{ $resultado }}</h2>
        @endif

    </div>

</body>
</html>