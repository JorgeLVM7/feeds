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

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('fecha','Fecha: ') !!}
            {!! Form::text('fecha', null,['id'=>'datepicker', 'width'=>"276"]) !!}
            <!-- <input name="fecha" id="datepicker" width="276" />-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('hora_inicio','Hora de inicio: ') !!}
            {!! Form::text('hora_inicio', null,['id'=>'time_in', 'width'=>"270"]) !!}
            <!--<input name="hora_inicio" id="time_in" width="270" />-->
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('hora_final','Hora final: ') !!}
            {!! Form::text('hora_final', null,['id'=>'time_out', 'width'=>"270"]) !!}
            <!--<input name="hora_final" id="time_out" width="270" />-->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('rest_id','Restaurante: ') !!}
            <select name="rest_id" class="form-control selectC">
                <option></option>
                @foreach ($restaurantes as $restaurante)
                    <option value="{{ $restaurante->id }}">{{$restaurante->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
    <br>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" name="path" class="custom-file-input" maxlength="50" id="inputGroupFile02"/>
                    <label class="custom-file-label" for="inputGroupFile02">Elige tu imagen...</label>
                </div>
            </div>
        </div>
    </div>
</div>


{{ Form::hidden('user_id',auth()->user()->id ) }}


<br>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>