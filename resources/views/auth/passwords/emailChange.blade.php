@extends('layouts.PlantillaBase')

<head>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>Cambio Contraseña</title>
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/styles_RC.css') }}" />
    @endsection
</head>
@section('contenido')
    <div class="container">
        <div class="forms-container">
            <div class="signin">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{-- {{ session('status') }} --}}
                        <script>
                            const msg = "{{ session('status') }}";
                        </script>
                    </div>
                @endif
                <form method="POST" id="form-email" class="sign-in-form" action="{{ route('password.email') }}">
                    @csrf
                    <h2 class="title">¿Desea Cambiar su contraseña?</h2>
                    <!-- <div class="input-field">
                                                              <i class="fas fa-user"></i>
                                                              <input type="text" placeholder="Username" />
                                                            </div> -->
                    <p class="emailP">Ingrese su correo electrónico y el sistema le enviará un mail con las
                        instrucciones que debe seguir.</p>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" id="email" value="{{ old('email') }}" autocomplete="email" autofocus
                            placeholder="Ingrese su correo electrónico">
                    </div>

                    @error('email')
                        <div>
                            <p style="color: red; text-align:center">
                                {{-- <strong>{{ $message }}</strong> --}}
                                <script>
                                    const msg = "{{ $message }}";
                                </script>
                            </p>
                        </div>
                    @enderror

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

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="return_pge">
                    <a href="{{ route('login') }}">
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
                <img src="{{ asset('img\undraw_fast_car_p4cu.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>
@endsection
@section('js')
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script>
    console.log(msg)
    if(msg){
        if(msg == 'We have emailed your password reset link!'){
            swal('Link enviado', '¡Hemos enviado su enlace de restablecimiento de contraseña por correo electrónico!', 'success');
        }else if(msg == 'We can&#039;t find a user with that email address.'){
            swal('Usuario no existe', 'No podemos encontrar un usuario con esa dirección de correo electrónico.', 'error');
        }else if(msg == 'Please wait before retrying.'){
            swal('Correo enviado', 'Ya hemos enviado el correo revisa por favor tu bandeja de entrada o en los spam!!', 'info');
        }
    }
</script>
@endsection
