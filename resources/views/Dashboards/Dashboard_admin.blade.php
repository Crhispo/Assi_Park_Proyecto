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
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css" />

  <link rel="shortcut icon" href="img/2prin.png" type="image/png">
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

  <!-- <script type="text/javascript">
var baseURL= {!! json_encode(url('/')) !!}

</script> -->
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
            
            <div class="col-md-12">
              <div class="panel box-v4">
                <div class="panel-heading bg-white border-none">
                  <h4><span class="icon-notebook icons"></span> Organización Parqueadero</h4>
                </div>
                <div class="panel-body padding-0">
                  <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                    <!-- <h2></h2> -->
                    <p>Aqui podra observar la organizacion de los parqueaderos por apartamentos y bloque de todo el conjunto residencial.</p>

                    <table id="Tabla_consulta" class="table table-striped table-bordered" width="10%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>A</th>
                          <th>B</th>
                          <th>C</th>
                          <th>D</th>
                          <th>F</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $parqueadero as $parking )
                        @php
                        $total=$parking->{'id'} % 5;

                        @endphp

                        <td style="padding: 0px !important;">
                          @include('Asignacion.form')
                        </td>
                        @if ($total==0)
                        <tr></tr>
                        @endif

                        @endforeach
                      </tbody>
                    </table>
                    <br><br>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="panel box-v4">
                <div class="panel-heading bg-white border-none">
                  <h4><span class="icon-notebook icons"></span> Organización Parqueadero visitante</h4>
                </div>
                <div class="panel-body padding-0">
                  <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                    <!-- <h2></h2> -->
                    <p>Aqui podra observar la organizacion de los parqueaderos de los visitantes del conjunto residencial.</p>
                    <table id="Tabla_consulta" class="table table-striped table-bordered" width="10%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>A</th>
                          <th>B</th>
                          <th>C</th>
                          <th>D</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $parqueaderoV as $parkingV )
                        @php
                        $total1=$parkingV->{'id'} % 4;

                        @endphp

                        <td style="padding: 0px !important;">
                          @include('visita.Visita')
                        </td>
                        @if ($total1==0)
                        <tr></tr>
                        @endif

                        @endforeach
                      </tbody>
                    </table>
                    <br>
                    <br>
                  </div>
                </div>
              </div>
            </div>
 
           

@if (Auth::user()->ID_TIPO_USUARIO == 1 || Auth::user()->ID_TIPO_USUARIO == 2)
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
@else
<div class="col-md-12">
  <div class="panel box-v4">
    <div class="panel-heading bg-white border-none">

    </div>
    <div class="panel-body padding-0" id="h">
      <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
@endif

                    

                    

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

                  <img src="img\FONDO_PERFIL.png" class="box-v2-cover img-responsive" />
                  <div class="box-v2-detail">
                    <img src="{{'https://ui-avatars.com/api/?background=random&name='.Auth::user()->NOMBRE.'+'.Auth::user()->APELLIDO}}" class="img-responsive" />
                    <!--<h4>{/*{ Auth::user()->NOMBRE }*/} {/*{ Auth::user()->APELLIDO }*/}</h4>-->
                  </div>
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

    </div>

   
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