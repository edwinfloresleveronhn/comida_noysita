<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\rol;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



use Illuminate\Http\Request;

class RolController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-rol' ,['only'=>['index']] );
        $this->middleware('permission:crear-rol' ,['only'=>['create', 'store']] );
        $this->middleware('permission:editar-rol' ,['only'=>['edit', 'update']] );
        $this->middleware('permission:borrar-rol' ,['only'=>['destroy']] );

    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    
        $roles = Role::all();
        return view('rol.index',compact('roles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        
        return view('rol.create', compact('permission'));

     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, ['name'=> 'required'/* , 'permission' => 'required' */]);
        $role = Role::create(['name'=>$request->input('name')]);
        $role->syncPermissions($request->permission);

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
    public function edit($id)
    {
        $role = Role::find($id); 
        $permission = Permission::get();
        $rolePermission = DB::table('role_has_permissions')->where('role_has_permissions.role_id',$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();

        
        return view('rol.edit', compact('role','permission','rolePermission'));
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
     

        $this-> validate($request, ['name'=> 'required', 'permission' => 'required']);
        $roles = Role::find($id);
        $roles->name = $request->input('name');
        $roles->save();

        $roles->syncPermissions($request->input('permission'));

      
        return redirect()-> route('rol.index')->with('editado','El rol fue editado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          
        /* $roles = Http::delete('https://noysitaapi-production-4864.up.railway.app/rol/delete/'. $COD_ROL); */


        DB::table('roles')->where('id', $id)->delete();
        
        return redirect()-> route('rol.index')->with('eliminado','El rol fue eliminado correctamente'); 
    }
}
