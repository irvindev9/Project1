@extends('index')

@section('contenido')

<!-- Panel principal del administrador -->
<div class="container-fluid" style="margin-top:50px; margin-bottom:50px;">
    <div class="row">
        <!-- Panel de la izquierda -->
        <div class="col-12 col-md-3" style="margin-top:5px;">
            @include('PanelUsuario/LateralIzquierda')
        </div>
        <!-- Contenido -->
        <div class="col-12 col-md-8 card" style="margin-top:5px;">
            @yield('User')
        </div>
    </div>
</div>

@stop