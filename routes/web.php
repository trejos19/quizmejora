<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');


});
Route::get('alumno',[AlumnoController::class,'create']);
Route::post('alumno',[AlumnoController::class,'store'])->name('alumnos.store');

Route::put('alumnos/alumno', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('alumnos/alumno/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('alumnos/alumno', [AlumnoController::class, 'show'])->name('alumnos.show');


