<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarUsuarioRequest;
use App\Http\Requests\ValidarActualizacionUsuarioRequest;
use App\Http\Requests\ValidarInactivadoRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UsuarioController extends Controller
{
    public $token;
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_Usuario = DB::select('SELECT NUMERO_IDENTIFICACION, TIPO_USUARIO, NOMBRE, APELLIDO, DIRECCION, TELEFONO, CELULAR1, email, ESTADO_USUARIO FROM usuario JOIN tipo_usuario ON usuario.ID_TIPO_USUARIO = tipo_usuario.ID_TIPO_USUARIO');
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
    { $Usu=$request->all();
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

        $campos=[
            'tipo_identificacion'=>'required',
            'NUMERO_IDENTIFICACION'=>'required', /*|unique*/
            'tipo_usuario'=>'required',
            'nombre'=>'required|String|max:45',
            'apellido'=>'required|String|max:45',
            'sexo'=>'required',
            'direccion'=>'',
            'telefono'=>'Integer',
            'celular1'=>'required|Integer',
            'email'=>'required'
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            /*'unique'=>'El :attribute ya existe',*/
            'Integer'=> 'El :attribute debe ser numerico',
            'String'=>' El :attribute debe ser solo texto'
        ];
        $this->validate($request, $campos, $mensaje);

      
       
       
        

        


        mail::send('Email.BienvenidaUsuario',$Usu,function($message) use ($Usu){

            $message->to($Usu['email'],$Usu['nombre'],$Usu['NUMERO_IDENTIFICACION'],$Usu['password'])->subject('Bienvenido a ASSIPARK');
        });
        return redirect('/Usuario')->with('mensaje','Usuario registrado con ??xito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */


    public function formedit($NUMERO_IDENTIFICACION)
    {
        if ($NUMERO_IDENTIFICACION != null) {
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
        User::where('NUMERO_IDENTIFICACION', '=', $request['ID'])->update($_UsuarioD);
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
        $Usuario = $request;
        DB::update('update usuario set ESTADO_USUARIO = ' . $Usuario->{'ESTADO_USUARIO'} . ' where NUMERO_IDENTIFICACION = ' . $NUMERO_IDENTIFICACION);
        return redirect('/Usuario');
    }
}
