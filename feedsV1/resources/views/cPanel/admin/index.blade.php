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
            {{--<div class="col-6">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-10">--}}
                        {{--<h4>Categorías</h4>--}}
                    {{--</div>--}}
                    {{--<div class="col-2">--}}
                        {{--<a class="btn btn-outline-dark float-right" href="{{route('categorias.create')}}">Nuevo</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-12">--}}
                        {{--@include('cPanel.categorias.fragment.error')--}}

                        {{--@include('cPanel.categorias.fragment.info')--}}
                        {{--<table class="table table-hover ">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>Nombre de la categoría</th>--}}
                                {{--<th colspan="2">Acciones</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach($categorias as $cat)--}}
                                {{--<td>{{ $cat ->categoria }}</td>--}}
                                {{--<td>--}}
                                    {{--<a href="{{ route('categorias.edit', $cat->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>--}}
                                    {{--<a href="" data-target="#modal-delete-{{$cat->id}}"  data-toggle="modal">--}}
                                        {{--<button class="btn btn-outline-danger"  style="cursor: pointer;" type="submit">Borrar</button>--}}
                                    {{--</a>--}}
                                {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                        {{--{!! $categorias->render() !!}--}}

                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

            <div class="col-6">
                <table id="table_id" class="display table table-hover table-bordered table-stripped">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach( $categorias  as $categoria)

                        <tr>
                            <td>{{ $categoria ->id }}</td>
                            <td>{{ $categoria ->categoria }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
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