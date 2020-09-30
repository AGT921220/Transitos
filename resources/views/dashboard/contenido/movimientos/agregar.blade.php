@extends('layouts.dashboard')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-2" style="    display: flex;justify-content: space-between;">
                    <span>Agregar Movimiento</span>
                    <a href="{{ route('ver_movimientos') }}" class="btn btn-primary btn-sm">Volver a lista de Movimientos...</a>
                </div>
                <div class="card-body">

                  <form method="POST" action="{{ route('guardar_movimiento') }}" enctype="multipart/form-data">
                    @csrf



                    <div class="form-group row">
                        <div class="col-sm-3 offset-1">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input subcontratado_check" name="subcontratado_check" value="">Subcontratado
                              </label>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input compartido_check" name="compartido_check" value="">  Compartido
                              </label>
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Comisión %</label>
                            <input type="number" step="any" name="comisionmov"  class="form-control " required=""/>
                        </div>
                    </div>






                    <div class="form-group row">
                        <div class="form-group col-sm-4 offset-2">
                            <label >Estatus</label>
                            <select class="form-control" name="estatus" >

                            @foreach ($estatus as $item)
                            <option  value="{{$item->NUMESTATUS}}">{{$item->NUMESTATUS}} / {{$item->DESCRIPCION}} </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label >Fecha:</label>
                            <input type="date"  name="fecha"  value="{{date('Y-m-d')}}">
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="form-group col-sm-6 offset-3">
                            <label >Cruce</label>
                            <select class="form-control" name="cruce" >

                            @foreach ($cruces as $item)
                            <option  value="{{$item->IDREGCRUCE}}">{{$item->IDREGCRUCE}} / {{$item->TIPOCRUCES}} </option>
                            @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="form-group col-sm-6 offset-3">
                            <label >Cliente</label>
                            <select class="form-control" name="cliente" >

                            @foreach ($clientes as $item)
                            <option  value="{{$item->REGCLIENTE}}">{{$item->REGCLIENTE}} / {{$item->NOMBRECLIENTE}} </option>
                            @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-6 offset-3">
                            <label >Ruta</label>
                            <select class="form-control" name="ruta" >

                            @foreach ($rutas as $item)
                            <option  value="{{$item->IDRUTA}}">{{$item->IDRUTA}} / {{$item->RUTA}} </option>
                            @endforeach
                            </select>
                        </div>

                    </div>




                    <div class="form-group row">
                        <div class="form-group col-sm-5 offset-1">
                            <label >Remitente</label>
                            <select class="form-control" name="remitente" >

                            @foreach ($remitentes as $item)
                            <option  value="{{$item->IDREMITENTE}}">{{$item->IDREMITENTE}} / {{$item->REMITENTE}} </option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-5">
                            <label >Destino</label>
                            <select class="form-control" name="destino" >

                            @foreach ($destinos as $item)
                            <option  value="{{$item->IDDESTINO}}">{{$item->IDDESTINO}} / {{$item->DESTINO}} </option>
                            @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="form-group col-sm-6 offset-3">
                            <label >Unidad</label>
                            <select class="form-control" name="unidad" >

                            @foreach ($unidades as $item)
                            <option  value="{{$item->IDREGUNIDAD}}">{{$item->IDREGUNIDAD}} / {{$item->NUMEROUNIDAD}} </option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group row">
                            <div class="form-group col-sm-6 offset-3">
                                <label >Chofer</label>
                                <select class="form-control" name="chofer" >

                                @foreach ($choferes as $item)
                                <option  value="{{$item->REGCHOFER}}">{{$item->REGCHOFER}} / {{$item->NOMBRECHOFER}} </option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                            <div class="form-group col-sm-6 offset-3 container_select_compartido" style="display:none;">
                                <label >Chofer Compartido</label>
                                <select class="form-control" name="chofer_compartido" >
                                    @foreach ($choferes as $item)
                                    <option  value="{{$item->REGCHOFER}}">{{$item->REGCHOFER}} / {{$item->NOMBRECHOFER}} </option>
                                    @endforeach
                                    </select>
                            </div>

                            <div class="form-group col-sm-6 offset-3 container_select_subcontratado" style="display:none;">
                                <label >Subcontratado</label>
                                <select class="form-control" name="chofer_subcontratado" >

                                    @foreach ($subcontratados as $item)
                                    <option  value="{{$item->IDREGSUBCONTRATADO}}">{{$item->IDREGSUBCONTRATADO}} / {{$item->NOMBRE}} </option>
                                    @endforeach
                                    </select>
                            </div>


                            <div class="form-group col-sm-6 offset-3">
                            <h4>Documentos</h4>
                            </div>

                            <div class="form-group row">
                                <div class="form-group col-sm-5 offset-1">
                                    <label >Carta Porte</label>
                                    <input type="text" name="carta_porte" placeholder="Carta porte" class="form-control mb-2" />
                                </div>
                                <div class="form-group col-sm-5">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="carta_porte_fisica" value="">Carta Porte Física
                                      </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="form-group col-sm-5 offset-1">
                                    <label >No Caja</label>
                                    <input type="number" name="no_caja" class="form-control mb-2" />
                                </div>
                                <div class="form-group col-sm-5">
                                    <label>No Pedimento</label>
                                    <input type="number" name="no_pedimento" class="form-control mb-2" />
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="form-group col-sm-4 offset-4">
                                    <label >No Factura</label>
                                    <input type="number" name="no_factura" class="form-control mb-2"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="form-group col-sm-3 offset-1">
                                    <label >Sello 1</label>
                                    <input type="text" name="sello1" class="form-control mb-2" />
                                </div>
                                <div class="form-group col-sm-3 ">
                                    <label >Sello 2</label>
                                    <input type="text" name="sello2" class="form-control mb-2"/>
                                </div>
                                <div class="form-group col-sm-3 ">
                                    <label >Sello 3</label>
                                    <input type="text" name="sello3" class="form-control mb-2" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="form-group col-sm-4 offset-4">
                                    <label >In Bond</label>
                                    <input type="number" name="bond" class="form-control mb-2" />
                                </div>
                            </div>




