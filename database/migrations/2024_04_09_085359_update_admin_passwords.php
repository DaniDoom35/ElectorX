<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class UpdateAdminPasswords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Obtén todos los administradores
        $admins = Admin::all();

        foreach ($admins as $admin) {
            // Hashea la contraseña con Bcrypt
            $hashedPassword = Hash::make($admin->password);

            // Actualiza la contraseña en la base de datos
            DB::table('admins')
                ->where('id', $admin->id)
                ->update(['password' => $hashedPassword]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // No se necesita una operación de reversión en este caso
    }
}
