@extends('layouts.dashboard2')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1 class="c_white">Restaurantes</h1>
                    <hr>
                </div>
                <div class="col-2">
                    <a class="btn btn-dark float-right" href="{{route('restaurantes.create')}}">Nuevo</a>
                </div>
            </div>
            @include('cPanel.restaurantes.fragment.info')

            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-around">
                        <div class="card-deck col-12">
                            @foreach($restaurantes as $restaurante)
                                <div class="col-md-3">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="/images/{{$restaurante->path}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $restaurante ->nombre }}</h5>
                                            <p class="card-text">{{ $restaurante ->descripcion }}</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">{{ $restaurante ->sitio_web }}</li>
                                            <li class="list-group-item">{{ $restaurante ->email}}</li>
                                            <li class="list-group-item">{{ $restaurante ->telefono }}</li>
                                        </ul>
                                        <div class="card-body">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('restaurantes.show', $restaurante->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>
                                                <a href="{{ route('restaurantes.edit', $restaurante->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>
                                                {{--<form class="btn-group btn-group-toggle" action="{{ route('restaurantes.destroy', $restaurante->id)}}" method="POST">--}}
{{--                                                    {{ csrf_field() }}--}}
                                                    {{--<input type="hidden" name="_method" value="DELETE">--}}
                                                    {{--<button class="btn btn-outline-danger" onclick="return confirm('¿Estas seguro que quieres eliminar {{$restaurante->nombre }} ?')" style="cursor: pointer;" type="submit">Borrar</button>--}}
                                                    <button  class="btn btn-outline-danger" role="button" data-toggle="modal" data-target="#delete" data-promid="{{$restaurante->id}}" aria-pressed="true">Borrar</button>
                                                {{--</form>--}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal conffirm delete --}}
                                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title text-center" id="exampleModalLongTitle">Borrar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form class="btn-group btn-group-toggle" action="{{ route('restaurantes.destroy','restaurantes')}}" method="POST">
                                                {{ csrf_field() }} {{method_field('delete')}}
                                                <div class="modal-body">
                                                    <p> ¿ Estás seguro que deseas borrar este restaurante ?</p>
                                                    <input type="hidden"  name="promo_id" id="prom_id" value="">
                                                </div>
                                                <div class="modal-footer bg-danger">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
                                                    <button class="btn btn-danger"  style="cursor: pointer;" type="submit">Si, Borrar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {!! $restaurantes->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $('#delete').on('show.modal',function (event) {
        var button = $(event.relatedTarget)
        var prom_id = button.data('promid')
        var modal = $(this)

        modal.find('.modal-body #prom_id').val(prom_id);


    })
</script>


@endsection