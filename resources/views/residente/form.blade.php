
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Formulario de Residentes</h3>
                    <p class="animated fadeInDown">
                        Admin <span class="fa-angle-right fa"></span>Residente
                    </p>
                </div>
            </div>
        </div>
    
    <div class="col-md-12 padding-0">
        <div class="col-md-8">
            <div class="panel form-element-padding">
                <div class="panel-heading">
                    <h4>{{ $modo }} Residente</h4>
                </div>

                <div class="panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12">
                        @if(count($errors)>0)
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="Id" class="font-weight-bold">Numero de identificacion <span class="text-danger">*</span></label>
                            <input type="text" name="NUMERO_IDENTIFICACION" value="{{  isset($residente->NUMERO_IDENTIFICACION)?$residente->NUMERO_IDENTIFICACION:'' }}" id="NUMERO_IDENTIFICACION" maxlength="10" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="ID_TIPO_IDENTIFICACION" class="font-weight-bold">tipo de identificacion <span class="text-danger">*</span></label>
                            <select name="ID_TIPO_IDENTIFICACION" id="ID_TIPO_IDENTIFICACION" class="form-control">
                                <option value="" selected>...</option>
                                @foreach($TiposId as $Tipo)
                                    <option value="{{ $Tipo['ID_IDENTIFICACION'] }}" @if(isset ($residente->{'ID_TIPO_IDENTIFICACION'})&&$residente->{'ID_TIPO_IDENTIFICACION'}=== $Tipo['ID_IDENTIFICACION']) selected='selected' @else ''  @endif>
                                    {{ $Tipo['IDENTIFICACION'] }}    
                                    </option>
                                @endforeach
                            </select>
                        </div>
                
                        <div class="form-group">
                            <label for="NOMBRE" class="font-weight-bold">nombre <span class="text-danger">*</span></label>
                            <input type="text" name="NOMBRE" maxlength="45" id="NOMBRE" value="{{ isset($residente->NOMBRE)?$residente->NOMBRE:'' }}" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="APELLIDO" class="font-weight-bold">apellido <span class="text-danger">*</span></label>
                            <input type="text" name="APELLIDO" maxlength="45" id="APELLIDO" value="{{ isset($residente->APELLIDO)?$residente->APELLIDO:'' }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Sexo" class="font-weight-bold">sexo <span class="text-danger">*</span></label>
                            <select name="SEXO"  id="SEXO" value="" class="form-control">
                                <option value="" selected>...</option>
                                    <option value="0" @if(isset($residente->{'SEXO'})&&$residente->{'SEXO'} === 0) selected='selected' @endif>
                                        Femenino
                                    </option>
                                    <option value="1" @if(isset($residente->{'SEXO'})&&$residente->{'SEXO'} === 1) selected='selected' @endif>
                                        Masculino
                                    </option>
                            </select>
                        </div>
                
                        <div class="form-group">
                            <label for="Telefono" class="font-weight-bold">telefono </label>
                            <input type="tel" name="TELEFONO" maxlength="9" id="TELEFONO" value="{{ isset($residente->TELEFONO)?$residente->TELEFONO:'' }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Celular1" class="font-weight-bold">celular 1 <span class="text-danger">*</span></label>
                            <input type="tel" name="CELULAR1" maxlength="10" id="CELULAR1" value="{{ isset($residente->CELULAR1)?$residente->CELULAR1:'' }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Celular2" class="font-weight-bold">celular 2 </label>
                            <input type="tel" name="CELULAR2" maxlength="10" id="CELULAR2" value="{{ isset($residente->CELULAR2)?$residente->CELULAR2:'' }}" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="Correo" class="font-weight-bold">correo electronico <span class="text-danger">*</span></label>
                            <input type="email" name="CORREO_ELECTRONICO" maxlength="150" id="CORREO_ELECTRONICO" value="{{ isset($residente->CORREO_ELECTRONICO)?$residente->CORREO_ELECTRONICO:'' }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="NUMERO_APTO" class="font-weight-bold">Numero apartamento <span class="text-danger">*</span></label>
                            <select name="NUMERO_APTO" id="NUMERO_APTO" class="form-control">
                                <option value="" selected>...</option>
                                @foreach($NumeroApto as $NumeroApto)
                                    <option value="{{ $NumeroApto['id'] }}" @if(isset ($datosapartamento[0]->{'NUMERO_APTO'})&&$datosapartamento[0]->{'NUMERO_APTO'}=== $NumeroApto['id']) selected='selected' @else ''  @endif>
                                    {{ $NumeroApto['NUMERO_APTO'] }}    
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="BLOQUE" class="font-weight-bold">Bloque de apartamento <span class="text-danger">*</span></label>
                            <select name="BLOQUE" id="BLOQUE" class="form-control">
                                <option value="" selected>...</option>
                                @foreach($Bloque as $Bloque)
                                    <option value="{{ $Bloque['id'] }}" @if(isset ($datosapartamento[0]->{'BLOQUE'})&&$datosapartamento[0]->{'BLOQUE'}=== $Bloque['id']) selected='selected' @else ''  @endif>
                                    {{ $Bloque['BLOQUE'] }}    
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" value="1" name="ESTADO_RESIDENTE">

                        <input type="submit" class="btn btn-outline-success" value="{{ $modo }} residente">
                        <br>
                        <br>
                        <a href="/residente" class="btn btn-secondary" >cancelar</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
