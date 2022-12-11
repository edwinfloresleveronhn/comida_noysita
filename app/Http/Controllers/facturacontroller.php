<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionCliente;
use App\Http\Requests\ValidacionFactura;
use App\Models\factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class facturacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Http::get('https://noysitaapi-production.up.railway.app/facturas/')->json();
    
        return view('factura.index',compact('facturas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('factura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionFactura $request)
    {
        $facturas = Http::post('https://noysitaapi-production.up.railway.app/insertar_factura', [
            'NUMERO_FACTURA'=> $request->numero_factura,
            'NOMBRE_CLIENTE' => $request->nombre_cliente,
            'RTN_CLIENTE' => $request->rtn,
            'FECHA_FACTURACION'=> $request->fecha_facturacion,
            'CAI' => $request->cai,
            'PLATILLO' => $request->platillo,
            'CANTIDAD_PLATILLO' => $request->cantidad_platillo,
            'PRECIO' => $request->precio,
            'IVA' => $request->iva,
            'TOTAL_FACTURA' => $request->total_factura,
              
        ]); 

           return redirect()-> route('factura.index')->with('agregado','La Factura fue agregado correctamente');
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
    public function edit($COD_FACTURA)
    {
        $facturas = factura::findorfail($COD_FACTURA); 
        
        return view('factura.edit', compact('facturas')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionFactura $request, $COD_FACTURA)
    {
        $facturas  = Http::put('https://noysitaapi-production.up.railway.app/facturas/edit/'. $COD_FACTURA ,[
            'NUMERO_FACTURA'=> $request->numero_factura,
            'NOMBRE_CLIENTE' => $request->nombre_cliente,
            'RTN_CLIENTE' => $request->rtn,
            'FECHA_FACTURACION'=> $request->fecha_facturacion,
            'CAI' => $request->cai,
            'PLATILLO' => $request->platillo,
            'CANTIDAD_PLATILLO' => $request->cantidad_platillo,
            'PRECIO' => $request->precio,
            'IVA' => $request->iva,
            'TOTAL_FACTURA' => $request->total_factura,
               
        ]);

        return redirect()-> route('factura.index')->with('editado','la factura editado correctamente'); 
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
