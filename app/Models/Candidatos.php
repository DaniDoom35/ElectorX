<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidatos extends Model
{
    protected $table = 'candidatos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre', 
        'edad', 
        'partido_politico', 
        'propuestas',
    ];

    public function eleccion()
    {
        return $this->belongsTo(Eleccion::class);
    }
}

