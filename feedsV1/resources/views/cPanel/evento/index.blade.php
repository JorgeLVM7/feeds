@extends('layouts.dashboard2')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1 class="c_black">Evento</h1>
                </div>
                <div class="col-2">
                    <a class="btn btn-light float-right" href="{{route('evento.create')}}">Nuevo</a>
                </div>
            </div>
            @include('cPanel.evento.fragment.info')
            <table class="table table-hover c_black">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Hora inicio</th>
                    <th>Hora final</th>
                    <th colspan="3">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($evento as $ev)
                    <tr >
                        <td>{{ $ev ->nombre }}</td>
                        <td>{{ $ev ->descripcion }}</td>
                        <td>{{ $ev ->fecha }}</td>
                        <td>{{ $ev ->hora_inicio}}</td>
                        <td>{{ $ev ->hora_final }}</td>
                        <td>
                            <div class="btn-group btn-group-toggle" >
                                <a href="{{ route('evento.show', $ev->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                <a href="{{ route('evento.edit', $ev->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                                <a href="" data-target="#modal-delete-{{$ev->id}}" data-toggle="modal"><button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button></a>
                            </div>
                        </td>
                    </tr>              
                @include('cPanel.evento.modal')
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
