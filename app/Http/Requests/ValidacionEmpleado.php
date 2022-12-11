<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionEmpleado extends FormRequest
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
            'edad' => 'required|numeric',
            'correo_empleado' => 'required',
            'numero_celular' => 'required|numeric',
            'estado_civil' => 'required|alpha_spaces',
            'inicio_contrato' => 'required',
            'salario' => 'required|numeric',
            'fecha_ingreso' => 'required',
            'cargo_empleado' => 'required|alpha_spaces',
            
    ];
    }
    public function messages()
    {
        return[
            /* Validacion campo NOMBRE EMPLEADO */
            
             'nombre.required' => 'El campo nombre Empleado es requerido. No puede estar vacio.' ,
             'nombre.alpha_spaces' => 'El campo nombre Empleado solo puede contener letras.' ,
             /* Validacion campo IDENTIDAD */
              'identidad.required' => 'El campo identidad  es requerido. No puede estar vacio.' ,
              'identidad.numeric' => 'El campo identidad solo puede contener numeros.' ,
               /* Validacion campo EDAD */
               'edad.required' => 'El campo edad  es requerido. No puede estar vacio.' ,
               'edad.numeric' => 'El campo edad solo puede contener numeros.' ,
               /* Validacion campo CORREO EMPLEADO */
             'correo_empleado.required' => 'El campo correo  es requerido. No puede estar vacio.' ,
              /* Validacion campo NUMERO CELULAR */
              'numero_celular.required' => 'El campo numero celular  es requerido. No puede estar vacio.' ,
              'numero_celular.numeric' => 'El campo numero celular solo puede contener numeros.' ,
              /* Validacion campo  ESTADO CIVIL */
             'estado_civil.required' => 'El campo estado civil es requerido. No puede estar vacio.' ,
             'estado_civil.alpha_spaces' => 'El campo estado civil solo puede contener letras.' ,
              /* Validacion campo INICIO CONTRATO */
              'inicio_contrato.required' => 'El campo inicio contrato es requerido. No puede estar vacio.' ,
               /* Validacion campo INGRESO EMPLEADO */
               'fecha_ingreso.required' => 'El campo ingreso empleado es requerido. No puede estar vacio.' ,
               /* Validacion campo SALARIO */
               'salario.required' => 'El campo salario  es requerido. No puede estar vacio.' ,
               'salario.numeric' => 'El campo salario solo puede contener numeros.' ,
               /* Validacion campo CARGO EMPLEADO */
             'cargo_empleado.required' => 'El campo cargo empleado es requerido. No puede estar vacio.' ,
             'cargo_empleado.alpha_spaces' => 'El campo cargo empleado solo puede contener letras.' ,
     
        ];
    }
}
