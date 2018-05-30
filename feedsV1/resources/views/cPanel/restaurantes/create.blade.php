@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Agregar restaurante</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-dark float-right" href="{{route('restaurantes.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('cPanel.restaurantes.fragment.info')

                    @include('cPanel.restaurantes.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'restaurantes.store', 'files'=>true]) !!}

                            @include('cPanel.restaurantes.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(function() {
        $('#ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>
@endsection