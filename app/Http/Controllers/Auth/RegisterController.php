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
        if (auth()->user()->tipo_usuario_id == 1) {
            return '/admin';
        } elseif (auth()->user()->tipo_usuario_id == 2) {
            return '/residente';
        } elseif (auth()->user()->tipo_usuario_id == 3) {
            return '/guarda';
        } else {
            return '/home';
        }
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
            'numero_identificacion' => ['unique:users', 'required', 'numeric', 'max:10', 'min:7'],
            'tipodocumento_id' => ['required', 'nullable|regex:/^[0-9a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/i'],
            'tipousuario_id' => ['required', 'nullable|regex:/^[0-9a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/i'],
            'nombre' => ['required', 'string', 'max:50', 'min:2'],
            'apellido' => ['required', 'string', 'max:50', 'min:2'],
            'sexo' => ['required', 'nullable|regex:/^[0-9a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/i'],
            'direccion' => ['required', 'string', 'max:70', 'min:5'],
            'telefono' => ['required', 'numeric', 'min:10', 'max:10'],
            'celular1' => ['required', 'numeric', 'min:10', 'max:10'],
            'celular2' => ['required', 'numeric', 'min:10', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'estado_usuario' => ['required']
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
            'tipo_usuario_id' => $data['tipo_usuario'],
            'tipo_identificacion_id' => $data['tipo_identificacion'],
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
