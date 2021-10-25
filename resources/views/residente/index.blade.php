@extends('layouts.PlantillaBase')

@section('css')

@endsection

@section('contenido')

@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif


<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Data Tables</h3>
                <p class="animated fadeInDown">
                    Table <span class="fa-angle-right fa"></span> Data Tables
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Data Tables</h3>
                    <a href="residente/create" class="btn btn-primary">Registrar residentes</a>
                </div>
                <div class="panel-body">
                    <div class="responsive-table">
<table id="apartamentos" class="table table-striped shadow-lg mt-4" >
    <thead class="bg-primary text-white">
        <tr>
            <th>numero de identificacion</th>
            <th>tipo de identificacion</th>
            <th>nombre</th>
            <th >apellido</th>
            <th>celular 1</th>
            <th >correo electronico</th>
            <th >Numero apartamento</th>
            <th>estado de residente</th>
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
            <td>{{ $residente->CELULAR1}}</td>
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
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end: content -->

@section('js')

<script>
    $(document).ready(function() {
    $('#apartamentos').DataTable({
        "lenghtMenu": [[5,10,50,-1], [5, 10, 50, "All"]]
    });
} );
</script>

@endsection
