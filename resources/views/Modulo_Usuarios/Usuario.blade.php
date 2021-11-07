<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Crhistian">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

    <!-- plugins -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css" />
    <link href="asset/css/style.css" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="asset/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="mimin" class="dashboard">

    <!-- start: Header -->
    @include('menus.Header')
    <!-- end: Header -->

    <div class="container-fluid mimin-wrapper">

        <!-- start:Left Menu -->
        @include('menus.menu_admin')
        <!-- end: Left Menu -->

        <!-- start: Content -->
        <div id="content">
            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Bienvenido Administrador</h3>


                        <p class="animated fadeInDown">
                            Admin <span class="fa-angle-right fa"></span> Usuarios
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Usuarios</h3>
                            @include('Modulo_Usuarios.registro_usuario')
                        </div>
                        <div class="panel-body">
                            <div class="responsive-table">
                                <table id="Tabla_consulta" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>documento de identidad</th>
                                            <th>Tipo de usuario</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Dirección</th>
                                            <th>Telefono</th>
                                            <th>celular</th>
                                            <th>Correo</th>
                                            <th>Estado</th>
                                            <th>Modificar</th>
                                            <th>Inhabilitar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!isset($_Usuario))
                                        @php($_Usuario = '')
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @else
                                        @foreach($_Usuario as $_Usuario)
                                        <tr>
                                            <td>{{ $_Usuario-> {'NUMERO_IDENTIFICACION'} }}</td>
                                            <td>{{ $_Usuario-> {'ID_TIPO_USUARIO'} }}</td>
                                            <td>{{ $_Usuario-> {'NOMBRE'} }}</td>
                                            <td>{{ $_Usuario-> {'APELLIDO'} }}</td>
                                            <td>{{ $_Usuario-> {'DIRECCION'} }}</td>
                                            <td>{{ $_Usuario-> {'TELEFONO'} }}</td>
                                            <td>{{ $_Usuario-> {'CELULAR1'} }}</td>
                                            <td>{{ $_Usuario-> {'email'} }}</td>
                                            <td>
                                                @switch($_Usuario->{'ESTADO_USUARIO'})
                                                @case(1)
                                                Activo
                                                @break

                                                @case(0)
                                                Inactivo
                                                @break

                                                @default
                                                Erros
                                                @endswitch
                                            </td>

                                            <!------ BOTONES DE EDITAR Y ELIMINAR ------->

                                            <td>

                                            @include('Modulo_Usuarios.modificar')

                                            </td>
                                            <td>
                                                <form action="{{ url('Usuario.'.$_Usuario-> {'NUMERO_IDENTIFICACION'} )}}" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}


                                                    <input hidden name="ESTADO_USUARIO" value="0" />
                                                    <input type="submit" onclick="return confirm('Desea inhabilitar?')" value="Inhabilitar">

                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- end: content -->

        <!-- start: right menu -->
        @include('menus.menu_derecha')
        <!-- end: right menu -->


        <!-- start: Javascript -->
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/jquery.ui.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>



        <!-- plugins -->
        <script src="asset/js/plugins/moment.min.js"></script>
        <script src="asset/js/plugins/jquery.datatables.min.js"></script>
        <script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
        <script src="asset/js/plugins/jquery.nicescroll.js"></script>


        <!-- custom -->
        <script src="asset/js/main.js"></script>
        <script src="js/Usuarios/Contenidos.js"></script>
        <!-- end: javascript -->
</body>

</html>
