@extends('PanelUsuario/Usuario')

@section('User')

<div class="row">
    <div class="col-12 titulos">
        <a href="/Administrador/Usuarios"  style="style:none;color:black;">Mis compras</a> / {{session()->get('name')}}
    </div>
</div>
<?php
    $Datos = DB::table('pays')->where('id_usuario',session()->get('id'))->get();
?>
@foreach($Datos as $Dato)
    <div class="row" style="border: solid black 1px;margin-bottom:5px;">
        <div class="col-2">
            Folio: {{$Dato->id}}
        </div>
        <div class="col-10">
            Articulo: {{$Dato->articulo}}
        </div>
        <?php
            $Precio = DB::table('products')->where('id',$Dato->id_articulo)->first();
        ?>
        <div class="col-6">
            Precio: ${{$Precio->precio}}
        </div>
        <div class="col-6">
            Estado: {{$Dato->estado}}
        </div>
    </div>
@endforeach

@stop