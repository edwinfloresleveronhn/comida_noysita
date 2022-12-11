<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionPlatillo extends FormRequest
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
            'nombre_platillo' => 'required|alpha_spaces',
            'precio_platillo' => 'required|numeric',
            'receta_platillo' => 'required|alpha_spaces',
            
    ];
    }
    public function messages()
    {
        return[
            /* Validacion campo NOMBRE PLATILLO */
             'nombre_platillo.required' => 'El campo nombre platillo  es requerido. No puede estar vacio.' ,
             'nombre_platillo.alpha_spaces' => 'El campo nombre platillo  solo puede contener letras.' ,
            /* Validacion campo PRECIO PLATILLO */
            'precio_platillo.required' => 'El campo precio platillo  es requerido. No puede estar vacio.' ,
            'precio_platillo.numeric' => 'El campo precio platillo solo puede contener numeros.' ,
            /* Validacion campo RECETA PLATILLO */
            'receta_platillo.required' => 'El campo receta platillo  es requerido. No puede estar vacio.' ,
            'receta_platillo.alpha_spaces' => 'El campo receta platillo  solo puede contener letras.' ,
        ];
    }
}
