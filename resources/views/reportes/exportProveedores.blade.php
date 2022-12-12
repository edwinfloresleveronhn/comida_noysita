<table id="clientes" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                    <th>No.</th>
                        <th>Nombre</th>
                        <th>Identidad</th>
                        <th>RTN</th>
                        <th>Direccion</th>
                        <th>Tipo Pago</th>
                        <th>Fecha ingreso</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($clientes as $cliente)
                    <tr>
                    <td>{{$cliente->COD_CLIENTE}}</td>
                        <td>{{$cliente->NOMBRE_CLIENTE}}</td>
                        <td>{{$cliente->IDENTIDAD_CLIENTE}}</td>
                        <td>{{$cliente->RTN_CLIENTE}}</td>
                        <td>{{$cliente->DIRECCION}}</td>
                        <td>{{$cliente->TIPO_PAGO}}</td>
                        <td>{{$cliente->FECHA_INGRESO_CLIENTE}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>