<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            'ver-cliente',
            'crear-cliente',
            'editar-cliente',
            'borrar-cliente',
            'ver-empleado',
            'crear-empleado',
            'editar-empleado',
            'borrar-empleado',
            'ver-proveedor',
            'crear-proveedor',
            'editar-proveedor',
            'borrar-proveedor',
            'ver-compra',
            'crear-compra',
            'editar-compra',
            'borrar-compra',
            'ver-catalogo',
            'crear-catalogo',
            'editar-catalogo',
            'borrar-catalogo',
            'ver-inventario',
            'crear-inventario',
            'editar-inventario',
            'borrar-inventario',
            'ver-cai',
            'crear-cai',
            'editar-cai',
            'borrar-cai',
            'ver-logs',
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            'ver-bitacora',
            'ver-reporte',
            'ver-respaldo',
            'ver-factura',
            'editar-factura',
            'borrar-factura',

        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
