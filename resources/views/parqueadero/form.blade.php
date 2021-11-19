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
 <center>
            <a class="btn btn-info" id="div-btn1" href="/parqueadero" style="display: none;">Residente</a>
            <a class="btn btn-info" id="div-btn1" href="/parqueaderoVform" >Visitante</a>
        </center>
<<<<<<< HEAD
<br>
        <div class="col-md-12 padding-0" style="text-align:center; position: relative;">
            <div class="col-md-8">
  <div class="panel" >
=======

<div id="content">
<div class="col-md-12">
  <div class="panel">
>>>>>>> 6be48429ad6838813bd87c3bf2bd17fa83a1d954
      <div class="panel-heading">
        <h3>{{$parqueadero->id?'Actualizar parqueadero':'Nuevo parqueadero'}}</h3>
                    
                </div>
                
<form class="form-horizontal" method="POST" action="{{route('parqueadero.save')}}">
  @csrf  
  <input type="hidden" name="id" value="{{old('id')? old('id'):$parqueadero->id}}">
  <div class="mb-3">
<<<<<<< HEAD
  <label for="tipo" class="form-label ">Tipo de vehiculo:</label>
  <select name="tipo" id="tipo" class="form-control ">
=======
  <label for="tipo" class="form-label">Tipo de vehiculo:</label>
  <select name="tipo" id="tipo" class="form-control">
>>>>>>> 6be48429ad6838813bd87c3bf2bd17fa83a1d954
      <option value="" selected>...</option>
      @foreach($tipo as $tipo)
      <option value="{{$tipo->ID_TIPO_PARQUEADERO_VEHICULO}}"
   {{        $parqueadero->tipo_parqueadero_id === $tipo->ID_TIPO_PARQUEADERO_VEHICULO ? 'selected' : ''}}
      >
          {{ $tipo->TIPO_PARQUEADERO_VEHICULO}}
      </option>
      @endforeach
  </select>
  </div>
<!-- start:tamaño -->
<div class="mb-3">
      <label class="form-label" for="TAMAÑO">Tamaño</label>
      <br>
      <input type="text" class="form-control" name="TAMAÑO" id="TAMAÑO" value="{{old('TAMAÑO')? old('TAMAÑO'):$parqueadero->TAMAÑO}}">
</div>
      <!-- end: tamaño -->
<!-- start:descripcion -->
<div class="mb-3">
      <label class="form-label" for="DESCRIPCION">Descripcin</label>
      <br>
      <input type="text" class="form-control" name="DESCRIPCION" id="DESCRIPCION" value="{{old('DESCRIPCION')? old('DESCRIPCION'):$parqueadero->DESCRIPCION}}">
</div>
      <!-- end: descripcion -->
<!-- start:estado -->

<input type="hidden" value="{{old('Estado')? old('Estado'):1}}" id="Estado" name="Estado">
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
</div>
<<<<<<< HEAD
 </div>
 
=======
>>>>>>> 6be48429ad6838813bd87c3bf2bd17fa83a1d954
 <!-- start: right menu -->
 @include('menus.menu_derecha')
 <!-- end: right menu -->
@endsection