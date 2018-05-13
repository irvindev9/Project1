@extends('index')

@section('contenido')
    <?php $Total = 0; ?>
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-7 alert alert-light">
                <h5>Producto</h5>
            </div>
            <div class="col-3 alert alert-light">
                <h5>Precio</h5>
            </div>
            <div class="col-2 alert alert-light">
                <h5>Accion</h5>
            </div>
        </div>
        <div class="row">
            @foreach($Carrito as $Car)
                <div class="col-7 alert alert-light">
                    {{$Car->articulo}}
                </div>
                <div class="col-3 alert alert-light">
                    ${{$Car->precio}}
                </div>
                <div class="col-2 alert alert-light">
                    <a href="/Delete/Item/Car/{{$Car->id}}" class="btn btn-danger">Eliminar</a>
                </div>
                <?php $Total = $Total + $Car->precio; ?>
            @endforeach
        </div>
        <div class="row">
            <div class="col-4 offset-4 alert alert-light">
                Total
            </div>
            <div class="col-4 alert alert-light">
                ${{$Total}}
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-7">
                <a class="btn btn-primary" href="#">Pagar ahora</a>
            </div>
        </div>
    </div>

@stop