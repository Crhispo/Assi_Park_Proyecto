@extends('layouts.PlantillaBase')

@section('css')

@endsection

@section('contenido')

@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    <br >
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
                    <a href="{{ url('apartamento/create')}}" class="btn btn-primary">Registrar apartamentos</a>
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

@endsection

@section('js')

<script type="text/javascript">
    $(document).ready(function(){
      $('#apartamentos').DataTable();
    });
  </script>
@endsection
