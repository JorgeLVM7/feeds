@extends('layouts.dashboard2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1>Vista previa </h1>

            </div>
            <div class="col-3">
                <div class="btn-group" role="group">
                    <a class="btn btn-warning float-right" href="{{route('restaurantes.edit',$restaurante->id)}}">Editar</a>

                    <a class="btn btn-danger float-right" href="{{route('restaurantes.index')}}">Cancelar</a>


                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img class="card-img" src="/images/{{$restaurante->path}}" alt="Card image">
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <label for="">Restaurante:  </label>
                        <h1>{{$restaurante->nombre}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="">Descripción: </label>

                        <h6>{{$restaurante->descripcion}}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="">Descripción: </label>

                        <h6>Calle {{$restaurante->calle}}, 
                            {{$restaurante->no_int}}
                            {{$restaurante->no_ext}}
                            Col. {{$restaurante->colonia}},
                            Entre {{$restaurante->referencia }}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="">Código Postal: </label>
                        <h6>{{$restaurante->codigo_postal}}</h6>
                    </div>
                    <div class="col-4">
                        <label for="">Teléfono: </label>
                        <h6>{{$restaurante->codigo_postal}}</h6>
                    </div>
                    <div class="col-4">
                        <label for="">RFC: </label>
                        <h6>{{$restaurante->RFC}}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Correo Electrónico</label>
                        <h6>{{$restaurante->email}}</h6>
                    </div>
                    <div class="col-6">
                        <label for="">Horario</label>
                        <h6>{{$restaurante->horario }}</h6>
                    </div>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for=""> Ubicación: </label>

            </div>
        </div>

    </div>
@endsection