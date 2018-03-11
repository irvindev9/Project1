@extends('index')

@section('contenido')

<div class="container" style="margin-top:25px;">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2 titulos">
            Cotizacion
        </div>
        @isset($_GET['Ok'])
            <div class="col-12 col-md-8 offset-md-2 alert alert-success" style="text-align:center;">
                Cotizacion realizada con exito!
                <br>
                Pronto nos contactaremos contigo
            </div>
        @endif
    </div>
</div>



<div class="container" style="margin-top:25px;">
    <div class="row">
        <div class="card col-12 col-md-8 offset-md-2">
            <form action="/Cotizacion/go" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                    <input type="hidden" name="id_usuario" value="{{session()->get('id')}}">
                        <div class="col-12 col-md-6">
                            <label for="Articulo">Articulo</label>
                            <input name="articulo" type="text" class="form-control" id="Articulo" aria-describedby="Articulo" placeholder="Ejemplo: iPhone, Television, Jersey..." required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="Descripcion">Descripcion</label>
                            <input name="descripcion" type="text" class="form-control" id="Descripcion" aria-describedby="Descripcion" placeholder="Ejemplo: Modelo, caracteristicas...">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="Cat">Categoria</label>
                            <select name="categoria" class="form-control" id="Cat">
                                <option>(Opcional)</option>
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
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="Sitio">Selecciona el sitio</label>
                            <select name="sitio" class="form-control" id="Sitio">
                                <option>(Opcional)</option>
                                <option>Amazon</option>
                                <option>ebay</option>
                                <option>Walmart</option>
                                <option>Nike</option>
                                <option>Adidas</option>
                                <option>Best Buy</option>
                                <option>Auto Zone</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12">
                            <label for="Link">Link del sitio</label>
                            <input name="linksitio" type="Link" class="form-control" id="Link" aria-describedby="Link" placeholder="Ingrese el link del sitio">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-bottom:10px;">Enviar</button>
            </form>
        </div>
    </div>
</div>


@stop