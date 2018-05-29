<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurantes extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'sitio_web', 'categoria', 'email', 'calle', 'no_int', 'no_ext', 'colonia', 'codigo_postal', 'referencia', 'telefono', 'horario'
    ];

    protected $hidden = [

    ];
}
