@extends('layouts.dashboard')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>
            <div class="col-6"></div>
            <div class="col-6"></div>
            <div class="col-6"></div>
            <div class="col-6"></div>
            <div class="col-6"></div>
            <div class="col-6"></div>
            <div class="col-6"></div>
            <div class="col-6">
                <p>hola</p>
                <img src="../images/{{$restaurante->path}}
                        " alt="">
            </div>
        </div>
    </div>

    @endsection