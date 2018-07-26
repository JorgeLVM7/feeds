@extends('layouts.dashboard2')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="c_black">Agregar usuario</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-danger float-right" href="{{route('admin.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('cPanel.usuarios.fragment.info')

                    @include('cPanel.usuarios.fragment.error')

                    <div class="row">
                        <div class="col-md-12 c_black">
                            {{--<div class="row">--}}
                                {!! Form::open(['route'=>'usuarios.store', 'files'=>true]) !!}

                                @include('cPanel.usuarios.fragment.form')

                                {!! Form::close() !!}
                            {{--</div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection