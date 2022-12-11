<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionInventario extends FormRequest
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
            'categoria_producto' => 'required|alpha_spaces',
            'fecha_vencimiento' => 'required',
            'maximo_producto' => 'required|numeric',
            'minimo_producto' => 'required|numeric',
    ];
    }
    public function messages()
    {
        return[
            /* Validacion campo NOMBRE PRODUCTO */
             'nombre_producto.required' => 'El campo nombre producto  es requerido. No puede estar vacio.' ,
             'nombre_producto.alpha_spaces' => 'El campo nombre producto  solo puede contener letras.' ,
             /* Validacion campo PRECIO PRODUCTO */
              'precio_producto.required' => 'El campo precio producto  es requerido. No puede estar vacio.' ,
              'precio_producto.numeric' => 'El campo precio producto solo puede contener numeros.' ,
               /* Validacion campo CANTIDAD PRODUCTO */
               ' cantidad_producto.required' => 'El campo  cantidad producto  es requerido. No puede estar vacio.' ,
               ' cantidad_producto.numeric' => 'El campo  cantidad producto solo puede contener numeros.' ,
               /* Validacion campo CATEGORIA PRODUCTO */
             'categoria_producto.required' => 'El campo categoria producto  es requerido. No puede estar vacio.' ,
             'categoria_producto.alpha_spaces' => 'El campo categoria producto  solo puede contener letras.' ,
              /* Validacion campo FECHA COMPRA */
              'fecha_compra.required' => 'El campo fecha de compra es requerido. No puede estar vacio.' ,
               /* Validacion campo MAXIMO PRODUCTO */
               ' ,maximo_prodcuto.required' => 'El campo  maiximo producto  es requerido. No puede estar vacio.' ,
               ' maximo_producto.numeric' => 'El campo maximo producto solo puede contener numeros.' ,
                /* Validacion campo MINIMO PRODUCTO */
                ' ,minimo_prodcuto.required' => 'El campo  maiximo producto  es requerido. No puede estar vacio.' ,
                ' minimo_producto.numeric' => 'El campo maximo producto solo puede contener numeros.' ,
        ];
    }
}
