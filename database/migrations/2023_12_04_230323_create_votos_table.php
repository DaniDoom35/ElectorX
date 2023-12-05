<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotosTable extends Migration
{
    public function up()
    {
        Schema::create('votos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('votante_id');
            $table->unsignedBigInteger('candidato_id');
            $table->unsignedBigInteger('eleccion_id');
            $table->foreign('votante_id')->references('id')->on('votantes')->onDelete('cascade');
            $table->foreign('candidato_id')->references('id')->on('candidatos')->onDelete('cascade');
            $table->foreign('eleccion_id')->references('id')->on('elecciones')->onDelete('cascade');
            // Otros campos relacionados con el voto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('votos');
    }
}

