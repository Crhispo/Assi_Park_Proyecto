@extends('plantilla')
@section('title','Apartamento')
@section('Encabezado','Apartamento')
@section('content')
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


<h2>Registrar apartamento</h2>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

@csrf
<form action="{{url('/NumeroApto')}} " method="post">
@csrf
    <div class="mb-3">
        <label for="NUMERO_APTO" class="form-label">Numero de apartamento</label>
        <input type="number" name="NUMERO_APTO" maxlength="150" id="NUMERO_APTO" class="form-control" value="" tapindex="1" required>
        <input type="submit" class="btn btn-primary" value="Registrar apartamento" tapindex="4">
    </div>

</form>

<form action="{{url('/bloque')}} " method="post">
@csrf
    <div class="mb-3">
        <label for="BLOQUE" class="form-label">Bloque</label>
        <input type="text" name="BLOQUE" maxlength="5" id="BLOQUE" class="form-control" value="" tapindex="2" required>
        <input type="submit" class="btn btn-primary" value="Registrar bloque" tapindex="4">
    </div>
</form>
@include('apartamento.form',['modo'=>'Registrar'])

<!-- end: content -->
    <!-- start: right menu -->
    @include('menus.menu_derecha')
    <!-- end: right menu -->
