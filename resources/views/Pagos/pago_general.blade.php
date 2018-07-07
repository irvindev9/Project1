@extends('index')

@section('contenido')
    
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4">
                <form action="/procesar/pago/go" method="POST" id="card-form">
                    @csrf
                    <span class="card-errors"></span>
                    <div>
                      <label>
                        <span>Nombre del tarjetahabiente</span>
                        <input type="text" size="20" data-conekta="card[name]">
                      </label>
                    </div>
                    <div>
                      <label>
                        <span>Número de tarjeta de crédito</span>
                        <input type="text" size="20" data-conekta="card[number]">
                      </label>
                    </div>
                    <div>
                      <label>
                        <span>CVC</span>
                        <input type="text" size="4" data-conekta="card[cvc]">
                      </label>
                    </div>
                    <div>
                      <label>
                        <span>Fecha de expiración (MM/AAAA)</span>
                        <input type="text" size="2" data-conekta="card[exp_month]">
                      </label>
                      <span>/</span>
                      <input type="text" size="4" data-conekta="card[exp_year]">
                    </div>
                    <button type="submit">Crear token</button>
                  </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" >
        Conekta.setPublicKey('key_LS4oZCy5iksxzwX7gNqTtAQ');
      
        var conektaSuccessResponseHandler = function(token) {
          var $form = $("#card-form");
          //Inserta el token_id en la forma para que se envíe al servidor
           $form.append($('<input type="hidden" name="conektaTokenId" id="conektaTokenId">').val(token.id));
          $form.get(0).submit(); //Hace submit
        };
        var conektaErrorResponseHandler = function(response) {
          var $form = $("#card-form");
          $form.find(".card-errors").text(response.message_to_purchaser);
          $form.find("button").prop("disabled", false);
        };
      
        //jQuery para que genere el token después de dar click en submit
        $(function () {
          $("#card-form").submit(function(event) {
            var $form = $(this);
            // Previene hacer submit más de una vez
            $form.find("button").prop("disabled", true);
            Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
            return false;
          });
        });
      </script>

@stop