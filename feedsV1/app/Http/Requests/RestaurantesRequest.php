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
            'sitio_web'=> 'required',
            'idcategoria1' => 'required',
            'email' => 'required',
            'calle' => 'required',
            'no_int' => 'required',
            'no_ext' => 'required',
            'colonia' => 'required',
            'codigo_postal' => 'required',
            'telefono' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'       =>'El campo Nombre del Restauarante es obligatorio',
            'descripcion.required'  =>'El campo Descripción es obligatorio',
            'sitio_web.required'    =>'El campo Sitio Web es obligatorio',
            'idcategoria1.required' =>'El campo Categoría 1 es obligatorio',
            'email.required'        =>'El campo Correo Electrónico es obligatorio',
            'calle.required'        =>'El campo Calle es obligatorio',
            'no_int.required'       =>'El campo Número interior es obligatorio',
            'no_ext.required'       =>'El campo Número exterior es obligatorio',
            'colonia.required'      =>'El campo Colonia es obligatorio',
            'codigo_postal.required'=>'El campo Código Postal es obligatorio',
            'telefono.required'     =>'El campo Teléfono es obligatorio',
        ];
    }
}
