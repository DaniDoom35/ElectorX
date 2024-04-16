<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    protected $fillable = [
        'name',
        'curp',
        'clave_elector',
        'email',
        'telefono',
        'password',
        'domicilio',
        'municipio',
        'votado',
        'estado',
        'distrito',
        'seccion',
        'localidad',
        'vigencia',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Modificado de 'hashed'
    ];

}
