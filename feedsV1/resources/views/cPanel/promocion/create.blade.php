@extends('layouts.dashboard2')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="c_black">Agregar promoción</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-danger float-right" href="{{route('promocion.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('cPanel.promocion.fragment.info')

                    @include('cPanel.promocion.fragment.error')

                    <div class="row">
                        <div class="col-md-12 c_black">
                            {{--<div class="row">--}}
                                {!! Form::open(['route'=>'promocion.store', 'files'=>true]) !!}

                                @include('cPanel.promocion.fragment.form')

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
    //JS de horario-final promocion-->
    $('#hora_final').timepicker({
        locale: 'es-es',
        uiLibrary: 'bootstrap4'
    });
</script>
<script>
    $(document).ready(function() {
        $('.selectC').select2({
            placeholder : "Restaurante al que va dirigida",
            allowClear : true
        });
    }); 
</script>
@endsection