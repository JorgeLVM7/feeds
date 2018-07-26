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