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
<?php
    $MensajesBox = DB::table('messages')->orderby('visto','ASC')->get();
?>
<div class="row">
    <div class="col-12 titulos">
        Mensajes
    </div>
</div>
@foreach($MensajesBox as $Mensaje)
    @if(!isset($ExisteYa[$Mensaje->id_usuario]))
        <?php $ExisteYa[$Mensaje->id_usuario] = 'Ok';?>
        @if($Mensaje->visto == 'No')
            <div class="row burbuja alert alert-primary">
        @else
            <div class="row burbuja">
        @endif
                <?php
                    $Name = DB::table('users')->where('id',$Mensaje->id_usuario)->first();
                ?>
                <div class="col-12 col-md-2">
                    <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-head.svg')}}" alt="Persona Icon">&nbsp;&nbsp;{{$Name->name}}
                </div>
                <div class="col-12 col-md-8">
                    <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-bubble-message-hi.svg')}}" alt="Mensaje Icon">&nbsp;&nbsp;{{$Mensaje->mensaje}}
                </div>
                <div class="col-12 col-md-2">
                    <a href="/Administrador/Mensajes/{{$Mensaje->id_usuario}}" class="btn btn-primary btn-sm btn-block">Ver</a>
                </div>
            </div>
    @endif
@endforeach
@stop