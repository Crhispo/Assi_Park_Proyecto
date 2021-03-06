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
                Administrador <span class="fa-angle-right fa"></span> Parqueadero Visitante
                </p>
            </div>
        </div>
    </div>
    <center>
        <a class="btn btn-info" id="div-btn1" href="/parqueadero">Residente</a>
        <a class="btn btn-info" id="div-btn2" href="/parqueaderoV" style="display: none;">Visitante</a>
    </center>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Parqueadero Visitante</h3>
                    
                </div>
                
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="parqueadero" class="table table-striped shadow-lg mt-4" >
                            <thead class="bg-primary text-white">
                                <tr style="background-color:#2196f3">
    <th>N° parqueadero</th>
    <th >Tipo de Parqueadero</th>
    <th>Tamaño</th>
    <th>Descripción</th>
    <th>Estado</th>
    <th>Disponible</th>
    <th>Editar</th>
    <th>Inhabilitar</th>
</tr>
</thead>
<tbody>
@foreach($parqueaderoVList as $parqueaderoV)
<tr>
    <td>{{$parqueaderoV->id}}</td>
    <td>{{$parqueaderoV->TIPO_PARQUEADERO_VEHICULO}}</td>
    <td>{{$parqueaderoV->TAMAÑO}}</td>
    <td>{{$parqueaderoV->DESCRIPCION}}</td>
    <td> @switch($parqueaderoV->ESTADO_PARQUEADERO)
        @case(1)
        Activo
        @break

        @case(0)
        Inactivo
        @break

        @default
        Erros
        @endswitch</td>
      
        <td> @switch($parqueaderoV->OCUPADO)
            @case(1)
            Ocupado
            @break
    
            @case(0)
            Desocupado
            @break
    
            @default
            Erros
            @endswitch</td>
    <td>
        <a href="{{route('parqueaderoV.form',['id'=>$parqueaderoV->id])}}" class="btn btn-info" style="margin-top: 8px;"><i class="icon-note"></i></a> 
    </td>
    <td>

        <button type="button" class="btn btn-danger" style="margin-top: 8px;"   data-toggle="modal" data-target="{{'#deleteModal'. $parqueaderoV->{'id'} }}"><i class="las la-parking" style="font-size:23px;"></i><i class="icon-close" style="font-size:17px;"></i></button>
        <div class="modal fade" id="{{'deleteModal'. $parqueaderoV->{'id'} }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title" id="deleteModalLabel"> Cuadro de confirmación </h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('Parqueaderodisable'.$parqueaderoV-> {'id'} )}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                                <label class="control-label"> ¿Está seguro de que desea inhabilitar? </label>
                            </div>

                            @php
                            $CheckA = '';
                            $CheckI = '';
                            switch($parqueaderoV->{'ESTADO_PARQUEADERO'}){
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
        <a href="{/*{route('eliminarparqueadero',['id'=>$parqueaderov->id])}*/}" class="btn btn-danger">Eliminar</a>
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

@section('js')<script>

    document.getElementById("div-btn2").disabled = true;
  </script>
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
