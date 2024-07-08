<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Alumno</title>
</head>
<body>
    <center><h1>Alumno nuevo ☺</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="dni">DNI:</label><br>
        <input type="text" id="dni" name="dni"><br><br>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos"><br><br>
        <button type="submit">Guardar</button></center>
    </form>
</body>
</html>
