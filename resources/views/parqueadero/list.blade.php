@extends('plantilla')
@section('title','Parqueadero')
@section('Encabezado','Parqueadero') 
@section('css')
<link  href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection
@section('content')
<br>
<a href="{{route('parqueadero.form')}}" class="btn btn-primary">Nuevo parqueadero</a>

    
<table id="parqueadero" class="table table-striped table-bordered shadow-lg mt-4"style="width:100%">
  <thead class="bg-primary text-white">  
      <tr>
    <th scope="col">Tipo de Parqueadero</th>
    <th scope="col">Tamaño</th>
    <th scope="col">Descripción</th>
    <th scope="col">Estado</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead>
<tbody>
@foreach($parqueaderoList as $parqueadero)
<tr>
    <td>{{$parqueadero->Tipo_parqueadero}}</td>
    <td>{{$parqueadero->Tamano}}</td>
    <td>{{$parqueadero->Descripcion}}</td>
    <td> @switch($parqueadero->Estado)
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
        <a href="{{route('parqueadero.form',['id'=>$parqueadero->id])}}" class="btn btn-warning">Editar</a>
    </td>
    <td>
        <a href="{{route('eliminarparqueadero',['id'=>$parqueadero->id])}}" class="btn btn-danger">Eliminar</a>
    </td>
</tr>
@endforeach
</tbody>
</table>



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
