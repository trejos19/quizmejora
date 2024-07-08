<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model 
{
    protected $fillable = ['dni', 'apellidos'];

    public function asignaturas() {
        return $this->belongsToMany(Asignatura::class)
                    ->withTimestamps();
    }

    public function cursos() {
        return $this->belongsToMany(Curso::class)
                    ->withTimestamps();
    }
}