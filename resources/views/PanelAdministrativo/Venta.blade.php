@extends('PanelAdministrativo/Administrador')

@section('Admin')
<?php $Venta = DB::table('pays')->where('id',$idVenta)->first(); ?>
<?php $NombreUsuario = DB::table('users')->where('id',$Venta->id_articulo)->first(); ?>

<div class="row">
    <div class="col-12 titulos">
        <a href="/Administrador/Ventas" style="style:none;color:black;">Ventas</a> / {{$idVenta}}: {{$NombreUsuario->name}}
    </div>
</div>
<div class="row">
    <div class="col-6 col-md-3 col-form-label" style="text-align:right;">
        Nombre:
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:left;">
        {{$NombreUsuario->name}}
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:right;">
        Producto:
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:left;">
        {{$Venta->articulo}}
    </div>
    <?php $InfoArticulo = DB::table('products')->where('id',$Venta->id_articulo)->first(); ?>
    <div class="col-6 col-md-3 col-form-label" style="text-align:right;">
        Descripcion:
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:left;">
        {{$InfoArticulo->descripcionCorta}}
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:right;">
        Precio:
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:left;">
        $ {{$InfoArticulo->precio}}
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:right;">
        Estatus:
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:left;">
        {{$Venta->estado}}
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:right;">
        Fecha:
    </div>
    <div class="col-6 col-md-3 col-form-label" style="text-align:left;">
        {{$Venta->created_at}}
    </div>
    <div class="col-6 col-md-6" style="text-align:center;">
        <a href="/Administrador/Mensajes/{{$NombreUsuario->id}}#down" class="btn btn-primary">Mensaje</a>
    </div>
    <div class="col-6 col-md-6" style="text-align:center;">
        <a href="#" class="btn btn-primary">Correo</a>
    </div>
</div>

@stop