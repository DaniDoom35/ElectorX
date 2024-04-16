<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Estado;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            //Insertar a queretaro

            $estado = new Estado();
            $estado->nombre = 'Queretaro';
            $estado->save();







    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
