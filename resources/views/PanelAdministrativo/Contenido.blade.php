@extends('PanelAdministrativo/Administrador')

@section('Admin')
<div class="container">
    <div class="row">
        <div class="col-12 titulos">
            Estadisticas
        </div>
        <div class="col-6" style="margin-top:10px;">
            <img width="25" height="25" src="data:image/png;base64,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" alt="Trafico">
            Trafico: 123 visitas
        </div>
        <div class="col-6" style="margin-top:10px;">
            <img width="25" height="25" alt="Redes" src="data:image/png;base64,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">
            Redes: 123 visitas
        </div>
        <div class="col-6" style="margin-top:10px;">
            <img width="25" height="25" alt="Terminal" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJbSURBVGhD7ZhLSyNBFIWz8zeI7+cP0I17Fd2aBBzjI5HEhUICuhDSdpABR5hkohvJyj8g6kZB3Qo+QMWFa8WgLlU0uq/p6tRti56uaHffCgPWgQ+S26TOOaG66CSgpKT0NQ3PLTSEk+mtcFIrhVMaQaG81nYwpXcwGzkaSs7Xh5Lpp38C4PEYntXqmB2+Qilt08EUmw1mh69QKv0GRvmDabJ+MYVC/mDGKmB4vDI7fIEJxSmIH/i1mR2+eBOnEJXonm40Eb3n1+6PJMqMxB96f8QHmb1/8SZg/FU8FTDoiyTumL1/8SZgjAW/Nl+Awuz9izehN55TEC/82f+4iSlVKSATVUAkJzMZSCsQy+RINVAFRAKDk/NLUiwWTY6N117nt5FxQoJBk5vRCWsuvQCEAbzOITwAc1VAJDCg2wDCHJ19bAm3c7ptIPz1aNSaSy8gG1VAJDDAOoUW9n+Rn6dLJprxGubSC0AYwOscwgMwVwVEAgO3p41oTrcNhNf2lq259AKyUQVEAgOsU+h2t5WQwxqTm502a86HR/1NDAYQBvA6h/AAzPnwfSOJAWbvX2AgCuR2LirA7PAVzeRK1MDtaSOa020D4a932stzPSvvn7loJrsN5tLQc1vMDl8x/XdHVM8+ORrj8Dy5uNLK7ORoQsvXxTLZjTF91SmAJ4yt+UK/+fhivp3ZyFft/BVxQ2dXj4X9GluyurKH+Iz/rkBL4Y24gS9gv8aWrK7sIT5DFcBWc6F0bw9SCVEBYx28Zx03alp7H6TmfJhKOBWgn28uvOM96ygpfVsFAn8B82OrHpOyWbsAAAAASUVORK5CYII=">
            Ventas: 123 ventas
        </div>
        <?php
            //Cuenta los usuarios
            $Usuarios = DB::table('users')->where('tipo','Cliente')->count();
        ?>
        <div class="col-6" style="margin-top:10px;">
            <img width="25" height="25" alt="New users" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARZSURBVEhLzZRdTFtlGMfrjcYrb5xX3hpv9GZrkU3ZHJZSvtoeWJ1EMloojQzYxI/20J5TSgtbN5DMYQsMTikpH1sHIk5oYcHoFivLwr5YYkxkwRl0Nxs6exDZ6ON5jqfmFA5hKVz4T/7J2+d9nvfX87wfsv+t6rQ7MyhCHqJ0ins2rXzFrpP/4SDSQhYi7UUhZXtVeyD9WbtWMcxBYqfLMuOB6lzoe78Aemvy4JThzRVKJ39g08lzrPpdzwkl2yPuC788Xvz6XwgbqNWss8+cFXfpdz+0a+VLNo3iiFC2NZHaXbnOonS2fwOo2D1cJ+jC11hSt1MllKcuqlAx6a3IkgT96wJoK38LvOVK/ne7WQUUkRYVylMXRSgWcS/FsODRfOipygWvSQmed9+AT82Z4DmUwUGzIHgkH7iDxwrlqcumkT/GNne9lw0nSjLAUZQGTn06NJfugyCpgeuD1RCbaYS7kyQ06HdDgPuTdq5GKE9deGWw1e539sBMfxU8iDqBvdYk6eFGPTSX7AWsEcpTF61T3KAJBVwNHpaEiT0fsSIUaCLtB6E8dTUU75ni9gzuf7fxlyb88Kob9xcaDqZfFspTV0v1vhVcTAokZcxtqdy7IpSnLp9FeRMXi81Ig8TGHMz1WpQ3hPLU5aP2v9xBqeL3LlOSMLF/u0RBJ6VabaeULwnlW1NXfc4314eqJGFiXxs6HO92qKeEsq3LZ8/KZJw5S4tXGiSBaJxjnOolb13mfqFse9RFqz8LHstfxXauhf76rR2CTQWrHVR2m5AuK/F9+EIpQ3pMAducodv6NxrHGDMydTuEtM0FMtlTZ2jVz12ObBg5pYc7Fy28cYyxM47seczB3EOM5W2Dn2TdE23Lg7c+h/G5Sd4DN4cBY0aGjBm6ST2/8JOoq14djfaZ4FJvGQRcebxxHO03Ac5hDgc8aOq1sedmR2ByfkrSOFcesLNGxnKAX1hKWmrsVYKKtBfSkV+aHYb49/0VcGfioyRjDOeKHKMLXBsfhW6PJoESEscQXuavi61ru7pm/JlCeoIh6Ahb0zn7uP78ArQyIWDcOrgyaIYfx2p5Tw+Yodulg1b/eTjaFwJ3xJsEQCe0Nu6OcG3vIZsEpEymrw89TVDhaUNLlD3+1X1oDv/+n1sHvoYOTwW0U2reOMYYzlUGT8DAreF1gITWxnHPy3vtcwKWay8dCRg/mWZPji8mQTez0W/nD5EYtpEwZ3xuAkoZ6zIPzau78ApBT7CeC8lf+iTeElhLhTurO2cfSS28mSv7TvLtw0XFTmhtnG81d7d5cCEdvuscWpBceDN/HBqFxrBvHSChtXFX+PSywW9t5MFa2zirsY1BKtZSI2Bk7HDu9hdJgITEsbPcdTL6yVhx5wfP8+CtCl8kfBzOzibDxUYo12K2tNtaJJRtj/BFMnKPA97Tfm4f8RChcewKc3fXT/657dCEsIXGHusxU4/tJzy5aBxjLLm9Mtk/sNqCphJgpqwAAAAASUVORK5CYII=">
            Usuarios: {{$Usuarios}} registros
        </div>
    </div>
    @isset($_GET['Publicado'])
    <div class="row" style="margin-top:25px;">
        <div class="col-12 alert alert-success">
            Articulo publicado con exito!
        </div>
    </div>
    @endif
    <div class="row card" style="margin-top:10px;margin-bottom:10px;">
        <div class="col-12 titulos">
            Publicar producto
        </div>
        <div class="col-12">
            <form enctype="multipart/form-data" method="POST"  action="/Administrador/Save/Product/go">
                {{ csrf_field() }}
                <div class="form-group form-row">
                    <div class="col-12 col-md-6">
                        <label for="Titulo">Nombre del articulo</label>
                        <input name="articulo" type="text" class="form-control" id="tituloArt" aria-describedby="titulo" placeholder="Titulo del articulo">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="Titulo">Precio del articulo</label>
                        <input name="precio" type="number" class="form-control" id="tituloArt" aria-describedby="Precio" placeholder="Precio del articulo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion corta</label>
                    <input name="descripcionC" type="text" class="form-control" id="descArt" placeholder="Descripcion">
                </div>
                <div class="form-group">
                    <label for="AreaTexto">Descripcion larga</label>
                    <textarea name="descripcionL" class="form-control" id="TextArea" rows="5" name="descripcionl"></textarea>
                </div>
                <div class="form-group">
                    <label for="KeyWords">Keywords</label>
                    <input name="keywords" type="text" class="form-control" id="Keywors" placeholder="Ingrese palabras clave para mejorar busqueda">                               
                </div>
                <div class="form-group form-row">
                    <div class="col-12 col-md-6">
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
                    <div class="col-12 col-md-6">
                        <label for="exampleFormControlFile1">Subir imagen</label>
                        <input name="myfile" type="file" class="form-control-file" id="FilePhoto">
                    </div>                                
                </div>
                <button type="submit" class="btn btn-primary" style="margin-bottom:10px;">Publicar</button>
            </form>
        </div>
    </div>
</div>
@stop