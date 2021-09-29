<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory,
        Notifiable;


    protected $table = 'usuario';




    function TipoIdentificacion()
    {
        return $this->belongsTo(TipoIdentificacion::class);
    }

    function TipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class);
    }
}
