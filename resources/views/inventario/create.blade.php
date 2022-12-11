@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Gestion de Inventario</h1>
@stop

@section('content')
<form action="{{route('inventario.store')}}" method="post" class="was-validated">
    @csrf
<div class="col-md-12"><br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Inventario</h3>
            </div>
            <div class="card-body">
                @csrf
                <div class="row">
                <div class="col-6">
            <div class="form-group">
                <label for="">Nombre Producto</label>
                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="" value="{{old('nombre_producto')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                @error('nombre_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Precio Producto</label>
                <input type="number" class="form-control" id="precio_producto" name="precio_producto" placeholder=""value="{{old('precio_producto')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
                @error('precio_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
                <label for="">Cantidad Producto</label>
                <input type="number" class="form-control" id="cantidad_producto" name="cantidad_producto" placeholder="" value="{{old('cantidad_producto')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
                @error('cantidad_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Categoria Producto</label>
                <input type="text" class="form-control" id="categoria_producto" name="categoria_producto" placeholder="" value="{{old('categoria_producto')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                @error('categoria_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
                <label for="">Fecha Vencimiento</label>
                <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="" value="{{old('fecha_vencimiento')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA UNA FECHA</div>
                @error('fecha_vencimiento')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          
          <div class="col-6">
            <div class="form-group">
                <label for="">Maximo Producto</label>
                <input type="number" class="form-control" id="maximo_producto" name="maximo_producto" placeholder="" value="{{old('maximo_producto')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMERO</div>
                @error('maximo_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>

          <div class="col-6">
            <div class="form-group">
                <label for="">Minimo Producto</label>
                <input type="number" class="form-control" id="minimo_producto" name="minimo_producto" placeholder="" value="{{old('minimo_producto')}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMERO</div>
                @error('minimo_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          
        </div>
            </div>
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('inventario.index') }}">Regresar</a>
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