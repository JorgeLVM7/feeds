@extends('layouts.dashboard2')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="c_white">Agregar promoción</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-light float-right" href="{{route('promocion.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('cPanel.promocion.fragment.info')

                    @include('cPanel.promocion.fragment.error')

                    <div class="row">
                        <div class="col-md-12 c_white">
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