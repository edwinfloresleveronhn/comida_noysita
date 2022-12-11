<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionCai;
use App\Models\cai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class caicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CAIS = Http::get('https://noysitaapi-production.up.railway.app/cai/')->json();
    
        return view('cai.index',compact('CAIS')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionCai $request)
    {
        $CAIS = Http::post('https://noysitaapi-production.up.railway.app/insertar_cai', [
            'CAI'=> $request->cai,
            'TIPO_DOCUMENTO' => $request->tipo_documento,
            'VALOR_FISCAL' => $request->valor_fiscal,
            'FECHA_VENCIMIENTO'=> $request->fecha_vencimiento,
              
        ]); 

           return redirect()-> route('cai.index')->with('agregado','el CAI fue agregado correctamente'); 
        
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
    public function edit($COD_CAI)
    {
        $CAIS = cai::findorfail($COD_CAI); 
        
        return view('cai.edit', compact('CAIS')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionCai $request, $COD_CAI)
    {
        $CAIS  = Http::put('https://noysitaapi-production.up.railway.app/cai/edit/'. $COD_CAI ,[
            'CAI'=> $request->cai,
            'TIPO_DOCUMENTO' => $request->tipo_documento,
            'VALOR_FISCAL' => $request->valor_fiscal,
            'FECHA_VENCIMIENTO'=> $request->fecha_vencimiento,
        ]);

        return redirect()-> route('cai.index')->with('editado','El Cai fue editado correctamente'); 
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
