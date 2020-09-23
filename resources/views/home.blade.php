@extends('layouts.dashboard')

@section('content')

<h1>Bienvenido</h1>

<input type="hidden" id="csrf_token" value="{{ csrf_token() }}">


<div style="display: flex; flex-wrap:wrap;">
    <div style="margin:auto;">
        <canvas id="productos_chart_cant" max-width="300" height="300"></canvas>
    </div>
    <div style="margin:auto;">
        <canvas id="productos_chart_price" width="300" height="300"></canvas>
    </div>
</div>

<script src="{{ asset('js/home.js') }}" defer></script>

@endsection


