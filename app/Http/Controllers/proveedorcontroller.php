<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionProveedor;
use App\Models\proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class proveedorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Http::get('https://noysitaapi-production.up.railway.app/proveedores/')->json();
    
        return view('proveedor.index',compact('proveedores')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionProveedor $request)
    {
        $proveedores = Http::post('https://noysitaapi-production.up.railway.app/insertar_proveedor', [
            'NOMBRE_PROVEEDOR'=> $request->nombre,
            'CELULAR_PROVEEDOR' => $request->celular_proveedor,
            'PRODUCTO_VENTA' => $request->producto_venta,
            'PRECIO_PRODUCTO'=> $request->precio_producto,
            'CIUDAD_PROVEEDOR' => $request->ciudad_proveedor,
            'OBSERVACION' => $request->observacion          
        ]); 

           return redirect()-> route('proveedor.index')->with('agregado','El proveedor fue agregado correctamente'); 
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
    public function edit($COD_PROVEEDOR)
    {
        $proveedores = proveedor ::findorfail($COD_PROVEEDOR); 
        
        return view('proveedor.edit', compact('proveedores')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionProveedor $request, $COD_PROVEEDOR)
    {
        
        $proveedores  = Http::put('https://noysitaapi-production.up.railway.app/proveedor/edit/'. $COD_PROVEEDOR ,[
             'NOMBRE_PROVEEDOR'=> $request->nombre,
            'CELULAR_PROVEEDOR' => $request->celular_proveedor,
            'PRODUCTO_VENTA' => $request->producto_venta,
            'PRECIO_PRODUCTO'=> $request->precio_producto,
            'CIUDAD_PROVEEDOR' => $request->ciudad_proveedor,
            'OBSERVACION' => $request->observacion    
        ]);

        return redirect()-> route('proveedor.index')->with('editado','El proveedor fue editado correctamente'); 
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_PROVEEDOR)
    {
        
        $proveedores = Http::delete('https://noysitaapi-production.up.railway.app/proveedores/delete/'. $COD_PROVEEDOR);

        return redirect()-> route('proveedor.index')->with('eliminado','El proveedor fue eliminado correctamente'); 
    }
}
