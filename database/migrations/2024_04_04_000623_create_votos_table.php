<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('votos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('candidato_id');
            $table->unsignedBigInteger('eleccion_id');
            $table->timestamp('fecha_voto')->useCurrent();
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('candidato_id')->references('id')->on('candidatos');
            $table->foreign('eleccion_id')->references('id')->on('elecciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votos');
    }
};
