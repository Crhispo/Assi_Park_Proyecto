<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            width: 24px;
            height: 24px;
        }

        #navbarDropdown {
            text-align: right;
        }

    </style>
    @yield('css')
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <title>@yield('title','vehiculo')</title>
</head>

<body>
    <!---------SIDEBAR---------->


    <div class="d-flex">
        <div id="sidebar-container" style="Background-color:#f5f6f8;">
            <div class="logo text-dark">

            </div>
            <div class="menu">
                @if (Auth::user()->ID_TIPO_USUARIO == 1 || Auth::user()->ID_TIPO_USUARIO == 2)
                    <a href="{{ route('register') }}" class="d-block text-dark p-3"><img
                            src="https://image.flaticon.com/icons/png/512/17/17115.png" alt="">Usuarios</a>
                    <a href="{{ route('vehiculo.show') }}" class="d-block text-dark p-3"><img
                            src="https://image.flaticon.com/icons/png/512/3019/3019094.png" alt=""> Vehiculos</a>
                    <a href="#" class="d-block text-dark p-3"><img
                            src="https://image.flaticon.com/icons/png/512/88/88945.png" alt="">Apartamentos</a>
                    <a href="#" class="d-block text-dark p-3"><img
                            src="data:image/png;base64,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"
                            alt=""> Visitantes</a>
                    <a href="{{ route('asignacion.form') }}" class="d-block text-dark p-3"><img
                            src="https://image.flaticon.com/icons/png/512/3019/3019094.png" alt=""> Asignación
                        parqueaderos</a>
                    <a href="{{ route('parqueadero.show') }}" class="d-block text-dark p-3"><img
                            src="https://hotelsantacatalinasangil.com/wp-content/uploads/2018/11/estacionamiento.png"
                            alt=""> Parqueaderos</a>
                @elseif (Auth::user()->ID_TIPO_USUARIO == 3)
                    <a href="#" class="d-block text-dark p-3"><img
                            src="data:image/png;base64,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"
                            alt=""> Visitantes</a>
                    <a href="{{ route('asignacion.form') }}" class="d-block text-dark p-3"><img
                            src="https://image.flaticon.com/icons/png/512/3019/3019094.png" alt=""> Asignación
                        parqueaderos</a>
                    <a href="{{ route('parqueadero.show') }}" class="d-block text-dark p-3"><img
                            src="https://hotelsantacatalinasangil.com/wp-content/uploads/2018/11/estacionamiento.png"
                            alt=""> Parqueaderos</a>
                @endif
            </div>
        </div>

        <!-----------NAVBAR------------>


        <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Salida
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="nav-link px-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd"
                                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>
                                        Cerrar sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div style="float: right">
                        {{ Auth::user()->NOMBRE }} {{ Auth::user()->APELLIDO }}
                        <br>
                        @if (Auth::user()->ID_TIPO_USUARIO == 1)
                            <strong>Administador</strong>
                        @elseif (Auth::user()->ID_TIPO_USUARIO == 2)
                            <strong>Secretaria</strong>
                        @else
                            <strong>Guarda seguridad</strong>
                        @endif
                    </div>
                </div>
            </nav>

            <div class="container">
                @yield('Encabezado','Vehiculo')
                @yield('content')
            </div>
            @yield('js')

</body>

</html>
