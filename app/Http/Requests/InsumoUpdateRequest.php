<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsumoUpdateRequest extends FormRequest
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
            'codigo_sicoin' => 'required|numeric',
            'nombre' => 'required',
            'descripcion' => 'required',
            'subcategory_id' => 'required|numeric',
            'presentation_id' => 'required|numeric'
        ];
    }
}
