<style>
    .search{
        background-color:#1976D2!important;
    }
</style>
<nav class="navbar navbar-expand-lg search text-white">
    <a class="navbar-brand titulo text-white" href="/">
        <img width="30" height="30" class="d-inline-block align-top" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACASURBVEhL7ZCxDYAwDAQzHzMAAzAEWYSGJcgC7AV6ZAmZmM4xFH/SNXGsi5JIOOvUHRFK7gaHx740leELHEYoOQ0G1ks9fI2CX4a33KsvsyzzYO5CzCVTg6G1BEseq9BT3LF2IeaSqcHQWvKQYQXDnjKsYNhThhWfhlsqGRJJSiei5icpFIRKmwAAAABJRU5ErkJggg==">
        Te lo compro Te lo envio
    </a>
    <button class="navbar-toggler navbar navbar-dark bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link  text-white" href="/">Inicio</a>
            </li>
            @if(session()->has('name'))
            <li class="nav-item">
                <a class="nav-link  text-white" href="/Administrador">{{session()->get('name')}}<span class="badge badge-pill badge-light">2</span></a>
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/Busqueda/Autopartes">Autopartes</a>
                    <a class="dropdown-item" href="/Busqueda/Calzado">Calzado</a>
                    <a class="dropdown-item" href="/Busqueda/Computadoras">Computadoras</a>
                    <a class="dropdown-item" href="/Busqueda/Deportes">Deportes</a>
                    <a class="dropdown-item" href="/Busqueda/Equipo Dj">Equipo Dj's</a>
                    <a class="dropdown-item" href="/Busqueda/Libros">Libros</a>
                    <a class="dropdown-item" href="/Busqueda/Muebles">Muebles</a>
                    <a class="dropdown-item" href="/Busqueda/Medicamentos">Medicamentos</a>
                    <a class="dropdown-item" href="/Busqueda/Ropa">Ropa</a>
                    <a class="dropdown-item" href="/Busqueda/Tiendas Departamentales">Tiendas departamentales</a>
                    <a class="dropdown-item" href="/Busqueda/Videojuegos">Videojuegos</a>
                    <a class="dropdown-item" href="/Busqueda/Otros">Otros</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-white" href="/Cotizacion">Solicitar cotizacion</a>
            </li>
            @if(!session()->has('id'))
            <li class="nav-item">
                <a class="nav-link  text-white" href="/Registro">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#ModalSesion">
                Iniciar Sesión
                </a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white" href="/Close/go">
                Cerrar Sesión
                </a>
            </li>
            @endif
            <li class="nav-item d-block d-md-none">
                <a class="nav-link  text-white" href="#">Carrito<span class="badge badge-pill badge-light">2</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid search">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar articulos" aria-label="Busqueda" aria-describedby="Articulos">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="button">Buscar</button>
                </div>
            </div>
        </div>
        <div class="col-md-1 offset-md-2 d-none d-md-block">
            <a href="#"><img width="30" height="30" src="{{asset('iconset/svg/si-glyph-trolley-2.svg')}}" alt="CarritoCompras"><span class="badge badge-pill badge-light">2</span></a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Te lo compro Te lo envio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/Login/go" method="POST">
        {{ csrf_field() }}
      <div class="modal-body">
            <div class="col-12">
                <label for="Inicio">Correo</label>
                <input name="correo" type="text" class="form-control" placeholder="Correo" required>
            </div>
            <div class="col-12" style="margin-top:10px;">
                <label for="Inicio">Contraseña</label>
                <input name="pass" type="password" class="form-control" placeholder="Contraseña" required>
            </div>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Ingresar" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>