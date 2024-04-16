<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casilla extends Model
{
    use HasFactory;

    protected $table = 'casillas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'tipo',
        'municipio_id',
        'distrito_id',
        'estado_id',
        'seccion_id',

    ];

    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }

}
