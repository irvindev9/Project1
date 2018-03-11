@extends('index')

@section('contenido')
<style>
    .caja{
        box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.75);
    }
</style>
<div class="container">
    <div class="row">
        <div style="margin:20px;" class="col-12 titulos">
            Busqueda / {{$Articulo}}
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-3 caja d-none d-md-block contenedor"style="height:100%;">
            <a class="subtitulo">Ordenar publicaciones</a>
            
            <br>

            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mas relevantes
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Menor precio</a>
                    <a class="dropdown-item" href="#">Mayor precio</a>
                </div>
            </div>

            <br>

            <a class="subtitulo">Condicion</a>
            <br>
            <a href="#" class="btn btn-light">Nuevo</a>
            <br>
            <a href="#" class="btn btn-light" style="margin-bottom:5px;">Usado</a>

            <br>

            <a class="subtitulo">Categoria</a>
            <br>
            <div class="dropdown">
                <button style="margin-bottom: 5px;" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Seleccionar
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Autopartes</a>
                    <a class="dropdown-item" href="#">Calzado</a>
                    <a class="dropdown-item" href="#">Computadoras</a>
                    <a class="dropdown-item" href="#">Deportes</a>
                    <a class="dropdown-item" href="#">Equipo Djs</a>
                    <a class="dropdown-item" href="#">Libros</a>
                    <a class="dropdown-item" href="#">Muebles</a>
                    <a class="dropdown-item" href="#">Medicamentos</a>
                    <a class="dropdown-item" href="#">Ropa</a>
                    <a class="dropdown-item" href="#">Tiendas departamentales</a>
                    <a class="dropdown-item" href="#">Videojuegos</a>
                </div>
            </div>
            
            <br>

            <a class="subtitulo">Envio</a>
            <br>
            <a href="#" class="btn btn-light">Envio Gratuito</a>
            <br>

        </div>
        <?php
            $Productos = DB::table('products')->where('keywords','like','%'.$Articulo.'%')->get();
        ?>
        <div class="col-12 col-md-7 offset-md-1 caja contenedor">
            <div class="container-fluid">
            @foreach($Productos as $Producto)

                <div class="row articulocaja">

                    <div class="col-12 col-md-3">
                        <center><a href="/Busqueda/Articulo/{{$Producto->id}}"><img class="fotos card-img-top img-fluid" src="{{asset('tienda_img/'.$Producto->imagen)}}" alt="Card image cap"></a></center>
                    </div>
                    <div class="col-12 col-md-9">
                        <a class="titulos" href="/Busqueda/Articulo/{{$Producto->id}}" style="text-decoration:none;color:black;">{{$Producto->articulo}}</a>
                        <br>
                        <a class="subtitulos">{{$Producto->descripcionCorta}}</a>
                        <br>
                        <a class="titulos">$ {{$Producto->precio}}</a>
                        <br>
                        <img height="25" width="25" src="data:image/png;base64,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">&nbsp;<a class="labelshipping">Envio Gratuito</a>
                        <br>
                        <div style="width:100%;text-align:right;"><a style="margin-bottom:5px;" href="#" class="btn btn-primary btn-sm">Agregar al carrito</a></div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-7 offset-md-4" style="margin-top:10px;">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Anterior
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

@stop