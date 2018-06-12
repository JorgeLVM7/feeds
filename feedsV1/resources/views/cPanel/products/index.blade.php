@extends('layouts.dashboard')


@section('content')
 <div class="page-header">
    <h2>Bienvenido a Feeds {{ Auth::user()->name }}</h2>
 </div>
@endsection