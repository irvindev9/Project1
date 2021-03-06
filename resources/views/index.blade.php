<!doctype html>
<html lang="en">

<head>
    <title>Te lo compro Te lo envio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link width="16" height="16" rel="shortcut icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADYSURBVEhL3dQ/DgFBFIDxRaEWaqULiDNICKdxB7dAIm6glFBrtSo0VCqi8Od7CcnEvllvZCX4kl8zmXmzaxPR33R1DGQh7dwLDijhI43hXvaOKbw1oB0KsYC3LJbQDlq1kVgH2kGLGV4mH1g+tDYgyQVVmOpDG5JkCHM1aEN8jigjqDm0YZougipiB22YS558hDyC6kEGTJCRhTQr4IwTKrKQdjns8fxzWJhrYQttSJLvqYnNnfwB+rLui7XG47VXsuDJui/Wxy+Q15XDcqguC56s+362KLoBS+K+5Ix6uswAAAAASUVORK5CYII="/>
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
    
    <!-- css de bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .titulo{
            font-family: 'Chewy';
            font-size: 22px;
        }

        .subtitulo{
            font-size: 18px;
            font-weight: bold;
        }

        .subtitulos{
            font-size: 18px;
            color: grey;
        }

        .articulocaja{
            border-bottom: 1px solid rgba(109, 109, 109, 0.616);
        }

        .labelshipping{
            color:#1976D2!important;
        }

        .fotos {
            width: auto;
            max-height: 150px;
        }

        .fotosP {
            width: auto;
            max-height: 500px;
        }

        body{
            font-family: 'Chivo';
            background-color:#f5f5f5;
        }

        .contenedor{
            background-color:white!important;
        }

        .titulos{
            font-size: 22px;
        }

        .caps{
            background-color: rgba(255, 255, 255, 0.664);
            color:black!important;
            border-radius:5px;
        }

        .carruselimgCont{
            width:100%!important;
        }

        .bordesuperior{
            border-top:1px solid grey;
            padding-top:5px;
            padding-bottom:5px;
        }
    </style>
</head>

<body>
    
    <header>
        @include('header')
    <header>

    @yield('contenido')

    <div class="container" height="200px;">

    </div>
        
    <footer style="margin-top:250px;">
        @include('footer')
    </footer>
    
    
    <script src="{{ asset('js/bootstrap.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jssor.slider-27.1.0.min.js')}}" type="text/javascript"></script>

    @if(!isset($_COOKIE["aviso"]))

            <?php setcookie("aviso","acepto",time()+60*60*24*30); ?>

            <script>
                $(function() {
                    $('#cookieAd').click();
                });
            </script>

            <button id="cookieAd" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Aviso de Cookies</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Nuestro sitio utiliza cookies para mejorar la experiencia de navegacion, si continuas navegando aceptas el uso de las mismas.
                        </div>
                    </div>
                </div>
            </div>

    @endif
    
</body>

</html>