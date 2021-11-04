@extends('plantilla')
@section('title',$parqueadero->id?'Actualizar parqueadero':'Nuevo parqueadero')
@section('Encabezado',$parqueadero->id?'Actualizar parqueadero':'Nuevo parqueadero')    

@section('content')
<!-- start: Header -->
@include('menus.Header')
<!-- end: Header -->

 <!-- start:Left Menu -->
 @include('menus.menu_admin')
 <!-- end: Left Menu -->
 <div class="panel box-shadow-none content-header">
  <div class="panel-body">
      <div class="col-md-12">
          <h3 class="animated fadeInLeft">Bienvenido Administrador</h3>

         
          

          <p class="animated fadeInDown">
              Admin <span class="fa-angle-right fa"></span> Vehiculos
          </p>
      </div>
  </div>
</div>
<form class="form-horizontal" method="POST" action="{{route('parqueadero.save')}}">
  @csrf  
  <input type="hidden" name="id" value="{{old('id')? old('id'):$parqueadero->id}}">
  
  <label for="tipo" class="form-label">Tipo de vehiculo:</label>
  <select name="tipo" id="tipo" class="form-control">
      <option value="" selected>...</option>
      @foreach($tipo as $tipo)
      <option value="{{$tipo->ID_TIPO_PARQUEADERO_VEHICULO}}"
   {{        $parqueadero->tipo_parqueadero_id === $tipo->ID_TIPO_PARQUEADERO_VEHICULO ? 'selected' : ''}}
      >
          {{ $tipo->TIPO_PARQUEADERO_VEHICULO}}
      </option>
      @endforeach
  </select>
<br>

    <div class="form-group">
      <label class="control-label col-sm-2" for="TAMAÑO">Tamaño</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="TAMAÑO" id="TAMAÑO" value="{{old('TAMAÑO')? old('TAMAÑO'):$parqueadero->TAMAÑO}}">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="DESCRIPCION">Descripcin</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="DESCRIPCION" id="DESCRIPCION" value="{{old('DESCRIPCION')? old('DESCRIPCION'):$parqueadero->DESCRIPCION}}">
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