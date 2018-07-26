@extends('layouts.dashboard2')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Restaurantes</h1>
                    <hr>
                </div>
                <div class="col-2">
                    <a class="btn btn-dark float-right" href="{{route('restaurantes.create')}}">Nuevo</a>
                </div>
            </div>
            @include('cPanel.restaurantes.fragment.info')

            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-around">
                        <div class="card-deck col-12">
                            @foreach($restaurantes as $restaurante)
                                <div class="col-md-3">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="/images/{{$restaurante->path}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $restaurante ->nombre }}</h5>
                                            <p class="card-text">{{ $restaurante ->descripcion }}</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{ $restaurante ->sitio_web }}</li>
                                            <li class="list-group-item">{{ $restaurante ->email}}</li>
                                            <li class="list-group-item">{{ $restaurante ->telefono }}</li>
                                        </ul>
                                        <div class="card-body">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('restaurantes.show', $restaurante->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>
                                                <a href="{{ route('restaurantes.edit', $restaurante->id) }}"   role="button" aria-pressed="true">Editar</a>
                                                <a href="" data-target="#modal-delete-{{$restaurante->id}}" data-toggle="modal"><button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @include('cPanel.restaurantes.modal')
                            @endforeach
                            {!! $restaurantes->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
