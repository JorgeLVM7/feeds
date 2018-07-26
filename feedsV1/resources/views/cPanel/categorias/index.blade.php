@extends('layouts.dashboard2')

@section('content')
    <div class="row">
      <div class="col-12">
          <div class="row">
              <div class="col-10">
                  <h1>Categorias</h1>
                  <hr>
              </div>
              <div class="col-2">
                  <a class="btn btn-outline-dark float-right" href="{{route('categorias.create')}}">Nuevo</a>
              </div>
          </div>
          @include('cPanel.categorias.fragment.info')
          <table class="table table-hover ">
              <thead>
                <tr>
                    <th>Nombre de la categoría</th>
                    <th colspan="2">Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($categorias as $cat)
                      <td>{{ $cat ->categoria }}</td>
                      <td>
                        <div class="btn-group btn-group-toggle" >
                          <a href="{{ route('categorias.edit', $cat->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>
                          <a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal"><button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button></a>
                        </div>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
          {!! $categorias->render() !!}
      </div>
  </div>
@endsection