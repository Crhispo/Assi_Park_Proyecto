@extends('layouts.PlantillaBase');

@section('css')

<link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido')

@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif


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
            <th scope="col">Numero apartamento</th>
            <th scope="col">estado de residente</th>
            <th>acciones</th>
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
            <td>
            @switch($residente->{'SEXO'})
                        @case(1)
                        Masculino
                        @break

                        @case(0)
                        Femenino
                        @break

                        @default
                        Erros
                        @endswitch
            </td>
            <td>{{ $residente->TELEFONO}}</td>
            <td>{{ $residente->CELULAR1}}</td>
            <td>{{ $residente->CELULAR2}}</td>
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
                <a class="btn btn-info" href="{{ url('/residente/'.$residente->NUMERO_IDENTIFICACION.'/edit') }}">Editar</a>


                <form action="{{ url('/residente/'.$residente->NUMERO_IDENTIFICACION) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input hidden name="ESTADO_RESIDENTE" value="0"/>
                            <input type="submit" onclick="return confirm('Seguro que Desea inhabilitar?')" class="btn btn-danger" value="Inhabilitar">
                        </form>   
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