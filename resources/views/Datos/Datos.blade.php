@extends('plantilla')
@section('title','Datos')
@section('Encabezado','Datos')
@section('content')
<br>

@section('css')
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

@endsection

<!-- start: Header -->
@include('menus.Header')
<!-- end: Header -->
<div class="container-fluid mimin-wrapper">
    <!-- start:Left Menu -->
    @include('menus.menu_admin')
    <!-- end: Left Menu -->


    <!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Bienvenido Administrador</h3>




                    
                </div>
            </div>
        </div>
        <div class="col-md-12 top-20 padding-0">

            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <center>
                        <h3>Cantidades</h3>
</center>
                    </div>

                    <div class="panel-body">
                        <div class="responsive-table">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-6">
                                  <div class="panel box-v1">
                                    <div class="panel-heading bg-white border-none">
                                      <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left">Número de Vehículos</h4>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <h4>
                                          <span class="icon-basket-loaded icons icon text-right"></span>
                                        </h4>
                                      </div>
                                    </div>
                                    <div class="panel-body text-center">
                                      <h1>
                  
                                        {{$cantidadveh[0]->vehiculos}}
                                      </h1>
                                      <p></p>
                                      <hr />
                                    </div>
                                  </div>
                                </div>
                                <!--residentes inicio-->
                                <div class="col-md-6">
                                  <div class="panel box-v1">
                                    <div class="panel-heading bg-white border-none">
                                      <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left">Total Residentes</h4>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <h4>
                                          <span class="icon-user icons icon text-right"></span>
                                        </h4>
                                      </div>
                                    </div>
                                    <div class="panel-body text-center">
                                      <h1>
                  
                                        {{$cantidadres[0]->residente}}
                                      </h1>
                                      </h1>
                                      <p></p>
                                      <hr />
                                    </div>
                                  </div>
                                </div>
                                <!--residentes fin-->
                                <!--residentes inicio-->
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Total Usuarios</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                          <h4>
                                            <span class="icon-user icons icon text-right"></span>
                                          </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>
                    
                                          {{$usuarios[0]->usuario}}
                                        </h1>
                                        </h1>
                                        <p></p>
                                        <hr />
                                      </div>
                                    </div>
                                  </div>
                                  <!--residentes fin-->
                            <!--residentes inicio-->
                            <div class="col-md-6">
                                <div class="panel box-v1">
                                <div class="panel-heading bg-white border-none">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                    <h4 class="text-left">Total visita</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <h4>
                                    <span class="icon-user icons icon text-right"></span>
                                </h4>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <h1>

                                {{$visista[0]->visitante}}
                                </h1>
                                </h1>
                                <p></p>
                                <hr />
                            </div>
                            </div>
                        </div>
                        <!--residentes fin-->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: content -->
    <!-- start: right menu -->
    @include('menus.menu_derecha')
    <!-- end: right menu -->

    
@endsection
