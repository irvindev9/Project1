@extends('PanelUsuario/Usuario')

@section('User')

<div class="row">
    <div class="col-12 titulos">
        <a href="/Administrador/Usuarios"  style="style:none;color:black;">Mis datos</a> / {{session()->get('name')}}
    </div>
</div>
<?php
    $Datos = DB::table('users')->where('id',session()->get('id'))->first();
?>
<form action="/Perfil/Update/go" method="POST">
    {{ csrf_field() }}
    <div class="form-group form-row">
        <div class="col-12 col-md-6">
            <label for="Nombre">Nombre:</label>
            <input name="name" type="text" class="form-control" id="tituloNom" aria-describedby="Nombre" placeholder="Nombres" value="{{session()->get('name')}}" required>
        </div>
        <div class="col-12 col-md-6">
            <label for="Titulo">Apellidos:</label>
            <input name="lastname" type="text" class="form-control" id="tituloAp" aria-describedby="Apellidos" placeholder="Apellidos" value="{{$Datos->lastname}}">
        </div>
    </div>
    <div class="form-group form-row">
        <div class="col-12 col-md-6">
            <label for="Correo">Correo:</label>
            <input type="email" class="form-control read-only" id="tituloemail" aria-describedby="email" placeholder="Correo Electronico" value="{{$Datos->email}}" disabled>
        </div>
        <div class="col-12 col-md-6">
            <label for="Contraseña">Contraseña:</label>
            <input name="pass" type="text" class="form-control" id="titulopass" aria-describedby="Pass" placeholder="Si no desea cambiar dejar en blanco">
        </div>
    </div>
    <div class="form-group form-row">
        <div class="col-12 col-md-6">
            <label for="Tel">Telefono:</label>
            <input name="tel" type="text" class="form-control" id="tituloTel" aria-describedby="Tel" placeholder="Telefono" value="{{$Datos->tel}}">
        </div>
        <div class="col-12 col-md-6">
            <label for="Direccion">Direccion:</label>
            <input type="text" class="form-control read-only" id="tituloDir" aria-describedby="Dir" placeholder="Direccion" value="Proximamente" disabled>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom:10px;">Guardar cambios</button>
</form>

@stop