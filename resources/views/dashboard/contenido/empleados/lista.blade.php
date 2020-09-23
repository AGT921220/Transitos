@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Lista de Empleados</span>
                </div>

                <div class="card-body" style="overflow-x:scroll">      
                    <table class="table" style="overflow-x:scroll">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>                       
                            <th scope="col">Apellido</th>  
                            <th scope="col">Email</th>
                            <th scope="col">Foto</th>                                                          
                            <th scope="col">Acciones</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $item)
                            <tr>
                                <td>{{ $item->name }}</td>  
                                <td>{{ $item->lname }}</td>  
                                <td>{{ $item->email }}</td>  
                                <td>
                                    <img style="width:50px; height:50px" src="{{ asset($item->user_profile) }}">
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

                <a href="/dashboard/empleados/nuevo" class="btn btn-primary btn-sm">Nuevo Empleado</a>
            </div>
        </div>
    </div>
</div>
@endsection
