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
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Rol</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{old('name',$role->name)}}" required>
                            <div class="valid-feedback">DATO VALIDO.</div>
                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="permission">Permisos</label>
                            <br />
                            @foreach($permission as $value)
                            <label for="">{{ Form::checkbox('permission[]', $value->id ,in_array($value->id , $rolePermission)) }}
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
                </div>
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

@stop

@section('js')

@stop