@extends('PanelAdministrativo/Administrador')

@section('Admin')

<div class="row">
    <div class="col-12 titulos">
        Promociones
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form>
            <div class="form-group">
                <label for="Promociones">Producto:</label>
                <select class="form-control">
                    <option>Producto1</option>
                    <option>Producto2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Promociones">Nuevo Precio:</label>
                <input class="form-control" type="number" placeholder="Nuevo Precio">
            </div>
            <div class="form-group">
                <label for="Promociones">Caducidad de promocion:</label>
                <input class="form-control" type="date">
            </div>
            <div class="form-group" style="margin-bottom:5px;">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="#" class="btn btn-success">Ver promociones activas</a>
    </div>
</div>

@stop