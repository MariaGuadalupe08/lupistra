<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola soy la vista llamada prueba</h1>
    <p>{{ $variable }}</p>
    <p>{{-- $variable --}}</p>
    <p>{{-- $variable --}}</p>


    <a href="{{ route('ruta.users.create') }}">Crear usuario</a>
    <a href="{{ route('ruta.users.show') }}">Ver usuario</a>
    <a href="{{ route('ruta.users.edit') }}">Editar usuario</a>
    <a href="{{ route('ruta.users.destroy') }}">Eliminar usuario</a>

</body>
</html>
