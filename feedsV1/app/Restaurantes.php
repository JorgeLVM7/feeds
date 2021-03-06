<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Restaurantes extends Model
{
    protected $table='restaurantes';

    protected $primaryKey='id';

    protected $fillable = [
        'nombre', 'descripcion', 'sitio_web', 'idcategoria1', 'email', 'calle', 'no_int', 'no_ext', 'colonia', 'codigo_postal', 'referencia', 'telefono', 'RFC','horario','latitud','longitud','user_id','path'
    ];

    protected $casts = [
        'horario' => 'array',
    ];

    public function setPathAttribute($path)
    {
        if(!empty($path)){
            $this->attributes['path']= Carbon::now()->second.$path->getClientOriginalName();
            $name = Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($path));
        }

    }
}
