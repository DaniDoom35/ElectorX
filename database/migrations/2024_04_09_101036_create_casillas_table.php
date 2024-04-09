<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casillas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->foreignId('seccion_id')->constrained('secciones');
            $table->foreignId('municipio_id')->constrained('municipios');
            $table->foreignId('distrito_id')->constrained('distritos');
            $table->foreignId('estado_id')->constrained('estados');
            $table->string('ubicacion');
            $table->string('tipo');
            $table->string('tipo_casilla');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casillas');
    }
}
