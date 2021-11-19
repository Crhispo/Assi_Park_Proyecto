@extends('plantilla')
@section('title','Parqueadero')
@section('Encabezado','Parqueadero') 
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
                    Admin <span class="fa-angle-right fa"></span> parqueadero
                </p>
            </div>
        </div>
    </div>
    <center>
    <a class="btn btn-info" id="div-btn1" href="/parqueadero" style="display: none;">Residente</a>
    <a class="btn btn-info" id="div-btn1" href="/parqueaderoV" >Visitante</a>
</center>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Parqueadero</h3>
                    
                </div>
                
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="parqueadero" class="table table-striped shadow-lg mt-4" >
                            <thead class="bg-primary text-white">
<<<<<<< HEAD
                                <tr style="background-color:#2196f3">
=======
                                <tr>
>>>>>>> 6be48429ad6838813bd87c3bf2bd17fa83a1d954
    <th>Numero de parqueadero</th>
    <th >Tipo de Parqueadero</th>
    <th>Tamaño</th>
    <th>Descripción</th>
    <th>Estado</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead>
<tbody>
@foreach($parqueaderoList as $parqueadero)
<tr>
    <td>{{$parqueadero->id}}</td>
    <td>{{$parqueadero->TIPO_PARQUEADERO_VEHICULO}}</td>
    <td>{{$parqueadero->TAMAÑO}}</td>
    <td>{{$parqueadero->DESCRIPCION}}</td>
    <td> @switch($parqueadero->ESTADO_PARQUEADERO)
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
        <a href="{{route('parqueadero.form',['id'=>$parqueadero->id])}}" class="btn btn-info" style="margin-top: 8px;">Editar</a>
    </td>
    <td>

        <button type="button" class="btn btn-danger" style="margin-top: 8px;"   data-toggle="modal" data-target="{{'#deleteModal'. $parqueadero->{'id'} }}">Inhabilitar</button>
        <div class="modal fade" id="{{'deleteModal'. $parqueadero->{'id'} }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title" id="deleteModalLabel"> Cuadro de confirmación </h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('Parqueaderodisable'.$parqueadero-> {'id'} )}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                                <label class="control-label"> ¿Está seguro de que desea inhabilitar? </label>
                            </div>

                            @php
                            $CheckA = '';
                            $CheckI = '';
                            switch($parqueadero->{'ESTADO_PARQUEADERO'}){
                            case '1':
                            $CheckA = 'checked';
                            break;
                            case '0':
                            $CheckI = 'checked';
                            break;
                            }
                            @endphp

                            <input type="radio" name="ESTADO_PARQUEADERO" value="1" id="Activo" {{ $CheckA }} /><label for="Activo">Activar</label>
                            <input type="radio" name="ESTADO_PARQUEADERO" value="0" id="Inactivo" {{ $CheckI }} /><label for="Inactivo">Inhabilitar</label>

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
    <!--<td>
        <a href="{{route('eliminarparqueadero',['id'=>$parqueadero->id])}}" class="btn btn-danger">Eliminar</a>
    </td>-->
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
    $('#parqueadero').DataTable({
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
