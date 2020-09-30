@extends('layouts.dashboard')


@section('content')


<input type="hidden" value="{{ csrf_token() }}" class="csrf_token">



      <!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('agregar_movimiento') }}" class="btn btn-success" >Agregar movimiento</a>
                </div>
                <div class="card-body" style="overflow-x:scroll" >            <!-- Scroll -->
                    <table class="table table-striped table-bordered" id="table_movimientos"  style="overflow-x:scroll" >
                        <span>Lista de Movimientos</span>
                        <thead>
                            <tr>






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
                                <td>
                                    @if($item->DESCRIPCION!='TERMINADO')
                                <button type="button" class="actualizar_horas btn btn btn-warning" data-id="{{$item->REGMOVTRAF}}">Actualizar</button>
                                    @else

                                    @endif
                                </td>



}


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
                                <td>{{ $item->HRAENTREGACTE }} </td>
                                <td>{{ $item->SELLO1 }} </td>
                                <td>{{ $item->SELLO2 }} </td>
                                <td>{{ $item->SELLO3 }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                {{-- fin card body --}}
                </div>

              <!--   <a href="{{ route('agregar_movimiento') }}" class="btn btn-success" >Agregar movimiento</a> -->
             <!--    <a type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalAgregar">Agregar movimiento</a> -->
            </div>

        </div>

    </div>
</div>

<script src="{{ asset('js/movimientos/lista.js') }}"></script>

@endsection
