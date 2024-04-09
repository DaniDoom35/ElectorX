<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class InsertAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crea un nuevo usuario administrador
        $admin = new Admin();
        $admin->name = 'Asuka';
        $admin->email = 'asuka@a.com';
        $admin->password = Hash::make('123'); // Hashea la contraseña con Bcrypt
        $admin->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Elimina el usuario administrador creado en el método up()
        Admin::where('email', 'usuario@example.com')->delete();
    }
}
