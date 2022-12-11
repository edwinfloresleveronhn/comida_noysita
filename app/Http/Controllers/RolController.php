<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\rol;



use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Http::get('https://noysitaapi-production.up.railway.app/rol/')->json();
    
        return view('rol.index',compact('roles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = Http::post('https://noysitaapi-production.up.railway.app/insertar_rol', [
            'ROL'=> $request->rol,
            'USUARIO' => $request->Usuario,
            'FECHA_REGISTRO' => $request->fecha,
        ]); 

           return redirect()-> route('rol.index')->with('agregado','El rol fue agregado correctamente'); 
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
    public function edit($COD_ROL)
    {
        $roles = rol::findorfail($COD_ROL); 
        
        return view('rol.edit', compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $COD_ROL)
    {
        $ROLES  = Http::put('https://noysitaapi-production.up.railway.app/rol/edit/'. $COD_ROL ,[
            'ROL'=> $request->rol,
            'USUARIO' => $request->Usuario,
            'FECHA_REGISTRO' => $request->fecha_registro,
        ]);

        return redirect()-> route('rol.index')->with('editado','El rol fue editado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($COD_ROL)
    {
          
        $roles = Http::delete('https://noysitaapi-production.up.railway.app/rol/delete/'. $COD_ROL);

        return redirect()-> route('rol.index')->with('eliminado','El rol fue eliminado correctamente'); 
    }
}
