@extends('layouts.dashboard2')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1 class="c_black">Promoción</h1>
                    <hr>
                </div>
                <div class="col-2">
                    <a class="btn btn-dark float-right" href="{{route('promocion.create')}}">Nuevo</a>
                </div>
            </div>
            @include('cPanel.promocion.fragment.info')



            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-around">
                        <div class="card-deck">
                            @foreach($promocion as $promo)
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="/images/{{$promo->path}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $promo ->nombre }}</h5>
                                        <p class="card-text">{{ $promo ->descripcion }}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Fecha: {{ $promo ->fecha }}</li>
                                        <li class="list-group-item">Hora Inicio: {{ $promo ->hora_inicio}}</li>
                                        <li class="list-group-item">Hora Final: {{ $promo ->hora_final }}</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="{{ route('promocion.show', $promo->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                        <a href="{{ route('promocion.edit', $promo->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                                        <a href="" data-target="#modal-delete-{{$promo->id}}" data-toggle="modal"><button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button></a>
                                    </div>
                                </div>
                            @include('cPanel.promocion.modal')
                            @endforeach
                            {!! $promocion->render() !!}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection