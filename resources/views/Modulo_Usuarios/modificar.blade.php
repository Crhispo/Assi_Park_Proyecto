<!----- BOTON QUE LLAMA AL MODAL DE MODIFICAR------>
<button type="button" class="btn btn-outline-warning p-md-2" data-toggle="modal" data-target="#Modal1{{ $_Usuario->{'NUMERO_IDENTIFICACION'} }}"><i class="icon ion-md-create"></i></button>

<!-- Modal -->
<div id="Modal1{{ $_Usuario->{'NUMERO_IDENTIFICACION'} }}" class="modal fade text-dark" role="dialog">
    <div class="modal-dialog modal-lg" style="background-color:#FAE830;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #FAE830;">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">Modificar Usuarios</h4>
            </div>
            <div class="modal-body">


                <!------ FORMULARIO ------->




                <div class="container">
                    <form action="{{url('Usuario.'.$_Usuario->{'NUMERO_IDENTIFICACION'})}}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-row mb-2 text-dark">

                            <div class="form-group col-md-6">

                                @php
                                $SelectCC = '';
                                $SelectCE = '';
                                $SelectTI = '';
                                $SelectRC = '';
                                switch($_Usuario-> {'ID_TIPO_USUARIO'}){
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

                                <label class="font-weight-bold">Tipo de documento</label>
                                <select name="Id_Tipo_Identificacion" class="form-control-plaintext">
                                    <option id="1" value="1" {{ $SelectCC }}>CC</option>
                                    <option id="2" value="2" {{ $SelectCE }}>CE</option>
                                    <option id="3" value="3" {{ $SelectTI }}>TI</option>
                                    <option id="4" value="4" {{ $SelectRC }}>RC</option>
                                </select>
                            </div>

                            <div class="form-group col-md-7">
                                <label class="font-weight-bold" >Número de cédula <span class="text-danger">*</span></label>

                                <input type="number" class="form-control" name="Numero_Identificacion" value="{{ $_Usuario-> {'NUMERO_IDENTIFICACION'} }}" required="required">
                            </div>

                            <div class="form-check"> <label class="font-weight-bold">Tipo de usuario<span class="text-danger">*</span></label>

                                @php
                                $CheckA = '';
                                $CheckS = '';
                                $CheckG = '';
                                switch($_Usuario-> {'ID_TIPO_USUARIO'}){
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

                                <p><input type="radio" name="Id_Tipo_Usuario" value="1" {{ $CheckA }} required="required"  ><label for="administrador">Administrador</label></p>
                                <p><input type="radio" name="Id_Tipo_Usuario" value="2" {{ $CheckS }} required="required" ><label for="secretaria">Secretaria</label></p>
                                <p><input type="radio" name="Id_Tipo_Usuario" value="3" {{ $CheckG }} ><label for="Guardia_de_seguridad">Guardia de seguridad</label></p></div>





                            <div class="form-group col-md-6 text-dark">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="Nombres" value="{{ $_Usuario-> {'NOMBRE'} }}" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="Apellidos" value="{{ $_Usuario-> {'APELLIDO'} }}" required="required">
                            </div>

                            @php
                            $CheckF = '';
                            $CheckM = '';
                            switch($_Usuario->{'SEXO'}){
                            case '1':
                            $CheckM = 'checked';
                            break;
                            case '0':
                            $CheckF = 'checked';
                            break;
                            }
                            @endphp

                            <div class="form-check"> <label class="font-weight-bold">Sexo<span class="text-danger">*</span></label>
                                <p><input type="radio" name="Sexo" value="0" {{ $CheckF }} ><label for="femenino">Femenino</label></p>
                                <p><input type="radio" name="Sexo" value="1" {{ $CheckM }} ><label for="masculino">Masculino</label></p>
                            </div>
                        </div>
                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-7">
                                <label class="font-weight-bold">Dirección </label>
                                <input type="text" name="Direccion" class="form-control" placeholder="Ingrese su direccion" value="{{ $_Usuario-> {'DIRECCION'} }}" >
                            </div>
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Teléfono</label>
                                <input type="number" name="Telefono" class="form-control" value="{{ $_Usuario-> {'TELEFONO'} }}" placeholder="Ingrese el teléfono" >
                            </div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Celular <span class="text-danger">*</span></label>
                                <input type="number" name="Celular1" class="form-control" value="{{ $_Usuario-> {'CELULAR1'} }}" placeholder="Ingrese número celular">
                            </div>
                            <div class="form-group col-md-5">
                                <label class="font-weight-bold">Segundo numero de celular (opcional) </label>
                                <input type="number" name="Celular2" class="form-control" value="{{ $_Usuario-> {'CELULAR2'} }}" placeholder="Ingrese número celular">
                            </div>
                            <div class="form-group col-md-7">
                                <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="Correo_Electronico" class="form-control" value="{{ $_Usuario-> {'Correo'} }}" placeholder="Ingrese el correo electrónico">
                            </div>
                        </div>

                        <div class="form-row mb-2 text-dark">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                                <input type="text" name="Clave" class="form-control" placeholder="Ingrese su contraseña" value="" >
                            </div>

                        </div>

                        <!-------- FOOTER DEL MODAL ---------->

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-outline-warning"  >
                            <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
