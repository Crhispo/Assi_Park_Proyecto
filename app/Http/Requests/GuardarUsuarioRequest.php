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
            'ID_TIPO_IDENTIFICACION' => 'required',
            'NUMERO_IDENTIFICACION' => 'required|unique:usuario,NUMERO_IDENTIFICACION',
            'ID_TIPO_USUARIO' => 'required',
            'NOMBRE' => 'required',
            'APELLIDO' => 'required',
            'SEXO' => 'required',
            'DIRECCION' => 'nullable',
            'TELEFONO' => 'nullable',
            'CELULAR1' => 'required',
            'CELULAR2' => 'nullable',
            'Correo' => 'required|email',
            'CONTRASENA' => 'required',
        ];
    }

}
