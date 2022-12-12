<table id="empleados" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                        <th>No.</th>
                            <th>Nombre Empleado</th>
                            <th>Identidad</th>
                            <th>Edad</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Estado Civil</th>
                            <th>Inicio Contrato</th>
                            <th>Cargo</th>
                            <th>Salario</th>
                            <th>Fecha Ingreso</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    
                       @foreach($empleados as $empleado)
                            <tr>
                            <td>{{$empleado->COD_EMPLEADO}}</td>
                                <td>{{$empleado->NOMBRE_EMPLEADO}}</td>
                                <td>{{$empleado->IDENTIDAD_EMPLEADO}}</td>
                                <td>{{$empleado->EDAD_EMPLEADO}}</td>
                                <td>{{$empleado->CORREO_EMPLEADO}}</td>
                                <td>{{$empleado->NUMERO_CELULAR_EMPLEADO}}</td>
                                <td>{{$empleado->ESTADO_CIVIL_EMPLEADO}}</td>
                                <td>{{$empleado->INICIO_CONTRATO}}</td>
                                <td>{{$empleado->CARGO_EMPLEADO}}</td>
                                <td>{{$empleado->SALARIO_EMPLEADO}}</td>
                                <td>{{$empleado->FECHA_INGRESO}}</td>
                            </tr>
                   @endforeach
                    </tbody>
                </table>