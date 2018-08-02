<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=> 'required',
            'descripcion'=> 'required',
            'sitio_web' => 'active_url|nullable',
            'idcategoria1' => 'required',
            'idcategoria2' => 'nullable',
            'idcategoria3' => 'nullable',
            'email' => 'required|email',
            'calle' => 'required',
            'no_int' => 'numeric|nullable',
            'no_ext' => 'numeric|nullable',
            'colonia' => 'required',
            'codigo_postal' => 'numeric|required',
            'telefono' => 'numeric|required|min:7|max:9999999999',
            'RFC' => 'alpha_num|nullable',
            'path' => 'image|required|max:5120*5120*5',
            'horario' => 'required',
            'hora1' => 'date_format:"H:i"|required',
            'hora2' => 'date_format:"H:i"|required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'       =>'El campo Nombre del Restaurante es obligatorio',
            //'nombre.alpha_num'      =>'El campo Nombre solo acepta números y letras',
            'descripcion.required'  =>'El campo Descripción es obligatorio',
            'sitio_web.active_url'  =>'El campo Sitio web no tiene un formato válido',
            'idcategoria1.required' =>'El campo Categoría 1 es obligatorio',
            'email.required'        =>'El campo Correo Electrónico es obligatorio',
            'email.email'           =>'El campo Correo Electrónico no tiene un formato válido',
            'calle.required'        =>'El campo Calle es obligatorio',
            'no_int.numeric'        =>'El campo Número interior solo acepta números',
            'no_ext.numeric'        =>'El campo Número exterior solo acepta números',
            'colonia.required'      =>'El campo Colonia es obligatorio',
            'codigo_postal.required'=>'El campo Código Postal es obligatorio',
            'codigo_postal.numeric' =>'El campo Código Postal solo acepta números',            
            'telefono.required'     =>'El campo Teléfono es obligatorio',
            'telefono.numeric'      =>'El campo Teléfono solo acepta números',
            'telefono.max'          =>'El campo Teléfono excede el número de dígitos',
            'RFC.alpha_num'         =>'El campo RFC solo acepta números y letras',
            'horario.required'      =>'El campo Horario es obligatorio',
            'hora1.required'        =>'El campo Hora de apertura es obligatorio',
            'hora2.required'        =>'El campo Hora de cierre es obligatorio',
            'hora1.date_format'     =>'El campo Hora de apertura no corresponde con el formato HH:MM',
            'hora2.date_format'     =>'El campo Hora de cierre no corresponde con el formato HH:MM',
            'path.required'         =>'El campo Foto es obligatorio',
            'path.image'            =>'Solo acepta imagenes de tipo jpg, png y gif',
            'path.max'              =>'El máximo permitido es de 5 MB',

        ];
    }
}
