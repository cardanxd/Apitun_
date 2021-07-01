<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarClienteRequest extends FormRequest
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
            "rfc"=>"unique:clientes,rfc,".$this->route('cliente')->id,
            "email"=>"required|unique:clientes,email,".$this->route('cliente')->id,
            "calle"=>"required",
            "exterior"=>"required",
            "ecalle"=>"required",
            "colonia"=>"required",
            "ciudad"=>"required",
            "estado"=>"required",
            "pais"=>"required",
            "particular"=>"unique:clientes,particular,".$this->route('cliente')->id,
            "movil"=>"required|unique:clientes,movil,".$this->route('cliente')->id,
        ];
    }
}
