<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    function TipoIdentificacion()
    {
        return $this->belongsTo(TipoIdentificacion::class);
    }

    function TipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class);
    }

    protected $Id = "";
    protected $Id_Tipo_Identificacion = "";
    protected $Numero_Identificacion = "";
    protected $Id_Tipo_Usuario = "";
    protected $Nombres = "";
    protected $Apellidos = "";
    protected $Sexo = "";
    protected $Direccion = "";
    protected $Telefono = "NULL";
    protected $Celular1 = "";
    protected $Celular2 = "NULL";
    protected $Correo_Electronico = "";
    protected $Clave = "";
    protected $Estado_Usuario = "";

    public function SobreCarga($fillable, $Indice)
    {
        $this->Id = $Indice;
        $this->Id_Tipo_Identificacion = $fillable['id_tipo_identificacion'];
        $this->Numero_Identificacion = $fillable['NUMERO_IDENTIFICACION'];
        $this->Id_Tipo_Usuario = $fillable['id_tipo_usuario'];
        $this->Nombres = $fillable['nombre'];
        $this->Apellidos = $fillable['apellido'];
        $this->Sexo = $fillable['sexo'];
        $this->Direccion = $fillable['DIRRECION'];
        if (!empty($fillable['telefono'])) {
            $this->Telefono = $fillable['Telefono'];
        } else {
            $this->Telefono = "NULL";
        }
        $this->Celular1 = $fillable['celular1'];
        $this->Correo_Electronico = $fillable['email'];
        $this->Clave = $fillable['password'];

        if (empty($Indice)) {
            return $this->PostUsuario();
        } else {
            return $this->PutUsuario();
        }
    }

    private function PostUsuario()
    {
        return DB::insert("CALL Registrar_Usuario("
            . "$this->Id_Tipo_Identificacion, "
            . "$this->Numero_Identificacion, "
            . "$this->Id_Tipo_Usuario, "
            . "'$this->Nombres', "
            . "'$this->Apellidos', "
            . "$this->Sexo, "
            . "'$this->Direccion', "
            . "$this->Telefono, "
            . "$this->Celular1, "
            . "$this->Celular2, "
            . "'$this->Correo_Electronico', "
            . "'$this->Clave')");
    }

    public function GetUsuario($Indice)
    {
        if (empty($Indice)) {
            return DB::select('CALL Consulta_General_Usuarios()');
        } else {
            return DB::select('CALL Consulta_Numero_Identidad(' . $Indice . ')');
        }
    }

    private function PutUsuario()
    {
        return DB::update("CALL Modificar_usuario("
            . "$this->Id, "
            . "$this->Id_Tipo_Identificacion, "
            . "$this->Numero_Identificacion, "
            . "$this->Id_Tipo_Usuario, "
            . "'$this->Nombres', "
            . "'$this->Apellidos', "
            . "$this->Sexo, "
            . "'$this->Direccion', "
            . "$this->Telefono, "
            . "$this->Celular1, "
            . "$this->Celular2, "
            . "'$this->Correo_Electronico', "
            . "'$this->Clave')");
    }

    public function SobreCargaDisable($fillable, $Indice)
    {
        $this->Id = $Indice;
        $this->Estado_Usuario = $fillable['Estado_Usuario'];
        return $this->DisableUsuario();
    }

    private function DisableUsuario()
    {
        return DB::update("CALL Inhabilitar_Usuario($this->Id,$this->Estado_Usuario)");
    }
}
