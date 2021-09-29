@extends('plantilla')
@section('title',$asignacion->id?'Actualizar asignacion de vehiculo':'Nueva asignación')
@section('Encabezado',$asignacion->id?'Actualizar asignacion de vehiculo':'Nueva asignación')

@section('content')
<div class="card">
  <div class="card-body">

    <form class="form-horizontal" method="POST" action="{{route('asignacion.save')}}">
      @csrf
      <input type="hidden" name="id" value="{{old('id')? old('id'):$asignacion->id}}">
      <div class="form-group">
        <label class="control-label col-sm-2" for="APARTAMENTO_ID_APARTAMENTO">Id Apartamento</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="APARTAMENTO_ID_APARTAMENTO" id="APARTAMENTO_ID_APARTAMENTO" value="{{old('APARTAMENTO_ID_APARTAMENTO')? old('APARTAMENTO_ID_APARTAMENTO'): $asignacion->APARTAMENTO_ID_APARTAMENTO}}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="ID_VEHICULO">Id vehiculo</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="ID_VEHICULO" id="ID_VEHICULO" value="{{old('ID_VEHICULO')? old('ID_VEHICULO'):$asignacion->ID_VEHICULO}}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="NUMERO_PARQUEADERO">Numero Parqueadero</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="NUMERO_PARQUEADERO" id="NUMERO_PARQUEADERO" value="{{old('NUMERO_PARQUEADERO')? old('NUMERO_PARQUEADERO'):$asignacion->NUMERO_PARQUEADERO}}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO">Fecha asignación </label>
        <div class="col-sm-10">
          <input type="datetime-local" class="form-control" name="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" id="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" value="{{old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO')? old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO'):$asignacion->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-secondary">Guardar</button>
          <a href="/vehiculo" class="btn btn-secondary">Cancelar</a>

        </div>
      </div>
    </form>
  </div>
</div>

@endsection