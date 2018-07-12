@extends('layouts.dashboard2')

@section('content')

    <div class="container">
        <div class="row">
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
            </div>    
        </div>
    </div>
@endsection