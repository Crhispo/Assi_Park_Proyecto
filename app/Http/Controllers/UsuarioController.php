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
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_Usuario = User::all();
        return view('Modulo_Usuarios.Dashboard_admin')->with('Select', $_Usuario);
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
        $Insert = User::insert($_Usuario);
        var_dump($_Usuario, $Insert);
        //return view('Modulo_Usuarios.Dashboard_admin')->with('Insert', $Insert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */


    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */


    public function edit($NUMERO_IDENTIFICACION)
    {

        $_Usuario = User::findOrFail($NUMERO_IDENTIFICACION);
        return view('Modulo_Usuarios.modificar', compact('_Usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */


    public function update(ValidarActualizacionUsuarioRequest $request, $NUMERO_IDENTIFICACION)
    {
        $_Usuario = request()->except(['_token', '_method']);
        User::where('NUMERO_IDENTIFICACION', "=", $NUMERO_IDENTIFICACION)->update($_Usuario);

        User::findOrFail($NUMERO_IDENTIFICACION);
        return redirect('/Tabla');
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
        $Disable_Usuario = DB::update('update apartamento set ESTADO_USUARIO = ' . $_Usuario->{'ESTADO_USUARIO'} . ' where NUMERO_IDENTIFICACION = ' . $NUMERO_IDENTIFICACION);
        return redirect('/Tabla');
    }
}
