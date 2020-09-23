@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Lista de Productos</span>
                </div>

                <div class="card-body" style="overflow-x:scroll">      
                    <table class="table" style="overflow-x:scroll">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>                       
                            <th scope="col">Descripcion</th>  
                            <th scope="col">Agregado por</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Foto</th>                                                          
                            <th scope="col">Acciones</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $item)
                            <tr>
                                <td>{{ $item->name }}</td>  
                                <td>{{ $item->description }}</td>  
                                <td>{{ $item->user }}</td>  
                                <td>{{ $item->cantidad }}</td>  
                                <td>${{ $item->precio }}</td>  

                                <td>
                                    <img style="width:50px; height:50px" src="{{ asset($item->imagen) }}">
                                </td>                                  
                                <td>
                                    EDITAR/ELIMINAR
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                {{-- fin card body --}}
                </div>

                <a href="{{ route('agregar_producto') }}" class="btn btn-primary btn-sm">Nuevo Producto</a>
            </div>
        </div>
    </div>
</div>
@endsection
