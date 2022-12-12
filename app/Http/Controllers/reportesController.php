<?php

namespace App\Http\Controllers;

use App\Exports\ClientesExport;
use App\Exports\EmpleadoExport;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class reportesController extends Controller
{
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

    public function proveedor()
    {
        return Excel::download(new ClientesExport, 'proveedores.xlsx');
    }


    public function inventario()
    {
        return Excel::download(new ClientesExport, 'inventario.xlsx');
    }
}
