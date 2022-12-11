@extends('adminlte::page')

@section('title', 'Rol')

@section('content_header')
    <h1>Gestion de rol</h1>
@stop

@section('content')
<form action="{{ route('rol.update', $roles) }}" method="POST" class="was-validated">
   @csrf
   @method('PUT')
   <div class="col-md-12"><br>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">rol</h3>
        </div>
        <div class="card-body">
            @csrf
            <div class="row">
            <div class="col-6">
        <div class="form-group">
            <label for="">Rol</label>
            <input type="text" class="form-control" id="rol" name="rol" placeholder="" value="{{old('rol', $roles['ROL'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
            @error('rol')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Usuario</label>
            <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder=""value="{{old('Usuario', $roles['USUARIO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
            @error('Usuario')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
            <label for="">Fecha registro</label>
            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" placeholder="" value="{{old('fecha_registro', $roles['FECHA_REGISTRO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA UNA FECHA</div>
            @error('fecha_registro')
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