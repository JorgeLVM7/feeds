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
                        <th>No.</th>
                        <th>Categoría</th>
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
                    @include('cPanel.categorias.modal')  
                    @endforeach
                    </tbody>
                </table>
                {!! $categorias->render() !!}

            </div>

            {{--DataTable de Restaurantes --}}
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-10">
                                <h4>Usuarios</h4>
                                <hr>
                            </div>
                            <div class="col-2">
                                <a class="btn btn-outline-dark float-right" href="{{route('usuarios.create')}}">Nuevo</a>
                            </div>
                        </div>
                        @include('cPanel.usuarios.fragment.info')
                        <table class="table table-hover ">
                            <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th>Role</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td><img src="/images/{{$usuario->path}}" alt="" height="40px" widht="40px"></td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->role}}</td>
                                    <td>
                                        <div class="btn-group btn-group-toggle" >
                                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                                            <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button></a>
                                        </div>
                                    </td>
                                </tr>
                                @include('cPanel.usuarios.modal')
                            @endforeach
                            </tbody>
                        </table>
                        {!! $usuarios->render() !!}
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            {{--DataTable de Restaurantes --}}
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-outline-dark float-right" href="{{route('restaurantes.create')}}">Nuevo</a>

                    </div>
                </div>
                <table id="table_id2" class="display table table-hover table-bordered table-stripped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Foto</th>
                        <th>Restaurantes</th>
                        <th>Teléfono</th>
                        <th>Horario</th>
                        <th>Dueño</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach( $restaurantes  as $restaurante)

                        <tr>
                            <td>{{ $restaurante->id }}</td>
                            <td><img src="/images/{{$restaurante->path}}" alt="" height=40px width="40px"></td>
                            <td>{{$restaurante->nombre}}</td>
                            <td>{{$restaurante->telefono}}</td>
                            <td>{{$restaurante->horario}} de {{$restaurante->hora1}} a {{$restaurante->hora2}} hrs</td>
                            <td>{{$restaurante->usuario}}</td>
                            <td>
                                <a href="{{ route('restaurantes.edit', $restaurante->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>
                                <a href="" data-target="#modal-delete-{{$restaurante->id}}"  data-toggle="modal">
                                    <button class="btn btn-outline-danger"  style="cursor: pointer;" type="submit">Borrar</button>
                                </a>
                            </td>
                        </tr>
                        @include('cPanel.restaurantes.modal')
                    @endforeach
                    </tbody>
                </table>
                {!! $restaurantes->render() !!}

            </div>
        </div>


    </div>
@stop