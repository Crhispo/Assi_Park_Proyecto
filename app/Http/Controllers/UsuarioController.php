<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarUsuarioRequest;
use App\Http\Requests\ValidarActualizacionUsuarioRequest;
use App\Http\Requests\ValidarInactivadoRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_Usuario = User::all();
        return view('Modulo_Usuarios.Dashboard_admin', compact('_Usuario'));
    }


    public function create()
    {
        return view('Modulo_Usuarios.Dashboard_admin');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $_Usuario = request()->except('_token');
        User::insert($_Usuario);
        return redirect('Usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */


    public function show($NUMERO_IDENTIFICACION = null)
    {
        $_UsuarioU = user::where('NUMERO_IDENTIFICACION','=',$NUMERO_IDENTIFICACION)->firstOrFail();
        return view('Modulo_Usuarios.Dashboard_admin', compact('_UsuarioU'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */


    public function update(ValidarActualizacionUsuarioRequest $request, $NUMERO_IDENTIFICACION= null)
    {
        $_Usuario = request()->except(['_token', '_method']);
        User::where('NUMERO_IDENTIFICACION', "=", $NUMERO_IDENTIFICACION)->update($_Usuario);
        var_dump($_Usuario);
        //return view('Modulo_Usuarios.Dashboard_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function Disable(ValidarInactivadoRequest $request, $NUMERO_IDENTIFICACION)
    {
        $_Usuario = request();
        var_dump($_Usuario);
        $Disable_Usuario = DB::update('update usuario set ESTADO_USUARIO = ' . $_Usuario->{'ESTADO_USUARIO'} . ' where NUMERO_IDENTIFICACION = ' . $NUMERO_IDENTIFICACION);
        return redirect('/Tabla');
    }
}
