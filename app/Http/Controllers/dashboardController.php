<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\compra;
use App\Models\empleado;
use App\Models\proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $empleados = empleado::count();
          $clientes = Cliente::count();
          $proveedores = proveedor::count();
          $compras = compra::select(DB::raw('SUM(PRECIO_PRODUCTO*CANTIDAD_PRODUCTO) as total'))
          ->get();

          $grafico_compras = compra::select(
                     DB::raw('MONTH(FECHA_COMPRA) as mes'),
                     DB::raw('COUNT(1) as count'))
                     ->groupBy('mes')
                     ->get()
                     ->toArray();

                     $conteos = array_fill(0,12,0);

                     foreach ($grafico_compras as $grafico_compra){
                        $index = $grafico_compra['mes']-1;
                        $conteos[$index] = $grafico_compra['count'];
                     }
                   
  
        return view('dash.index' , compact('empleados','clientes', 'proveedores','compras', 'conteos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
