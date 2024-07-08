<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAulasTable extends Migration {

    public function up() {

        Schema::create('aulas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->integer('piso');
            $table->integer('pupitres');
            $table->timestamps();
        });
    }

    
    public function down() {
        Schema::dropIfExists('aulas');
    }
}
