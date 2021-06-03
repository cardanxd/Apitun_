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
            "razon"=>"unique:clientes,razon",
            "rfc"=>"unique:clientes,rfc",
            "email"=>"required|unique:clientes,email",
            "calle"=>"required",
            "exterior"=>"required",
            "ecalle"=>"required",
            "colonia"=>"required",
            "ciudad"=>"required",
            "estado"=>"required",
            "pais"=>"required",
            "particular"=>"unique:clientes,particular",
            "movil"=>"required|unique:clientes,movil",
        ];
    }
}
