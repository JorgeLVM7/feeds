<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('categoria','Nombre de la categoría: ') !!}
            {!! Form::text('categoria', null,['class'=>'form-control','maxlength'=>'65']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>