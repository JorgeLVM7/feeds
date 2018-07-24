<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('nombre','Nombre de restaurante: ') !!}
            {!! Form::text('nombre', null,['class'=>'form-control','maxlength'=>'65']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('descripcion','Descripción: ') !!}
            {!! Form::text('descripcion', null,['class'=>'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('sitio_web','Sitio web: ') !!}
            {!! Form::text('sitio_web', null,['class'=>'form-control']) !!}
        </div>

    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('idcategoria1','Categoría 1:  ') !!}
            <select name="idcategoria1" class="form-control selectE">
                <option></option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{$categoria->categoria}}</option>
                @endforeach
            </select>
        </div>
    </div>
    {{--</div>--}}

    {{--<div class="row">--}}
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('idcategoria2','Categoría 2: ') !!}
            <select name="idcategoria2" class="form-control selectE">
                <option></option>
                @foreach ($categorias as $cat)
                    <option value="{{ $cat->id }}">{{$cat->categoria}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('categoria','Categoría 3: ') !!}
            <select name="idcategoria3" class="form-control selectE">
                <option></option>
                @foreach ($categorias as $ctg)
                    <option value="{{ $ctg->id }}">{{$ctg->categoria}}</option>
                @endforeach
            </select>

            {{--{!! Form::label('idcategoria3','Calle: ') !!}--}}
            {{--{!! Form::text('idcategoria3', null,['class'=>'form-control']) !!}--}}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('email','Correo electrónico: ') !!}
            {!! Form::text('email', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('calle','Calle: ') !!}
            {!! Form::text('calle', null,['class'=>'form-control']) !!}
        </div>
    </div>
    {{--</div>--}}
    {{--<div class="row">--}}
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('no_int','Número interior: ') !!}
            {!! Form::text('no_int', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('no_ext','Número exterior: ') !!}
            {!! Form::text('no_ext', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('colonia','Colonia: ') !!}
            {!! Form::text('colonia', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('codigo_postal','Código Postal: ') !!}
            {!! Form::text('codigo_postal', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('referencia','Referencia: ') !!}
            {!! Form::text('referencia', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('telofono','Teléfono: ') !!}
            {!! Form::text('telefono', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('RFC','RFC: ') !!}
            {!! Form::text('RFC', null,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="col-md-5">

       <div class="form-group">
            <label for="horario">Horario</label>
            <select class="form-control select2" name="horario[]" id="horario" multiple="multiple" style="width: 100%">
                <option value="L">Lunes</option>
                <option value="Ma">Martes</option>
                <option value="Mi">Miércoles</option>
                <option value="J">Jueves</option>
                <option value="V">Viernes</option>
                <option value="S">Sábado</option>
                <option value="D">Domingo</option>
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('hora1','hora de apertura:') !!}
            {!! Form::text('hora1', null,['id'=>'timepicker1', 'width'=>"260"]) !!}
            <!--<input name="hora1" id="timepicker1" width="260" />-->
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('hora2','hora de clausura:') !!}
            {!! Form::text('hora2', null,['id'=>'timepicker2', 'width'=>"260"]) !!}
            <!--<input name="hora2" id="timepicker2" width="260" />-->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('path','Foto') !!}
            {!! Form::file('path') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <input id="autocomplete" type="text" placeholder=" Introduce una dirección" style="width: 100%; height:40px; border-radius:5px; border-color:gray;"><br>
            <div id="map" style="widows: 100%; height:500px;"></div>
        </div>
    </div>
</div>

<!--{!! Form::label('latitud','latitud ') !!}-->
{!! Form::hidden('latitud', null,['class'=>'form-control', 'id'=>'lat']) !!}

<!--{!! Form::label('longitud','longitud ') !!}-->
{!! Form::hidden('longitud', null,['class'=>'form-control', 'id'=>'lng']) !!}


{{ Form::hidden('user_id',auth()->user()->id ) }}

<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>

