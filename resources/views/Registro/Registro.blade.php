@extends('index')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2 titulos" style="margin-top:25px;">
            Registro de usuarios
        </div>
    </div>
</div>
<div class="container" style="margin-top:25px;">
    <div class="row">
        <div class="card col-12 col-md-8 offset-md-2">
            <form action="/Registro/go" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="Nombre">Nombre(s)</label>
                            <input name="name" type="text" class="form-control" id="Nombre" aria-describedby="nombre" placeholder="Ingrese nombre" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="Apellido">Apellido(s)</label>
                            <input name="lastname" type="text" class="form-control" id="Apellido" aria-describedby="apellido" placeholder="(Opcional)">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="Email">Correo electronico</label>
                            <input name="email" type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Ingrese correo" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="Email2">Confirme correo</label>
                            <input type="email" class="form-control" id="Email2" aria-describedby="emailHelp" placeholder="Confirme correo" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="Pass">Contraseña</label>
                            <input name="pass" type="password" class="form-control" id="pass" aria-describedby="Pass" placeholder="Ingrese contraseña" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="Email2">Confirme contraseña</label>
                            <input type="password" class="form-control" id="repeatpass" aria-describedby="Pass2" placeholder="Confirme contraseña" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="Pass">Numero Telefonico</label>
                            <input name="tel" type="text" class="form-control" id="tel" aria-describedby="tel" placeholder="(Opcional)">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrarte</button>
            </form>
           <div class="container">
               <div class="row">
                     <div class="col-12" style="text-align:right;"><a href="#">Inicio de sesion</a></div>
               </div>
           </div>
        </div>
        
    </div>
</div>

@stop