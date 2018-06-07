@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Promoción</h1>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('promocion.create')}}">Nuevo</a>
                </div>
            </div>
            @include('cPanel.promocion.fragment.info')
            <table class="table table-hover ">
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
                @foreach($promocion as $promo)
                    <tr >
                        <td>{{ $promo ->nombre }}</td>
                        <td>{{ $promo ->descripcion }}</td>
                        <td>{{ $promo ->fecha }}</td>
                        <td>{{ $promo ->hora_inicio}}</td>
                        <td>{{ $promo ->hora_final }}</td>
                        <td>
                            <div class="btn-group btn-group-toggle" >
                                <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                <a href="#" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                                <form class="btn-group btn-group-toggle" action="#" method="POST">
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
        </div>
    </div>

@endsection