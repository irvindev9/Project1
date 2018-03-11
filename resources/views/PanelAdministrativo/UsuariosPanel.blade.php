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
        Usuarios
    </div>
</div>
<?php
    //Extraer datos de usuarios
    $Usuarios = DB::table('users')->where('tipo','Cliente')->get();
    
?>

@foreach($Usuarios as $Usuario)
<div class="row burbuja">
    <div class="col-2 col-md-1">
        Id#&nbsp;&nbsp;{{$Usuario->id}}
    </div>
    <div class="col-10 col-md-5">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-head.svg')}}" alt="Persona Icon">&nbsp;&nbsp;{{$Usuario->name}}
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Usuario/{{$Usuario->id}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
    <div class="col-12 col-md-2">
    <a href="/Administrador/Email?To={{$Usuario->email}}" class="btn btn-info btn-sm btn-block">Correo</a>
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Mensajes/{{$Usuario->id}}#down" class="btn btn-info btn-sm btn-block">Mensaje</a>
    </div>
</div>
@endforeach

@stop