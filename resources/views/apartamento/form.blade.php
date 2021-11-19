<form action="{{url('/apartamento')}}" method="post">
@csrf
    <div class="col-md-12 padding-0">
        <div class="col-md-8">
            <div class="panel form-element-padding">
                <div class="panel-heading">
                    <h4>Nuevo Apartamento</h4>
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
                            <label for="NUMERO_APTO" class="font-weight-bold">Numero de apartamento <span class="text-danger">*</span></label>
                                <select name="NUMERO_APTO" id="NUMERO_APTO" class="form-control">
                                    <option value="" selected>...</option>
                                    @foreach($NumeroApto as $NumeroApto)
                                    <option value="{{$NumeroApto['id']}}">
                                        {{ $NumeroApto['NUMERO_APTO']}}
                                    </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="Bloque" class="font-weight-bold">Bloque <span class="text-danger">*</span></label>
                                <select name="Bloque" id="Bloque" class="form-control">
                                    <option value="" selected>...</option>
                                    @foreach($Bloque as $Bloque)
                                    <option value="{{$Bloque['id']}}">
                                        {{ $Bloque['BLOQUE']}}
                                    </option>
                                    @endforeach
                                </select>
                        </div>
                        <input type="hidden" value="0" name="ESTADO_APTO">
                        <input type="submit" class="btn btn-outline-success" value="{{ $modo }} apartamento" tapindex="4">
                        <br>
                        <br>
                        <a href="/apartamento" class="btn btn-secondary" tapindex="3">cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>    