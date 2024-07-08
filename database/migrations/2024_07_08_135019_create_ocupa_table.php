<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcupaTable extends Migration {
    public function up() {
        Schema::create('ocupa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aula_id');
            $table->unsignedBigInteger('asignatura_id');
            $table->dateTime('hora');
            $table->string('dia');
            $table->string('mes');
            $table->timestamps();

            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('ocupa');
    }
}
