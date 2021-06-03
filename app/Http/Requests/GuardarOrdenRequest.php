<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarOrdenRequest extends FormRequest
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
            "fecha"=>"required",
            "vendedor"=>"required",
            "cilindros"=>"required",
            "condicionventa"=>"required",
            "urgenciainicial"=>"required",
            "centrocosto"=>"required",
            "placa"=>"required",
            "ceniceros"=>"required",
            "cristales_rotos"=>"required",
            "quemacocos"=>"required",
            "espejo_izq"=>"required",
            "espejo_der"=>"required",
            "tapon"=>"required",
            "antena"=>"required",
            "tapetes"=>"required",
            "varilla"=>"required",
            "radio"=>"required",
            "espejo_int"=>"required",
            "gato"=>"required",
            "extinguidor"=>"required",
            "emblemas"=>"required",
            "encendedor"=>"required",
            "llanta"=>"required",
            "km"=>"required",
            "combustible"=>"required",
            "transmision"=>"required",
            "vestiduras"=>"required",
        ];
    }
}
