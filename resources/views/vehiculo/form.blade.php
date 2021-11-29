@extends('plantilla')
@section('title',$vehiculo->id?'Actualizar vehiculo':'Nuevo vehiculo')
@section('Encabezado',$vehiculo->id?'Actualizar vehiculo':'Nuevo vehiculo')


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
                    Admin <span class="fa-angle-right fa"></span> Vehiculos
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3>{{$vehiculo->id?'Actualizar vehiculo':'Nuevo vehiculo'}}</h3>

            </div>
            @if($errors->any())
            
            <div class="swal-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--error">
                <div class="swal-icon--error__x-mark">
                  <span class="swal-icon--error__line swal-icon--error__line--left"></span>
                  <span class="swal-icon--error__line swal-icon--error__line--right"></span>
                </div>
              </div><div class="swal-title" style="">Error</div><div class="swal-text" style="">Error al registrar el usuario confirmar los datos</div><div class="swal-footer"><div class="swal-button-container">
            
                <button class="swal-button swal-button--confirm">OK</button>
            
                <div class="swal-button__loader">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
            
              </div></div></div>
            
                    @endif
            <br>
            <form class="form-horizontal" method="POST" action="{{route('vehiculo.save')}}">
                @csrf
                <input type="hidden" name="id" value="{{old('id')? old('id'):$vehiculo->id}}">

                <label for="NUMERO_IDENTIFICACION" class="form-label">Numero Identificación Propietario <span class="text-danger">*</span></label>
                <select name="NUMERO_IDENTIFICACION" id="NUMERO_IDENTIFICACION" class="form-control" >
                    <option value="" selected>...</option>
                    @foreach($residente as $residente)
                    <option value="{{$residente->NUMERO_IDENTIFICACION}}" {{$vehiculo->NUMERO_IDENTIFICACION === $residente->NUMERO_IDENTIFICACION ? 'selected' : ''}}>
                        {{ $residente->NUMERO_IDENTIFICACION}}
                    </option>
                    @endforeach
                </select>
                <label for="marca" class="form-label">Marca: <span class="text-danger">*</span></label>
                <select name="marca" id="marca" class="form-control" required>
                    <option value="" selected>...</option>
                    @foreach($marca as $marca)
                    <option value="{{$marca->ID_MARCA}}" {{$vehiculo->marca_id === $marca->ID_MARCA ? 'selected' : ''}}>
                        {{ $marca->MARCA}}
                    </option>
                    @endforeach
                </select>
                <label for="Color" class="form-label">Color: <span class="text-danger">*</span></label>
                <select name="Color" id="Color" class="form-control" required>
                    <option value="" selected>...</option>
                    @foreach($color as $color)
                    <option value="{{$color->ID_COLOR}}" {{$vehiculo->color_id === $color->ID_COLOR ? 'selected' : ''}}>
                        {{ $color->COLOR}}
                    </option>
                    @endforeach
                </select>
                </select>
                <label for="tipo" class="form-label">Tipo de vehiculo: <span class="text-danger">*</span></label>
                <select name="tipo" id="tipo" class="form-control" required>
                    <option value="" selected>...</option>
                    @foreach($tipo as $tipo)
                    <option value="{{$tipo->ID_TIPO_PARQUEADERO_VEHICULO}}" {{$vehiculo->tipo_parqueadero_id === $tipo->ID_TIPO_PARQUEADERO_VEHICULO ? 'selected' : ''}}>
                        {{$tipo->TIPO_PARQUEADERO_VEHICULO}}
                    </option>
                    @endforeach
                </select>

                <!-- start:placa -->
                <label class="form-label" for="placa">Placa <span class="text-danger">*</span></label>
                <br>
                <input type="text" class="form-control" name="placa" required id="placa" value="{{old('placa')? old('placa'):$vehiculo->placa}}">
                <!-- end: placa -->
                <!-- start:estado -->
                <label class="form-label" for="estado">Estado</label>
                <br>
                <select name="ESTADO_VEHICULO" class="form-control" id="ESTADO_VEHICULO" value="{{old('ESTADO_VEHICULO')? old('ESTADO_VEHICULO'):$vehiculo->ESTADO_VEHICULO}}">
                    <option selected="true" disabled="disabled">seleccione estado</option>
                    <option value="1">activo</option>
                    <option value="0">inactivo</option>
                </select>
                <!-- end: estado -->



                <!-- start:botones -->
                <button type="submit" class="btn btn-secondary" >Guardar</button>
                <button class="btn btn-secondary"><a href="/vehiculo" style=" color: inherit;text-decoration: none;">Cancelar</a></button>
                <!-- end: botones -->
                <br>
                <br>
            </form>
        </div>
    </div>

    <!-- start: right menu -->
    @include('menus.menu_derecha')
    <!-- end: right menu -->
    @endsection
