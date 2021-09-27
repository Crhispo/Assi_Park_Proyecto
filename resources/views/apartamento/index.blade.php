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
            <td>{{ $apartamento->ID_APARTAMENTO}}</td>
            <td>{{ $apartamento->NUMERO_APTO}}</td>
            <td>{{ $apartamento->BLOQUE}}</td>
            <td>
            @switch($apartamento->{'ESTADO_APTO'})
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
                
            <a class="btn btn-info" href="{{ url('/apartamento/'.$apartamento->ID_APARTAMENTO.'/edit') }}">
                Editar
                </a>
                
                <form action="{{ url('/apartamento/'.$apartamento->ID_APARTAMENTO) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input hidden name="ESTADO_APTO" value="0"/>
                            <input type="submit" onclick="return confirm('Desea inhabilitar?')" class="btn btn-danger" value="Inhabilitar">
                        </form>    
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