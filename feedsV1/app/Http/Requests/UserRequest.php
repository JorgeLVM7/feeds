<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'path' => 'image|mimes:jpg, png, bmp, jpeg'
        ];
    }
    public function messages()
    {
        return[
            'path.image' => 'Solo acepta imagenes de tipo jpg, png, bmp y jpeg',
        ];
    }
}
