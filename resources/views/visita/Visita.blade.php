@if (1==1)
    
@endif
<button type="button" value="Botón" style="margin-top: -4px;  width:100%;height:150px" data-toggle="modal" data-target="{{'#deleteModal'. $parking->{'id'} }}">{{ $parking->{'id'} }}</button>
<div class="modal fade" id="{{'deleteModal'. $parking->{'id'} }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
  
                                                              <h4 class="modal-title" id="deleteModalLabel"> Cuadro de confirmación </h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form class="form-horizontal" method="POST" action="{{route('asignacion.save')}}">
                                                              @csrf  
                                                              <input type="hidden" name="id" value="{{old('id')? old('id'):$asignacion->id}}">
                                                              <div class="mb-3">
                                                                <label for="NUMERO_APTO" class="form-label">Numero apartamento:</label>
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
                                                              <label for="Vehiculo" class="form-label">Vehiculo:</label>
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
<<<<<<< HEAD
                                                            <label for="parqueadero" class="form-label">Visita:</label>
=======
                                                            <label for="parqueadero" class="form-label">Parqueadero:</label>
>>>>>>> 6be48429ad6838813bd87c3bf2bd17fa83a1d954
                                                            <select name="parqueadero" id="parqueadero" class="form-control">
                                                                <option value="" selected>...</option>
                                                                @foreach($parqueadero as $parqueadero)
                                                                      <option value="{{ $parqueadero['id'] }}" >
                                                                      {{ $parqueadero['id'] }}
                                                                      </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
<<<<<<< HEAD
                                                        
=======
>>>>>>> 6be48429ad6838813bd87c3bf2bd17fa83a1d954
                                                             
                                                                <div class="form-group">
                                                                  <label class="control-label col-sm-2" for="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO">Inicio asignacion</label>
                                                                  <div class="col-sm-10">
                                                                    <input type="datetime-local" class="form-control" name="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" id="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO" value="{{old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO')? old('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO'):$asignacion->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO}}">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label class="control-label col-sm-2" for="FECHA_INICIO_DE_ASIGNACION_PARQUEADERO">Finalizacio de asignacion</label>
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
