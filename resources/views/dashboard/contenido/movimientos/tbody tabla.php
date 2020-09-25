<table class="table table-striped table-bordered" id="table_movimientos"  style="overflow-x:scroll" >
                        <span>Lista de Movimientos</span>
                        <thead>
                            <tr>
                            <th scope="col">Acción a realizar</th>   
                            <th scope="col">Movimiento</th>                       
                            <th scope="col">Estatus</th>   
                            <th scope="col">Fecha</th>   
                            <th scope="col">Carta porte</th>   
                            <th scope="col">Carta porte física</th>   
                            <th scope="col">Cruce</th>   
                            <th scope="col">Cliente</th>   
                            <th scope="col">Unidad</th>   
                            <th scope="col">Ruta</th>   
                            <th scope="col">Remitente</th>   
                            <th scope="col">Destino</th> 
                            <th scope="col">Chofer</th> 
                            <th scope="col">Caja</th> 
                            <th scope="col">Comisión</th> 
                            <th scope="col">Hora llegada cliente</th> 
                            <th scope="col">Hora carga</th> 
                            <th scope="col">Hora salida cliente</th> 
                            <th scope="col">Hora entrega documentos</th> 
                            <th scope="col">Hora inspección</th> 
                            <th scope="col">Hora llegada fila</th> 
                            <th scope="col">Hora módulo Mex</th> 
                            <th scope="col">Hora módulo Mex Salida</th> 
                            <th scope="col">Hora módulo Usa</th> 
                            <th scope="col">Hora módulo Usa Salida</th> 
                            <th scope="col">Hora entrega cliente</th> 
                            <th scope="col">Sello 1</th> 
                            <th scope="col">Sello 2</th> 
                            <th scope="col">Sello 3</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movimientos as $item)
                            <tr>
                                <td><button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#myModal">Actualizar</button></td>

                                 <!-- Inicia Modal Actualizar horas-->
                                 <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                  
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Actualizando horas de viaje (Variable)</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>Campos a modificar.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Procesar</button>
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                      </div>
                                  
                                    </div>
                                  </div>
  <!-- Termina Modal Actualizar horas-->
  <!-- Inicia Modal Agregar movimiento-->
  <div id="myModalAgregar" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregando nuevo viaje</h4>
        </div>
        <div class="modal-body">
          <p>Campos a agregar.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Procesar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
  
    </div>
  </div>
<!-- Termina Modal Agregar movimiento-->
                                   
                                <td>{{ $item->REGMOVTRAF }}</td>   
                                <td>{{ $item->DESCRIPCION }} </td>   
                                <td>{{ $item->FECHA }}</td>
                                <td>{{ $item->NOCARTAPORTE }}</td>
                                <td>{{ $item->CARTAPORTEFISICA }}</td>
                                <td>{{ $item->TIPOCRUCES }} </td> 
                                <td>{{ $item->IDCLIENTE }} /{{ $item->NOMBRECLIENTE }} </td>  
                                <td>{{ $item->IDUNIDAD }}</td>  
                                <td>{{ $item->IDRUTA }} </td>  
                                <td>{{ $item->IDREMITENTE }} </td>  
                                <td>{{ $item->IDDESTINO }} </td>  
                                <td>{{ $item->IDCHOFER }} /{{ $item->TIPOCRUCES }} </td>  
                                <td>{{ $item->NOCAJA }} </td>  
                                <td>{{ $item->COMISIONMOV }} </td>  
                                <td>{{ $item->HRALLEGADACTE }} </td>  
                                <td>{{ $item->HRACARGA }} </td>  
                                <td>{{ $item->HRASALIDACTE }} </td>  
                                <td>{{ $item->HRAENTREGADOCTOS }} </td>  
                                <td>{{ $item->HRAINSPECCION }} </td>  
                                <td>{{ $item->HRALLEGADAFILA }} </td>  
                                <td>{{ $item->HRAMODULOMEX }} </td>  
                                <td>{{ $item->HRAMODULOMEXSALIDA }} </td>  
                                <td>{{ $item->HRAMODULOUSA }} </td>
                                <td>{{ $item->HRAMODULOUSASALIDA }} </td>  
                                <td>{{ $item->HRAMODULOUSASALIDA }} </td>  
                                <td>{{ $item->SELLO1 }} </td> 
                                <td>{{ $item->SELLO2 }} </td> 
                                <td>{{ $item->SELLO3 }} </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
