<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarUsuarioRequest;
use App\Http\Requests\ValidarActualizacionUsuarioRequest;
use App\Http\Requests\ValidarInactivadoRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        return view('Modulo_Usuarios.Usuario', compact('_Usuario'));
    }


    public function formcreate()
    {

        return view('Modulo_Usuarios.registro_usuario');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        User::create([
            'ID_TIPO_IDENTIFICACION' => $request['tipo_identificacion'],
            'NUMERO_IDENTIFICACION' => $request['NUMERO_IDENTIFICACION'],
            'ID_TIPO_USUARIO' => $request['tipo_usuario'],
            'NOMBRE' => $request['nombre'],
            'APELLIDO' => $request['apellido'],
            'SEXO' => $request['sexo'],
            'DIRECCION' => $request['direccion'],
            'TELEFONO' => $request['telefono'],
            'CELULAR1' => $request['celular1'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/Usuarioform');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */


    public function formedit($NUMERO_IDENTIFICACION)
    {
        if($NUMERO_IDENTIFICACION != null){
            $Usuario = user::where('NUMERO_IDENTIFICACION', '=', $NUMERO_IDENTIFICACION)->firstOrFail();
        }
        return view('Modulo_Usuarios.modificar', compact('Usuario'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request)
    {
        $_UsuarioD = [
            'ID_TIPO_IDENTIFICACION' => $request['tipo_identificacion'],
            'NUMERO_IDENTIFICACION' => $request['NUMERO_IDENTIFICACION'],
            'ID_TIPO_USUARIO' => $request['tipo_usuario'],
            'NOMBRE' => $request['nombre'],
            'APELLIDO' => $request['apellido'],
            'SEXO' => $request['sexo'],
            'DIRECCION' => $request['direccion'],
            'TELEFONO' => $request['telefono'],
            'CELULAR1' => $request['celular1'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ];
        var_dump($_UsuarioD);
        DB::update($_UsuarioD);
        return redirect('/Usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function Disable(Request $request, $NUMERO_IDENTIFICACION)
    {
        $_Usuario = User::all();
        $Usuario = $request;
        $Disable_Usuario = DB::update('update usuario set ESTADO_USUARIO = ' . $Usuario->{'ESTADO_USUARIO'} . ' where NUMERO_IDENTIFICACION = ' . $NUMERO_IDENTIFICACION);
        return redirect('/Usuario');
    }
}
