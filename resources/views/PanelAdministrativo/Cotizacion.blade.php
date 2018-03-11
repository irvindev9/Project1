@extends('PanelAdministrativo/Administrador')

@section('Admin')
    <?php
        //Se recuperan los datos de la cotizacion
        $Cotizacion = DB::table('quotations')->where('id',$idCotizacion)->first();
        $DatosUsuario = DB::table('users')->where('id',$Cotizacion->user_id)->first();

        if($Cotizacion->linksitio != ''){
            $link = $Cotizacion->linksitio;
        }else{
            $link = '#';
        }
    ?>
    <div class="row">
        <div class="col-12 titulos">
            <a style="text-decoration:none;color:black;" href="/Administrador/Cotizaciones">Cotizacion</a> / Pedro
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-md-3 col-lg-3" style="text-align:right;">
            <label for="Name" class="col-form-label">Nombre:</label>
        </div>
        <div class="col-6 col-md-3" style="text-align:left;">
        <a class="form-control-plaintext">{{$DatosUsuario->name}}</a>
        </div>
        <div class="col-6 col-md-3 col-lg-3 col-form-label" style="text-align:right;">
            <label for="Tel" class="">Telefono:</label>
        </div>
        <div class="col-6 col-md-3" style="text-align:left;">
            <a class="form-control-plaintext">{{$DatosUsuario->tel}}</a>
        </div>
        <div class="col-6 col-md-3 col-lg-3" style="text-align:right;">
            <label for="Name" class="col-form-label">Correo:</label>
        </div>
        <div class="col-6 col-md-3" style="text-align:left;">
            <a class="form-control-plaintext">{{$DatosUsuario->email}}</a>
        </div>
        <div class="col-6 col-md-3 col-lg-3 col-form-label" style="text-align:right;">
            <label for="Tel" class="">Compras:</label>
        </div>
        <div class="col-6 col-md-3" style="text-align:left;">
            <a class="form-control-plaintext">*Pendiente</a>
        </div>
        <div class="col-6 col-md-3 col-lg-3" style="text-align:right;">
            <label for="Name" class="col-form-label">Articulo:</label>
        </div>
        <div class="col-6 col-md-3" style="text-align:left;">
            <a class="form-control-plaintext">{{$Cotizacion->articulo}}</a>
        </div>
        <div class="col-6 col-md-3 col-lg-3 col-form-label" style="text-align:right;">
            <label for="Tel" class="">Descripcion:</label>
        </div>
        <div class="col-6 col-md-3" style="text-align:left;">
            <a class="form-control-plaintext">{{$Cotizacion->descripcion}}</a>
        </div>
        <div class="col-6 col-md-3 col-lg-3" style="text-align:right;">
            <label for="Name" class="col-form-label">Sitio Web:</label>
        </div>
        <div class="col-6 col-md-3" style="text-align:left;">
            <a class="form-control-plaintext">{{$Cotizacion->sitio}}</a>
        </div>
        <div class="col-6 col-md-3 col-lg-3 col-form-label" style="text-align:right;">
        <label for="Tel" class=""><a href="{{$link}}">Link:</a></label>
        </div>
        <div class="col-6 col-md-3" style="text-align:left;">
            <input type="text" name="busqueda" class="form-control" id="articulo" placeholder="No especificado" value="{{$Cotizacion->linksitio}}">
        </div>
        <div class="col-6" style="text-align:center;margin-bottom:5px;"><a class="btn btn-primary" href="/Administrador/Mensajes/{{$DatosUsuario->id}}#down">Mensaje</a></div>
        <div class="col-6" style="text-align:center;margin-bottom:5px;"><a class="btn btn-primary" href="/Administrador/Email?To={{$DatosUsuario->email}}">Correo</a></div>
    </div>

@stop

    