@extends('index')

@section('contenido')
<?php
    //Se obtienen los valores del producto
    $Producto = DB::table('products')->where('id',$Id)->first();

?>
<div class="card container" style="margin-top:25px;">
    <div class="row">
        <div class="card col-12 col-md-6">
            <center><a href="#"><img class="fotosP card-img-top img-fluid" src="{{asset('public/tienda_img/'.$Producto->imagen)}}" alt="Card image cap"></a></center>
        </div>
        <div class="col-6">
            <a class="titulos">{{$Producto->articulo}}</a>
            <br>
            <a class="subtitulos">{{$Producto->descripcionCorta}}</a>
            <br>
            <br>
            <a class="titulos">${{$Producto->precio}}</a>
            <br>
            <img height="25" width="25" src="data:image/png;base64,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">&nbsp;<a class="labelshipping">Envio Gratuito</a>
            <br>
            <img height="25" width="25"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHpSURBVEhL7ZVLSwJRFIDdR7+i+hvRA1fl6IiY/QqFCHLG9yPEfkLWIqFVgeQ4jljquta6DnpBkVq6yECne+RMzehojY9p4wcXZu65cz/u45wxzJBDMZwfH/WD9mYjFJMR8VUfQGoPXjV1FUvS/YsXUTexXHqQresj7pVKYq3NzPAt2is80D4haXJnjDi9OmrSUVuMq4rB8yfRlSh3bKF8g/bmbjY86SVUKaEYPjopsbLVRNdRpW3xZN8plltGnRI1udpW/tbMLP/pCBfrZMXtOF/tzsOc3oogN+0Ji6hT0iuHiTD0Z4w7uTkzm14hZ3xpDxea0dRzdy4nWbnVJ1zjsH7k8lHEciwe3g9yWHmcr4n2YL5hYjNrGO5Hko8rBsgWF+CcYdWuw3KHXOQkhtQB+STElJtbdUSKdRAHzh5Fkmr3GBoMycMAPo4MtZuaN7PZFohj3Cu5fJkPDE2X/xOPstWTgFSuonS5nKSa0R7hBEPTw8LyoS1ZOkEJHZpO4wBnuunm10kBKYH0u4AkoHQOLSA/5Q+7NPXBRdqOlOqu44qiZJItfhtYMgH4GAb3TqilT2qwveRch/8kJLRKevsgZeD2QpWykRIJv0Vy1gs4ZDDwsdSwS1Mf5KnVK9zB7YVUwtCMGXphMHwBwhCatq+mZF4AAAAASUVORK5CYII=">&nbsp;<a class="labelshipping">&nbsp;Garantia de 10 dias*</a>
            <br>
            <br>
            <?php
                $Datos = DB::table('products')->where('id',$Id)->first();
            ?>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="telocomproteloenviot@gmail.com">
                <input type="hidden" name="lc" value="MX">
                <input type="hidden" name="item_name" value="<?php echo "Articulo ".$Producto->articulo." - ". $Id ?>">
                <input type="hidden" name="item_number" value="">
                <input type="hidden" name="amount" value="{{$Producto->precio}}">
                <input type="hidden" name="currency_code" value="MXN">
                <input type="hidden" name="button_subtype" value="services">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="tax_rate" value="0.000">
                <input type="hidden" name="shipping" value="0.00">
                <input type="hidden" name="return" value="http://telocomproteloenvio.com/">
                <input type="hidden" name="notify_url" value="http://telocomproteloenvio.com/Pay/User/Cart/{{$Datos->llave}}/{{$Id}}/check" />
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                <input type="image" src="https://www.paypalobjects.com/webstatic/es_MX/mktg/logos-buttons/redesign/btn_10.png" border="0" name="submit" alt="PayPal, la forma m�s segura y r�pida de pagar en l�nea.">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
            </form>&nbsp;<a href="/Carrito/Add/Item/{{$Id}}" class="btn btn-light">Agregar al carrito</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 titulos">Descripcion</div>
        <div class="card col-12">
            <?php echo nl2br($Producto->descripcionLarga);?>
        </div>
    </div>
    <div class="row" style="margin-top:15px;">
        @if(session()->has('id'))
            <div class="col-12">
                <form action="/Articulo/Comentario/go/{{$Id}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8 col-md-10">
                                <label for="Coment">Comentario</label>
                                <input name="commit" type="text" class="form-control" id="Comentarioinput" placeholder="Ingresa un comentario">
                            </div>
                            <div class="col-4 col-md-2">
                                <label for="Space">&nbsp;</label>
                                <input type="submit" class="form-control btn btn-primary" value="Comentar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        @endif
    </div>
    <?php $Comentarios = DB::table('comments')->where('articulo',$Id)->get(); ?>
    @foreach($Comentarios as $comentario)
        <?php $NombreCliente = DB::table('users')->where('id',$comentario->user_id)->first(); ?>
        <div class="row">
            <div class="col-10 offset-1 alert alert-primary">
                {{$NombreCliente->name}}: {{$comentario->commit}} ({{$comentario->updated_at}}) <br>
                @if(session()->get('tipoCuenta') == 'Admin')
                    <small><a href="/Delete/Commit/{{$comentario->id}}">(Eliminar)</a></small>
                @endif
            </div>
            @if(session()->get('tipoCuenta') == 'Admin')
                <div class="col-10 offset-1">
                    <form action="/Articulo/Respuesta/go/{{$comentario->id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8 col-md-10">
                                    <label for="Coment">Respuesta</label>
                                    <input name="answer" type="text" class="form-control" id="Comentarioinput" placeholder="Responder comentario">
                                </div>
                                <div class="col-4 col-md-2">
                                    <label for="Space">&nbsp;</label>
                                    <input type="submit" class="form-control btn btn-primary" value="Responder">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
            <?php $Respuestas = DB::table('answers')->where('commit_id',$comentario->id)->get(); ?>
            @foreach($Respuestas as $respuesta)
                <div class="col-9 offset-2 alert alert-info">
                    Te lo compro Te lo envio: {{$respuesta->answer}} ({{$respuesta->updated_at}})
                </div>
            @endforeach
        </div>
    @endforeach
    </div>
</div>

@stop