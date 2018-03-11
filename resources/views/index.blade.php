<!doctype html>
<html lang="en">

<head>
    <title>Te lo compro Te lo envio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link width="16" height="16" rel="shortcut icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACASURBVEhL7ZCxDYAwDAQzHzMAAzAEWYSGJcgC7AV6ZAmZmM4xFH/SNXGsi5JIOOvUHRFK7gaHx740leELHEYoOQ0G1ks9fI2CX4a33KsvsyzzYO5CzCVTg6G1BEseq9BT3LF2IeaSqcHQWvKQYQXDnjKsYNhThhWfhlsqGRJJSiei5icpFIRKmwAAAABJRU5ErkJggg=="/>
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
    
    <!-- css de bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
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

    <footer>
        @include('footer')
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}" crossorigin="anonymous"></script>
</body>

</html>