@extends('layouts.PlantillaBase');

@section('css')

<link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido')
    <a href="residente/create" class="btn btn-primary">Registrar residentes</a>

<table id="apartamentos" class="table table-striped shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">numero de identificacion</th>
            <th scope="col">tipo de identificacion</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">sexo</th>
            <th scope="col">telefono</th>
            <th scope="col">celular 1</th>
            <th scope="col">celular 2</th>
            <th scope="col">correo electronico</th>
            <th scope="col">id apartamento</th>
            <th scope="col">estado de residente</th>
            <th>acciones</th>
        </tr>
    </thead>
    
    <tbody>
    @foreach($residentes as $residente)
        <tr>
            <td>{{ $residente->NUMERO_IDENTIFICACION}}</td>
            <td>{{ $residente->ID_IDENTIFICACION}}</td>
            <td>{{ $residente->NOMBRE}}</td>
            <td>{{ $residente->APELLIDO}}</td>
            <td>{{ $residente->SEXO}}</td>
            <td>{{ $residente->TELEFONO}}</td>
            <td>{{ $residente->CELULAR1}}</td>
            <td>{{ $residente->CELULAR2}}</td>
            <td>{{ $residente->CORREO_ELECTRONICO}}</td>
            <td>{{ $residente->ID_APARTAMENTO}}</td>
            <td>{{ $residente->ESTADO_RESIDENTE}}</td>
            <td>
                <a class="btn btn-info" href="{{ url('/residente/'.$residente->id.'/edit') }}">Editar</a>


                <button class="btn btn-danger">Inhabilitar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>










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