@extends('PanelAdministrativo/Administrador')

@section('Admin')
<style>
    .burbuja{
        border: 1px solid grey;
        padding: 1px;
        margin-top: 2px;
        margin-bottom: 2px;
        border-radius: 2px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12 titulos">
            Productos
        </div>
    </div>
</div>

<?php $Productos = DB::table('products')->get(); ?>

@foreach($Productos as $Producto)
    <div class="row burbuja alert alert-info">
    <div class="col-12 col-md-4">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-dropbox.svg')}}" alt="Producto Icon">&nbsp;&nbsp;{{$Producto->articulo}}
    </div>
    <div class="col-12 col-md-4">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-tag-price.svg')}}" alt="Precio Icon">&nbsp;&nbsp;$ {{$Producto->precio}}
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Productos/drop/{{$Producto->id}}" class="btn btn-danger btn-sm btn-block">Eliminar</a>
    </div>
    <div class="col-12 col-md-2">
        <a href="/Busqueda/Articulo/{{$Producto->id}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endforeach

@stop