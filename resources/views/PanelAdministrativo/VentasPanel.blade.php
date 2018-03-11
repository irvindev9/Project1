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
<div class="row">
    <div class="col-6 titulos">
        Ventas
    </div>
    <div class="col-6 titulos">
        Total: $10000
    </div>
</div>
@for($i = 0;$i<3;$i++)
<div class="row burbuja alert alert-danger">
    <div class="col-2 col-md-1">
        Id#&nbsp;&nbsp;{{$i}}
    </div>
    <div class="col-10 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-head.svg')}}" alt="Persona Icon">&nbsp;&nbsp;Fernando
    </div>
    <div class="col-12 col-md-3">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-bag.svg')}}" alt="Producto Icon">&nbsp;&nbsp;Celular SONY
    </div>
    <div class="col-12 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-repeat.svg')}}" alt="Pagado Icon">&nbsp;&nbsp;Pendiente
    </div>
    <div class="col-12 col-md-3">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-money-bag.svg')}}" alt="Precio Icon">&nbsp;&nbsp;$ 2000
    </div>
    <div class="col-12 col-md-1">
        <a href="/Administrador/Ventas/{{$i}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endfor
@for($i = 3;$i<9;$i++)
<div class="row burbuja">
    <div class="col-2 col-md-1">
        Id#&nbsp;&nbsp;{{$i}}
    </div>
    <div class="col-10 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-head.svg')}}" alt="Persona Icon">&nbsp;&nbsp;Jose
    </div>
    <div class="col-12 col-md-3">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-bag.svg')}}" alt="Producto">&nbsp;&nbsp;Celular LG
    </div> 
    <div class="col-12 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-repeat.svg')}}" alt="Mensaje Icon">&nbsp;&nbsp;Pagado
    </div>
    <div class="col-12 col-md-3">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-money-bag.svg')}}" alt="Mensaje Icon">&nbsp;&nbsp;$ 1500
    </div>
    <div class="col-12 col-md-1">
        <a href="/Administrador/Ventas/{{$i}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endfor

@stop