<!--

                            <div class="form-group col-sm-6 offset-3">
                                <h4>HORAS</h4>
                            </div>


                            <div class="form-group row" style="justify-content: space-evenly;">

                                <div class="form-group"><label >Llegada cliente</label>
                                    <input type="time" name="HRALLEGADACTE" placeholder="Fecha" value="00:00" class="form-control mb-2 llegada_cliente" />
                                </div>
                                <div class="form-group"><label >Carga cliente</label>
                                    <input type="time" name="HRACARGA" placeholder="Fecha" value="00:00" class="form-control mb-2 carga_cliente" />
                                </div>

                                <div class="form-group"><label >Salida cliente</label>
                                    <input type="time" name="HRASALIDACTE" placeholder="Fecha" value="00:00" class="form-control mb-2 salida_cliente" />
                                </div>

                            </div>


                            <div class="form-group row" style="justify-content: space-evenly;">

                                <div class="form-group">
                                    <label >Carga documentos</label>
                                    <input type="time" name="HRAENTREGADOCTOS" placeholder="Fecha" value="00:00" class="form-control mb-2 hora_documentos" />
                                </div>

                                    <div class="form-group"><label >Llegada fila</label>'+
                                    <input type="time" name="HRALLEGADAFILA" placeholder="Fecha" value="00:00" class="form-control mb-2 llegada_fila" />
                                </div>
                                    <div class="form-group"><label >Inspección K9</label>'+
                                    <input type="time" name="HRAINSPECCION" placeholder="Fecha" value="00:00" class="form-control mb-2 hora_inspeccion" />
                                </div>


                            </div>


                            <div class="form-group row" style="justify-content: space-evenly;">
                                <div class="form-group">
                                    <label >Módulo México</label>'+
                                    <input type="time" name="HRAMODULOMEX" placeholder="Fecha" value="00:00" class="form-control mb-2 hora_mod_mex" />
                                </div>

                                    <div class="form-group"><label >Módulo México salida</label>'+
                                    <input type="time" name="HRAMODULOMEXSALIDA" placeholder="Fecha" value="00:00" class="form-control mb-2 hora_mod_mex_salida" />
                                </div>
                                    <div class="form-group"><label >Módulo Usa</label>'+
                                    <input type="time" name="HRAMODULOUSA" placeholder="Fecha" value="00:00" class="form-control mb-2 hora_mod_usa" />
                                </div>

                            </div>

                            <div class="form-group row" style="justify-content: space-evenly;">
                                <div class="form-group">
                                    <label >Módulo Usa salida</label>'+
                                    <input type="time" name="HRAMODULOUSASALIDA" placeholder="Fecha" value="'00:00" class="form-control mb-2 hora_mod_usa_salida" />
                                </div>

                                <div class="form-group">
                                    <label >Entrega cliente</label>'+
                                    <input type="time" name="HRAENTREGACTE" placeholder="Fecha" value="'00:00" class="form-control mb-2 entrega_cliente" />
                                </div>
                            </div>

-->

<!--                  <input type="hidden" name="rol" value="Empleado">-->


                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/movimientos/agregar.js') }}"></script>
@if ( session('successssss') )

    <script>
            swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: [
          'No, cancel it!',
          'Yes, I am sure!'
        ],
        dangerMode: true,
      }).then(function(isConfirm) {
        if (isConfirm) {
          swal({
            title: 'Shortlisted!',
            text: 'Candidates are successfully shortlisted!',
            icon: 'success'
          }).then(function() {
            form.submit(); // <--- submit form programmatically
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      })

    </script>
@endif

@endsection




<style>
th{
    text-align: center !important;
}
select{
    min-width: 110px;
    margin: auto;
    text-align-last: center;
    border-radius: 5px;
    border: 1px solid #ddd;
    color: #868585;
}
.form-group{
    text-align: center !important;
}
</style>
