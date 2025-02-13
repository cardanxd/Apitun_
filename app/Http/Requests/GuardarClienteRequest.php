<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarClienteRequest extends FormRequest
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
            "nombre"=>"required",
            "rfc"=>"unique:clientes,rfc",
            "email"=>"required|unique:clientes,email",
            "particular"=>"required|unique:clientes,particular",
            "movil"=>"unique:clientes,movil"
        ];
    }
}
