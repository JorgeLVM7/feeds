<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="88x88" href="img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <title>Feeds</title>
</head>
<body>
<nav class="navbar navbar-expand-lg menu fixed-top" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="a-menu navbar-brand" href="#"><img class="logo" src="img/feeds.png" alt=""></a>
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
<div class="container" style="margin-top: 81.17px">
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <h1><b>¡ A un paso del sabor !</b></h1>
        </div>
    </div>
<div class="row">
    <div class="col-12">
        <br>
    </div>
</div>

    <div class="row">

        {{-- Aqui va el show  --}}
    </div>
    <div class="row">
        <div class="col-12">
            <br>

        </div>
    </div>



</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>