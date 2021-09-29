@extends('plantilla')
@section('title',$vehiculo->id?'Actualizar vehiculo':'Nuevo vehiculo')
@section('Encabezado',$vehiculo->id?'Actualizar vehiculo':'Nuevo vehiculo')

@section('content')

<form class="form-horizontal" method="POST" action="{{route('vehiculo.save')}}">
  @csrf
  <input type="hidden" name="id" value="{{old('id')? old('id'):$vehiculo->id}}">
  <div class="form-group">
      <label class="control-label col-sm-2" for="Numero">Numero</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="Numero_de_identificacion_propietario" id="Numero_de_identificacion_propietario"
        value="{{old('Numero_de_identificacion_propietario')? old('Numero_de_identificacion_propietario'): $vehiculo->Numero_de_identificacion_propietario}}">
      </div>
    </div>
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
  <label for="Color" class="form-label">Tipo de vehiculo:</label>
  <select name="Color" id="Color" class="form-control">
      <option value="" selected>...</option>
      @foreach($tipo as $tipo)
      <option value="{{$color['ID_TIPO_PARQUEADERO_VEHICULO']}}">
          {{ $tipo['TIPO_PARQUEADERO_VEHICULO']}}
      </option>
      @endforeach
  </select>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Placa">Placa</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="Placa" id="Placa" value="{{old('Placa')? old('Placa'):$vehiculo->Placa}}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Estado</label>
      <div class="col-sm-10">
      <!--<input type="number" class="form-control" name="" id="estado" value="{{old('estado')? old('estado'):$vehiculo->estado}}">-->
      <select name="estado" id="estado" value="{{old('estado')? old('estado'):$vehiculo->estado}}">
        <option selected="true" disabled="disabled">seleccione estado</option>
        <option value="1">activo</option>
        <option value="0" >inactivo</option>
      </select>
    </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
           <a href="/vehiculo" class="btn btn-secondary">Cancelar</a>
   <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>

@endsection
