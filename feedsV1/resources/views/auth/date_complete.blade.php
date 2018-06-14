@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default bg-t">
                <div class="panel-heading title">Registro</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/complete/'.$id) }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label tx">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control es" name="password" minlength="8" maxlength="20" required pattern="[A-Za-z0-9]+">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label tx">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control es" name="password_confirmation" minlength="8" maxlength="20" required pattern="[A-Za-z0-9]+">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary es">
                                    Confirmar datos
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection