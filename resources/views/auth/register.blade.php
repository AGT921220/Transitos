@extends('layouts.app')

@section('content')

<div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Registro</h2>

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>

                    <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Apellido" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                            @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
    
                    </div>


                    <div class="input-group">
                                <input class="input--style-1" type="email" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                    </div>



                    <div class="row row-space">

                        <div class="col-2">
                            <div class="input-group">
                                <input required="" class="input--style-1 js-datepicker" type="text" placeholder="Fecha de nacimiento" name="nacimiento">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select required="" name="geneder">
                                        <option selected="selected" value="1">Hombre</option>
                                        <option value="0">Mujer</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Contraseña" name="password" value="{{ old('password') }}" required  autofocus>
    
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Confirmación" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus>
    
                            @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    
                    <div class="input-group">
                        <label>Imágen de perfil</label>
                        <div class="form-group image_container" style="justify-content: center;text-align: center;align-items: center;display: flex;flex-direction: column;margin: auto;">
                                <img class="profile_image_show" style="width:100px;" src="{{ asset('images/no-image.png') }}">                  
                              <label for="imagen_profile" style="cursor:pointer;">Seleccionar imágen</label>
                              <input style="display: none;" type="file" name="user_profile" id="imagen_profile" accept="image/x-png,image/gif,image/jpeg">
                        </div>  
                    </div>  


                    <div style="display: flex;justify-content: space-between;" class="p-t-20">
                        <button class="btn btn--radius btn--green" type="submit">Registrar</button>
                        <!--<a class="btn btn--radius btn--green" style="text-decoration: none;" href="login">Iniciar Sesión</a>-->
                    </div>


                </form>
            </div>
        </div>
    </div>



@endsection
<script src="{{ asset('js/registro.js') }}" defer></script>


