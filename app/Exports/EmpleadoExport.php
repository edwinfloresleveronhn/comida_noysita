<?php


namespace App\Exports;


use App\Models\empleado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class EmpleadoExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('reportes.exportEmpleados',[
                  'empleados' => empleado::all()
        ]); 
        
      
    }
}
