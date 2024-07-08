<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Alumno</title>
</head>
<body>
    <h1>Editar Alumno</h1>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="dni">DNI:</label><br>
        <input type="text" id="dni" name="dni" value="{{ $alumno->dni }}"><br><br>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" value="{{ $alumno->apellidos }}"><br><br>
        <button type="submit">Guardar cambios</button>
    </form>
    <br>
    <a href="{{ route('alumnos.index') }}">Cancelar y volver</a>
</body>
</html>
