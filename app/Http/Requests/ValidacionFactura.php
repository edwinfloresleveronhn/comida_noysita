<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionFactura extends FormRequest
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
            'numero_factura' => 'required|numeric',
            'nombre_cliente' => 'required|alpha_spaces',
            'rtn' => 'required|numeric',
            'fecha_facturacion' => 'required',
            'cai' => 'required',
            'platillo' => 'required|alpha_spaces',
            'cantidad_platillo' => 'required|numeric',
            'precio' => 'required|numeric',
            'iva' => 'required|numeric',
            'total_factura' => 'required|numeric',
    ];
    }
    public function messages()
    {
        return[
         
              /* Validacion campo NUMERO FACTURA */
              'numero_factura.required' => 'El campo numero factura  es requerido. No puede estar vacio.' ,
              'numero_factura.numeric' => 'El campo numero factura solo puede contener numeros.' ,
            /* Validacion campo NOMBRE cliente */
             'nombre_cliente.required' => 'El campo nombre cliente  es requerido. No puede estar vacio.' ,
             'nombre_cliente.alpha_spaces' => 'El campo nombre cliente solo puede contener letras.' ,
             /* Validacion campo RTN */
              'rtn.required' => 'El campo rtn  es requerido. No puede estar vacio.' ,
              'rtn.numeric' => 'El campo rtn solo puede contener numeros.' ,
             /* Validacion campo FECHA FACTURA */
                'fecha_facturacion.required' => 'El campo fecha de factura es requerido. No puede estar vacio.' ,
               /* Validacion campo CAI */
               'cai.required' => 'El campo  cai  es requerido. No puede estar vacio.' ,
                
              /* Validacion campo PLATILLO */
              'platillo.required' => 'El campo platillo  es requerido. No puede estar vacio.' ,
              'platillo.alpha_spaces' => 'El campo platillo solo puede contener letras.' ,
                /* Validacion campo CANTIDAD PLATILLO */
                ' ,cantidad_platillo.required' => 'El campo  cantidad platillo  es requerido. No puede estar vacio.' ,
                ' cantidad_platillo.numeric' => 'El campo cantidad platillo solo puede contener numeros.' ,
                /* Validacion campo PRECIO */
              'precio.required' => 'El campo precio  es requerido. No puede estar vacio.' ,
              'precio.numeric' => 'El campo precio solo puede contener numeros.' ,
              /* Validacion campo IVA */
              'iva.required' => 'El campo iva  es requerido. No puede estar vacio.' ,
              'iva.numeric' => 'El campo iva solo puede contener numeros.' ,
              /* Validacion campo TOTAL */
              'total_factura.required' => 'El campo total factura  es requerido. No puede estar vacio.' ,
              'total_factura.numeric' => 'El campo total factura solo puede contener numeros.' ,
        ];
    }
}
