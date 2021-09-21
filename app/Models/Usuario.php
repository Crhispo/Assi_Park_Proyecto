<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model {

    use HasFactory;

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

    public function SobreCarga($fillable, $Indice) {
        $this->Id = $Indice;
        $this->Id_Tipo_Identificacion = $fillable['Id_Tipo_Identificacion'];
        $this->Numero_Identificacion = $fillable['Numero_Identificacion'];
        $this->Id_Tipo_Usuario = $fillable['Id_Tipo_Usuario'];
        $this->Nombres = $fillable['Nombres'];
        $this->Apellidos = $fillable['Apellidos'];
        $this->Sexo = $fillable['Sexo'];
        $this->Direccion = $fillable['Direccion'];
        if (!empty($fillable['Telefono'])) {
            $this->Telefono = $fillable['Telefono'];
        } else {
            $this->Telefono = "NULL";
        }
        $this->Celular1 = $fillable['Celular1'];
        if (!empty($fillable['Celular2'])) {
            $this->Celular2 = $fillable['Celular2'];
        } else {
            $this->Celular2 = "NULL";
        }
        $this->Correo_Electronico = $fillable['Correo_Electronico'];
        $this->Clave = $fillable['Clave'];

        if (empty($Indice)) {
            return $Insert = $this->PostUsuario();
        } else {
            return $Update = $this->PutUsuario();
        }
    }

    private function PostUsuario() {

        return $Insert = DB::insert("CALL Registrar_Usuario("
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

    public function GetUsuario($Indice) {
        if (empty($Indice)) {
            return $Show = DB::select('CALL Consulta_General_Usuarios()');
        } else {
            return $Show = DB::select('CALL Consulta_Numero_Identidad(' . $Indice . ')');
        }
    }

    private function PutUsuario() {
        return $Update = DB::update("CALL Modificar_usuario("
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

    public function SobreCargaDisable($fillable, $Indice) {
        $this->Id = $Indice;
        $this->Estado_Usuario = $fillable['Estado_Usuario'];
        return $Disable = $this->DisableUsuario();
    }

    private function DisableUsuario() {
        return $Disable = DB::update("CALL Inhabilitar_Usuario($this->Id,$this->Estado_Usuario)");
    }

}
