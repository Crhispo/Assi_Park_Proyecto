@extends('plantilla')
@section('title','Apartamento')
@section('Encabezado','Apartamento')
@section('content')
<br>
@section('css')
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection

<!-- start: Header -->
@include('menus.Header')
<!-- end: Header -->
<!-- start:Left Menu -->
@include('menus.menu_admin')
<!-- end: Left Menu -->
<!-- start: Content -->


<!-- start: Content -->


<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Formulario de apartamento</h3>
                <p class="animated fadeInDown">
                    Administrador <span class="fa-angle-right fa"></span> Registar Apartamento
                </p>
            </div>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    @csrf
    <form action="{{url('/NumeroApto')}} " method="post" class="form-element">
        @csrf
        <div class="col-md-12 padding-0">
            <div class="col-md-8">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Nuevo Numero de Apartamento</h4>
                    </div>

                    <div class="form-group">
                        <label for="NUMERO_APTO" class="font-weight-bold">Numero de apartamento <span class="text-danger">*</span> </label>
                        <input type="number" name="NUMERO_APTO" maxlength="150" id="NUMERO_APTO" class="form-control" value="" tapindex="1" required>
                        <input type="submit" class="btn btn-outline-success" value="Registrar apartamento" tapindex="4">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{url('/bloque')}} " method="post" class="form-element">
        @csrf
        <div class="col-md-12 padding-0">
            <div class="col-md-8">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Nuevo Bloque</h4>
                    </div>
                    <div class="form-group">
                        <label for="BLOQUE" class="font-weight-bold">Bloque <span class="text-danger">*</span> </label>
                        <input type="text" name="BLOQUE" maxlength="5" id="BLOQUE" class="form-control" value="" tapindex="2" required>
                        <input type="submit" class="btn btn-outline-success" value="Registrar bloque" tapindex="4">
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('apartamento.form',['modo'=>'Registrar'])

    <!-- end: content -->
    <!-- start: right menu -->
    @include('menus.menu_derecha')
    <!-- end: right menu -->