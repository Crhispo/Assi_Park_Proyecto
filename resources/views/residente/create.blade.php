@extends('plantilla')
@section('title','Residente')
@section('Encabezado','Residente')
@section('content')

<!-- start: Header -->
@include('menus.Header')
<!-- end: Header -->
    <!-- start:Left Menu -->
    @include('menus.menu_admin')
    <!-- end: Left Menu -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<form action="{{url('/residenteform')}} " method="POST">
@csrf
@include('residente.form',['modo'=>'Registrar'])

</form>
 <!-- end: content -->
    <!-- start: right menu -->
    @include('menus.menu_derecha')
    <!-- end: right menu -->