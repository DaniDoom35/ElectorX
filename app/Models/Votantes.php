<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotantesTable extends Migration
{
    public function up()
    {
        Schema::create('votantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');
            // Otros campos del votante
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('votantes');
    }
}
