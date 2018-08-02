<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasRequest extends FormRequest
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
        'categoria' => 'required|unique:categorias',

        ];
    }

    public function messages()
    {
        return[
            'categoria.required' => 'El campo Nombre de categoría es obligatorio',
            'categoria.unique' => 'Esta categoría ya existe',
        ];
    }
}
