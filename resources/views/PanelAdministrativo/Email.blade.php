@extends('PanelAdministrativo/Administrador')

@section('Admin')

<?php

    if(isset($_GET['To'])){
        $SendTo = $_GET['To'];
    }else{
        $SendTo = '';
    }

?>

<div class="row">
    <div class="col-12 titulos">
        Sistema de correo
    </div>
</div>
<div class="row">
    <div class="col-12">
    <form>
        <div class="form-group">
            <label for="Email">Correo Electronico:</label>
            <input type="email" class="form-control" id="EntradaDireccion" name="email" placeholder="name@example.com" value="{{$SendTo}}" required>
        </div>
        <div class="form-group">
            <label for="Asunto">Asunto:</label>
            <input type="text" class="form-control" id="AsuntoInput" name="asunto" placeholder="Te lo compro Te lo Envio: Cotizacion" required>
        </div>
        <div class="form-group">
            <label for="AreaTexto">Mensaje:</label>
            <textarea class="form-control" id="TextArea" rows="5" name="Asunto"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar" style="margin-bottom:5px;">
    </form>
    </div>
</div>

@stop