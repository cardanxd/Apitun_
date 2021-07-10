<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarVehiculoRequest extends FormRequest
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
            "cliente_id"=>"required",
            "equipo"=>"required",
            "marca"=>"required",
            "modelo"=>"required",
            "serie"=>"required|unique:vehiculos,serie",
            "economico"=>"required|unique:vehiculos,economico",
            "placa"=>"required|unique:vehiculos,placa"
        ];
    }
}
