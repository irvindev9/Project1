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
        <?php 
            $TotalVentas = 0;

            $Ventas = DB::table('pays')->get();

            foreach($Ventas as $venta){
                $Pago = DB::table('products')->where('id',$venta->id_articulo)->first();

                $TotalVentas = $TotalVentas + floatval($Pago->precio);
            }
        ?>
        Total: ${{$TotalVentas}}
    </div>
</div>
<?php $Pagos = DB::table('pays')->orderBy('id','asc')->get(); $i = 0; ?>
@foreach($Pagos as $Pago)
    @if($Pago->estado == 'Procesando')
        <div class="row burbuja alert alert-danger">
    @else
        <div class="row burbuja">
    @endif
    <div class="col-2 col-md-1">
        Id#&nbsp;&nbsp;{{$Pago->id}}
    </div>
    <div class="col-10 col-md-2">
        <?php $NombreUsuario = DB::table('users')->where('id',$Pago->id_usuario)->first(); ?>
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-head.svg')}}" alt="Persona Icon">&nbsp;&nbsp;{{$NombreUsuario->name}}
    </div>
    <div class="col-12 col-md-3">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-bag.svg')}}" alt="Producto Icon">&nbsp;&nbsp;{{$Pago->articulo}}
    </div>
    <div class="col-12 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-repeat.svg')}}" alt="Pagado Icon">&nbsp;&nbsp;{{$Pago->estado}}
    </div>
    <div class="col-12 col-md-3">
        <?php $PrecioArticulo = DB::table('products')->where('id',$Pago->id_articulo)->first(); ?>
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-money-bag.svg')}}" alt="Precio Icon">&nbsp;&nbsp;$ {{$PrecioArticulo->precio}}
    </div>
    <div class="col-12 col-md-1">
        <a href="/Administrador/Ventas/{{$Pago->id}}" class="btn btn-primary btn-sm btn-block">Ver</a>
    </div>
</div>
@endforeach

@stop