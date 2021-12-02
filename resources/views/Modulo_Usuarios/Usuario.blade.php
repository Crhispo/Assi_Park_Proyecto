@extends('Modulo_Usuarios.plantillaUsu')

@section('Contenido')
<link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css" />
<div class="container-fluid mimin-wrapper">

    <!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Bienvenido Administrador</h3>


                    <p class="animated fadeInDown">
                        Administrador <span class="fa-angle-right fa"></span> Usuarios
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 top-20 padding-0">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>Usuarios</h3>
                        <a href="/Usuarioform" class="btn btn-outline-success p-md-2">Registrar Usuario</a>
                    </div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="Tabla_consulta" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                    <tr style="background-color:#2196f3">
                                        <th>N° Identificación</th>
                                        <th>Tipo de usuario</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Celular</th>
                                        <th>Correo electronico</th>
                                        <th>Estado</th>
                                        <th>Editar</th>
                                        <th>Inhabilitar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($_Usuario as $_Usuario)
                                    <tr>
                                        <td>{{ $_Usuario-> {'NUMERO_IDENTIFICACION'} }}</td>
                                        <td>{{ $_Usuario-> {'TIPO_USUARIO'} }}</td>
                                        <td>{{ $_Usuario-> {'NOMBRE'} }}</td>
                                        <td>{{ $_Usuario-> {'APELLIDO'} }}</td>
                                        <td>{{ $_Usuario-> {'DIRECCION'} }}</td>
                                        <td>{{ $_Usuario-> {'TELEFONO'} }}</td>
                                        <td>{{ $_Usuario-> {'CELULAR1'} }}</td>
                                        <td>{{ $_Usuario-> {'email'} }}</td>
                                        <td>
                                            @switch($_Usuario->{'ESTADO_USUARIO'})
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

                                            <a class="btn btn-info" href="{{url('Usuarioedit'.$_Usuario->{'NUMERO_IDENTIFICACION'})}}"><i class=" icon-note"></i></a>

                                        </td>
                                        <td>

                                            <button type="button" style="margin: 0px" class="btn btn-danger" data-toggle="modal" data-target="{{'#deleteModal'. $_Usuario->{'NUMERO_IDENTIFICACION'} }}"><i class=" icon-user-unfollow"></i></button>
                                            <div class="modal fade" id="{{'deleteModal'. $_Usuario->{'NUMERO_IDENTIFICACION'} }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">

                                                            <h4 class="modal-title" id="deleteModalLabel"> Cuadro de confirmación </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('Usuariodisable'.$_Usuario-> {'NUMERO_IDENTIFICACION'} )}}" method="post">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <div class="form-group">
                                                                    <label class="control-label"> ¿Está seguro de que desea inhabilitar? </label>
                                                                </div>

                                                                @php
                                                                $CheckA = '';
                                                                $CheckI = '';
                                                                switch($_Usuario->{'ESTADO_USUARIO'}){
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
