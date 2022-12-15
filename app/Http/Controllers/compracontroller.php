<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionCompra;
use App\Models\compra;
use App\Models\inventario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class compracontroller extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-compra' ,['only'=>['index']] );
        $this->middleware('permission:crear-compra' ,['only'=>['create', 'store']] );
        $this->middleware('permission:editar-compra' ,['only'=>['edit', 'update']] );
        $this->middleware('permission:borrar-compra' ,['only'=>['destroy']] );

    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Http::get('https://noysitaapi-production-4864.up.railway.app/compras/')->json();
    
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
        $compras = Http::post('https://noysitaapi-production-4864.up.railway.app/insertar_compra', [
            'NOMBRE_PRODUCTO'=> $request->nombre_producto,
            'PRECIO_PRODUCTO' => $request->precio_producto,
            'CANTIDAD_PRODUCTO' => $request->cantidad_producto,
            'CATALOGO_PRODUCTO'=> $request->catalogo_producto,
            'FECHA_COMPRA' => $request->fecha_compra,     
        ]); 

        $compras = Http::post('https://noysitaapi-production-4864.up.railway.app/insertar_inventario', [
            'NOMBRE_PRODUCTO'=> $request->nombre_producto,
            'PRECIO_PRODUCTO' => $request->precio_producto,
            'CANTIDAD_PRODUCTO' => $request->cantidad_producto,
            'CATEGORIA_PRODUCTO'=> $request->catalogo_producto,
            'FECHA_VENCIMIENTO' => Carbon::now()->addDays(30)->format('Y-m-d'),
            'MAXIMO_PRODUCTO' => '30',
            'MINIMO_PRODUCTO' => '1',
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
        $compras  = Http::put('https://noysitaapi-production-4864.up.railway.app/compras/edit/'. $COD_COMPRA ,[
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
        $compras = Http::delete('https://noysitaapi-production-4864.up.railway.app/compras/delete/'. $COD_COMPRA);

        return redirect()-> route('compra.index')->with('eliminado','la compra fue eliminado correctamente'); 
    }
}
