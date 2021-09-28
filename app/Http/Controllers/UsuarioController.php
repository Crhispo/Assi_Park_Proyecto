<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarUsuarioRequest;
use App\Http\Requests\ValidarActualizacionUsuarioRequest;
use App\Http\Requests\ValidarInactivadoRequest;
use App\Models\User;

class UsuarioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null) {

        $_Usuario = new User();
        $Select = $_Usuario->GetUsuario($id);

        return view('Modulo_Usuarios.Dashboard_admin')->with('Select', $Select);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarUsuarioRequest $request) {
        $_Usuario = new User();
        $Insert = $_Usuario->SobreCarga($request->all(), '');
        return view('Modulo_Usuarios.Dashboard_admin')->with('Insert', $Insert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id = null) {

        $_Usuario = new User();
        $Select = $_Usuario->GetUsuario($id);

        return view('Modulo_Usuarios.Dashboard_admin')->with('Select', $Select);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarActualizacionUsuarioRequest $request, $id) {

        $_Usuario = new User();

        $Over = $_Usuario->GetUsuario($id);

        $Update = $_Usuario->SobreCarga($request->except(['_token', '_method']), $id);

        return redirect('/Tabla');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function Disable(ValidarInactivadoRequest $request, $id) {
        $_Usuario = new User();
        $Disable = $_Usuario->SobreCargaDisable($request->all(), $id);

        return redirect('/Tabla');
    }

}
