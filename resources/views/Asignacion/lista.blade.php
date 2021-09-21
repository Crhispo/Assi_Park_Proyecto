@extends('plantilla')
@section('title','Asignacion de parqueadero')
@section('Encabezado','Asignacion de parqueadero')  
@section('content')
<br>
<a href="{{route('asignacion.form')}}" class="btn btn-primary">Nueva asignacion parqueadero</a>
@section('css')
<link  href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection

<table id="vehiculo" class="table table-striped table-bordered shadow-lg mt-4"style="width:100%">
    <thead class="bg-primary text-white">
    <tr>

    <th>ID_APARTAMENTO</th>
    <th>ID_VEHICULO</th>
    <th>NUMERO_PARQUEADERO</th>
    <th>FECHA_INICIO_DE_ASIGNACION_PARQUEADERO</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead><tbody>
@foreach($asignacionList as $asignacion)
<tr>
   
    <td>{{$asignacion->APARTAMENTO_ID_APARTAMENTO}}</td>
    <td>{{$asignacion->ID_VEHICULO}}</td>
    <td>{{$asignacion->NUMERO_PARQUEADERO}}</td>
    <td>{{$asignacion->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO}}</td>

    <td>
        <a href="{{route('asignacion.form',['id'=>$asignacion->id])}}" class="btn btn-warning">Editar</a>
    </td>
    <td>
        <a href="{{route('eliminarasignacion',['id'=>$asignacion->id])}}" class="btn btn-danger">Eliminar</a>
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
    $('#vehiculo').DataTable(
        
    );
} );
</script>
@endsection
@endsection