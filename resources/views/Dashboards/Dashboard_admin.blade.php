<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASSIPARK</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>

      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

	<link href="asset/css/style.css" rel="stylesheet">
	<!-- end: Css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

<script type="text/javascript">
var baseURL= {!! json_encode(url('/')) !!}

</script>
  </head>

 <body id="mimin" class="dashboard">

<!-- start: Header -->
@include('menus.Header')
<!-- end: Header -->

<div class="container-fluid mimin-wrapper">

    <!-- start:Left Menu -->
    @include('menus.menu_admin')
    <!-- end: Left Menu -->

    <!-- start: content -->
      <div id="content">
          <div class="panel">

          </div>

          <div class="col-md-12" style="padding:20px;">
              <div class="col-md-12 padding-0">
                  <div class="col-md-8 padding-0">
                      <div class="col-md-12 padding-0">
                          <div class="col-md-6">
                              <div class="panel box-v1">
                                <div class="panel-heading bg-white border-none">
                                  <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                    <h4 class="text-left">Numero de Vehiculos</h4>
                                  </div>
                                  <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                     <h4>
                                     <span class="icon-user icons icon text-right"></span>
                                     </h4>
                                  </div>
                                </div>
                                <div class="panel-body text-center">
                                  <h1>
                                    
                                    {{$cantidadveh[0]->vehiculos}}
                                  </h1>
                                  <p></p>
                                  <hr/>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="panel box-v1">
                                <div class="panel-heading bg-white border-none">
                                  <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                    <h4 class="text-left">Total Residentes</h4>
                                  </div>
                                  <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                     <h4>
                                     <span class="icon-basket-loaded icons icon text-right"></span>
                                     </h4>
                                  </div>
                                </div>
                                <div class="panel-body text-center">
                                  <h1>
                                    
                                    {{$cantidadres[0]->residente}}
                                  </h1>
                                  </h1>
                                  <p></p>
                                  <hr/>
                                </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-12">
                        <div class="panel box-v4">
                            <div class="panel-heading bg-white border-none">
                              <h4><span class="icon-notebook icons"></span> Organización Parqueadero</h4>
                            </div>
                            <div class="panel-body padding-0">
                                <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                                    <!-- <h2></h2> -->
                                    <p>Aqui podra observar la organizacion de los parqueaderos por apartamentos y bloque de todo el conjunto residencial.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                        <iframe src="/Organization" frameborder="0" allowfullscreen style="width: 908px; height:478px;margin-left: -230px;overflow-x:hidden;"></iframe>

                      <div class="col-md-12">
                          <div class="panel box-v4">
                              <div class="panel-heading bg-white border-none">
                                <h4><span class="icon-notebook icons"></span> Agenda</h4>
                              </div>
                              <div class="panel-body padding-0" id="h">
                                  <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                                      <h2> ¡Administrador Revise los proximos eventos!</h2>
                                      <p>Aqui podra revisar cuales son los proximos parqueaderos a vencer su tiempo limite.</p>
                                      <b><span class="icon-clock icons"></span> Hoy a las 15:00</b>
                                      <br>
                                      <br>
                                  
                                  <div id="agenda">

                                  </div>
                                
                                
                                <!-- Button trigger modal -->
                                
                                
                                <!-- Modal -->
                                <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Evento</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <form action="" method="POST" id="form">
                                          @csrf                                           
                                         <div class="form-group d-none" style="display:none">
                                           <label for="id">ID</label>
                                           <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                                           <small id="helpId" class="form-text text-muted">Help text</small>
                                         </div>     

                                          <div class="form-group">
                                            <label for="title">Titulo</label>
                                            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                                            <small id="helpId" class="form-text text-muted">Help text</small>
                                          </div>
                                          <div class="form-group">
                                            <label for="descripcion">Descripcion</label>
                                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                          </div>

                                          <div class="form-group d-none " style="display:none">
                                            <label for="start">Start</label>
                                            <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                                            <small id="helpId" class="form-text text-muted">Help text</small>
                                          </div>

                                          <div class="form-group d-none" style="display:none">
                                            <label for="end">End</label>
                                            <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                                            <small id="helpId" class="form-text text-muted">Help text</small>
                                          </div>
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                                        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                                        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="col-md-12 padding-0">
                        <div class="panel box-v2">
                            <div class="panel-heading padding-0">
                              <img src="asset/img/bg2.jpg" class="box-v2-cover img-responsive"/>
                              <div class="box-v2-detail">
                                <img src="asset/img/avatar.jpg" class="img-responsive"/>
                                <h4>{{ Auth::user()->NOMBRE }} {{ Auth::user()->APELLIDO }}</h4>
                              </div>
                            </div>

                        </div>
                      </div>

                      <div class="col-md-12 padding-0">
                        <div class="panel box-v3">
                          <div class="panel-heading bg-white border-none">
                            <h4>Reporte</h4>
                          </div>
                          <div class="panel-body">

                            <div class="media">
                              <div class="media-left">
                                  <span class="icon-folder icons" style="font-size:2em;"></span>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading">Apartamentos con Vehiculo</h5>
                                  <div class="progress progress-mini">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                      <span class="sr-only">20% Complete</span>
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="media">
                              <div class="media-left">
                                  <span class="icon-pie-chart icons" style="font-size:2em;"></span>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading">Numero de apartamentos vacios</h5>
                                  <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
                                      <span class="sr-only">60% Complete</span>
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="media">
                              <div class="media-left">
                                  <span class="icon-energy icons" style="font-size:2em;"></span>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading">Visitantes durante cada mes</h5>
                                  <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                      <span class="sr-only">60% Complete</span>
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="media">
                              <div class="media-left">
                                  <span class="icon-user icons" style="font-size:2em;"></span>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading">Residentes sin parqueadero</h5>
                                  <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                      <span class="sr-only">60% Complete</span>
                                    </div>
                                  </div>
                              </div>
                            </div>

                             <div class="media">
                              <div class="media-left">
                                  <span class="icon-fire icons" style="font-size:2em;"></span>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading">Parqueaderos Asignados</h5>
                                  <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                      <span class="sr-only">60% Complete</span>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel-footer bg-white border-none">
                              <center>
                                <input type="button" value="Descargar como PDF" class="btn btn-danger box-shadow-none"/>
                              </center>
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

