@extends('layouts.dashboard2')

@section('content')
    <div class="row">
      <div class="col-12">
          <div class="row">
              <div class="col-10">
                  <h1>Usuarios</h1>
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
                      <td><img src="/images/{{$usuario->path}}" alt=""></td>
                      <td>{{ $usuario->name }}</td>
                      <td>{{ $usuario->email}}</td>
                      <td>{{ $usuario->roles_id_role}}</td>
                      <td>
                        <div class="btn-group btn-group-toggle" >
                          <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>
                          
                          <a href="" data-target="#modalUs-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button></a>
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
@endsection