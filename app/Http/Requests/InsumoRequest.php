<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsumoRequest extends FormRequest
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
            'codigo_sicoin' => 'required|numeric|unique:insumos',
            'nombre' => 'required|unique:insumos',
            'descripcion' => 'required',
            'subcategory_id' => 'required|numeric',
            'presentation_id' => 'required|numeric'
        ];
    }
}