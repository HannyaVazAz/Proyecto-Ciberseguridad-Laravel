<!DOCTYPE html>
<html>
<head>
    <title>Números pares e impares</title>
</head>
<body>

    <h1>Verificador de números pares :D</h1>

    <form action="/pares" method="POST">
        @csrf

        <input type="number" name="num" placeholder="Ingresa un número">

        <button type="submit">Verificar</button>
    </form>

    @if(isset($resultado))
        <h2>{{ $resultado }}</h2>
    @endif

</body>
</html>