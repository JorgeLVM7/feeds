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
<div class="form-group">
    {!! Form::label('sitio_web','Sitio web: ') !!}
    {!! Form::text('sitio_web', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('categoria','Categoría ') !!}
    {!! Form::select('categoria',['Pizzeria'=>'Pizzeria',
                                'Food Truck'=>'Food Truck',
                                'Comida economica' => 'Comida economica',
                                'Bar & Snack'=>'Bar & Snack',
                                'Mariscos'=>'Mariscos']
                                , null,['class'=>'form-control']
) !!}

</div>
<div class="form-group">
    {!! Form::label('email','Correo electrónico: ') !!}
    {!! Form::text('email', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('calle','Calle: ') !!}
    {!! Form::text('calle', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('no_int','Número interior: ') !!}
    {!! Form::text('no_int', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('no_ext','Número exterior: ') !!}
    {!! Form::text('no_ext', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('colonia','Colonia: ') !!}
    {!! Form::text('colonia', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('codigo_postal','Código Postal: ') !!}
    {!! Form::text('codigo_postal', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('referencia','Referencia: ') !!}
    {!! Form::text('referencia', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('telofono','Teléfono: ') !!}
    {!! Form::text('telefono', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('horario','Día: ') !!}
    
            
</div>
<div class="form-group">
    {!! Form::label('RFC','RFC: ') !!}
    {!! Form::text('RFC', null,['class'=>'form-control']) !!}
</div>
{{--<div class="form-group">--}}
    {{--{!! Form::label('foto','Foto') !!}--}}
    {{--{!! Form::file('path') !!}--}}
{{--</div>--}}


{{ Form::hidden('user_id',auth()->user()->id ) }}

<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

</div>

