<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionCliente;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class clientecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Http::get('https://noysitaapi-production.up.railway.app/clientes/')->json();
    
        return view('clientes.index',compact('clientes')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionCliente $request)
    {
        $clientes = Http::post('https://noysitaapi-production.up.railway.app/insertar_clientes', [
            'IDENTIDAD_CLIENTE'=> $request->identidad,
            'RTN_CLIENTE' => $request->rtn,
            'NOMBRE_CLIENTE' => $request->nombre,
            'DIRECCION'=> $request->direccion,
            'TIPO_PAGO' => $request->tipo_pago,
            'FECHA_INGRESO_CLIENTE' => $request->ingreso_cliente          
        ]); 

           return redirect()-> route('clientes.index')->with('agregado','El cliente fue agregado correctamente'); 
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
    public function edit($COD_CLIENTE)
    {
        $clientes = Cliente::findorfail($COD_CLIENTE); 
        
        return view('clientes.edit', compact('clientes')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionCliente $request, $COD_CLIENTE)
    {
        $clientes  = Http::put('https://noysitaapi-production.up.railway.app/clientes/edit/'. $COD_CLIENTE ,[
            'IDENTIDAD_CLIENTE'=> $request->identidad,
            'RTN_CLIENTE' => $request->rtn,
            'NOMBRE_CLIENTE' => $request->nombre,
            'DIRECCION'=> $request->direccion,
            'TIPO_PAGO' => $request->tipo_pago,
            'FECHA_INGRESO_CLIENTE' => $request->ingreso_cliente          
              
        ]);

        return redirect()-> route('clientes.index')->with('editado','El cliente fue editado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_CLIENTE)
    {

        $clientes = Http::delete('https://noysitaapi-production.up.railway.app/clientes/delete/'. $COD_CLIENTE);

        return redirect()-> route('clientes.index')->with('eliminado','El cliente fue eliminado correctamente'); 
    }
}
