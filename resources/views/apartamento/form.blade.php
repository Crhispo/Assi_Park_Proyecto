formulario que tendra datos en comun con create y edit


<form action="{{url('/NumeroApto')}} " method="post">
@csrf
    <div class="mb-3">
        <label for="NUMERO_APTO" class="form-label">Numero de apartamento</label>
        <input type="number" name="NUMERO_APTO" maxlength="150" id="NUMERO_APTO" class="form-control" value="{{ isset($apartamento->NUMERO_APTO)?$apartamento->NUMERO_APTO:'' }}" tapindex="1">
        <input type="submit" class="btn btn-primary" value="Registrar apartamento" tapindex="4">
    </div>

</form>

<form action="{{url('/bloque')}} " method="post">
@csrf
    <div class="mb-3">
        <label for="BLOQUE" class="form-label">Bloque</label>
        <input type="text" name="BLOQUE" maxlength="5" id="BLOQUE" class="form-control" value="{{ isset($apartamento->BLOQUE)?$apartamento->BLOQUE:'' }}" tapindex="2">
        <input type="submit" class="btn btn-primary" value="Registrar bloque" tapindex="4">
    </div>
</form>

<form action="{{url('/apartamento')}}" method="post">
@csrf

<label for="NUMERO_APTO" class="form-label">Numero de apartamento</label>
    <select name="NUMERO_APTO" id="NUMERO_APTO" class="form-control">
        <option value="" selected>...</option>
        @foreach($NumeroApto as $NumeroApto)
        <option value="{{$NumeroApto['id']}}">
            {{ $NumeroApto['NUMERO_APTO']}}
        </option>
        @endforeach
    </select>

<label for="Bloque" class="form-label">Bloque:</label>
    <select name="Bloque" id="Bloque" class="form-control">
        <option value="" selected>...</option>
        @foreach($Bloque as $Bloque)
        <option value="{{$Bloque['id']}}">
            {{ $Bloque['BLOQUE']}}
        </option>
        @endforeach
    </select>


    <input type="submit" class="btn btn-primary" value="Registrar apartamento" tapindex="4">
</form>


    <input type="hidden" value="1" name="ESTADO_APTO">
    
    <a href="/apartamento" class="btn btn-secondary" tapindex="3">cancelar</a>
    