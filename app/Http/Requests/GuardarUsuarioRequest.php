<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarUsuarioRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'Id_Tipo_Identificacion' => 'required',
            'Numero_Identificacion' => 'required|unique:usuario,Numero_Identificacion',
            'Id_Tipo_Usuario' => 'required',
            'Nombres' => 'required',
            'Apellidos' => 'required',
            'Sexo' => 'required',
            'Direccion' => 'nullable',
            'Telefono' => 'nullable',
            'Celular1' => 'required',
            'Celular2' => 'nullable',
            'Correo_Electronico' => 'required|email',
            'Clave' => 'required',
        ];
    }

}
