@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-2" style="    display: flex;justify-content: space-between;">
                    <span>Agregar Empleado</span>
                    <a href="{{ route('ver_empleados') }}" class="btn btn-primary btn-sm">Volver a lista de empleados...</a>
                </div>
                <div class="card-body">     
                  
                  <form method="POST" action="{{ route('guardar_empleado') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" name="name" placeholder="Nombre de empleado" class="form-control mb-2" required="" {{ old('name') }}/>
                    </div>
 
                    <div class="form-group">
                      <label>Apellido</label>
                      <input type="text" name="lname" placeholder="Apellido de empleado" class="form-control mb-2" required="" {{ old('lname') }}/>
                    </div>

                    <div class="form-group">
                      <label>Correo</label>
                      <input type="email" name="email" placeholder="Correo de empleado" class="form-control mb-2" required="" {{ old('email') }}/>
                    </div>

                    <div class="form-group">
                      <label >Genero</label>
                      <select class="form-control" name="geneder">
                        <option value="1">Hombre</option>
                        <option value="0">Mujer</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Contraseña</label>
                      <input type="password" name="pwd1" placeholder="Contraseña" class="form-control mb-2" required=""/>
                    </div>

                    <div class="form-group">
                      <label>Confirmar contraseña</label>
                      <input type="password" name="pwd2" placeholder="Contraseña" class="form-control mb-2" required=""/>
                    </div>


                    <div class="form-group">
                      <label>Imágen de perfil</label>
                      <div class="form-group image_container" style="justify-content: center;text-align: center;align-items: center;display: flex;flex-direction: column;margin: auto;">
                              <img class="profile_image_show" style="width:100px;" src="{{ asset('images/no-image.png') }}">                  
                            <label for="imagen_profile" style="cursor:pointer;">Seleccionar imágen</label>
                            <input style="display: none;" type="file" name="user_profile" id="imagen_profile" accept="image/x-png,image/gif,image/jpeg">
                      </div>  
                  </div>  

                  <input type="hidden" name="rol" value="Empleado">

 
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
<script src="{{ asset('js/registro.js') }}" defer></script>


