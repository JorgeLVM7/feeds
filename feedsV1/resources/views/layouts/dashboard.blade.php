<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/sidenav.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    <title> Feeds </title>
</head>
<body class="bg_dashboard">
<div class="container-fluid">
    <div class="row d-flex d-md-block flex-nowrap wrapper ">

        <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width  menu_users" id="sidebar">
            <div class="col-md-2">
                <div class="row">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else


                    </ul>
                </div>
            </div>
            <div class="list-group border-0 card text-center text-md-left menu_users">
                <h5 >
                    <a href="#menu1" class="list-group-item d-inline-block collapsed menu_users c_white" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="d-none d-md-inline">Bienvenido {{ Auth::user()->name }}</span> </a>

                </h5>
                <div class="collapse menu_users" id="menu1">
                    <a class="list-group-item d-inline-block collapsed menu_users" data-toggle="collapse" aria-expanded="false" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Cerrar Sesión </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
                @endif

                <a href="" class="list-group-item d-inline-block collapsed menu_users" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="d-none d-md-inline">Inicio</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed menu_users" data-parent="#sidebar"><i class="fa fa-list"></i> <span class="d-none d-md-inline">Mapa</span></a>
                <a href="{{route('promocion.index')}}" class="list-group-item d-inline-block collapsed menu_users" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Promoción</span></a>
                <a href="{{route('evento.index')}}" class="list-group-item d-inline-block collapsed menu_users" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Evento</span></a>
                <a href="{{route('restaurantes.index')}}" class="list-group-item d-inline-block collapsed menu_users" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Restaurante</span></a>

                <a href="#" class="list-group-item d-inline-block collapsed menu_users" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Sucursal</span></a>
                <a href="#" class="list-group-item d-inline-block collapsed menu_users" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Configuración</span></a>
            </div>


        </div>
        <main class="col-md-11 col px-5 pl-md-2 pt-2 main mx-auto  ">
            <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>


            @yield('content')

        </main>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.es-es.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js" ></script>



<!--JS de Fecha-->
<script>
  $('#fecha').datepicker({
            locale: 'es-es',
            uiLibrary: 'bootstrap4'
        });
</script>

<!--JS de horario-inicio -->
<script>
  $('#hora_inicio').timepicker({
    locale: 'es-es'
  });
</script>
<!--JS de horario-final -->
<script>
  $('#hora_final').timepicker({
    locale: 'es-es'
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
        locale: 'es-es'
    });
</script>
<!--JS de horario-final de evento -->
<script>
    $('#time_out').timepicker({
        locale: 'es-es'
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#horario').multiselect();
    });
</script>

</body>
</html>