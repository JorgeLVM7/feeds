@extends('layouts.dashboard2')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Administrador de Sitio</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-outline-dark float-right" href="{{route('categorias.create')}}">Nuevo</a>

                    </div>
                </div>
                <table id="table_id" class="display table table-hover table-bordered table-stripped">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach( $categorias  as $categoria)

                        <tr>
                            <td>{{ $categoria ->id }}</td>
                            <td>{{ $categoria ->categoria }}</td>
                            <td>
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>
                                <a href="" data-target="#modal-delete-{{$categoria->id}}"  data-toggle="modal">
                                    <button class="btn btn-outline-danger"  style="cursor: pointer;" type="submit">Borrar</button>
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                {!! $categorias->render() !!}

            </div>
            <div class="col-6">
                <h4>Lo que quieras poner </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h4>Usuarios</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{--Inserta tu codigo aqui pansho --}}
            </div>
        </div>
    </div>
@stop