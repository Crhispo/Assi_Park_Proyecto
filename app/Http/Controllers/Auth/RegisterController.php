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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (auth()->user()->tipousuario_id == 1) {
            return '/admin';
        }elseif(auth()->user()->tipousuario_id == 2){
            return '/residente';
        }elseif(auth()->user()->tipousuario_id == 3){
            return '/guarda';
        }
        return '/home';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            // 'numero_identificacion' => $data['num_documento'],
            // 'tipodocumento_id' => $data['tipo_identificacion'],
            // 'tipousuario_id' => $data['tipo_usuario'],
            // 'nombre' => $data['nombre'],
            // 'apellido' => $data['apellido'],
            // 'sexo' => $data['sexo'],
            // 'direccion' => $data['direccion'],
            // 'telefono' => $data['telefono'],
            // 'celular1' => $data['celular1'],
            // 'celular2' => $data['celular2'],
            // 'email' => $data['email'],
            // 'password' => Hash::make($data['password']),
            // 'estado_usuario' => $data['estado']

            'name' => ['zz', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
            'numero_identificacion' => $data['num_documento'],
            'tipodocumento_id' => $data['tipo_identificacion'],
            'tipousuario_id' => $data['tipo_usuario'],
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'sexo' => $data['sexo'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'celular1' => $data['celular1'],
            'celular2' => $data['celular2'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'estado_usuario' => $data['estado']
        ]);
    }
}
