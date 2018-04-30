@extends('PanelAdministrativo/Administrador') @section('Admin')

<div class="row">
    <div class="col-12 titulos">
        <a href="/Administrador/Usuarios"  style="style:none;color:black;">Usuarios</a> / {{$Usuario->name}}
    </div>
</div>
<form action="/Administrador/EditUser/hash/fastlogin/go" method="POST">
    {{ csrf_field() }}
    <div class="form-group form-row">
        <div class="col-12 col-md-6">
            <input name="id" type="hidden" value="{{$Usuario->id}}">
            <label for="Nombre">Nombre:</label>
            <input name="name" type="text" class="form-control" id="tituloNom" aria-describedby="Nombre" placeholder="Nombres" value="{{$Usuario->name}}" required>
        </div>
        <div class="col-12 col-md-6">
            <label for="Titulo">Apellidos:</label>
            <input name="lastname" type="text" class="form-control" id="tituloAp" aria-describedby="Apellidos" placeholder="Apellidos" value="{{$Usuario->lastname}}">
        </div>
    </div>
    <div class="form-group form-row">
        <div class="col-12 col-md-6">
            <label for="Correo">Correo:</label>
            <input name="email" type="email" class="form-control" id="tituloemail" aria-describedby="email" placeholder="Correo Electronico" value="{{$Usuario->email}}" required>
        </div>
        <div class="col-12 col-md-6">
            <label for="Contraseña">Contraseña:</label>
            <input name="newpass" type="text" class="form-control" id="titulopass" aria-describedby="Pass" placeholder="Si no desea cambiar dejar en blanco">
        </div>
    </div>
    <div class="form-group form-row">
        <div class="col-12 col-md-6">
            <label for="Tel">Telefono:</label>
            <input name="tel" type="text" class="form-control" id="tituloTel" aria-describedby="Tel" placeholder="{{$Usuario->tel}}" value="656 123 123 12">
        </div>
        <div class="col-12 col-md-6">
            <label for="Direccion">Direccion:</label>
            <input type="text" class="form-control" id="tituloDir" aria-describedby="Dir" placeholder="Direccion" value="">
        </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom:10px;">Guardar cambios</button>
</form>
<div class="row">
    <div class="col-6 col-md-3">
        <a href="/Administrador/Mensajes/{{$Usuario->id}}#down" class="btn btn-info btn-block">Mensaje</a>
    </div>
    <div class="col-6 col-md-3">
        <a href="/Administrador/Email?To={{$Usuario->email}}" class="btn btn-info btn-block">Correo</a>
    </div>
    <div class="col-6 col-md-3">
        <a href="#" class="btn btn-danger btn-block">Borrar</a>
    </div>
    <div class="col-6 col-md-3">
        <a href="#" class="btn btn-warning btn-block">Fast Login</a>
    </div>
</div>

@stop