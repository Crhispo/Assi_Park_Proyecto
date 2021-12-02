@extends('plantilla')
@section('title','Residente')
@section('Encabezado','Residente')
@section('content')
@section('css')
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection



<!-- start: Header -->
@include('menus.Header')
<!-- end: Header -->
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
                    Administador <span class="fa-angle-right fa"></span> Residente
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <br>
                    <h3>Residentes</h3>
                    <a href="{{ url('residentecreate')}}" class="btn btn-primary">Registrar residente</a>
                </div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="apartamentos" class="table table-striped shadow-lg mt-4">
                            <thead class="bg-primary text-white">
                                <tr style="background-color:#2196f3">
                                    <th>N° Identificación</th>
                                    <th>Tipo de identificación</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Celular</th>
                                    <th>Correo electrónico</th>
                                    <th>Apartamento</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
                                    <th>Inhabilitar</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($residentes as $residente)
                                <tr>
                                    <td>{{ $residente->NUMERO_IDENTIFICACION}}</td>
                                    <td>
                                        @switch($residente->{'ID_TIPO_IDENTIFICACION'})
                                        @case(1)
                                        Cedula de ciudadania
                                        @break

                                        @case(2)
                                        cedula de extranjeria
                                        @break

                                        @case(3)
                                        tarjeta de identidad
                                        @break

                                        @case(4)
                                        registro civil
                                        @break

                                        @default
                                        Erros
                                        @endswitch
                                    </td>
                                    <td>{{ $residente->NOMBRE}}</td>
                                    <td>{{ $residente->APELLIDO}}</td>
                                    <td>{{ $residente->CELULAR1}}</td>
                                    <td>{{ $residente->CORREO_ELECTRONICO}}</td>
                                    <td>{{ $residente->apartamento}} </td>
                                    <td>
                                        @switch($residente->{'ESTADO_RESIDENTE'})
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
                                    <td>
                                        <a class="btn btn-info" style="margin-top: 8px;" href="{{ url('/residente/'.$residente->NUMERO_IDENTIFICACION.'/edit') }}"><i class="icon-note"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ url('/residente/'.$residente->NUMERO_IDENTIFICACION) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input hidden name="ESTADO_RESIDENTE" value="0" />
                                            <button type="submit" onclick="return confirm('Seguro que Desea inhabilitar?')" style="margin-top: 8px;" class="btn btn-danger" value="Inhabilitar"><i class=" icon-user-unfollow"></i>
                                        </form>
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
        $('#apartamentos').DataTable({



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
@endsection
@endsection