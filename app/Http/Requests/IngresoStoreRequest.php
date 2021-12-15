<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngresoStoreRequest extends FormRequest
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
            'no_ingreso' => 'required|unique:ingresos',
            'bodega_id' => 'required',
            'dependency_id' => 'required',
            'serie_factura'=>'required',
            'no_factura' => 'required',
            'fecha_factura' => 'required',
            'fecha_sistema' => 'required',
            'observaciones' => 'required'
        ];
    }
}
