<div class="row">
    <div class="titulos col-12">
        Ultimas tiendas agregadas
    </div>
</div>
<?php $UltimoAgregado = DB::table('shops')->latest()->limit(4)->get(); ?>
        <div class="row">
            @foreach($UltimoAgregado as $Item)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('public/tiendas/'.$Item->imagen)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$Item->banner}}</h5>
                                <p class="card-text">{{$Item->subtitulo}}</p>
                                <a target="_blank" href="{{$Item->link}}" class="btn btn-primary btn-block">Visitar Sitio</a>
                            </div>
                        </div>
                    </div>
            @endforeach
    <!--div class="col-12 col-md-4 col-lg-3">
        <div class="card">
            <img class="card-img-top" src="{{asset('img/banners/MujerCompras.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Television Smart TV</h5>
                <p class="card-text">Pantalla LCD 45 pulgadas HD</p>
                <a href="#" class="btn btn-primary">$ 10000</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-3">
        <div class="card">
            <img class="card-img-top" src="{{asset('img/banners/MujerCompras.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">iPhone X</h5>
                <p class="card-text">Seminuevo, 64 GB's de Capacidad</p>
                <a href="#" class="btn btn-primary">$ 30000</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-3">
        <div class="card">
            <img class="card-img-top" src="{{asset('img/banners/MujerCompras.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Tennis Nike</h5>
                <p class="card-text">Totalmente nuevos, originales</p>
                <a href="#" class="btn btn-primary">$ 2000</a>
            </div>
        </div>
    </div-->
</div>