</div>

<!-- start: Mobile -->
<div id="mimin-mobile" class="reverse">
  <div class="mimin-mobile-menu-list">
      <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
          <ul class="nav nav-list">
              <li class="active ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-home fa"></span>Dashboard
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                    <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-diamond fa"></span>Layout
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="topnav.html">Top Navigation</a></li>
                  <li><a href="boxed.html">Boxed</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-area-chart fa"></span>Charts
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="chartjs.html">ChartJs</a></li>
                  <li><a href="morris.html">Morris</a></li>
                  <li><a href="flot.html">Flot</a></li>
                  <li><a href="sparkline.html">SparkLine</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa fa-pencil-square"></span>Ui Elements
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="color.html">Color</a></li>
                  <li><a href="weather.html">Weather</a></li>
                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="panels.html">Panels & Tabs</a></li>
                  <li><a href="notifications.html">Notifications & Tooltip</a></li>
                  <li><a href="badges.html">Badges & Label</a></li>
                  <li><a href="progress.html">Progress</a></li>
                  <li><a href="sliders.html">Sliders</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="modal.html">Modals</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                 <span class="fa fa-check-square-o"></span>Forms
                 <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="formelement.html">Form Element</a></li>
                  <li><a href="#">Wizard</a></li>
                  <li><a href="#">File Upload</a></li>
                  <li><a href="#">Text Editor</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa fa-table"></span>Tables
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="datatables.html">Data Tables</a></li>
                  <li><a href="handsontable.html">handsontable</a></li>
                  <li><a href="tablestatic.html">Static</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a href="calendar.html">
                   <span class="fa fa-calendar-o"></span>Calendar
                </a>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa fa-envelope-o"></span>Mail
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="mail-box.html">Inbox</a></li>
                  <li><a href="compose-mail.html">Compose Mail</a></li>
                  <li><a href="view-mail.html">View Mail</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa fa-file-code-o"></span>Pages
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="forgotpass.html">Forgot Password</a></li>
                  <li><a href="login.html">SignIn</a></li>
                  <li><a href="reg.html">SignUp</a></li>
                  <li><a href="article-v1.html">Article v1</a></li>
                  <li><a href="search-v1.html">Search Result v1</a></li>
                  <li><a href="productgrid.html">Product Grid</a></li>
                  <li><a href="profile-v1.html">Profile v1</a></li>
                  <li><a href="invoice-v1.html">Invoice v1</a></li>
                </ul>
              </li>
               <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="view-mail.html">Level 1</a></li>
                  <li><a href="view-mail.html">Level 1</a></li>
                  <li class="ripple">
                    <a class="sub-tree-toggle nav-header">
                      <span class="fa fa-envelope-o"></span> Level 1
                      <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list sub-tree">
                      <li><a href="mail-box.html">Level 2</a></li>
                      <li><a href="compose-mail.html">Level 2</a></li>
                      <li><a href="view-mail.html">Level 2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="credits.html">Credits</a></li>
            </ul>
      </div>
  </div>
</div>
<button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
  <span class="fa fa-bars"></span>
</button>
 <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/fullcalendar.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.vmap.min.js"></script>
<script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
<script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
<script src="asset/js/plugins/chart.min.js"></script>


<!-- custom -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('js/agenda.js')}}" defer></script>
<script src="asset/js/main.js"></script>
<script src="asset/js/gadgets.js"></script>

  </body>
</html>





