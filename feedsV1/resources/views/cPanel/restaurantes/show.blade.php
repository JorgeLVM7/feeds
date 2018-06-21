@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-10 c_white">
            <h1>Vista previa de {{ $restaurante->nombre }}</h1>
        </div>
        <div class="col-2">
            <a class="btn btn-light float-right" href="{{route('restaurantes.index')}}">Regresar</a>

        </div>
    </div>
    <div class="row">
        <br>
    </div>

    <div class="row c_white">
        <div class="col-3">
            <h5>Nombre de restaurante:</h5>
        </div>
        <div class="col-9">
            <h1>{{$restaurante -> nombre }}</h1>
        </div>
    </div>
    <div class="row c_white">
        <div class="col-3">
            <h5>Descripción:</h5>
        </div>
        <div class="col-9">
            <h1>{{$restaurante -> descripcion }}</h1>
        </div>
    </div>
    <div class="row c_white">
        <div class="col-3">
            <h5>Sitio Web:</h5>
        </div>
        <div class="col-9">
            <h1>{{$restaurante -> sitio_web }}</h1>
        </div>
    </div>
    <div class="row c_white">
        <div class="col-3">
            <h5>Calle:</h5>
        </div>
        <div class="col-9">
            <h1>{{$restaurante -> calle }}</h1>
        </div>
    </div>
    <div class="row c_white">
        <div class="col-3">
            <h5># interior:</h5>
        </div>
        <div class="col-9">
            <h1>{{$restaurante -> no_int }}</h1>
        </div>
    </div>
    <div class="row c_white">
        <div class="col-3">
            <h5># exterior:</h5>
        </div>
        <div class="col-9">
            <h1>{{$restaurante -> no_ext }}</h1>
        </div>
    </div>
    <div class="row c_white">
        <div class="col-3">
            <h5>Colonia:</h5>
        </div>
        <div class="col-9">
            <h1>{{$restaurante -> colonia }}</h1>
        </div>
    </div>
    <div class="row c_white">
        <div class="col-3">
            <h5>Código Postal:</h5>
        </div>
        <div class="col-9">
            <h1>{{$restaurante -> codigo_postal }}</h1>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row">

    </div>

@endsection