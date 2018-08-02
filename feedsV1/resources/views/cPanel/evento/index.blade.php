@extends('layouts.dashboard2')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1 class="c_black">Eventos</h1>
                    <hr>
                </div>
                <div class="col-2">
                    <a class="btn btn-dark float-right" href="{{route('evento.create')}}">Nuevo</a>
                </div>
            </div>
            @include('cPanel.evento.fragment.info')
            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-around">
                        <div class="card-deck">
                            @foreach($evento as $ev)
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="/images/{{$ev->path}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $ev ->nombre }}</h5>
                                        <p class="card-text">{{ $ev ->descripcion }}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Fecha: {{ $ev ->fecha }}</li>
                                        <li class="list-group-item">Hora Inicio: {{ $ev ->hora_inicio}}</li>
                                        <li class="list-group-item">Hora Final: {{ $ev ->hora_final }}</li>
                                    </ul>
                                    <div class="card-body">
                                         <a href="{{ route('evento.show', $ev->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                        <a href="{{ route('evento.edit', $ev->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                                        <a href="" data-target="#modalEv-delete-{{$ev->id}}" data-toggle="modal"><button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button></a>
                                    </div>
                                </div>              
                            @include('cPanel.evento.modal')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
