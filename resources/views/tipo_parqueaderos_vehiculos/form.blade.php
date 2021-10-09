@extends('plantilla')
@section('title',$tipo->id?'Actualizar tipo_parqueadero':'Nuevo tipo_parqueadero')
@section('Encabezado',$tipo->id?'Actualizar tipo_parqueadero':'Nuevo tipo_parqueadero')    

@section('content')
<form class="form-horizontal" method="POST" action="{{route('tipo.save')}}">
  @csrf  
  <input type="hidden" name="id" value="{{old('id')? old('id'):$tipo->id}}">
  


    <div class="form-group">
      <label class="control-label col-sm-2" for="tipo_parqueaderos">tipo parqueaderos</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="tipo_parqueaderos" id="tipo" value="{{old('tipo')? old('tipo'):$tipo->tipo}}">
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
             <a href="/tipo" class="btn btn-secondary">Cancelar</a>
 <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</form>

@endsection