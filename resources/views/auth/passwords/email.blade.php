@extends('layouts.app')

@section('content')

    <div class="contenedor">
        <div class="forms-container">
            <div class="signin">
                <form method="POST" class="sign-in-form" action="{{ route('password.email') }}">
                    @csrf
                    <h2 class="title">Reestablecer contraseña</h2>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Enviar correo') }}
                            </button>
                        </div>
                    </div>
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
