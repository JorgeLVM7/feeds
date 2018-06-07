<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('nombre','Nombre del evento: ') !!}
            {!! Form::text('nombre', null,['class'=>'form-control','maxlength'=>'65']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('descripcion','Descripción: ') !!}
            {!! Form::text('descripcion', null,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('fecha','Fecha: ') !!}
            <input name="fecha" id="datepicker" width="276" />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('hora_inicio','Hora de inicio: ') !!}
            <input name="hora_inicio" id="time_in" width="270" />
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('hora_final','Hora final: ') !!}
            <input name="hora_final" id="time_out" width="270" />
        </div>
    </div>
</div>

<br>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('path','Foto') !!}
            {!! Form::file('path') !!}
        </div>
    </div>
</div>

<br>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>