<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Feeds cPanel</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white " href="#">Inicio </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('restaurantes.index') }}">Restaurantes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Promociones <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Eventos <span class="sr-only">(current)</span></a>
            </li>

            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--Dropdown--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<a class="dropdown-item" href="#">Action</a>--}}
                    {{--<a class="dropdown-item" href="#">Another action</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
            {{--</li>--}}
        </ul>
        {{--<form class="form-inline my-2 my-lg-0">--}}
            {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--</form>--}}
    </div>
</nav>


{{--contenido de los modulos --}}
<div class="container-fluid">
    @yield('content')
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<!--JS de Fecha de promocion-->
<script>
    $('#fecha').datepicker({
        locale: 'es-es',
        uiLibrary: 'bootstrap4'
    });
</script>

<!--JS de horario-inicio promocion -->
<script>
    $('#hora_inicio').timepicker({
        locale: 'es-es',
        uiLibrary: 'bootstrap4'
    });
</script>
<!--JS de horario-final promocion-->
<script>
    $('#hora_final').timepicker({
        locale: 'es-es',
        uiLibrary: 'bootstrap4'
    });
</script>
<!--JS de Fecha de evento-->
<script>
    $('#datepicker').datepicker({
        locale: 'es-es',
        uiLibrary: 'bootstrap4'
    });
</script>

<!--JS de horario-inicio de evento -->
<script>
    $('#time_in').timepicker({
        locale: 'es-es',
        uiLibrary: 'bootstrap4'
    });
</script>
<!--JS de horario-final de evento -->
<script>
    $('#time_out').timepicker({
        locale: 'es-es',
        uiLibrary: 'bootstrap4'
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#horario').multiselect();
    });
</script>

<!-- Mapa de google-->
<script>
    // Note: This example requires that you consent to location sharing when
    // prompted by your browser. If you see the error "The Geolocation service
    // failed.", it means you probably did not give permission for the browser to
    // locate you.

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 19.8452918, lng: -90.5368304},
            zoom: 16
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                $('#latitud').val(position.coords.latitude,)
                $('#longitud').val(position.coords.longitude,)

                infoWindow.setPosition(pos);
                //infoWindow.setContent('Location found.');
                map.setCenter(pos);

                var marker = new google.maps.Marker({
                    map: map,
                    position: pos,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                });
                marker.addListener('click', toggleBounce);


                function toggleBounce() {
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                }


            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDd9EjNxKWJXePrvVy342SA4-WqdnjzJ74&callback=initMap">
</script>

{{-- Select2--}}
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>



{{--Opcion --}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>--}}



{{--Select2 script from CDN--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


</body>
</html>