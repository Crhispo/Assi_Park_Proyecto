@extends('layouts.PlantillaBase')

<head>
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/Style_Iniciar_SS.css') }}" />
    @endsection
    <title>Iniciar sesión</title>
</head>

@section('contenido')
    <div class="forms-container">
        <div class="signin">
            <form method="POST" id="form-login" class="sign-in-form" action="{{ route('login') }}">
                @csrf
                <h2 class="title">Iniciar Sesión</h2>

                <p>
                    <img src="img\LOGO_FINAL_ASSIPARK.png" class="logo_img">
                </p>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input name="numero_identificacion" type="number" @error('numero_identificacion') is-invalid @enderror"
                        value="{{ old('numero_identificacion') }}" autocomplete="numero_identificacion" autofocus
                        placeholder="Número identificación" id="numero_identificacion" />
                </div>
                @error('numero_identificacion')
                    <div class="alert alert-danger" role="alert" style="background: #ff0000; border-radius: 5px; padding: 10px">
                        @if ($message == 'The numero identificacion must be a number.')
                        <strong>El número de identificación es obligatorio !!</strong>
                        @else
                        <strong>Número de identificación o contraseña incorrecta</strong>
                        @endif
                    </div>
                @enderror

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Contraseña" @error('password') is-invalid @enderror" name="password"
                        autocomplete="current-password" id="password" />
                </div>

                @error('password')
                <div class="alert alert-danger" role="alert" style="background: red; border-radius: 5px; padding: 10px">
                    <strong>El campo contraseña es obligatorio !!</strong>
                </div>
                @enderror

                <div class="form-group row" id="recordarme">
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

                <div class="form-group row mb-0" id="olvidar-pass">
                    <div class="col-md-8 offset-md-4" id="btn-olvidar-pass">
                        <button type="submit" class="btn btn-primary solid">
                            {{ __('Iniciar Sesión') }}
                        </button>

                        @if (Route::has('password.request'))
                            <p class="Forget_Pss"><a href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu Contraseña?') }}
                                </a></p>
                        @endif
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

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="return_p ">
                <a href="{{ route('homepage') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172"
                        style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g>
                                <path
                                    d="M2.65391,86c0,-46.02344 37.32266,-83.34609 83.34609,-83.34609c46.02344,0 83.34609,37.32266 83.34609,83.34609c0,46.02344 -37.32266,83.34609 -83.34609,83.34609c-46.02344,0 -83.34609,-37.32266 -83.34609,-83.34609z"
                                    fill="#1080f1"></path>
                                <path
                                    d="M140.69063,75.85469c-29.86484,0 -59.76328,0 -89.62813,0c3.89688,-3.89687 7.79375,-7.79375 11.69063,-11.69062c9.00313,-9.00313 -5.00547,-22.91094 -14.04219,-13.87422c-9.50703,9.50703 -19.01406,19.01406 -28.52109,28.52109c-3.82969,3.82969 -3.69531,10.17891 0.06719,13.975c9.50703,9.50703 19.01406,19.01406 28.52109,28.52109c9.00313,9.00312 22.91094,-5.00547 13.87422,-14.04219c-3.86328,-3.86328 -7.76016,-7.76016 -11.62344,-11.62344c29.83125,0 59.6625,0 89.49375,0c12.76563,-0.03359 12.9,-19.78672 0.16797,-19.78672z"
                                    fill="#ffffff"></path>
                            </g>
                        </g>
                    </svg>
                </a>

            </div>
            <img src="img\LOGIN_IMG.png" class="image" alt="" />
        </div>

    </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
