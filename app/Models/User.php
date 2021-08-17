<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipodocumento_id',
        'tipousuario_id',
        'numero_identificacion',
        'nombre',
        'apellido',
        'sexo',
        'direccion',
        'telefono',
        'celular1',
        'celular2',
        'email',
        'password',
        'estado_usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function TipoIdentificacion(){
        return $this->belongsTo(TipoIdentificacion::class);
    }

    function TipoUsuario(){
        return $this->belongsTo(TipoUsuario::class);
    }
}
