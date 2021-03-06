@extends('plantilla')
@section('title','Vehículo')
@section('Encabezado','Vehículo')
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
                        Administrador <span class="fa-angle-right fa"></span> Vehículos
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 top-20 padding-0">

            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>Vehículos</h3>

                    </div>

                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="vehiculo" class="table table-striped shadow-lg mt-4">
                                <thead class="bg-primary text-white">
                                    <tr style="background-color:#2196f3">

                                        <th>N° identificación propetario</th>
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
                                        <td>
                                            @if (is_null($vehiculo->NUMERO_IDENTIFICACION))
                                            Vehiculo visitante
                                            @else
                                            {{$vehiculo->NUMERO_IDENTIFICACION}}
                                            @endif

                                        </td>
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
                                            <a href="{{route('vehiculo.form',['id'=>$vehiculo->id])}}" class="btn btn-info" style="margin-top: 8px;"><i class="icon-note"></i></a>
                                        </td>
                                        <td>

                                            <button type="button" class="btn btn-danger" style="margin-top: 8px;" data-toggle="modal" data-target="{{'#deleteModal'. $vehiculo->{'id'} }}"><i class="fa fa-car"></i> <i class="icon-close"></i></button>
                                            <div class="modal fade" id="{{'deleteModal'. $vehiculo->{'id'} }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">

                                                            <h4 class="modal-title" id="deleteModalLabel"> Cuadro de confirmación </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('Vehiculodisable'.$vehiculo-> {'id'} )}}" method="post">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <div class="form-group">
                                                                    <label class="control-label"> ¿Está seguro de que desea inhabilitar? </label>
                                                                </div>

                                                                @php
                                                                $CheckA = '';
                                                                $CheckI = '';
                                                                switch($vehiculo->{'ESTADO_VEHICULO'}){
                                                                case '1':
                                                                $CheckA = 'checked';
                                                                break;
                                                                case '0':
                                                                $CheckI = 'checked';
                                                                break;
                                                                }
                                                                @endphp

                                                                <input type="radio" name="ESTADO_VEHICULO" value="1" id="Activo" {{ $CheckA }} /><label for="Activo">Activar</label>
                                                                <input type="radio" name="ESTADO_VEHICULO" value="0" id="Inactivo" {{ $CheckI }} /><label for="Inactivo">Inhabilitar</label>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Atrás</span></button>
                                                            <input type="submit" class="btn btn-primary" value="Confirmar" />
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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



<!--
1 cargar datos
2 quitar cosa extra
3 servidor

-->