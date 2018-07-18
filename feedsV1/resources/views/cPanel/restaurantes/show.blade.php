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
                        <label for="">Dirección: </label>

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
                        <h6>{{$restaurante->horario }} de 
                            {{$restaurante->hora1}} - {{$restaurante->hora2}} hrs</h6>
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
                <div class="row c_black">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div id="map" style="widows: 100%; height:500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            
            <input type="hidden" name="lat" id="lat" value="{{$restaurante->latitud}}">

            <input type="hidden" name="lng" id="lng" value="{{$restaurante->longitud}}">
        </div>

    </div>

    
@endsection
@section('script')
    <script src="{{asset('/js/viewmap.js')}}"></script>
@endsection