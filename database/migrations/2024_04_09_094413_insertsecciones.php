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
        //insertar secciones

        $seccion = new App\Models\Seccion();
        $seccion->nombre = 'Seccion 1';
        $seccion->distritos_id = 1;
        $seccion->save();


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
