@extends('layouts.dashboard2')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="c_white">Agregar evento</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-light float-right" href="{{route('evento.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('cPanel.evento.fragment.info')

                    @include('cPanel.evento.fragment.error')

                    <div class="row">
                        <div class="col-md-12 c_white">
                            {{--<div class="row">--}}
                                {!! Form::open(['route'=>'evento.store', 'files'=>true]) !!}

                                @include('cPanel.evento.fragment.form')

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
@endsection