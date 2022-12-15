<?php

namespace App\Http\Controllers;

use App\Exports\ClientesExport;
use App\Exports\EmpleadoExport;
use App\Exports\InventarioExport;
use App\Exports\ProveedorExport;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class reportesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-reporte' ,['only'=>['index']] );

    } 

    public function index()
    {
        return view('reportes.index');
    }
    public function export_cliente()
    {
        return Excel::download(new ClientesExport, 'clientes.xlsx');
    }

    public function export_empleado()
    {
        return Excel::download(new EmpleadoExport, 'empleados.xlsx');
    }

    public function export_proveedores()
    {
        return Excel::download(new ProveedorExport, 'proveedores.xlsx');
    }


    public function export_inventario()
    {
        return Excel::download(new InventarioExport, 'inventario.xlsx');
    }
}
