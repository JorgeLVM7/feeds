<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('nombre','Nombre de restaurante:') !!}
            <span class="required" aria-required="true">*</span>
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
            {!! Form::text('sitio_web', null,['class'=>'form-control', 'placeholder'=>'https://www.example.com']) !!}
        </div>

    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('idcategoria1','Categoría 1:  ') !!}
            <span class="required" aria-required="true">*</span>
            <select name="idcategoria1" class="form-control selectC">
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
            <select name="idcategoria2" class="form-control selectC">
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
            <select name="idcategoria3" class="form-control selectC">
            <option value="">Selecciona tu categoria</option>
                @foreach ($categorias as $ctg)
                        <option value="{{ $ctg->id }}">{{$ctg->categoria}}</option>
                @endforeach
            </select>
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
            <span class="required" aria-required="true">*</span>
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
            <span class="required" aria-required="true">*</span>
            {!! Form::text('colonia', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('codigo_postal','Código Postal: ') !!}
            <span class="required" aria-required="true">*</span>
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
            <span class="required" aria-required="true">*</span>
            {!! Form::text('telefono', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('RFC','RFC: ') !!}
            {!! Form::text('RFC', null,['class'=>'form-control', 'font style'=>'text-transform:uppercase;']) !!}
        </div>
    </div>

    <div class="col-md-5">

        <div class="form-group">
            <label for="horario">Horario</label>
            <span class="required" aria-required="true">*</span>
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
            {!! Form::label('hora1','Hora de apertura:') !!}
            <span class="required" aria-required="true">*</span>
            {!! Form::text('hora1', null,['id'=>'timepicker1', 'width'=>"260"]) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('hora2','Hora de cierre:') !!}
            <span class="required" aria-required="true">*</span>
            {!! Form::text('hora2', null,['id'=>'timepicker2', 'width'=>"260"]) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="path" class="custom-file-input" maxlength="50" id="inputGroupFile02"/>
                <label class="custom-file-label" for="inputGroupFile02">Elige tu imagen...</label>
            </div>
        </div>
    </div>
</div>

<div class="row c_black">
    <div class="col-md-12">
        <div class="form-group">
            <input id="autocomplete" type="text" placeholder=" Introduce una dirección" style="width: 100%; height:40px; border-radius:5px; border-color:gray;">
            <div id="map" style="widows: 100%; height:500px;"></div>
        </div>
    </div>
</div>

<input type="hidden" name="latitud" id="lat" value="">

<input type="hidden" name="longitud" id="lng" value="">

{{ Form::hidden('user_id',auth()->user()->id ) }}

<div class="form-group">
<input class="btn btn-primary" style="cursor: pointer" value="Guardar" type="submit" >
</div>

