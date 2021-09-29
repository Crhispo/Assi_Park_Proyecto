<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
        <title>Administrador</title>
    </head>
    <body>

        <!---------SIDEBAR---------->

        <div class="d-flex">
            <div id="sidebar-container" style="Background-color:#f5f6f8;">
                <div class="logo text-dark">
                    <img src="">
                </div>
                <div class="menu">
                    <a  class="d-block text-dark p-3"><i class="icon ion-md-contacts mr-2 lead"></i>Usuarios</a>
                    <a href="#" class="d-block text-dark p-3"><i class="icon ion-md-business mr-2 lead"></i>Residentes</a>
                    <a href="#" class="d-block text-dark p-3"><i class="icon ion-md-business mr-2 lead"></i>Visitantes</a>
                    <a href="#" class="d-block text-dark p-3"><i class="icon ion-md-business mr-2 lead"></i>Apartamentos</a>
                    <a href="#" class="d-block text-dark p-3"><i class="icon ion-md-grid mr-2 lead"></i>Parqueaderos</a>
                    <a href="#" class="d-block text-dark p-3"><i class="icon ion-md-car mr-2 lead"></i>Vehiculos</a>
                </div>
            </div>

            <!-----------NAVBAR------------>

            <div class="w-100">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Salida
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="Cierre_Sesion.php"><i class="icon ion-md-exit"></i>Cerrar Sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-----------CONTENT------------>

                <div id="content">
                    <section class="py-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 text-dark">
                                    <h1 class="font-weight-bold nb-0">Bienvenido Administrador</h1>
                                    <p class="lead text-muted">Aqui tienes la posibilidad de gestionar usuarios</p>
                                </div>

                            </div>
                        </div>
                    </section>

                    <!----------TABLE-------->
                    <div class='card'>
                        <div class='card-body'>
                            <section class="py-3">

                                <div class="container border-bottom">
                                    @if(!isset($Insert))
                                    @php($Insert = '')
                                    @else
                                    @if($Insert == 1)
                                    <span class="font-weight-bold text-dark">Registrado con exito.</span>
                                    @elseif($Insert == 0)
                                    <span class="font-weight-bold text-dark">"No" se registrado con exito.</span>
                                    @else
                                    @endif
                                    @endif
                                    <br>

                                    <span> @include('Modulo_Usuarios.registro_usuario') </span>

                                    <br>
                                    <br>
                                </div>
                                <br>


                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
                                <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css"/>

                                @include('Modulo_Usuarios.tabla')

                            </section>
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>


                    <script src="js/Usuarios/Contenidos.js"></script>
                </div>
            </div>
        </div>

    </body>
</html>
