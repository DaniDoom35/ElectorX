<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Funcionario;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //

        $funcionario = new Funcionario();
        $funcionario->name = 'Rei';
        $funcionario->email = 'Rei@r.com';
        $funcionario->puesto = 'Jefe';
        $funcionario->telefono = '1234567890';
        $funcionario->casilla_id = 1;
        $funcionario->password = bcrypt
        ('123');
        $funcionario->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //


    }
};
