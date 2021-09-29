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
        'numero_identificacion',
        'id_tipo_usuario',
        'id_tipo_identificacion',
        'nombre',
        'apellido',
        'sexo',
        'direccion',
        'telefono',
        'celular1',
        'email',
        'password',
        'estado_usuario'
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
