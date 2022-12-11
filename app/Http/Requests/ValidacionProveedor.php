<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionProveedor extends FormRequest
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
            'nombre' => 'required|alpha_spaces',
            'celular_proveedor' => 'required|numeric',
            'producto_venta' => 'required|alpha_spaces',
            'precio_producto' => 'required|numeric',
            'ciudad_proveedor' => 'required|alpha_spaces',
            'observacion' => 'required|alpha_spaces',
            
    ];
    }
    public function messages()
    {
        return[
            /* Validacion campo NOMBRE PROVEEDOR */
             'nombre.required' => 'El campo nombre de proveedor es requerido. No puede estar vacio.' ,
             'nombre.alpha_spaces' => 'El campo nombre de proveedor solo puede contener letras.' ,
              /* Validacion campo NUMERO CELULAR */
              'celular_proveedor.required' => 'El campo numero celular  es requerido. No puede estar vacio.' ,
              'celular_proveedor.numeric' => 'El campo numero celular solo puede contener numeros.' ,
              /* Validacion campo  PRODUCTO VENTA */
             'producto_venta.required' => 'El campo producto venta es requerido. No puede estar vacio.' ,
             'producto_venta.alpha_spaces' => 'El campo producto venta solo puede contener letras.' ,
               /* Validacion campo PRECIO PRODU */
               'precio_producto.required' => 'El campo precio producto  es requerido. No puede estar vacio.' ,
               'precio_producto.numeric' => 'El campo precio producto solo puede contener numeros.' ,
               /* Validacion campo CIUDAD PROVEEDOR */
             'ciudad_proveedor.required' => 'El campo cargo ciudad  es requerido. No puede estar vacio.' ,
             'ciudad_proveedor.alpha_spaces' => 'El campo cargo ciudad  solo puede contener letras.' ,
              /* Validacion campo OBSERVACIONES */
              'observacion.required' => 'El campo cargo observacion  es requerido. No puede estar vacio.' ,
              'observacion.alpha_spaces' => 'El campo cargo observacion  solo puede contener letras.' ,
     
        ];
    }
}