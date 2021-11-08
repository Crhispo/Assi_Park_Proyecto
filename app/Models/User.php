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
    protected $primaryKey = 'NUMERO_IDENTIFICACION';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID_TIPO_IDENTIFICACION',
        'NUMERO_IDENTIFICACION',
        'ID_TIPO_USUARIO',
        'NOMBRE',
        'APELLIDO',
        'SEXO',
        'DIRECCION',
        'TELEFONO',
        'CELULAR1',
        'email',
        'password'
    ];




    function TipoIdentificacion()
    {
        return $this->belongsTo(TipoIdentificacion::class);
    }

    function TipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class);
    }


}
