<?php

namespace App\Exports;

namespace App\Exports;

use App\Models\Cliente;
use App\Models\empleado;
use App\Models\inventario;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class InventarioExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('reportes.exportInventario',[
                  'inventario' => inventario::all()
        ]); 
        
      
    }
}
