@php
$charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$cad = '';
for ($i = 0; $i < 4; $i++) {
$cad .= substr($charset, rand(0, 62), 1);
}
@endphp

<!----- BOTON QUE LLAMA AL MODAL DE REGISTRO------>
<button type="button" class="btn btn-outline-success p-md-2" data-toggle="modal" data-target="#Modal"><i class="icon ion-md-add"></i></button>

<!-- Modal -->
<div id="Modal" class="modal fade text-dark" role="dialog">
    <div class="modal-dialog modal-lg" style="background-color: #4ec500;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #4ec500;">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">Registrar Usuarios</h4>
            </div>
            <div class="modal-body">


                <!------ FORMULARIO ------->

                <div class="container">
                    <form action="Usuario.store" method="post">

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-6">
                                @csrf
                                <label class="font-weight-bold">Tipo de documento</label>
                                <select name="Id_Tipo_Identificacion" class="form-control-plaintext">
                                    <option value="1">CC</option>
                                    <option value="2">CE</option>
                                    <option value="3">TI</option>
                                    <option value="4">RC</option>
                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <label class="font-weight-bold" >Número de cédula <span class="text-danger">*</span></label>

                                <input type="number" class="form-control" name="Numero_Identificacion" placeholder="Ingresa el número de cédula" required="required">
                            </div>

                            <div class="form-check"> <label class="font-weight-bold">Tipo de usuario<span class="text-danger">*</span></label>
                                <p><input type="radio" name="Id_Tipo_Usuario" value="1" id="administrador" required="required"  ><label for="administrador">Administrador</label></p>
                                <p><input type="radio" name="Id_Tipo_Usuario" value="2" id="secretaria" required="required" ><label for="secretaria">Secretaria</label></p>
                                <p><input type="radio" name="Id_Tipo_Usuario" value="3" id="Guardia_de_seguridad"><label for="Guardia_de_seguridad">Guardia de seguridad</label></p></div>



                            <div class="form-group col-md-6 text-dark">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="Nombres" placeholder="Ingrese el nombre" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="Apellidos" placeholder="Ingrese el apellido" required="required">
                            </div>
                            <div class="form-check"> <label class="font-weight-bold">Sexo<span class="text-danger">*</span></label>
                                <p><input type="radio" name="Sexo" value="0" id="Femenino"><label for="femenino">Femenino</label></p>
                                <p><input type="radio" name="Sexo" value="1" id="Masculino"><label for="masculino">Masculino</label></p>
                            </div>
                        </div>
                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-7">
                                <label class="font-weight-bold">Dirección </label>
                                <input type="text" name="Direccion" class="form-control" placeholder="Ingrese la dirección" >
                            </div>
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Teléfono</label>
                                <input type="number" name="Telefono" class="form-control" placeholder="Ingrese el teléfono" >
                            </div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Celular <span class="text-danger">*</span></label>
                                <input type="number" name="Celular1" class="form-control" placeholder="Ingrese número celular">
                            </div>
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Segundo numero de celular (opcional) </label>
                                <input type="number" name="Celular2" class="form-control" placeholder="Ingrese número celular">
                            </div>
                            <div class="form-group col-md-7">
                                <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="Correo_Electronico" class="form-control" placeholder="Ingrese el correo electrónico" required>
                            </div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                                <input type="text" name="Clave" class="form-control" value="{{$cad}}"  >
                            </div>

                        </div>

                        <!-------- FOOTER DEL MODAL ---------->

                        <div class="modal-footer">

                            <input type="submit" class="btn btn-outline-success"/>

                            <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cerrar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
