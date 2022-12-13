<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCai extends FormRequest
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
            'cai' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'tipo_documento' => 'required|alpha_spaces',
            'valor_fiscal' => 'required|alpha_spaces',
            'fecha_vencimiento' => 'required',
            

         
            
            
    ];
    }
    public function messages()
    {
        return[
            /* Validacion campo CAI */
             'cai.required' => 'El campo cai  es requerido. No puede estar vacio El campo cai  solo puede contener letras e numeros.' ,
             'cai.regex' => 'El campo cai no admite caracteres especiales.Solo puedes ingresar letras y numeros.' ,
           
            /* Validacion campo TIPO DOCUMENTO */
            'tipo_documento.required' => 'El campo tipo documento  es requerido. No puede estar vacio.' ,
            'tipo_documento.numeric' => 'El campo tipo documento solo puede contener numeros.' ,
            'tipo_documento.alpha_spaces' => 'El campo tipo documento  solo puede contener letras.' ,
            /* Validacion campo VALOR FISCAL */
            'valor_fiscal.required' => 'El campo valor fiscal  es requerido. No puede estar vacio.' ,
            'valor_fiscal.alpha_spaces' => 'El campo valor fiscal  solo puede contener letras.' ,
              /* Validacion campo FECHA VENCIMIENTO */
              'fecha_vencimiento.required' => 'El campo fecha de vencimiento es requerido. No puede estar vacio.' ,
        ];
    }
}
