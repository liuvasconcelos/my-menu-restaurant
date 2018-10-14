<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'phone' => 'required|numeric',
            'date'  => 'required|date',
            'obs'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Favor informar o nome do cliente',
            'phone.required' => 'Favor informar o telefone do cliente',
            'date.required'  => 'Favor selecionar uma data',
            'obs.required'   => 'Favor preencher o campo Observações',
            'phone.numeric'  => 'Favor informar um telefone válido'
        ];
    }
}
