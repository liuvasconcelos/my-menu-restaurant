<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'login' => 'required',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Favor informar um login válido.',
            'password.required' => 'Favor informar senha.',
            'password.min' => 'Senha deve ter pelo menos 6 caracteres'
        ];
    }
}
