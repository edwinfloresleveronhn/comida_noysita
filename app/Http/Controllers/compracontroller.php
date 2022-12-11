<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionCompra;
use App\Models\compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class compracontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Http::get('https://noysitaapi-production.up.railway.app/compras/')->json();
    
        return view('compra.index',compact('compras')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionCompra $request)
    {
        $compras = Http::post('https://noysitaapi-production.up.railway.app/insertar_compra', [
            'NOMBRE_PRODUCTO'=> $request->nombre_producto,
            'PRECIO_PRODUCTO' => $request->precio_producto,
            'CANTIDAD_PRODUCTO' => $request->cantidad_producto,
            'CATALOGO_PRODUCTO'=> $request->catalogo_producto,
            'FECHA_COMPRA' => $request->fecha_compra,     
        ]); 

           return redirect()-> route('compra.index')->with('agregado','la Compra fue agregado correctamente'); 
        
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
    public function edit($COD_COMPRA)
    {
        $compras = compra::findorfail($COD_COMPRA); 
        
        return view('compra.edit', compact('compras')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionCompra $request, $COD_COMPRA)
    {
        $compras  = Http::put('https://noysitaapi-production.up.railway.app/compras/edit/'. $COD_COMPRA ,[
            'NOMBRE_PRODUCTO'=> $request->nombre_producto,
            'PRECIO_PRODUCTO' => $request->precio_producto,
            'CANTIDAD_PRODUCTO' => $request->cantidad_producto,
            'CATALOGO_PRODUCTO'=> $request->catalogo_producto,
            'FECHA_COMPRA' => $request->fecha_compra,  
            
        ]);

        return redirect()-> route('compra.index')->with('editado','La compra fue editado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_COMPRA)
    {
        $compras = Http::delete('https://noysitaapi-production.up.railway.app/compras/delete/'. $COD_COMPRA);

        return redirect()-> route('compra.index')->with('eliminado','la compra fue eliminado correctamente'); 
    }
}
