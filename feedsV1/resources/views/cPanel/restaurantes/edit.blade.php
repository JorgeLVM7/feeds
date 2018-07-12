@extends('layouts.dashboard2')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="c_white">Editar Restaurante</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-light float-right" href="{{route('restaurantes.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('cPanel.restaurantes.fragment.info')

                    @include('cPanel.restaurantes.fragment.error')

                    <div class="row">
                        <div class="col-md-12 c_white">
                            {{--<div class="row">--}}
                            {!! Form::model($restaurante, ['route'=>['restaurantes.update', $restaurante->id], 'method'=>'PUT','files'=>true]) !!}

                            @include('cPanel.restaurantes.fragment.form2')

                            {!! Form::close() !!}
                            {{--</div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
  <!--JS de horario-inicio y final de restaurante -->
  <script>
        $('#timepicker1').timepicker({
            locale: 'es-es',
            uiLibrary: 'bootstrap4'
        });
        $('#timepicker2').timepicker({
            locale: 'es-es',
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#horario').multiselect();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script src="{{asset('/js/mapa.js')}}"></script>
@endsection