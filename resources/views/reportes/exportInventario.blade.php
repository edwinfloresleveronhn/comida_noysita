<table id="inventario" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                        <th>No</th>
                            <th>Nombre Producto</th>
                            <th>Precio Producto</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                       @foreach($inventario as $inventario)
                            <tr>
                            <td>{{$inventario->COD_PRODUCTO}}</td>
                                <td>{{$inventario->NOMBRE_PRODUCTO}}</td>
                                <td>{{$inventario->PRECIO_PRODUCTO}}</td>                   
                                <td>{{$inventario->CANTIDAD_PRODUCTO}}</td>
                                    </tr>
                   @endforeach
                    </tbody>
                </table>