@extends('layouts.dashboard')


@section('content')
 <div class="page-header">
    <h2 class="c_white">Bienvenido a Feeds {{ Auth::user()->name }}</h2>
 </div>
@endsection