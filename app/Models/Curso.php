<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model 
{
    protected $fillable = ['nombre', 'codigo'];

    public function asignaturas() {
        return $this->belongsToMany(Asignatura::class)
                    ->withTimestamps();
    }

    public function profesores() {
        return $this->belongsToMany(Profesor::class)
                    ->withTimestamps();
    }
}