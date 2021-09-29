
<h2>{{ $modo }} residente</h2>

<div class="mb-3">
    <label for="Id" class="form-label">Numero de identificacion:</label>
    <input type="text" name="NUMERO_IDENTIFICACION" value="{{  isset($residente->NUMERO_IDENTIFICACION)?$residente->NUMERO_IDENTIFICACION:'' }}" id="NUMERO_IDENTIFICACION" maxlength="10" class="form-control">
</div>

<div class="mb-3">
    <label for="ID_TIPO_IDENTIFICACION" class="form-label">tipo de identificacion:</label>
    <select name="ID_TIPO_IDENTIFICACION" id="ID_TIPO_IDENTIFICACION" class="form-control">
        <option value="" selected>...</option>
        @foreach($TiposId as $Tipo)
        <option value="{{$Tipo['ID_IDENTIFICACION']}}">
            {{ $Tipo['IDENTIFICACION']}}
        </option>
        @endforeach
    </select>
</div>
    
<div class="mb-3">
    <label for="NOMBRE" class="form-label">nombre:</label>
    <input type="text" name="NOMBRE" maxlength="45" id="NOMBRE" value="{{ isset($residente->NOMBRE)?$residente->NOMBRE:'' }}" class="form-control" >
</div>

<div class="mb-3">
    <label for="APELLIDO" class="form-label">apellido:</label>
    <input type="text" name="APELLIDO" maxlength="45" id="APELLIDO" value="{{ isset($residente->APELLIDO)?$residente->APELLIDO:'' }}" class="form-control">
</div>

<div class="mb-3">
    <label for="Sexo" class="form-label">sexo:</label>
    <select name="SEXO"  id="SEXO" value="{{ isset($residente->SEXO)?$residente->SEXO:'' }}" class="form-control">
        <option value="" selected>...</option>
        <option value="0">Femenino</option>
        <option value="1">Masculino</option>
    </select>
</div>
    
<div class="mb-3">
    <label for="Telefono" class="form-label">telefono:</label>
    <input type="tel" name="TELEFONO" maxlength="9" id="TELEFONO" value="{{ isset($residente->TELEFONO)?$residente->TELEFONO:'' }}" class="form-control">
</div>

<div class="mb-3">
    <label for="Celular1" class="form-label">celular1</label>
    <input type="tel" name="CELULAR1" maxlength="10" id="CELULAR1" value="{{ isset($residente->CELULAR1)?$residente->CELULAR1:'' }}" class="form-control">
</div>

<div class="mb-3">
    <label for="Celular2" class="form-label">celular2</label>
    <input type="tel" name="CELULAR2" maxlength="10" id="CELULAR2" value="{{ isset($residente->CELULAR2)?$residente->CELULAR2:'' }}" class="form-control"> 
</div>

<div class="mb-3">
    <label for="Correo" class="form-label">correo electronico</label>
    <input type="email" name="CORREO_ELECTRONICO" maxlength="150" id="CORREO_ELECTRONICO" value="{{ isset($residente->CORREO_ELECTRONICO)?$residente->CORREO_ELECTRONICO:'' }}" class="form-control">
</div>





<div class="mb-3">
    <label for="NUMERO_APTO" class="form-label">Numero apartamento:</label>
    <select name="NUMERO_APTO" id="NUMERO_APTO" class="form-control">
        <option value="" selected>...</option>
        @foreach($NumeroApto as $NumeroApto)
        <option value="{{$NumeroApto['id']}}">
            {{ $NumeroApto['NUMERO_APTO']}}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="BLOQUE" class="form-label">Bloque de apartamento:</label>
    <select name="BLOQUE" id="BLOQUE" class="form-control">
        <option value="" selected>...</option>
        @foreach($Bloque as $Bloque)
        <option value="{{$Bloque['id']}}">
            {{ $Bloque['BLOQUE']}}
        </option>
        @endforeach
    </select>
</div>


    <input type="hidden" value="1" name="ESTADO_RESIDENTE">


    <a href="/residente" class="btn btn-secondary" >cancelar</a>
    <input type="submit" class="btn btn-primary" value="{{ $modo }} residente">