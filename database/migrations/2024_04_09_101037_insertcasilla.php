<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Ejemplo de inserción de datos en la tabla 'casillas'

        $casilla = new App\Models\Casilla();
        $casilla->nombre = 'Casilla 1';
        $casilla->descripcion = 'Descripcion casilla 1';
        $casilla->seccion_id = 1;
        $casilla->ubicacion = 'Ubicacion 1';
        $casilla->tipo = 'Tipo 1';
        $casilla->municipio_id = 1;
        $casilla->distrito_id = 1;
        $casilla->estado_id = 1;
        $casilla->save();



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Elimina los registros insertados al revertir la migración
        DB::table('casillas')->whereIn('nombre', ['Casilla 1', 'Casilla 2'])->delete();
    }
};
