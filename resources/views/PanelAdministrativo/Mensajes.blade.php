@extends('PanelAdministrativo/Administrador')

@section('Admin')

<div class="row">
  <div class="col-12 titulos">
    <a href="/Administrador/Mensajes" style="style:none;color:black;">Mensajes</a> / Fernando
  </div>
</div>
<div style="max-height:400px;overflow-y:auto;" data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
<?php
  //Se recuperan los datos
  $MensajesBox = DB::table('messages')->where('id_usuario',$id_user)->get();
  $Conteo = count($MensajesBox);
  $contador = 0;
?>
  <div class="container-fluid">
    <div class="row">
      @foreach($MensajesBox as $Mensaje)
        @if($Mensaje->id_admin == null)
          @if($contador == $Conteo)
            	<div class="col-7 alert alert-info">
          @else
            	<div class="col-7 alert alert-info" id="down">
          @endif
                {{$Mensaje->mensaje}}
            	</div>

        @else
          @if($contador == $Conteo)
            	<div class="col-7 offset-5 alert alert-primary">
          @else
            	<div class="col-7 offset-5 alert alert-primary" id="down">
          @endif
              	{{$Mensaje->mensaje}}
            	</div>

        @endif

        <?php $contador++; ?>
      @endforeach
    </div>
  </div>

</div>
<div class="bordesuperior container-fluid">
<form action="/Mensaje/Admin/{{$id_user}}/go" method="POST">
    {{ csrf_field() }}
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