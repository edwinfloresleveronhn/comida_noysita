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
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{old('name')}}" required>
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
                            @foreach($ as $value)
                            <label for="">{{ Form::checkbox('permission[]', $value->id , false , array('class' => 'name')) }}
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
           
</form>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

@stop