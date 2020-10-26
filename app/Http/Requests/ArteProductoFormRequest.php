<?php

namespace sicaab\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArteProductoFormRequest extends FormRequest
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
            'nombre_producto' => 'required | max:120',
            'alto'            => 'required | max:20',
            'largo'           => 'required | max:20',
            'ancho'           => 'required',
            'imagen'          => 'required | mimes:jpeg,bmp,jpg,png,PNG',
            'estado'          => 'max:20',
            'id_cliente'      => 'required',
            'id_categoriaproducto'      => 'required',
        ];
    }
}
