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
        //insertar distritos

        $distrito = new App\Models\Distrito();
        $distrito->nombre = 'Distrito 1';
        $distrito->descripcion = 'distrito 1';
        $distrito->estado_id = 1;
        $distrito->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
