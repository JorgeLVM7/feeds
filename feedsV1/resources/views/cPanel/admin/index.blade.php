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
                        <th>Foto<th>
                        <th>Nombre</th>
                        <th>Correo electrónico</th>
                        <th>Role</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <td><img src="" alt=""></td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email}}</td>
                    <td>{{ $usuario->roles_id_role}}</td>
                    <td>
                        <div class="btn-group btn-group-toggle" >
                            <a href="{{ route('cPanel.usuarios.edit', $usuario->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>
                          
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
@stop