@extends('plantilla')
@section('title','vehiculo')
@section('Encabezado','Vehiculo')
@section('content')
<br>

@section('css')
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection

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
                        Admin <span class="fa-angle-right fa"></span> Vehiculos
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 top-20 padding-0">

            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>Vehiculos</h3>

                    </div>

                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="vehiculo" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>

                                        <th>Numero de identificación propetario</th>
                                        <th>Marca</th>
                                        <th>Color</th>
                                        <th>Tipo parqueadero</th>
                                        <th>Placa</th>
                                        <th>Estado</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($vehiculoList as $vehiculo)
                                    <tr>

                                        <td>{{$vehiculo->NUMERO_IDENTIFICACION}}</td>
                                        <td>{{$vehiculo->MARCA}}</td>
                                        <td>{{$vehiculo->COLOR}}</td>
                                        <td>{{$vehiculo->TIPO_PARQUEADERO_VEHICULO}}</td>
                                        <td>{{$vehiculo->placa}}</td>
                                        <td>
                                            @switch($vehiculo->ESTADO_VEHICULO)
                                            @case(1)
                                            Activo
                                            @break

                                            @case(0)
                                            Inactivo
                                            @break

                                            @default
                                            Erros
                                            @endswitch</td>
                                        <td>
                                            <a href="{{route('vehiculo.form',['id'=>$vehiculo->id])}}" class="btn btn-warning">Editar</a>
                                        </td>
                                        <td>
                                            <a href="{{route('eliminarvehiculo',['id'=>$vehiculo->id])}}" class="btn btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#vehiculo').DataTable({



                language: {
                    "sProcessing": "Procesando...",

                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla =(",
                    "sInfo": "Mostrando registros del START al END de un total de TOTAL registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de MAX registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    }
                }

            });
        });
    </script>
</div>
@endsection
@endsection
