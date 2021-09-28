@extends('layouts.app')

@section('content')
    <div class="contenedor">
        <div class="forms-container">
            <div class="signin">
                <form method="POST" class="sign-in-form" action="{{ route('login') }}">
                    @csrf
                    <h2 class="title">Iniciar Sesión</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input name="numero_identificacion" type="number" @error('numero_identificacion') is-invalid @enderror"
                            value="{{ old('numero_identificacion') }}" required autocomplete="numero_identificacion"
                            autofocus placeholder="Número identificación" />
                    </div>
                    @error('numero_identificacion')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" />
                    </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary solid">
                                {{ __('Iniciar Sesión') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="Forget_Pss" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu Contraseña?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    {{-- @error('message')
                        <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">* Error</p>
                    @enderror
                    <input type="submit" value="Entrar" class="btn solid" /> --}}
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                {{-- <img src="img_Incio_Sesion\log.svg" class="image" alt="" /> --}}
            </div>
        </div>
    </div>
@endsection
