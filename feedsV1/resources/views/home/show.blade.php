<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="apple-touch-icon" sizes="88x88" href="/img/apple-icon.png"/>
    <link rel="icon" type="/image/png" href="img/favicon.png"/>
    <title>Feeds</title>
</head>
<body>
<nav class="navbar navbar-expand-lg menu fixed-top" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="a-menu navbar-brand" href="#"><img class="logo" src="/img/feeds.png" alt=""></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active links">
                <a class="a-menu nav-link" href="/">Principal<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="a-menu nav-link links" href="{{ route('layouts.index') }}">Mapa</a>
            </li>
            <li class="nav-item">
                <a class="a-menu nav-link links" href="{{ route('login') }}">Ingresar</a>
            </li>
        </ul>
        <!--<form class="form-inline my-2 my-lg-0">-->
        <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
        <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
        <!--</form>-->
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-9">
            <h1>Vista previa </h1>

        </div>
        <div class="col-3">
            <div class="btn-group" role="group">
                <a class="btn btn-warning float-right" href="{{route('restaurantes.edit',$restaurante->id)}}">Editar</a>

                <a class="btn btn-danger float-right" href="{{route('restaurantes.index')}}">Cancelar</a>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="card">
                <img class="card-img" src="/images/{{$restaurante->path}}" alt="Card image">
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <label for="">Restaurante:  </label>
                    <h1>{{$restaurante->nombre}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="">Descripción: </label>

                    <h6>{{$restaurante->descripcion}}</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="">Dirección: </label>

                    <h6>Calle {{$restaurante->calle}},
                        {{$restaurante->no_int}}
                        {{$restaurante->no_ext}}
                        Col. {{$restaurante->colonia}},
                        {{$restaurante->referencia }}</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Código Postal: </label>
                    <h6>{{$restaurante->codigo_postal}}</h6>
                </div>
                <div class="col-4">
                    <label for="">Teléfono: </label>
                    <h6>{{$restaurante->codigo_postal}}</h6>
                </div>
                <div class="col-4">
                    <label for="">RFC: </label>
                    <h6>{{$restaurante->RFC}}</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">Correo Electrónico</label>
                    <h6>{{$restaurante->email}}</h6>
                </div>
                <div class="col-6">
                    <label for="">Horario</label>
                    <h6>{{$restaurante->horario }} de
                        {{$restaurante->hora1}} - {{$restaurante->hora2}} hrs</h6>
                </div>
            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for=""> Ubicación: </label>
            <div class="row c_black">
                <div class="col-md-12">
                    <div class="form-group">
                        <div id="map" style="widows: 100%; height:500px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

        <input type="hidden" name="lat" id="lat" value="{{$restaurante->latitud}}">

        <input type="hidden" name="lng" id="lng" value="{{$restaurante->longitud}}">
    </div>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('../../js/viewmap.js')}}"></script>

</body>
</html>