@extends('PanelAdministrativo/Administrador')

@section('Admin')

<div class="row">
    <div class="col-12 titulos">
        Sistema de banners
    </div>
</div>
<div class="row">
        <div class="col-12">
            <form>
                <div class="form-group">
                    <label for="Titulo">Titulo del Banner:</label>
                    <input type="text" class="form-control" id="EntradaTitulo" name="titulo" placeholder="Nombre de identificacion" required>
                </div>
                <div class="form-group">
                    <label for="Subtitulo">Subtitulo del Banner:</label>
                    <input type="text" class="form-control" id="EntradaTitulo" name="subtitulo" placeholder="Subtitulo" required>
                </div>
                <div class="form-group">
                    <label for="Asunto">Caducidad:</label>
                    <input type="date" class="form-control" id="Asuntofecha" name="caducidad" required>
                </div>
                <div class="form-group">
                    <label for="File">Subir Banner</label>
                    <input type="file" class="form-control-file" id="File1">
                </div>
                <input type="submit" class="btn btn-primary" value="Enviar" style="margin-bottom:5px;">
            </form>
        </div>
</div>
<div class="row alert alert-info">
    <div class="col-6">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-image.svg')}}" alt="Slider">&nbsp;Resolucion recomendada: 600 x 340
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
@for($i = 0;$i < 5;$i++)
<div class="row" style="text-align:center;margin-bottom:5px;">
    <div class="col-12 col-md-2">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-slide-show.svg')}}" alt="Slider">&nbsp;Promociones
    </div>
    <div class="col-12 col-md-4">
        <img width="15" height="15" src="{{asset('iconset/svg/si-glyph-calendar-1.svg')}}" alt="Programar Oferta">&nbsp;Caducidad: 28-02-2018
    </div>
    <div class="col-12 col-md-6">
        <a href="#" class="btn btn-warning">Quitar</a>
        <a href="#" class="btn btn-success">Extender</a>
    </div>
</div>
@endfor

@stop