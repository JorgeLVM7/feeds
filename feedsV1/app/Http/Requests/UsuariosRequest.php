<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password'=>'required|min:8|confirmed',
            'path' =>'required',
            'roles_id_role' =>'required'
        ];


    }

    public function messages()
    {
        return[
            'name.required' => 'El campo Nombre es obligatorio',
            'email.alpha' => 'El campo Correo electrónico es obligatorio',
            'email.unique' => 'Este correo ya existe',
            'password' => 'El campo Contraseña es obligatorio',
            'password.confirmed' => 'Confirme su contraseña',
            'path.required' => 'El campo Foto es obligatorio',
            'roles_id_role' => 'Asigne un rol al usuario',
        ];
    }
}
