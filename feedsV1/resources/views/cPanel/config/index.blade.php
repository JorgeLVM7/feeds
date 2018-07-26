@extends('layouts.dashboard2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Configuración</h1>
                </div>
            </div>
            <hr>

        </div>
    </div>

    <div class="row">
        <div class="col-10">
            <h1>Perfil</h1>

        </div>
        <div class="col-2">
                <a class="btn btn-warning float-right" href="{{route('config.edit', $configuracion->id)}}">Editar</a>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="/images/{{$configuracion->path}}" alt="Card image">
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <label for="">Nombre:  </label>
                    <h1>{{$configuracion->name}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="">Correo: </label>

                    <h6>{{$configuracion->email}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@stop