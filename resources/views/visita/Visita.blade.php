@section('css')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@php
    $estado1=$parkingV->ESTADO_PARQUEADERO;
$ocupado1=$parkingV->OCUPADO;
@endphp

@if ($estado1 == 1)                              
       @if ($ocupado1 == 1)
       <button type="button" value="Botón" style="margin-top: -4px;  width:100%;height:150px; background-color:#27C24C; color:white" data-toggle="modal" data-target="{{'#ocupado1'. $parkingV->{'id'} }}"> <i class="fa fa-car"></i></button>
       <div id="{{'ocupado1'. $parkingV->{'id'} }}"class="modal">
        <div class="modal-contenido" style="background-color:#2196f3; color:white;
        width:400px;
        padding: 10px 20px;
        margin: 20% auto;
        position: relative">
          @foreach($visita as $visita)

          <center>
           Apartamento:
           {{ $visita ->NUMERO_APTO }} , Bloque: 
           {{ $visita->BLOQUE }} 
           <br>
           Vehiculo con placa:
           {{$visita->placa}}
           <br>
           El visitante:con numero de identficacion:
           {{$visita->NUMERO_DOCUMENTO}}
           <br>
           Nombre:{{$visita->NOMBRE}} {{$visita->APELLIDO}}
           <br>
           Celular:{{$visita->CELULAR1}}
           <br>
           Parqueadero:{{$visita->NUMERO_PARQUEADERO}}
           <br>
           Fecha de inicio:{{$visita->FECHA_HORA_INICIO_VISITA}}
           <br>
           Fecha de finalización:{{$visita->FECHA_HORA_INICIO_VISITA}}
           <br>
               <a href="{{route('eliminarasignacionvisita',['id'=>$visita->NUMERO_PARQUEADERO])}}" class="btn btn-danger">Eliminar</a>
            
       @endforeach 
          <button type="button" style="margin-top: 0px;" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Atrás</span></button>
        </div>  
      </div>
       @else
       <button type="button" value="Botón" style="margin-top: -4px;  width:100%;height:150px; background-color:#27C24C; color:white" data-toggle="modal" data-target="{{'#deleteModal1'. $parkingV->{'id'} }}">  {{ $parkingV->{'id'} }}</button>
           
      <div class="modal fade" id="{{'deleteModal1'. $parkingV->{'id'} }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="deleteModalLabel"> Visita </h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" method="POST" action="{{route('visita.save')}}">
                    @csrf  
                    <input type="hidden" name="id" value="{{old('id')? old('id'):$vista->id}}">
                    <div class="mb-3">
                      <label for="NUMERO_APTO" class="form-label">Numero apartamento: <span class="text-danger">*</span></label>
                      <select name="NUMERO_APTO" id="NUMERO_APTO" class="form-control">
                          <option value="" selected>...</option>
                          @foreach($NumeroApto as $NumeroApto)
                          <option value="{{ $NumeroApto->ID_APARTAMENTO }}" >
                            Apartamento:
                          {{ $NumeroApto ->NUMERO_APTO }} , Bloque: 
                          {{ $NumeroApto->BLOQUE }}   
                                </option>
                          @endforeach
                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="Visitante" class="form-label">Visitante: <span class="text-danger">*</span></label>
                    <select name="Visitante" id="Visitante" class="form-control">
                        <option value="" selected>...</option>
                        @foreach($vis as $vis)
                              <option value="{{ $vis->ID_VISITANTE }}" >
                              {{ $vis->NUMERO_DOCUMENTO }}
                              {{$vis->NOMBRE}}
                              {{$vis->APELLIDO}}
                              </option>
                        @endforeach
                    </select>
                </div>

                  <div class="mb-3">
                    <label for="Vehiculo" class="form-label">Vehiculo: <span class="text-danger">*</span></label>
                    <select name="Vehiculo" id="Vehiculo" class="form-control">
                        <option value="" selected>...</option>
                        @foreach($vehiculo as $vehiculo)
                              <option value="{{ $vehiculo['id'] }}" >
                              {{ $vehiculo['placa'] }}
                              </option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden"  name="parqueadero2" id="parqueadero2" class="form-control"  style="background-color: white"    value="{{$parkingV->id}}">

              
                   
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO">Inicio asignacion <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="datetime-local" class="form-control" name="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" id="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" value="{{old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO')? old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO'):$asignacion->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO">Finalizacio de asignacion <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                          <input type="datetime-local" class="form-control" name="FECHA_FIN_DE_ASIGNACION_PARQUEADERO" id="FECHA_FIN_DE_ASIGNACION_PARQUEADERO" value="{{old('FECHA_FIN_DE_ASIGNACION_PARQUEADERO')? old('FECHA_FIN_DE_ASIGNACION_PARQUEADERO'):$asignacion->FECHA_FIN_DE_ASIGNACION_PARQUEADERO}}">
                        </div>
                  
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-secondary">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Atrás</span></button>
                  
                          </div>
                        </div>
                      </form>

                </div>
            </div>
        </div>
    </div>

       @endif
@else
<button type="button"  value="Botón" style="margin-top: -4px;  width:100%;height:150px; background-color:#FF6656; color:white" data-toggle="modal" data-target="{{'#miModal'. $parkingV->{'id'} }}">{{ $parkingV->{'id'} }}</button>

<div id="{{'miModal'. $parkingV->{'id'} }}"class="modal">
  <div class="modal-contenido" style="background-color:#2196f3; color:white;
  width:400px;
  padding: 10px 20px;
  margin: 20% auto;
  position: relative">
    <h2>Este espacio del parqueadero esta inactivo</h2>
    
    <CEnter><button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Atrás</span></button></CEnter>
  </div>  
</div>
@endif

