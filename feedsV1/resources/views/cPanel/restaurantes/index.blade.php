@extends('layouts.dashboard2')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1 class="c_white">Restaurantes</h1>
                    <hr>
                </div>
                <div class="col-2">
                    <a class="btn btn-light float-right" href="{{route('restaurantes.create')}}">Nuevo</a>
                </div>
            </div>
            @include('cPanel.restaurantes.fragment.info')




            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-around">
                        <div class="card-deck">
                            @foreach($restaurantes as $restaurante)
                                <div class="card" style="width: 18rem;">
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
                                        <a href="{{ route('restaurantes.show', $restaurante->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                        <a href="{{ route('restaurantes.edit', $restaurante->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                                        <form class="btn-group btn-group-toggle" action="{{ route('restaurantes.destroy', $restaurante->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                            {!! $restaurantes->render() !!}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection