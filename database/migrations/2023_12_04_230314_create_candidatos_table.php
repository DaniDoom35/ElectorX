<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('eleccion_id');
            $table->foreign('eleccion_id')->references('id')->on('elecciones')->onDelete('cascade');
            // Otros campos del candidato
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}

