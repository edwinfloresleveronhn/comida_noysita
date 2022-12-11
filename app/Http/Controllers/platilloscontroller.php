<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionPlatillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\platillo;


class platilloscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platillos = Http::get('https://noysitaapi-production.up.railway.app/platillos/')->json();
    
        return view('platillos.index',compact('platillos')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('platillos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( ValidacionPlatillo $request)
    {
        $platillos = Http::post('https://noysitaapi-production.up.railway.app/insertar_platillos', [
            'NOMBRE_PLATILLO'=> $request->nombre_platillo,
            'PRECIO_PLATILLO' => $request->precio_platillo,
            'RECETA_PLATILLO' => $request->receta_platillo,
        ]); 

           return redirect()-> route('platillos.index')->with('agregado','El platillos fue agregado correctamente'); 
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
    public function edit($COD_PLATILLO)
    {
        $platillos = platillo::findorfail($COD_PLATILLO); 
        
        return view('platillos.edit', compact('platillos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionPlatillo $request, $COD_PLATILLO)
    {
        $platillos  = Http::put('https://noysitaapi-production.up.railway.app/platillos/edit/'. $COD_PLATILLO ,[
            'NOMBRE_PLATILLO'=> $request->nombre_platillo,
            'PRECIO_PLATILLO' => $request->precio_platillo,
            'RECETA_PLATILLO' => $request->receta_platillo,
        ]);

        return redirect()-> route('platillos.index')->with('editado','El platillo fue editado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_PLATILLO)
    {
        
        $platillos = Http::delete('https://noysitaapi-production.up.railway.app/platillos/delete/'. $COD_PLATILLO);

        return redirect()-> route('platillos.index')->with('eliminado','El platillo fue eliminado correctamente'); 
    }
}
