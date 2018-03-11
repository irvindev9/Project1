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
@for($i = 0;$i<3;$i++)
<div class="row burbuja alert alert-info">
    <div class="col-12 col-md-4">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-dropbox.svg')}}" alt="Producto Icon">&nbsp;&nbsp;iPhone X
    </div>
    <div class="col-12 col-md-4">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-tag-price.svg')}}" alt="Precio Icon">&nbsp;&nbsp;$ 5000
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Productos/drop/{{$i}}" class="btn btn-danger btn-sm btn-block">Eliminar</a>
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Productos/{{$i}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endfor
@for($i = 0;$i<5;$i++)
<div class="row burbuja">
    <div class="col-12 col-md-4">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-dropbox.svg')}}" alt="Producto Icon">&nbsp;&nbsp;Television HD
    </div>
    <div class="col-12 col-md-4">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-tag-price.svg')}}" alt="Precio Icon">&nbsp;&nbsp;$ 5000
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Productos/drop/{{$i}}" class="btn btn-danger btn-sm btn-block">Eliminar</a>
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Productos/{{$i}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endfor

@stop