<?php

namespace sicaab\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialFormRequest extends FormRequest
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

            // Campos requeridos en el formulario

            'nombre_material'      => 'required | max:120',
            'unidad_medida'        => 'required | max:20',
            'stock'                => 'required | max:11',
            'id_categoriamaterial' => 'required'
        ];
    }
}
