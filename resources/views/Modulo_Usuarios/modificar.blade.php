@extends('Modulo_Usuarios.plantillaUsu')

@section('Contenido')

<!-- start: Content -->
<!------ FORMULARIO ------->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Formulario de usuario</h3>
                <p class="animated fadeInDown">
                    Admin <span class="fa-angle-right fa"></span> Modificar usuarios
                </p>
            </div>
        </div>
    </div>
    <form action="Usuario.update" method="post" class="form-element">
        <div class="col-md-12 padding-0">
            <div class="col-md-8">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Modificar Usuario</h4>
                    </div>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                @csrf
                                {{ method_field('PUT') }}
                                <label class="font-weight-bold">Tipo de documento</label>

                                @php
                                $SelectCC = '';
                                $SelectCE = '';
                                $SelectTI = '';
                                $SelectRC = '';
                                switch($Usuario-> {'ID_TIPO_USUARIO'}){
                                case '1':
                                $SelectCC = 'selected';
                                break;
                                case '2':
                                $SelectCE = 'selected';
                                break;
                                case '3':
                                $SelectTI = 'selected';
                                break;
                                case '4':
                                $SelectRC = 'selected';
                                break;
                                }
                                @endphp

                                <select name="tipo_identificacion" class="form-control-plaintext">
                                    <option value="1" {{ $SelectCC }}>CC</option>
                                    <option value="2" {{ $SelectCE }}>CE</option>
                                    <option value="3" {{ $SelectTI }}>TI</option>
                                    <option value="4" {{ $SelectRC }}>RC</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Número de cédula <span class="text-danger">*</span></label>

                                <input type="number" class="form-control" name="NUMERO_IDENTIFICACION" value="{{ $Usuario->{'NUMERO_IDENTIFICACION'} }}" placeholder="Ingresa el número de cédula" required="required">
                            </div>
                            <div class="form-check"> <label class="font-weight-bold">Tipo de usuario<span class="text-danger">*</span></label>

                                @php
                                $CheckA = '';
                                $CheckS = '';
                                $CheckG = '';
                                switch( $Usuario->{'ID_TIPO_USUARIO'} ){
                                case '1':
                                $CheckA = 'checked';
                                break;
                                case '2':
                                $CheckS = 'checked';
                                break;
                                case '3':
                                $CheckG = 'checked';
                                break;
                                }
                                @endphp

                                <p><input type="radio" name="tipo_usuario" value="1" {{ $CheckA }} id="administrador" required="required"><label for="administrador">Administrador</label></p>
                                <p><input type="radio" name="tipo_usuario" value="2" {{ $CheckS }} id="secretaria" required="required"><label for="secretaria">Secretaria</label></p>
                                <p><input type="radio" name="tipo_usuario" value="3" {{ $CheckG }} id="Guardia_de_seguridad"><label for="Guardia_de_seguridad">Guardia de seguridad</label></p>
                            </div>
                            <div class="form-group col-md-6 text-dark">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nombre" value="{{ $Usuario->{'NOMBRE'} }}" placeholder="Ingrese el nombre" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="apellido" value="{{ $Usuario->{'APELLIDO'} }}" placeholder="Ingrese el apellido" required="required">
                            </div>

                            @php
                            $CheckF = '';
                            $CheckM = '';
                            switch($Usuario->{'SEXO'}){
                            case '1':
                            $CheckM = 'checked';
                            break;
                            case '0':
                            $CheckF = 'checked';
                            break;
                            }
                            @endphp

                            <div class="form-check"> <label class="font-weight-bold">Sexo<span class="text-danger">*</span></label>
                                <p><input type="radio" name="sexo" value="0" {{ $CheckF }} id="Femenino"><label for="femenino">Femenino</label></p>
                                <p><input type="radio" name="sexo" value="1" {{ $CheckM }} id="Masculino"><label for="masculino">Masculino</label></p>
                            </div>
                        </div>
                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Dirección </label>
                                <input type="text" name="direccion" class="form-control" value="{{ $Usuario->{'DIRECCION'} }}" placeholder="Ingrese la dirección">
                            </div>
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Teléfono</label>
                                <input type="number" name="telefono" class="form-control" value="{{ $Usuario->{'TELEFONO'} }}" placeholder="Ingrese el teléfono">
                            </div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Celular <span class="text-danger">*</span></label>
                                <input type="number" name="celular1" class="form-control" value="{{ $Usuario->{'CELULAR1'} }}" placeholder="Ingrese número celular">
                            </div>
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" value="{{ $Usuario->{'email'} }}" placeholder="Ingrese el correo electrónico" required>
                            </div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                                <input type="text" name="password" class="form-control" value="">
                            </div>

                            <!-------- FOOTER DEL MODAL ---------->

                        <div class="form-group col-md-5">
                            <input type="submit" style="margin: 0px" class="btn btn-outline-success" />
                            <a href="/Usuario"  class="btn btn-outline-success">Cerrar</a>
                        </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end: content -->

    @endsection
