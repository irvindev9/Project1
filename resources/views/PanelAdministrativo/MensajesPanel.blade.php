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
    <div class="col-12 titulos">
        Mensajes
    </div>
</div>
@for($i = 0;$i<3;$i++)
<div class="row burbuja alert alert-primary">
    <div class="col-12 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-head.svg')}}" alt="Persona Icon">&nbsp;&nbsp;Fernando
    </div>
    <div class="col-12 col-md-8">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-bubble-message-hi.svg')}}" alt="Mensaje Icon">&nbsp;&nbsp;Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Mensajes/{{$i}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endfor
@for($i = 0;$i<5;$i++)
<div class="row burbuja">
    <div class="col-12 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-head.svg')}}" alt="Persona Icon">&nbsp;&nbsp;Jose
    </div>
    <div class="col-12 col-md-8">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-bubble-message-hi.svg')}}" alt="Mensaje Icon">&nbsp;&nbsp;Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Mensajes/{{$i}}#down" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endfor
@stop