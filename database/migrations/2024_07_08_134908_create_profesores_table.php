<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoresTable extends Migration {

    public function up() {

        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('apellidos');
            $table->timestamps();
        });
    }
    

    public function down() {
        Schema::dropIfExists('profesores');
    }
}