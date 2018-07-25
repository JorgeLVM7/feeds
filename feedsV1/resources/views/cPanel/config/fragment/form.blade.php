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

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('path','Foto') !!}
            {!! Form::file('path') !!}
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}    
</div>