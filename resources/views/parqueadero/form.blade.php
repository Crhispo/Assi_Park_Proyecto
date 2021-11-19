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
 <div id="content">
 <div class="panel box-shadow-none content-header">
  <div class="panel-body">
      <div class="col-md-12">
          <h3 class="animated fadeInLeft">Bienvenido Administrador</h3>

         
          

          <p class="animated fadeInDown">
              Admin <span class="fa-angle-right fa"></span> parqueaderos
          </p>
      </div>
  </div>
</div>
<div class="col-md-12">
  <div class="panel">
      <div class="panel-heading">
        <h3>{{$parqueadero->id?'Actualizar parqueadero':'Nuevo parqueadero'}}</h3>
                    
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

<!-- start:tamaño -->
      <label class="form-label" for="TAMAÑO">Tamaño</label>
      <br>
      <input type="text" class="form-control" name="TAMAÑO" id="TAMAÑO" value="{{old('TAMAÑO')? old('TAMAÑO'):$parqueadero->TAMAÑO}}">
<!-- end: tamaño -->
<!-- start:descripcion -->
      <label class="form-label" for="DESCRIPCION">Descripcin</label>
      <br>
      <input type="text" class="form-control" name="DESCRIPCION" id="DESCRIPCION" value="{{old('DESCRIPCION')? old('DESCRIPCION'):$parqueadero->DESCRIPCION}}">
<!-- end: descripcion -->
<!-- start:estado -->

      <label class="form-label" for="Estado">Estado</label>
      <br>
      <select name="Estado" class="form-control" id="Estado" value="{{old('Estado')? old('Estado'):$parqueadero->Estado}}">
        <option selected="true" disabled="disabled">seleccione estado</option>
        <option value="1">activo</option>
        <option value="0" >inactivo</option>
      </select>
    
<!-- end: estado -->
<!-- start:botones -->
<button type="submit" class="btn btn-secondary">Guardar</button>
<button class="btn btn-secondary"><a href="/parqueadero"  style=" color: inherit;text-decoration: none;">Cancelar</a></button>
<!-- end: botones-->
 <br>
 <br>
</form> 
</div>
</div>
 <!-- start: right menu -->
 @include('menus.menu_derecha')
 <!-- end: right menu -->
@endsection