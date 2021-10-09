@extends('plantilla')
@section('title',$asignacion->id?'Actualizar asignacion de vehiculo':'Nuevo asignacion')
@section('Encabezado',$asignacion->id?'Actualizar asignacion de vehiculo':'Nuevo asignacion')    

@section('content')
    
<form class="form-horizontal" method="POST" action="{{route('asignacion.save')}}">
  @csrf  
  
    <div class="mb-3">
      <label for="NUMERO_APTO" class="form-label">Numero apartamento:</label>
      <select name="NUMERO_APTO" id="NUMERO_APTO" class="form-control">
          <option value="" selected>...</option>
          @foreach($vehiculo as $vehiculo)
                <option value="{{ $NumeroApto['id'] }}" >
                {{ $vehiculo['NUMERO_APTO'] }}    
                </option>
          @endforeach
      </select>
  </div>
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO">Inicio asignacion</label>
      <div class="col-sm-10">
        <input type="datetime-local" class="form-control" name="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" id="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" value="{{old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO')? old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO'):$asignacion->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO">Finalizacio de asignacion</label>
      <div class="col-sm-10">
        <input type="datetime-local" class="form-control" name="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" id="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" value="{{old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO')? old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO'):$asignacion->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO}}">
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