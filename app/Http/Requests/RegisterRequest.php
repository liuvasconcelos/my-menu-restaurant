<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'  => 'required',
            'price' => 'required|numeric',
            'image' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Favor informar nome do produto',
            'price.required' => 'Favor informar preço',
            'price.numeric'  => 'Preço inválido',
            'image.image'    => 'Arquivo selecionado deve ser uma imagem'
        ];
    }
}
