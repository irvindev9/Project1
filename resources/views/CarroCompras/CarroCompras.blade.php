@extends('index')

@section('contenido')
    <?php $Total = 0; ?>
    <?php $IdUser = ''; ?>
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-7 alert alert-light">
                <h5>Producto</h5>
            </div>
            <div class="col-3 alert alert-light">
                <h5>Precio</h5>
            </div>
            <div class="col-2 alert alert-light">
                <h5>Accion</h5>
            </div>
        </div>
        <div class="row">
            <?php $CadenaProductos = ''; ?>
            @foreach($Carrito as $Car)
                <div class="col-7 alert alert-light">
                    {{$Car->articulo}}
                </div>
                <?php $CadenaProductos .= $Car->articulo.','; ?>
                <?php $IdUser = $Car->id_user; ?>
                <div class="col-3 alert alert-light">
                    ${{$Car->precio}}
                </div>
                <div class="col-2 alert alert-light">
                    <a href="/Delete/Item/Car/{{$Car->id}}" class="btn btn-danger">Eliminar</a>
                </div>
                <?php $Total = $Total + $Car->precio; ?>
            @endforeach
        </div>
        <div class="row">
            <div class="col-4 offset-4 alert alert-light">
                Total
            </div>
            <div class="col-4 alert alert-light">
                ${{$Total}}
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-7">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="business" value="telocomproteloenviot@gmail.com">
                        <input type="hidden" name="lc" value="MX">
                        <input type="hidden" name="item_name" value="<?php echo "Carrito ".$CadenaProductos." - ".$IdUser; ?>">
                        <input type="hidden" name="item_number" value="">
                        <input type="hidden" name="amount" value="{{$Total}}">
                        <input type="hidden" name="currency_code" value="MXN">
                        <input type="hidden" name="button_subtype" value="services">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="tax_rate" value="0.000">
                        <input type="hidden" name="shipping" value="0.00">
                        <input type="hidden" name="return" value="http://telocomproteloenvio.com/">
                        <input type="hidden" name="notify_url" value="http://telocomproteloenvio.com/Pay/User/Cart/Carrito/{{$IdUser}}/check" />
                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                        <input type="image" src="https://www.paypalobjects.com/webstatic/es_MX/mktg/logos-buttons/redesign/btn_10.png" border="0" name="submit" alt="PayPal, la forma m�s segura y r�pida de pagar en l�nea.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
            </div>
        </div>
    </div>

@stop