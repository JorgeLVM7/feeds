<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap para el date y time picker-->
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!--Boostrap multiselect css
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" type="text/css"/>-->

    {{--Select2 css--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
    {{--Alertify css --}}
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>

    <!--
    RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.rtl.min.css"/>

    <link rel="apple-touch-icon" sizes="88x88" href="{{asset('img/apple-icon.png')}}"/>
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}"/>


    <title>Feeds | cPanel</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
{{--    <a class="navbar-brand text-white " href="{{route('restaura')}}">Inicio </a>--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('restaurantes.index') }}">Restaurantes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('promocion.index') }}">Promociones <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('evento.index') }}">Eventos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('config.index') }}">Configuración <span class="sr-only">(current)</span></a>
            </li>

            @if(Auth::user()->roles_id_rol===2)

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.index') }}">Administrador <span class="sr-only">(current)</span></a>
                </li>

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link text-white" href="{{ route('categorias.index') }}">Categorias <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link text-white" href="{{ route('usuarios.index') }}">Usuarios<span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}


            @else


            @endif


        </ul>


        {{--<div class="dropdown">--}}
            {{--<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--{{ Auth::user()->name }}--}}
            {{--</a>--}}

            {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
                {{--<button class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">Cerrar Sesión</button>--}}
                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--{{ csrf_field() }}--}}
                {{--</form>--}}

            {{--</div>--}}
        {{--</div>--}}

        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesión</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>



    </div>
</nav>

{{--contenido de los modulos --}}
<div class="container-fluid">
    <br>
    @yield('content')
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Script  para el date y time picker-->
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.es-es.js" type="text/javascript"></script>

<!-- Mapa de google-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDd9EjNxKWJXePrvVy342SA4-WqdnjzJ74&libraries=places">
</script>

<!--Boostrap multiselect js
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>-->

{{--Select2 script from CDN--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

{{--Alertify JS --}}

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>

@yield('script')

<script>
    $(document).ready(function() {
        // show the alert
        setTimeout(function() { $(".alert").alert('close'); }, 15000);

    });

    $('#inputGroupFile02').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })



</script>

{{-- ///////////////////////////////////////////////////////////////////////////////////////////////// --}}




<script>

    {{-- Databales--}}

    $(document).ready( function () {

        $('#table_id').DataTable({
            "language": {
                "url": "dataTables.spanish.lang"
            },
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'print'
            ],

            language: {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },

            dom: 'Bfrtip',
            buttons: [
                 'excel', 'pdf', 'print'
            ]


        });

    } );


//    DataTable 2

    $(document).ready( function () {

        $('#table_id2').DataTable({
            "language": {
                "url": "dataTables.spanish.lang"
            },
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'print'
            ],

            language: {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },

            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]


        });

    } );






</script>

{{--Datatables--}}

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/af-2.3.0/b-1.5.2/r-2.2.2/sl-1.2.6/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/af-2.3.0/b-1.5.2/r-2.2.2/sl-1.2.6/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.1/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/datatables.min.css"/>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.1/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/datatables.min.js"></script>



</body>
</html>