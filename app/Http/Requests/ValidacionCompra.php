<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCompra extends FormRequest
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
            'nombre_producto' => 'required|alpha_spaces',
            'precio_producto' => 'required|numeric',
            'cantidad_producto' => 'required|numeric',
            'catalogo_producto' => 'required|alpha_spaces',
            'fecha_compra' => 'required',
            
    ];
    }
    public function messages()
    {
        return[
            /* Validacion campo NOMBRE PRODUCTO */
             'nombre_producto.required' => 'El campo nombre_producto  es requerido. No puede estar vacio.' ,
             'nombre_producto.alpha_spaces' => 'El campo nombre_producto  solo puede contener letras.' ,
             /* Validacion campo PRECIO PRODUCTO */
              'precio_producto.required' => 'El campo precio producto  es requerido. No puede estar vacio.' ,
              'precio_producto.numeric' => 'El campo precio producto solo puede contener numeros.' ,
               /* Validacion campo CANTIDAD PRODUCTO */
               ' cantidad_producto.required' => 'El campo  cantidad producto  es requerido. No puede estar vacio.' ,
               ' cantidad_producto.numeric' => 'El campo  cantidad producto solo puede contener numeros.' ,
               /* Validacion campo TIPO PAGO */
             'catalogo_producto.required' => 'El campo catalogo producto es requerido. No puede estar vacio.' ,
             'catalogo_producto.alpha' => 'El campo catalogo producto solo puede contener letras.' ,
              /* Validacion campo FECHA COMPRA */
              'fecha_compra.required' => 'El campo fecha de compra es requerido. No puede estar vacio.' ,
              
        ];
    }
}
