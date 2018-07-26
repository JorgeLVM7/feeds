@extends('layouts.dashboard2')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-10">
             <h1 class="c_black">Editar perfil</h1>
         </div>
         <div class="col-2">
             <a class="btn btn-danger float-right" href="{{route('config.index')}}">Cancelar</a>
         </div>
         <div class="col-12">
             <hr>
         </div>
     </div>
     @include('cPanel.config.fragment.error')

     <div class="row">
         <div class="col-12 c_black">
             {{--<div class="row">--}}
             {!! Form::model($configuracion, ['route'=>['config.update',$configuracion->id], 'method'=> 'PUT','files'=>true]) !!}

             @include('cPanel.config.fragment.form')

             {!! Form::close() !!}
             {{--</div>--}}
         </div>
     </div>
 </div>

@endsection