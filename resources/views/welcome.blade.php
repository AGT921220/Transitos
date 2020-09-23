@extends('layouts.app')

@section('content')

<div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Login</h2>



                <form method="POST" action="{{ route('login') }}">
                        @csrf


                    <div class="input-group">
                        <input class="input--style-1" type="email" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>


                    <div class="input-group">
                        <input class="input--style-1" type="password" placeholder="Contraseña" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>


                    <div style="display: flex;justify-content: space-between;" class="p-t-20">
                        <button class="btn btn--radius btn--green" type="submit">Entrar</button>
                        <a class="btn btn--radius btn--green" style="text-decoration: none;" href="register">Registrate</a>

                    </div>




                </form>
                <br>
                <div style="    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;">
                    <h4>Usuario de Prueba</h4>
                    
                    <br>

                    <p><small>Correo:   </small>demo@agsoftweb.com.mx</p>
                    <br>
                    <p><small>Contraseña:   </small>demo12345</p>

                    <br>

                </div>


            </div>
        </div>
    </div>



@endsection



