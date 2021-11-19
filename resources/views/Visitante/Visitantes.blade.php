@extends('Visitante.plantillaVis')

@section('Contenido')

<div class="container-fluid mimin-wrapper">

    <!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Bienvenido Administrador</h3>


                    <p class="animated fadeInDown">
                        Admin <span class="fa-angle-right fa"></span> Visitantes
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 top-20 padding-0">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>Visitantes</h3>
                        <a href="/Visitanteform" class="btn btn-outline-success p-md-2">Registrar Visitantes</a>
                    </div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="Tabla_consulta" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                    <tr style="background-color:#2196f3">
                                        <th>Documento de identidad</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Telefono</th>
                                        <th>celular</th>
                                        <th>Celular secundario</th>
                                        <th>Estado</th>
                                        <th>Modificar</th>
                                        <th>Inhabilitar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($_Visitante as $_Visitante)
                                    <tr>
                                        <td>{{ $_Visitante-> {'NUMERO_DOCUMENTO'} }}</td>
                                        <td>{{ $_Visitante-> {'NOMBRE'} }}</td>
                                        <td>{{ $_Visitante-> {'APELLIDO'} }}</td>
                                        <td>{{ $_Visitante-> {'TELEFONO'} }}</td>
                                        <td>{{ $_Visitante-> {'CELULAR1'} }}</td>
                                        <td>{{ $_Visitante-> {'CELULAR2'} }}</td>
                                        <td>
                                            @switch($_Visitante->{'ESTADO_VISITANTE'})
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

                                        <!------ BOTONES DE EDITAR Y ELIMINAR ------->

                                        <td>

                                            <a class="btn btn-outline-warning p-md-2" href="{{url('Visitanteedit'.$_Visitante->{'ID_VISITANTE'})}}"><i class="icon ion-md-create"></i></a>

                                        </td>
                                        <td>

                                            <button type="button" style="margin: 0px" class="btn btn-outline-warning p-md-2" data-toggle="modal" data-target="{{'#deleteModal'. $_Visitante->{'ID_VISITANTE'} }}"><i class="icon ion-md-remove"></i></button>
                                            <div class="modal fade" id="{{'deleteModal'. $_Visitante->{'ID_VISITANTE'} }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">

                                                            <h4 class="modal-title" id="deleteModalLabel"> Cuadro de confirmación </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('Usuariodisable'.$_Visitante-> {'ID_VISITANTE'} )}}" method="post">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <div class="form-group">
                                                                    <label class="control-label"> ¿Está seguro de que desea inhabilitar? </label>
                                                                </div>

                                                                @php
                                                                $CheckA = '';
                                                                $CheckI = '';
                                                                switch($_Visitante->{'ESTADO_VISITANTE'}){
                                                                case '1':
                                                                $CheckA = 'checked';
                                                                break;
                                                                case '0':
                                                                $CheckI = 'checked';
                                                                break;
                                                                }
                                                                @endphp

                                                                <input type="radio" name="ESTADO_USUARIO" value="1" id="Activo" {{ $CheckA }} /><label for="Activo">Activar</label>
                                                                <input type="radio" name="ESTADO_USUARIO" value="0" id="Inactivo" {{ $CheckI }} /><label for="Inactivo">Inhabilitar</label>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Atrás</span></button>
                                                            <input type="submit" class="btn btn-primary" value="Confirmar" />
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
</div>
<!-- end: content -->

@endsection
