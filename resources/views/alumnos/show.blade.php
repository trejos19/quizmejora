<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Alumno</title>
</head>
<body>
    <h1>Detalles del Alumno</h1>
    <p><strong>DNI:</strong> {{ $alumno->dni }}</p>
    <p><strong>Apellidos:</strong> {{ $alumno->apellidos }}</p>
    <br>
    <a href="{{ route('alumnos.index') }}">Volver al Listado</a>
</body>
</html>
