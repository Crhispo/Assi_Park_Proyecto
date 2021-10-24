<form action="{{url('/apartamento')}}" method="post">
@csrf

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        
    </ul>
        @foreach($errors->all() as $error)
             <li>{{$error}}</li>
            @endforeach
</div>

@endif

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

    <input type="submit" class="btn btn-primary" value="{{ $modo }} apartamento" tapindex="4">
</form>

    <input type="hidden" value="0" name="ESTADO_APTO">
    
    <a href="/apartamento" class="btn btn-secondary" tapindex="3">cancelar</a>
    