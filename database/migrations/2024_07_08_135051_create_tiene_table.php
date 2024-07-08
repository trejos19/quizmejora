<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTieneTable extends Migration {

    public function up() {

        Schema::create('tiene', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('asignatura_id');
            $table->timestamps();

            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');
        });
    }
    

    public function down() {
        Schema::dropIfExists('tiene');
    }
}
