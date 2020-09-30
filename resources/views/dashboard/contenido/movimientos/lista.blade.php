@extends('layouts.dashboard')


@section('content')


<input type="hidden" value="{{ csrf_token() }}" class="csrf_token">



      <!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header" style="    display: flex;
                justify-content: space-between;">

                    <a href="{{ route('agregar_movimiento') }}" class="btn btn-success"  style="align-self: center;">Agregar movimiento</a>




                    <input type="date" style="display:none;"  name="rango_fechas"  value="{{date('Y-m-d')}}">

                    <div class="form-group" style="display: flex; flex-direction:column; justify-content:center; text-align:center;">
                        <label>Fecha inicio</label>
                        <input type="date"  class="rango_fechas_input date_start"  value="{{date('Y-m-d')}}">
                    </div>

                    <div class="form-group" style="display: flex; flex-direction:column; justify-content:center; text-align:center;">
                        <label>Fecha Fin</label>
                    <input type="date"  class="rango_fechas_input date_end"  value="{{date('Y-m-d')}}">
                    </div>

                    <p style="display: flex;
                    justify-content: center;
                    text-align: center;
                    align-self: center;
                    margin: 0;">
                        <a href="#" class="btn btn-info btn-lg refresh_table">
                          <span class="glyphicon glyphicon-refresh"></span> Actualizar
                        </a>
                      </p>
            </div>
                <div class="card-body table_container" style="overflow-x:scroll" >            <!-- Scroll -->

                    <table class="table table-striped table-bordered" id="table_movimientos"  style="overflow-x:scroll" >
                        <span>Lista de Movimientos</span>
                        <thead>
                            <tr>

                            <th scope="col">Acción</th>
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
                            <th scope="col">Compartido</th>
                            </tr>
                        </thead>

                    </table>




                {{-- fin card body --}}
                </div>

              <!--   <a href="{{ route('agregar_movimiento') }}" class="btn btn-success" >Agregar movimiento</a> -->
             <!--    <a type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalAgregar">Agregar movimiento</a> -->
            </div>
            <input type="hidden" class="id_movimiento_swal" >
        </div>

    </div>
</div>

<script src="{{ asset('js/movimientos/lista.js') }}"></script>


<style>

    .actualizar_group_values input{
        text-align: center !important;
    }
</style>
@endsection
