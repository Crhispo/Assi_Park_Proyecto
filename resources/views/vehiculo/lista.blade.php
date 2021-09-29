@extends('plantilla')
@section('title','vehiculo')
@section('Encabezado','Vehiculo')
@section('content')
<br>
<a href="{{route('vehiculo.form')}}" class="btn btn-primary">Nuevo vehiculo</a>
@section('css')
<link  href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection

<table id="vehiculo" class="table table-striped table-bordered shadow-lg mt-4"style="width:100%">
    <thead class="bg-primary text-white">
    <tr>

    <th>Numero_de_identificacion_propetario</th>
    <th>Marca</th>
    <th>Color</th>
    <th>Tipo_parqueadero</th>
    <th>Placa</th>
    <th>Estado</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead><tbody>
    @php(var_dum($vehiculoList))
        
    @endphp
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
