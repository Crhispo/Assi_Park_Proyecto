formulario que tendra datos en comun con create y edit

<div class="mb-3">
    <label for="NUMERO_APTO" class="form-label">Numero de apartamento</label>
    <input type="number" name="NUMERO_APTO" maxlength="150" id="NUMERO_APTO" class="form-control" value="{{ isset($apartamento->NUMERO_APTO)?$apartamento->NUMERO_APTO:'' }}" tapindex="1">
    
</div>
<div class="mb-3">
    <label for="BLOQUE" class="form-label">Bloque</label>
    <input type="text" name="BLOQUE" maxlength="5" id="BLOQUE" class="form-control" value="{{ isset($apartamento->BLOQUE)?$apartamento->BLOQUE:'' }}" tapindex="2">
</div>

    <input type="hidden" value="1" name="ESTADO_APTO">
    
    <a href="/apartamento" class="btn btn-secondary" tapindex="3">cancelar</a>
    <input type="submit" class="btn btn-primary" value="Registrar datos" tapindex="4">