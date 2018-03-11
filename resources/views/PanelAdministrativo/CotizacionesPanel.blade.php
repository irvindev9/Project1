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
        Cotizaciones
    </div>
</div>
<?php

    $Cotizaciones = DB::table('quotations')->orderBy('visto', 'asc')->get();

?>
@foreach($Cotizaciones as $Cotizacion)
@if($Cotizacion->visto == 'No')
<div class="row burbuja alert alert-warning">
@else
<div class="row burbuja">
@endif
    <?php
        $Name = DB::table('users')->where('id',$Cotizacion->user_id)->first();
    ?>
    <div class="col-12 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-head.svg')}}" alt="Persona Icon">&nbsp;&nbsp;{{$Name->name}}
    </div>
    <div class="col-12 col-md-8">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-tag-price.svg')}}" alt="Mensaje Icon">&nbsp;&nbsp;{{$Cotizacion->articulo}}
    </div>
    <div class="col-12 col-md-2">
        <a href="/Administrador/Cotizacion/{{$Cotizacion->id}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endforeach

@stop