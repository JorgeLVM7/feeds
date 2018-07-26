<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nombre', 'required'])!!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email',null,['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
        </div>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-6 control-label tx">Contraseña</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" minlength="8" maxlength="20" required pattern="[A-Za-z0-9]+">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>
    </div>

    <div class="form-group">
        <label for="password-confirm" class="col-md-6 control-label tx">Confirmar Contraseña</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="8" maxlength="20" required pattern="[A-Za-z0-9]+">
        </div>
    </div>

     <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('roles_id_role','Role: ') !!}
            <select name="roles_id_role" class="form-control">
                <option></option>
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}">{{$rol->roles}}</option>
                @endforeach
            </select>
        </div>
    </div>



    <div class="col-md-6">
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="path" class="custom-file-input" maxlength="50" id="inputGroupFile02"/>
                <label class="custom-file-label" for="inputGroupFile02">Elige tu imagen...</label>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}    
</div>