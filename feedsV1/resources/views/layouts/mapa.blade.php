<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    {{--Select2 script from CDN--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    	#mymap {
      		border:1px solid gray;
      		width: 100%;
      		height: 500px;
    	}
  	</style>
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
        <div class="col-12 text-center">
            <h1><b>¡ A un paso del sabor !</b></h1>
        </div>
    </div>
    <br>
    <div class="row">
        <select name="categorias" id="categorias" class="form-control selectQ" style="width:50%">
            <option value=""></option>
            @foreach ($categorias as $key => $value)
                <option value="{{ $value->id }}">{{ $value->categoria }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="row">
        <div id="mymap"></div>
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.638321307401!2d-90.53062948452865!3d19.85525068664581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f83400f49df581%3A0x9991e566e2cfc5d7!2sMcCarthy&#39;s+Irish+Pub!5e0!3m2!1ses-419!2smx!4v1523481810825" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    </div>
    <br>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDd9EjNxKWJXePrvVy342SA4-WqdnjzJ74"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Select2 js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
   $(document).ready(function() {
        $('.selectQ').select2({
            placeholder : "Busca una categoría",
            allowClear : true
        });
    }); 
</script>

<script type="text/javascript">
$(document).ready(function() {

    var locations = <?php print_r(json_encode($locations)) ?>;

    var img = '/img/icon-rest2.png';
    var mymap = new GMaps({
        el: '#mymap',
        lat: 19.8452918,
        lng: -90.5368304,
        zoom:14
    });

    var img = '/img/icon-rest2.png';
    $.each( locations, function( index, value ){
        mymap.addMarker({
         icon: img,
         lat: value.latitud,
         lng: value.longitud,
         title: value.nombre,
         infoWindow: {
             content: '<p>'+value.nombre+'</p>'
            //click: function(e) {
            // alert('This is '+value.nombre+', gujarat from India.');
          }
        });
    });

 }); 
</script>

</body>
</html>