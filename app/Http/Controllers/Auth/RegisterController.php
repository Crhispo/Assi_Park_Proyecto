<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\TipoIdentificacion;
use App\Models\TipoUsuario;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function showRegistrationForm()
    {
        $tipoIdentificacion = TipoIdentificacion::all();
        $tipoUsuario = TipoUsuario::all();
        return view('auth.register', compact('tipoIdentificacion', 'tipoUsuario'));
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (auth()->user()->ID_TIPO_USUARIO  == 1) {
            return '/vehiculo';
        } elseif (auth()->user()->ID_TIPO_USUARIO  == 2) {
            return '/vehiculo';
        } elseif (auth()->user()->ID_TIPO_USUARIO  == 3) {
            return '/vehiculo';
        } else {
            return '/vehiculo';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'num_documento' => ['required', 'unique:usuario,NUMERO_IDENTIFICACION', 'numeric', 'min:7'],
            'tipo_identificacion' => ['required', 'numeric'],
            'tipo_usuario' => ['required', 'numeric'],
            'nombre' => ['bail','required', 'string', 'max:50', 'min:2'],
            'apellido' => ['bail', 'required', 'string', 'max:50', 'min:2'],
            'sexo' => ['required', 'numeric'],
            'direccion' => ['required', 'string', 'max:70', 'min:5'],
            'telefono' => ['required', 'numeric', 'min:10'],
            'celular1' => ['required', 'numeric', 'min:10'],
            'email' => ['required', 'string', 'email','unique:usuario,email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'estado' => ['required', 'numeric']
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'numero_identificacion' => $data['NUMERO_IDENTIFICACION'],
            'id_tipo_usuario' => $data['ID_TIPO_USUARIO'],
            'id_tipo_identificacion' => $data['ID_TIPO_IDENTIFICACION'],
            'nombre' => $data['NOMBRE'],
            'apellido' => $data['APELLIDO'],
            'sexo' => $data['SEXO'],
            'direccion' => $data['DIRECCION'],
            'telefono' => $data['TELEFONO'],
            'celular1' => $data['CELULAR1'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'estado_usuario' => $data['estado']
        ]);
        Mail::send('Email.BienvenidaUsuario',$data,function($message)use ($data){

            $message->to($data['email'],$data['nombre'])->subject('Bienvenido a ASSIPARK');
        });
    }
}
/*<div class="swal-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--error">
    <div class="swal-icon--error__x-mark">
      <span class="swal-icon--error__line swal-icon--error__line--left"></span>
      <span class="swal-icon--error__line swal-icon--error__line--right"></span>
    </div>
  </div><div class="swal-title" style="">Error</div><div class="swal-text" style="">El usuario no se encuentra registrado. Puedes crear una cuenta es gratis!!</div><div class="swal-footer"><div class="swal-button-container">

    <button class="swal-button swal-button--confirm">OK</button>

    <div class="swal-button__loader">
      <div></div>
      <div></div>
      <div></div>
    </div>

  </div></div></div>*/ 