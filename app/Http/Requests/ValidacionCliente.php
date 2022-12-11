<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCliente extends FormRequest
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
            'identidad' => 'required|numeric',
            'rtn' => 'required|numeric',
            'tipo_pago' => 'required|alpha_spaces',
            'ingreso_cliente' => 'required',
            'direccion' => 'required|regex:/^[\w\-\s]+$/'
            
    ];
    }
    public function messages()
    {
        return[
            /* Validacion campo NOMBRE CLIENTE */
             'nombre.required' => 'El campo nombre cliente es requerido. No puede estar vacio.' ,
             'nombre.alpha_spaces' => 'El campo nombre cliente solo puede contener letras.' ,
             /* Validacion campo IDENTIDAD */
              'identidad.required' => 'El campo identidad  es requerido. No puede estar vacio.' ,
              'identidad.numeric' => 'El campo identidad solo puede contener numeros.' ,
               /* Validacion campo RTN */
               'rtn.required' => 'El campo rtn  es requerido. No puede estar vacio.' ,
               'rtn.numeric' => 'El campo rtn solo puede contener numeros.' ,
               /* Validacion campo TIPO PAGO */
             'tipo_pago.required' => 'El campo tipo pago es requerido. No puede estar vacio.' ,
             'tipo_pago.alpha' => 'El campo tipo pago solo puede contener letras.' ,
              /* Validacion campo INGRESO CLIENTE */
              'ingreso_cliente.required' => 'El campo ingreso cliente es requerido. No puede estar vacio.' ,
               /* Validacion campo DIRECCION */
               'direccion.required' => 'El campo direccion es requerido. No puede estar vacio.' ,
               'direccion.regex' => 'El campo direccion solo puede contener letras y numeros.' ,
        ];
    }
}
