<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de Alumnos</title>
</head>
<body>
    <h1>Listado de Alumnos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Apellidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->dni }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->id) }}">Ver</a> |
                        <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a> |
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display: inline;">
                            @csrf

