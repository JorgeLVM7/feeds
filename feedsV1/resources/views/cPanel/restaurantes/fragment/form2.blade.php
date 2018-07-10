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
            <select name="idcategoria1" class="form-control">
                <option value="">Selecciona tu categoria</option>
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
            <select name="idcategoria2" class="form-control">
                <option value="">Selecciona tu categoria</option>
                @foreach ($categorias as $cat)
                    <option value="{{ $cat->id }}">{{$cat->categoria}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('categoria','Categoría 3: ') !!}
            <select name="idcategoria3" class="form-control">
                <option value="">Selecciona tu categoria</option>
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
                <option value="Miércoles">Miércoles</option>
                <option value="Sábado">Sábado</option>
            </select>





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
            <div id="map" style="widows: 100%; height:500px;"></div>
        </div>
    </div>
</div>

<input type="hidden" name="latitud" id="lat" value="0">

<input type="hidden" name="longitud" id="lng" value="0">


{{ Form::hidden('user_id',auth()->user()->id ) }}

<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>

