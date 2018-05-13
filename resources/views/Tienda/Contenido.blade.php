@extends('index')

@section('contenido')
<?php $Tiendas = DB::table('shops')->where('categoria',$categoria)->get(); ?>
    <div class="container">
        <div class="row">
            @foreach($Tiendas as $Tienda)
                <div class="col-12 col-md-4 col-lg-3" style="margin-top:50px;">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('public/tiendas/'.$Tienda->imagen)}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{$Tienda->banner}}</h5>
                        <p class="card-text">{{$Tienda->subtitulo}}</p>
                            <a target="_blank" href="{{$Tienda->link}}" class="btn btn-primary btn-block">Ir al sitio</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @if(count($Tiendas) == 0)
                <div class="col-12" style="text-align:center;">
                    <p align="center"><h4>Por el momento no tenemos tiendas de {{$categoria}} :(</h4></p>
                </div>               
            @endif
        </div>
    </div>

@stop