@extends('plantilla')
@section('title',$vehiculo->id?'Actualizar vehiculo':'Nuevo vehiculo')
@section('Encabezado',$vehiculo->id?'Actualizar vehiculo':'Nuevo vehiculo')

@section('content')

<form class="form-horizontal" method="POST" action="{{route('vehiculo.save')}}">
  @csrf
  <input type="hidden" name="id" value="{{old('id')? old('id'):$vehiculo->id}}">

    <label for="NUMERO_IDENTIFICACION" class="form-label">Numero Identificación Propietario</label>
    <select name="NUMERO_IDENTIFICACION" id="NUMERO_IDENTIFICACION" class="form-control">
        <option value="" selected>...</option>
        @foreach($residente as $residente)
        <option value="{{$residente['NUMERO_IDENTIFICACION']}}">
            {{ $residente['NUMERO_IDENTIFICACION']}}
        </option>
        @endforeach
    </select>
    <label for="marca" class="form-label">Marca:</label>
    <select name="marca" id="marca" class="form-control">
        <option value="" selected>...</option>
        @foreach($marca as $marca)
        <option value="{{$marca['ID_MARCA']}}">
            {{ $marca['MARCA']}}
        </option>
        @endforeach
    </select>
    <label for="Color" class="form-label">Color:</label>
    <select name="Color" id="Color" class="form-control">
        <option value="" selected>...</option>
        @foreach($color as $color)
        <option value="{{$color['ID_COLOR']}}">
            {{ $color['COLOR']}}
        </option>
        @endforeach
    </select>
  </select>
  <label for="tipo" class="form-label">Tipo de vehiculo:</label>
  <select name="tipo" id="tipo" class="form-control">
      <option value="" selected>...</option>
      @foreach($tipo as $tipo)
      <option value="{{$tipo['ID_TIPO_PARQUEADERO_VEHICULO']}}">
          {{ $tipo['TIPO_PARQUEADERO_VEHICULO']}}
      </option>
      @endforeach
  </select>
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="placa">Placa</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="placa" id="placa" value="{{old('placa')? old('placa'):$vehiculo->placa}}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Estado</label>
      <div class="col-sm-10">
      <!--<input type="number" class="form-control" name="" id="estado" value="{{old('estado')? old('estado'):$vehiculo->estado}}">-->
      <select name="ESTADO_VEHICULO" id="ESTADO_VEHICULO" value="{{old('ESTADO_VEHICULO')? old('ESTADO_VEHICULO'):$vehiculo->ESTADO_VEHICULO}}">
        <option selected="true" disabled="disabled">seleccione estado</option>
        <option value="1">activo</option>
        <option value="0" >inactivo</option>
      </select>
    </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-secondary">Guardar</button>
           <a href="/vehiculo" class="btn btn-secondary">Cancelar</a>
   
      </div>
    </div>
  </form>

@endsection
