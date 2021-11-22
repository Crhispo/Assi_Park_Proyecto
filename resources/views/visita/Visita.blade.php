
@php
    $estado=$parkingV->ESTADO_PARQUEADERO;
$ocupado=$parkingV->OCUPADO;
@endphp

@if ($estado == 1)
<button type="button" value="Botón" style="margin-top: -4px;  width:100%;height:150px; background-color:green" data-toggle="modal" data-target="{{'#deleteModal'. $parkingV->{'id'} }}">                                
       @if ($ocupado == 1)
           <span class="icon-basket-loaded icons icon text-right"></span>
       @else
           {{ $parkingV->{'id'} }}
       @endif
  
      
      
      </button>
  

@else
<button type="button" value="Botón" style="margin-top: -4px;  width:100%;height:150px; background-color:red;" data-toggle="modal" data-target="{{'#deleteModal'. $parkingV->{'id'} }}">{{ $parkingV->{'id'} }}</button>
@endif
<div class="modal fade" id="{{'deleteModal'. $parkingV->{'id'} }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
  
                                                              <h4 class="modal-title" id="deleteModalLabel"> Visita </h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form class="form-horizontal" method="POST" action="{{route('asignacion.save')}}">
                                                              @csrf  
                                                              <input type="hidden" name="id" value="{{old('id')? old('id'):$asignacion->id}}">
                                                              <div class="mb-3">
                                                                <label for="NUMERO_APTO" class="form-label">Numero apartamento: <span class="text-danger">*</span></label>
                                                                <select name="NUMERO_APTO" id="NUMERO_APTO" class="form-control">
                                                                    <option value="" selected>...</option>
                                                                    @foreach($NumeroApto as $NumeroApto)
                                                                          <option value="{{ $NumeroApto['ID_APARTAMENTO'] }}" >
                                                                          {{ $NumeroApto['NUMERO_APTO'] }} ,"BLOQUE"  
                                                                          {{ $NumeroApto['BLOQUE'] }}   
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
                                                                        {{ $vehiculo['id'] }}
                                                                        </option>
                                                                  @endforeach
                                                              </select>
                                                          </div>
                                                          <div class="mb-3">
                                                            <label for="parqueadero" class="form-label">Visita: <span class="text-danger">*</span></label>
                                                            <select name="parqueadero" id="parqueadero" class="form-control">
                                                                <option value="" selected>...</option>
                                                                @foreach($parqueadero as $parqueadero)
                                                                      <option value="{{ $parqueadero['id'] }}" >
                                                                      {{ $parqueadero['id'] }}
                                                                      </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        
                                                             
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
