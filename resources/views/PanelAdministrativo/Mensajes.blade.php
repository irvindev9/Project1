@extends('PanelAdministrativo/Administrador')

@section('Admin')

<div class="row">
  <div class="col-12 titulos">
    <a href="/Administrador/Mensajes" style="style:none;color:black;">Mensajes</a> / Fernando
  </div>
</div>
<div style="max-height:400px;overflow-y:auto;" data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">

  <div class="container-fluid">
    <div class="row">
      <div class="col-6 alert alert-info">
        Hola
      </div>
      <div class="col-6 offset-6 alert alert-primary">
        Hola Fernando en que te puedo ayudar?
      </div>
      <div class="col-6 alert alert-info">
        Quiero pedir una cotizacion
      </div>
      <div class="col-6 offset-6 alert alert-primary">
        Que deseas comprar?
      </div>
      <div class="col-6 alert alert-info">
        Un iPhone
      </div>
      <div class="col-6 offset-6 alert alert-primary">
        Puedes decirme las especificaciones?
      </div>
      <div class="col-6 alert alert-info">
        Un iPhone X de 64 GBs
      </div>
      <div class="col-6 offset-6 alert alert-primary">
        Te sale en 20 mil pesos
      </div>
      <div id="down" class="col-6 alert alert-info">
        Ok lo quiero!
      </div>
    </div>
  </div>

</div>
<div class="bordesuperior container-fluid">
  <form>
    <div class="row">
      <div class="col-9">
        <input type="text" name="newMessage" placeholder="Ingrese el mensaje" class="form-control ">
      </div>
      <div class="col-3">
        <input type="submit" class="btn btn-primary btn-block" value="Enviar">
      </div>
    </div>
  </form>
</div>

@stop