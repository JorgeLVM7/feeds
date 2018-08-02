<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
        'nombre' => 'required',
        'descripcion' => 'required',
        'fecha' => 'date|required',
        'hora_inicio' => 'date_format:"H:i"|required',
        'hora_final' => 'date_format:"H:i"|required',
        'path' => 'required|image|max:5120*5120*5',
        'rest_id' =>'required',
        ];
    }

    public function messages()
    {
        return[
            'nombre.required' => 'El campo Nombre es obligatorio',

            'descripcion.required'  =>'El campo Descripción es obligatorio',
            'fecha.required'  =>'El campo Fecha es obligatorio',
            'hora_inicio.required'  =>'El campo Hora de inicio es obligatorio',
            'hora_final.required'  =>'El campo Hora final es obligatorio',
            'path.required'  =>'El campo Foto es obligatorio',
            'path.image'   =>'Solo acepta imagenes de tipo jpg, png y gif',
            'path.max'  =>'El máximo permitido es de 5 MB',
            'fecha.date' => 'El campo Fecha no corresponde con un formato válido',
            'hora_inicio.date_format'   =>'El campo Hora de inicio no corresponde con el formato HH:MM',
            'hora_final.date_format'   =>'El campo Hora final no corresponde con el formato HH:MM',
            'rest_id.required'  =>'Debe tener o agregar un restaurante para crear el evento',
        ];
    }
}
