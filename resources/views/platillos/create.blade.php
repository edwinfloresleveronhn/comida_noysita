@extends('adminlte::page')

@section('title', 'Platillo')

@section('content_header')
    <h1>Gestion de platillo</h1>
@stop

@section('content')
<form action="{{route('platillos.store')}}" method="post" class="was-validated">
    @csrf
<div class="col-md-12"><br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Platillo</h3>
            </div>
            <div class="card-body">
                @csrf
                <div class="row">
                <div class="col-6">
            <div class="form-group">
                <label for="">Nombre Platillo</label>
                <input type="text" class="form-control" id="nombre_platillo" name="nombre_platillo" placeholder="" value="{{old('nombre_platillo')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                @error('nombre_platillo')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Precio Platillo</label>
                <input type="number" class="form-control" id="precio_platillo" name="precio_platillo" placeholder=""value="{{old('precio_platillo')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
                @error('precio_platillo')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
                <label for="">Receta Platillos</label>
                <input type="text" class="form-control" id="receta_platillo" name="receta_platillo" placeholder="" value="{{old('receta_platillo')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                @error('receta_platillo')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
            </div>
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('platillos.index') }}">Regresar</a>
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