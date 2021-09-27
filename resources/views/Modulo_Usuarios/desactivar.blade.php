<!----- BOTON QUE LLAMA AL MODAL DE DESACTIVAR------>
<button type="button" class="btn btn-outline-danger p-md-2" data-toggle="modal" data-target="#Modal2"><i class="icon ion-md-trash"></i></button>

<!-- Modal -->
<div id="Modal2" class="modal fade text-dark" role="dialog">
    <div class="modal-dialog modal-lg" style="background-color: #ff1925;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ff1925;">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">Desactivar Usuarios</h4>
            </div>
            <div class="modal-body">


                <!------ FORMULARIO ------->

                <div class="container">
                    <form action="" method="post">
                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-7">
                                <label class="font-weight-bold">Número de cédula <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="input1" placeholder="Ingresa el número de cédula" required="required">
                            </div>

                            <div class="form-check"> <label class="font-weight-bold">Tipo de usuario<span class="text-danger">*</label>
                                <p>
                                    <input type="radio" name="input2" id="administrador"><label for="administrador">Administrador</label></p>
                                <p>
                                    <input type="radio" name="input2" id="secretaria"><label for="secretaria">Secretaria</label></p><p>
                                    <input type="radio" name="input2" id="propietario">
                                    <label for="propietario">Propietario</label></p>
                            </div> 

                            <div class="form-group col-md-6 text-dark">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="input3" placeholder="Ingrese el nombre" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="input4" placeholder="Ingrese el apellido" required="required">
                            </div>
                            <div class="form-check"> <label class="font-weight-bold">Sexo<span class="text-danger">*</span></label>
                                <p>
                                    <input type="radio" name="input5" id="femenino"><label for="femenino">Femenino</label></p><p>
                                    <input type="radio" name="input5" id="masculino">
                                    <label for="masculino">Masculino</label></p>
                            </div>
                        </div>
                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-7">
                                <label class="font-weight-bold">Dirección <span class="text-danger">*</span></label>
                                <input type="text" name="input6" class="form-control" placeholder="Ingrese la dirección">
                            </div>
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Teléfono</label>
                                <input type="text" name="input7" class="form-control" placeholder="Ingrese el teléfono">
                            </div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Celular <span class="text-danger">*</span></label>
                                <input type="text" name="input8" class="form-control" placeholder="Ingrese número celular">
                            </div>
                            <div class="form-group col-md-7">
                                <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="text" name="input9" class="form-control" placeholder="Ingrese el correo electrónico">
                            </div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                                <input type="text" name="input10" class="form-control" value="<?php echo $cad; ?>" disabled >
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">EPS <span class="text-danger">*</span></label>
                                <select name="input11" class="form-control-plaintext">
                                    <option>...</option>
                                    <option>Compensar</option>
                                    <option>EPS Sanitas</option>
                                    <option>Famisanar EPS</option>
                                    <option>Sura EPS</option>
                                    <option>Nueva EPS</option>
                                    <option>Otra</option>
                                </select></div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Años de experiencia <span class="text-danger">*</span></label>
                                <input type="text" name="input12" class="form-control" placeholder="Ingrese los años de experiencia">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Fondo de pensiones</label>
                                <select name="input13" class="form-control-plaintext">
                                    <option>...</option>
                                    <option>Protección S.A</option>
                                    <option>Porvenir S.A</option>
                                    <option>Colfondos Pensiones y Cesantías</option>
                                    <option>Old Mutual</option>
                                    <option>Otra</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Título</label>
                                <input type="text" name="input14" class="form-control" placeholder="Ingrese el título">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Estado civil</label>
                                <select name="input15" class="form-control-plaintext">
                                    <option>...</option>
                                    <option>Casado</option>
                                    <option>Soltero</option>
                                    <option>Union libre</option>
                                    <option>Divorciado</option>
                                    <option>Viudo</option>
                                </select>
                            </div></div>
                        <div class="form-row mb-3 text-dark">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Estado</label>
                                <select name="input16" class="form-control-plaintext">
                                    <option>Desactivado</option>
                                </select>
                            </div>
                    </form>
                </div>
            </div>

            <!-------- FOOTER DEL MODAL ---------->

            <div class="modal-footer">
                <input type="submit" class="btn btn-outline-danger" value="Desactivar" name="desactivar"/>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
