@extends('adminlte::page')

@section('title', 'ROLES ')

@section('content_header')
<h1>Gestion de roles</h1>
@stop

@section('content')
<form action="{{route('rol.store')}}" method="post" class="was-validated">
    @csrf
    <div class="col-md-12"><br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">rol </h3>
            </div>
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Rol</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder=""
                                value="{{old('name')}}" required>
                            <div class="valid-feedback">DATO VALIDO.</div>
                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!--        <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="permission">Permisos</label>
                            <br />
                            @foreach($permission as $value)
                            <label for="">{{ Form::checkbox('permission[]', $value->id , false , array('class' =>
                                'name')) }}
                                {{$value->name}}
                            </label>
                            <br />
                            @endforeach
                            <div class="valid-feedback">DATO VALIDO.</div>
                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA UNA FECHA</div>
                            @error('fecha')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div> -->


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
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[8]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[9]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[10]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[11]['id'] }}" false>
                            </td>
                        </tr>
                        <tr>
                            <td>Clientes</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[4]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[5]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[6]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[7]['id'] }}" false>
                            </td>
                        </tr>
                        <tr>
                            <td>Proveedores</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[12]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[13]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[14]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[15]['id'] }}" false>
                            </td>
                        </tr>
                        <tr>
                            <td>Compras</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[16]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[17]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[18]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[19]['id'] }}" false>
                            </td>
                        </tr>
                        <tr>
                            <td>Platillos</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[20]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[21]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[22]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[23]['id'] }}" false>
                            </td>
                        </tr>

                        <tr>
                            <td>Inventario</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[25]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[23]['id'] }}" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[24]['id'] }}" false disabled>
                            </td>
                        </tr>
                         
                        <tr>
                            <td>CAI</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[28]['id'] }}" false>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[29]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[30]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[31]['id'] }}" false>
                            </td>
                        </tr>

                        <tr>
                            <td>Factura</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[40]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[43]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[41]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[42]['id'] }}" false>
                            </td>
                        </tr>

                        <td>Logs</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[32]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Usuarios</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[33]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[34]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[35]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[36]['id'] }}" false>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Roles</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[0]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[1]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[2]['id'] }}" false>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[3]['id'] }}" false>
                            </td>
                        </tr>
                        <tr>
                            <td>Bitacora</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[37]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                        </tr>
                        <td>Reportes</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[38]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                        </tr>
                        <td>Respaldo</td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="{{ $permission[39]['id'] }}" false>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                            <td>
                                <input class="custom-control-input" type="checkbox" data-toggle="toggle"
                                    data-onstyle="dark" data-size="small" name="permission[]"
                                    value="" false disabled>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <div class="card-footer">
                    <a class="btn btn-danger" href="{{ route('rol.index') }}">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>

</form>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
    rel="stylesheet">
@stop


@section('js')
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@stop