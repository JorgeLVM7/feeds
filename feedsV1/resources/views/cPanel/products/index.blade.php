@extends('layouts.dashboard')


@section('content')
 <div class="page-header">
    <h2 class="c_white">Bienvenido a Feeds {{ Auth::user()->name }}</h2>
 </div>


    <div class="row c_white">
        <div class="col-12">
            <h1>Eventos </h1>
        </div>
        <div class="row">
            <br>
        </div>
        <div class="row">
            @foreach($eventos as $evento)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../images/{{$evento->path}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$evento->nombre}}</h5>
                        <p class="card-text">{{$evento->descripcion}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">fecha: {{$evento->fecha}} </li>
                        <li class="list-group-item">horario: {{$evento->hora_inicio}} - {{$evento->hora_final}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1>Promociones</h1>
        </div>
        <div class="row">
            <br>
        </div>
        @foreach($promociones as $promocion)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/{{$promocion->path}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$promocion->nombre}}</h5>
                    <p class="card-text">{{$promocion->descripcion}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">fecha: {{$promocion->fecha}} </li>
                    <li class="list-group-item">horario: {{$promocion->hora_inicio}} - {{$promocion->hora_final}}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection