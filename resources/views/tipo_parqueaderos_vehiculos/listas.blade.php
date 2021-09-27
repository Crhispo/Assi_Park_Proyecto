@extends('plantilla')
@section('title','tipo_Parqueadero')
@section('Encabezado','tipo_Parqueadero') 
@section('css')
<link  href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection
@section('content')
<br>
<a href="{{route('tipo.form')}}" class="btn btn-primary">Nuevo tipo_parqueadero</a>

    
<table id="tipo" class="table table-striped table-bordered shadow-lg mt-4"style="width:100%">
  <thead class="bg-primary text-white">  
      <tr>
    <th scope="col">tipo_parqueaderos</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead>
<tbody>
@foreach($tipo as $tipo)
<tr>

    <td>{{$tipo->tipo}}</td>

    <td>
        <a href="{{route('tipo.form',['id'=>$tipo->id])}}" class="btn btn-warning">Editar</a>
    </td>
    <td>
        <a href="{{route('eliminartipo',['id'=>$tipo->id])}}" class="btn btn-danger">Eliminar</a>
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
    $('#tipo').DataTable(
        
    );
} );
</script>
@endsection
@endsection