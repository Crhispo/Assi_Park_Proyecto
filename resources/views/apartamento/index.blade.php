@extends('layouts.PlantillaBase');

@section('css')

<link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido')



    <a href="{{ url('apartamento/create')}}" class="btn btn-primary">Registrar apartamentos</a>

<table id="apartamentos" class="table table-striped shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Id apartamento</th>
            <th scope="col">Numero apartamento</th>
            <th scope="col">bloque</th>
            <th scope="col">estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($apartamentos as $apartamento)
        <tr>
            <td>{{ $apartamento->id}}</td>
            <td>{{ $apartamento->NUMERO_APTO}}</td>
            <td>{{ $apartamento->BLOQUE}}</td>
            <td>{{ $apartamento->ESTADO_APTO}}</td>
            <td>
                
            <a class="btn btn-info" href="{{ url('/apartamento/'.$apartamento->id.'/edit') }}">
                Editar
                </a>

                <button class="btn btn-danger">Inhabilitar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
    $('#apartamentos').DataTable({
        "lenghtMenu": [[5,10,50,-1], [5, 10, 50, "All"]]
    });
} );
</script>


@endsection