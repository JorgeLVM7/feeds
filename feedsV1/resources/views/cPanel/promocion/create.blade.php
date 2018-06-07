@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Agregar promoción</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-dark float-right" href="{{route('promocion.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('cPanel.promocion.fragment.info')

                    @include('cPanel.promocion.fragment.error')

                    <div class="row">
                        <div class="col-md-12">
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