@extends('PanelAdministrativo/Administrador')

@section('Admin')

<div class="row">
    <div class="col-12 titulos">
        Sistema de banners
    </div>
</div>
<div class="row">
        <div class="col-12">
            <form enctype="multipart/form-data" method="POST"  action="/Administrador/Banner/up/go">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Titulo">Titulo del Banner:</label>
                    <input type="text" class="form-control" id="EntradaTitulo" name="titulo" placeholder="Nombre de identificacion" required>
                </div>
                <div class="form-group">
                    <label for="Subtitulo">Subtitulo:</label>
                    <input type="text" class="form-control" id="EntradaTitulo1" name="subtitulo" placeholder="Subtitulo" required>
                </div>
                <div class="form-group">
                    <label for="Subtitulo">Link del banner:</label>
                    <input type="text" class="form-control" id="EntradaTitulo2" name="link" placeholder="Incluir http://" required>
                </div>
                <div class="form-group form-row">
                    <div class="col-12">
                        <label for="KeyWords">Categoria</label>
                        <select name="categoria" class="form-control">
                            <option>Autopartes</option>
                            <option>Calzado</option>
                            <option>Computadoras</option>
                            <option>Deportes</option>
                            <option>Equipo Dj's</option>
                            <option>Libros</option>
                            <option>Muebles</option>
                            <option>Medicamentos</option>
                            <option>Ropa</option>
                            <option>Tiendas departamentales</option>
                            <option>Videojuegos</option>
                            <option>Otros</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="File">Subir Banner</label>
                    <input type="file" name="myfile" class="form-control-file" id="File1">
                </div>
                <input type="submit" class="btn btn-primary" value="Enviar" style="margin-bottom:5px;">
            </form>
        </div>
</div>
<div class="row alert alert-info">
    <div class="col-6">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-image.svg')}}" alt="Slider">&nbsp;Resolucion recomendada: 400 x 400
    </div>
    <div class="col-6">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-crop.svg')}}" alt="Slider">&nbsp;<a target="_blank" href="https://www.iloveimg.com/es/recortar-imagen">Herramienta para recortar</a>
    </div>
</div>
<div class="row">
    <div class="col-12 titulos">
        Banners activos
    </div>
</div>
<?php $Banners = DB::table('shops')->get(); ?>

@foreach($Banners as $Banner)
    <div class="row" style="text-align:center;margin-bottom:5px;">
        <div class="col-12 col-md-4">
            <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-slide-show.svg')}}" alt="Slider">&nbsp;Titulo: {{$Banner->banner}}
        </div>
        <div class="col-12 col-md-4">
            <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-calendar-1.svg')}}" alt="Programar Oferta">&nbsp;Categoria: {{$Banner->categoria}}
        </div>
        <div class="col-12 col-md-4">
            <a href="/Administrador/Banner/drop/{{$Banner->id}}" class="btn btn-warning">Quitar</a>
            <a href="/Tiendas/{{$Banner->categoria}}" class="btn btn-success">Ver</a>
        </div>
    </div>
@endforeach

@stop