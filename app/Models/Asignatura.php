<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model 
{
    protected $fillable = ['nombre', 'codigo', 'horas'];

    public function alumnos() {
        return $this->belongsToMany(Alumno::class)
                    ->withPivot('nota', 'incidencias')
                    ->withTimestamps();
    }

    public function aulas() {
        return $this->belongsToMany(Aula::class)
                    ->withPivot('hora', 'dia', 'mes')
                    ->withTimestamps();
    }

    public function profesores() {
        return $this->belongsToMany(Profesor::class)
                    ->withTimestamps();
    }

    public function cursos() {
        return $this->belongsToMany(Curso::class)
                    ->withTimestamps();
    }
}