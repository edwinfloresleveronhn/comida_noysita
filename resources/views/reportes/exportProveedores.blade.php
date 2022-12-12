<table id="proveedores" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                        <th>No.</th>
                            <th>Nombre Proveedor</th>
                            <th>Celular Proveedor</th>
                            <th>Producto de Venta</th>
                            <th>Precio de Producto</th>
                            <th>Cuidad</th>
                            <th>Observacion</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                       @foreach($proveedores as $proveedor)
                            <tr>
                            <td>{{$proveedor->COD_PROVEEDOR}}</td>
                                <td>{{$proveedor->NOMBRE_PROVEEDOR}}</td>
                                <td>{{$proveedor->CELULAR_PROVEEDOR}}</td>
                                <td>{{$proveedor->PRODUCTO_VENTA}}</td>
                                <td>{{$proveedor->PRECIO_PRODUCTO}}</td>
                                <td>{{$proveedor->CIUDAD_PROVEEDOR}}</td>
                                <td>{{$proveedor->OBSERVACION}}</td>
                             
                                    </tr>
                   @endforeach
                    </tbody>
                </table>