@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Restaurantes</h1>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="">Nuevo</a>
                </div>
            </div>
{{--            @include('restaurantes.fragment.info')--}}
            <table class="table table-hover ">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Sitio Web</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Domicilio</th>
                    <th colspan="3">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($restaurantes as $restaurante)
                    <tr class="{{$restaurante ->approve}}">
                        <td>{{ $restaurante ->head }}</td>
                        <td>{{ $restaurante ->description }}</td>
                        <td>{{ $restaurante ->category }}</td>
                        <td>{{ $restaurante ->approve }}</td>
                        <td>
                            <div class="btn-group btn-group-toggle" >
                                <a href="{{ route('restaurantes.show', $restaurante->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                <a href="{{ route('restaurantes.edit', $restaurante->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                                <form class="btn-group btn-group-toggle" action="{{ route('restaurantes.destroy', $restaurante->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
{{--            {!! $restaurantes->render() !!}--}}
        </div>
    </div>

@endsection