@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-10">
                                 <h1 class="c_white">Editar evento </h1>
                            </div>
                            <div class="col-2">
                                 <a class="btn btn-light float-right" href="{{route('evento.index')}}">Cancelar</a>
                            </div>
                        </div>
                        <hr>
                        @include('cPanel.evento.fragment.error')

                        <div class="row">
                            <div class="col-md-12 c_white">
                                {{--<div class="row">--}}
                                    {!! Form::model($evento, ['route'=>['evento.update',$evento->id], 'method'=> 'PUT','files'=>true]) !!}

                                        @include('cPanel.evento.fragment.form')

                                    {!! Form::close() !!}
                                 {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection