@extends('index')

@section('contenido')

<div class="container" style="margin-top:10px;">
    @include('Inicio/CategoriasPopulares')
</div>

<!--div class="continer-fluid carruselimgCont" style="margin-top:50px; width:100%;padding:2%;">
    @include('Carousels/BannerMain')
</div-->

<div class="container" style="margin-top:50px;">
    @include('Inicio/MasComprado')
</div>

<!--div class="container" style="margin-top:50px;">
    @include('Carousels/BannerDepartamentosMain')
</div-->

<div class="continer-fluid card" style="margin-top:50px;">
    @include('Inicio/DatosVenta')
</div>

<div class="container" style="margin-top:50px;">
    @include('Inicio/RedesSociales')
</div>

@stop