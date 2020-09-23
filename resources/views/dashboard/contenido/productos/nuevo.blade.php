@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-2" style="    display: flex;justify-content: space-between;">
                    <span>Agregar Producto</span>
                    <a href="{{ route('ver_productos') }}" class="btn btn-primary btn-sm">Volver a lista de productos...</a>
                </div>
                <div class="card-body">     
                  
                  <form method="POST" action="{{ route('guardar_producto') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" name="name" placeholder="Nombre de producto" class="form-control mb-2" required="" {{ old('name') }}/>
                    </div>
 
                    <div class="form-group">
                      <label>Descripcion</label>
                      <input type="text" name="descripcion" placeholder="Descripcion de producto" class="form-control mb-2" required="" {{ old('descripcion') }}/>
                    </div>

                    <div class="form-group">
                      <label>Imágen de producto</label>
                      <div class="form-group image_container" style="justify-content: center;text-align: center;align-items: center;display: flex;flex-direction: column;margin: auto;">
                              <img class="profile_image_show" style="width:100px;" src="{{ asset('images/no-image.png') }}">                  
                            <label for="imagen_profile" style="cursor:pointer;">Seleccionar imágen</label>
                            <input style="display: none;" type="file" name="imagen" id="imagen_profile" accept="image/x-png,image/gif,image/jpeg">
                      </div>  
                  </div>  

                  <div class="form-group">
                    <label>Precio</label>
                    <input type="number" name="precio" step="any" class="form-control mb-2" required="" {{ old('precio') }}/>
                  </div>

                  <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" name="cantidad"  class="form-control mb-2" required="" {{ old('cantidad') }}/>
                  </div>


 
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
<script src="{{ asset('js/registro.js') }}" defer></script>


