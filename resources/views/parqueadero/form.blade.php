@extends('plantilla')
@section('title',$parqueadero->id?'Actualizar parqueadero':'Nuevo parqueadero')
@section('Encabezado',$parqueadero->id?'Actualizar parqueadero':'Nuevo parqueadero')    

@section('content')
<form class="form-horizontal" method="POST" action="{{route('parqueadero.save')}}">
  @csrf  
  <input type="hidden" name="id" value="{{old('id')? old('id'):$parqueadero->id}}">
  
  <div class="form-group">
      <label class="control-label col-sm-2" for="Tipo_parqueadero">Tipo_parqueadero</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="Tipo_parqueadero" id="Tipo_parqueadero" value="{{old('Tipo_parqueadero')? old('Tipo_parqueadero'):$parqueadero->Tipo_parqueadero}}">
    </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="Tamano">Tamano</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="Tamano" id="Tamano" value="{{old('Tamano')? old('Tamano'):$parqueadero->Tamano}}">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="Descripcion">Descripcion</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="{{old('Descripcion')? old('Descripcion'):$parqueadero->Descripcion}}">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="Estado">Estado</label>
      <div class="col-sm-10">

      <select name="Estado" id="Estado" value="{{old('Estado')? old('Estado'):$parqueadero->Estado}}">
        <option selected="true" disabled="disabled">seleccione estado</option>
        <option value="1">activo</option>
        <option value="0" >inactivo</option>
      </select>
    </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
             <a href="/parqueadero" class="btn btn-secondary">Cancelar</a>
 <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</form>

@endsection