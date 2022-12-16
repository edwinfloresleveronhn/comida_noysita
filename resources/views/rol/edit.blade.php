@extends('adminlte::page')

@section('title', 'Rol')

@section('content_header')
<h1>Gestion de rol</h1>
@stop

@section('content')


<div class="col-md-12"><br>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">rol </h3>
        </div>
        <div class="card-body">
            {!! Form::model($role,['method' => 'PUT' , 'route'=>['rol.update', $role->id]]) !!}
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Rol</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder=""
                            value="{{old('name',$role->name)}}" required>
                        <div class="valid-feedback">DATO VALIDO.</div>
                        <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
 
            <table id="roles" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Modulo</th>
                        <th>Ver</th>
                        <th>Crear</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Empleados</td>
                        <td>

                            <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[8]['id']; ?>" <?php if(in_array($permission[8]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[9]['id']; ?>" <?php if(in_array($permission[9]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[10]['id']; ?>" <?php if(in_array($permission[10]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[11]['id']; ?>" <?php if(in_array($permission[11]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Clientes</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[4]['id']; ?>" <?php if(in_array($permission[4]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                           
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[5]['id']; ?>" <?php if(in_array($permission[5]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[6]['id']; ?>" <?php if(in_array($permission[6]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                           
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[7]['id']; ?>" <?php if(in_array($permission[7]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Proveedores</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[12]['id']; ?>" <?php if(in_array($permission[12]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[13]['id']; ?>" <?php if(in_array($permission[13]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[14]['id']; ?>" <?php if(in_array($permission[14]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[15]['id']; ?>" <?php if(in_array($permission[15]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Compras</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[16]['id']; ?>" <?php if(in_array($permission[16]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[17]['id']; ?>" <?php if(in_array($permission[17]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[18]['id']; ?>" <?php if(in_array($permission[18]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[19]['id']; ?>" <?php if(in_array($permission[19]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Platillos</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[20]['id']; ?>" <?php if(in_array($permission[20]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                             <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[21]['id']; ?>" <?php if(in_array($permission[21]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[22]['id']; ?>" <?php if(in_array($permission[22]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[23]['id']; ?>" <?php if(in_array($permission[23]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                           
                        </td>
                    </tr>

                    <tr>
                        <td>Inventario</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[25]['id']; ?>" <?php if(in_array($permission[25]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                            <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" value="" false disabled>
                        </td>
                        <td>
                            <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" value="" false
                                disabled>
                        </td>
                        <td>
                            <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" value="" false
                                disabled>
                        </td>
                    </tr>

                    <tr>
                        <td>CAI</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[28]['id']; ?>" <?php if(in_array($permission[28]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[29]['id']; ?>" <?php if(in_array($permission[29]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                            <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[30]['id']; ?>" <?php if(in_array($permission[30]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[31]['id']; ?>" <?php if(in_array($permission[31]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                    </tr>

                    <tr>
                        <td>Factura</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[40]['id']; ?>" <?php if(in_array($permission[40]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[43]['id']; ?>" <?php if(in_array($permission[43]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[41]['id']; ?>" <?php if(in_array($permission[41]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[42]['id']; ?>" <?php if(in_array($permission[42]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                           
                        </td>
                    </tr>

                    <td>Logs</td>
                    <td>
                    <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[32]['id']; ?>" <?php if(in_array($permission[32]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    </tr>

                    <tr>
                        <td>Usuarios</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[33]['id']; ?>" <?php if(in_array($permission[33]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[34]['id']; ?>" <?php if(in_array($permission[34]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[35]['id']; ?>" <?php if(in_array($permission[35]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                          
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[36]['id']; ?>" <?php if(in_array($permission[36]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                    </tr>

                    <tr>
                        <td>Roles</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[0]['id']; ?>" <?php if(in_array($permission[0]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[1]['id']; ?>" <?php if(in_array($permission[1]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[2]['id']; ?>" <?php if(in_array($permission[2]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[3]['id']; ?>" <?php if(in_array($permission[3]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Bitacora</td>
                        <td>
                        <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[37]['id']; ?>" <?php if(in_array($permission[37]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                        </td>
                        <td>
                            <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" value="" false disabled>
                        </td>
                        <td>
                            <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" value="" false disabled>
                        </td>
                        <td>
                            <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" value="" false disabled>
                        </td>
                    </tr>
                    <td>Reportes</td>
                    <td>
                    <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[38]['id']; ?>" <?php if(in_array($permission[38]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                            
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    </tr>
                    <td>Respaldo</td>
                    <td>
                    <input class="custom-control-input" data-toggle="toggle" data-onstyle="dark"
                                data-size="small" name="permission[]" type="checkbox" name="permission[]"
                                value="<?php echo $permission[39]['id']; ?>" <?php if(in_array($permission[39]['id'] ,
                                $rolePermission)) echo 'checked'; ?>>
                           
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    <td>
                        <input class="custom-control-input" type="checkbox" data-toggle="toggle" data-onstyle="dark"
                            data-size="small" name="permission[]" value="" false disabled>
                    </td>
                    </tr>

                </tbody>
            </table>



















            <div class="card-footer">
                <a class="btn btn-danger" href="{{ route('rol.index') }}">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>


            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    {!! Form::close() !!}


    @stop



    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">

    @stop

    @section('js')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src="{{asset('js/select-all.js')}}"></script>
    @stop