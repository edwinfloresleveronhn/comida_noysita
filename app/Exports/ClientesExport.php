<?php

namespace App\Exports;

use App\Models\Cliente;
use App\Models\empleado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ClientesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('reportes.exportClientes',[
                  'clientes' => Cliente::all()
        ]); 
        
      
    }
}
