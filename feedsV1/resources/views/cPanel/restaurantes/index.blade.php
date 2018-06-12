@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1 class="c_white">Restaurantes</h1>
                </div>
                <div class="col-2">
                    <a class="btn btn-light float-right" href="{{route('restaurantes.create')}}">Nuevo</a>
                </div>
            </div>
            @include('cPanel.restaurantes.fragment.info')
            <table class="table table-hover  c_white">
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
                    <tr >
                        <td>{{ $restaurante ->nombre }}</td>

                        <td>{{ $restaurante ->descripcion }}</td>
                        <td>{{ $restaurante ->sitio_web }}</td>
                        <td>{{ $restaurante ->email}}</td>
                        <td>{{ $restaurante ->telefono }}</td>
                        <td>{{ $restaurante ->calle }}</td>
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