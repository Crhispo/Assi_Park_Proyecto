formulario que tendra datos en comun con create y edit

<div class="mb-3">
    <label for="Id" class="form-label">Numero de identificacion:</label>
    <input type="text" name="NUMERO_IDENTIFICACION" value="{{  isset($residente->NUMERO_IDENTIFICACION)?$residente->NUMERO_IDENTIFICACION:'' }}" id="NUMERO_IDENTIFICACION" maxlength="10" class="form-control">
</div>

<div class="mb-3">
    <label for="ID_TIPO_IDENTIFICACION" class="form-label">tipo de identificacion:</label>
    <select name="ID_TIPO_IDENTIFICACION" id="ID_TIPO_IDENTIFICACION" value="{{ isset($residente->ID_TIPO_IDENTIFICACION)?$residente->ID_TIPO_IDENTIFICACION:'' }}" class="form-control">
        <option value="" selected>...</option>
        <option value="1">CC - Cedula de ciudadania</option>
        <option value="2">CE - Cedula de extranjeria</option>
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
    <label for="Apartamento" class="form-label">apartamento</label>
    <input type="text" name="ID_APARTAMENTO" maxlength="5" id="ID_APARTAMENTO" value="{{ isset($residente->ID_APARTAMENTO)?$residente->ID_APARTAMENTO:'' }}" class="form-control">
</div>    

    <input type="hidden" value="1" name="ESTADO_RESIDENTE">


    <a href="/residente" class="btn btn-secondary" >cancelar</a>
    <input type="submit" class="btn btn-primary" value="enviar datos">