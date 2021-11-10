@extends('Modulo_Usuarios.plantillaUsu')

@section('Contenido')

@php
$charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$cad = '';
for ($i = 0; $i < 4; $i++) { $cad .=substr($charset, rand(0, 62), 1); }

@endphp

            <!-- start: Content -->
            <!------ FORMULARIO ------->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario de usuario</h3>
                        <p class="animated fadeInDown">
                          Admin <span class="fa-angle-right fa"></span> Registar usuarios
                        </p>
                    </div>
                  </div>
                </div>
        
                <form action="Usuariostore" method="post" class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Nuevo Usuario</h4>
                        </div>
                        <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                              <div class="form-group">
                                  @csrf
                                  <label class="font-weight-bold">Tipo de documento</label>
                                  <select name="tipo_identificacion" class="form-control-plaintext">
                                      <option value="1">CC</option>
                                      <option value="2">CE</option>
                                      <option value="3">TI</option>
                                      <option value="4">RC</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-6">
                                  <label class="font-weight-bold">Número de cédula <span class="text-danger">*</span></label>

                                  <input type="number" class="form-control" name="NUMERO_IDENTIFICACION" placeholder="Ingresa el número de cédula" required="required">
                              </div>
                              <div class="form-check"> <label class="font-weight-bold">Tipo de usuario<span class="text-danger">*</span></label>
                                  <p><input type="radio" name="tipo_usuario" value="1" id="administrador" required="required"><label for="administrador">Administrador</label></p>
                                  <p><input type="radio" name="tipo_usuario" value="2" id="secretaria" required="required"><label for="secretaria">Secretaria</label></p>
                                  <p><input type="radio" name="tipo_usuario" value="3" id="Guardia_de_seguridad"><label for="Guardia_de_seguridad">Guardia de seguridad</label></p>
                              </div>
                              <div class="form-group col-md-6 text-dark">
                                  <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required="required">
                              </div>
                              <div class="form-group col-md-6">
                                  <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" name="apellido" placeholder="Ingrese el apellido" required="required">
                              </div>
                              <div class="form-check"> <label class="font-weight-bold">Sexo<span class="text-danger">*</span></label>
                                  <p><input type="radio" name="sexo" value="0" id="Femenino"><label for="femenino">Femenino</label></p>
                                  <p><input type="radio" name="sexo" value="1" id="Masculino"><label for="masculino">Masculino</label></p>
                              </div>
                          </div>
                          <div class="form-row mb-2 text-dark">
                              <div class="form-group col-md-5">
                                  <label class="font-weight-bold">Dirección </label>
                                  <input type="text" name="direccion" class="form-control" placeholder="Ingrese la dirección">
                              </div>
                              <div class="form-group col-md-5">
                                  <label class="font-weight-bold">Teléfono</label>
                                  <input type="number" name="telefono" class="form-control" placeholder="Ingrese el teléfono">
                              </div>
                          </div>

                          <div class="form-row mb-2 text-dark">
                              <div class="form-group col-md-5">
                                  <label class="font-weight-bold">Celular <span class="text-danger">*</span></label>
                                  <input type="number" name="celular1" class="form-control" placeholder="Ingrese número celular">
                              </div>
                              <div class="form-group col-md-5">
                                  <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                  <input type="email" name="email" class="form-control" placeholder="Ingrese el correo electrónico" required>
                              </div>
                          </div>

                          <div class="form-row mb-2 text-dark">
                              <div class="form-group col-md-5">
                                  <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                                  <input type="text" name="password" class="form-control" value="{{$cad}}">
                              </div>

                          </div>

                          <!-------- FOOTER DEL MODAL ---------->

                          <div class="form-group col-md-5">

                              <input type="submit" class="btn btn-outline-success" />

                              <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cerrar</button>
                          </div>

                      </div>
                      </div>
                    </div>
                  </div>
                </form>
            
                <!-- end: content -->

@endsection
