@extends('plantilla')
@section('title',$parqueaderoV->id?'Actualizar parqueadero Visitante':'Nuevo parqueadero Visitante')
@section('Encabezado',$parqueaderoV->id?'Actualizar parqueadero Visitante':'Nuevo parqueadero Visitante')    

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
              Admin <span class="fa-angle-right fa"></span> Parqueaderos Visitante
          </p>
      </div>
  </div>
</div>

 <center>
            <a class="btn btn-info" id="div-btn1" href="/parqueaderoform" >Residente</a>
            <a class="btn btn-info" id="div-btn1" href="/parqueaderoV" style="display: none;">Visitante</a>
        </center>
        <br>
        <div class="col-md-12 padding-0 abs-center" style="text-align:center; position: relative;">
            <div class="col-md-8">
  <div class="panel" >
      <div class="panel-heading">
        <h3>{{$parqueaderoV->id?'Actualizar parqueadero Visitante':'Nuevo parqueadero Visitante'}}</h3>
                    
                </div>
                
<form class="form-horizontal" method="POST" action="{{route('parqueaderoV.save')}}">
  @csrf  
  <input type="hidden" name="id" value="{{old('id')? old('id'):$parqueaderoV->id}}">
  <div class="mb-3">
  <label for="tipo" class="form-label">Tipo de vehiculo: <span class="text-danger">*</span></label>
  <select name="tipo" id="tipo" class="form-control">
      <option value="" selected>...</option>
      @foreach($tipo as $tipo)
      <option value="{{$tipo->ID_TIPO_PARQUEADERO_VEHICULO}}"
   {{        $parqueaderoV->tipo_parqueadero_id === $tipo->ID_TIPO_PARQUEADERO_VEHICULO ? 'selected' : ''}}
      >
          {{ $tipo->TIPO_PARQUEADERO_VEHICULO}}
      </option>
      @endforeach
  </select>
  </div>
<!-- start:tamaño -->
<div class="mb-3">
      <label class="form-label" for="TAMAÑO">Tamaño <span class="text-danger">*</span></label>
      <br>
      <input type="text" class="form-control" name="TAMAÑO" id="TAMAÑO" value="{{old('TAMAÑO')? old('TAMAÑO'):$parqueaderoV->TAMAÑO}}">
</div>
      <!-- end: tamaño -->
<!-- start:descripcion -->
<div class="mb-3">
      <label class="form-label" for="DESCRIPCION">Descripción <span class="text-danger">*</span></label>
      <br>
      <input type="text" class="form-control" name="DESCRIPCION" id="DESCRIPCION" value="{{old('DESCRIPCION')? old('DESCRIPCION'):$parqueaderoV->DESCRIPCION}}">
</div>
      <!-- end: descripcion -->
<!-- start:estado -->

<input type="hidden" value="{{old('Estado')? old('Estado'):1}}" id="Estado" name="Estado">
<!-- end: estado -->
<!-- start:botones -->
<button type="submit" class="btn btn-secondary">Guardar</button>
<button class="btn btn-secondary"><a href="/parqueaderov"  style=" color: inherit;text-decoration: none;">Cancelar</a></button>
<!-- end: botones-->
 <br>
 <br>
</form> 
</div>
</div>
</div>
 <!-- start: right menu -->
 @include('menus.menu_derecha')
 <!-- end: right menu -->
@endsection