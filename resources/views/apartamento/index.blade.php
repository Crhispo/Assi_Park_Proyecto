@extends('plantilla')
@section('title','Apartamento')
@section('Encabezado','Apartamento')
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


    <!-- start: Content -->
<div id="content">
<div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Modulo apartamento</h3>
                <p class="animated fadeInDown">
                    Menu <span class="fa-angle-right fa"></span> Apartamentos
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <br>
                    
                    <a href="{{ url('apartamento/create')}}" class="btn btn-primary">Registrar apartamentos</a>

                    <div class="alert alert-success alert-dismissible" role="alert">
                    @if(Session::has('mensaje'))
                        {{ Session::get('mensaje') }}
                    @endif

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                </div>
                <div class="panel-body">
                    <div class="responsive-table">
<table id="apartamentos" class="table table-striped shadow-lg mt-4" >
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Numero apartamento</th>
            <th scope="col">bloque</th>
            <th scope="col">estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach($apartamento as $apartamento)
        <tr>
            <td>{{ $apartamento->{'NUMERO_APTO'} }}
            </td>
            <td>{{ $apartamento->{'BLOQUE'} }}</td>
            <td>
            @switch($apartamento->{'ESTADO_APTO'} )
                        @case(1)
                        Habitado
                        @break

                        @case(0)
                        No habitado
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
                            <input hidden name="ESTADO_APTO" value="1"/>
                            <input type="submit" onclick="return confirm('Desea inhabilitar?')" class="btn btn-danger" value="Inhabilitar">
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
    <!-- start: right menu -->
    @include('menus.menu_derecha')
    <!-- end: right menu -->
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    
<script>
    $(document).ready(function() {
        $('#apartamentos').DataTable({



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
