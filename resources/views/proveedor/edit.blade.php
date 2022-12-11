@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Gestion de Proveedores</h1>
@stop

@section('content')
<form action="{{ route('proveedor.update', $proveedores) }}" method="POST" class="was-validated">
   @csrf
   @method('PUT')
   <div class="col-md-12"><br>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Proveedor</h3>
        </div>
        <div class="card-body">
            @csrf
            <div class="row">
            <div class="col-6">
        <div class="form-group">
            <label for="">Nombre Proveedor</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="{{old('nombre', $proveedores['NOMBRE_PROVEEDOR'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
            @error('nombre')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Celular</label>
            <input type="number" class="form-control" id="celular_proveedor" name="celular_proveedor" placeholder=""value="{{old('celular_proveedor', $proveedores['CELULAR_PROVEEDOR'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>

            @error('celular_proveedor')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
            <label for="">Producto de  Venta</label>
            <input type="text" class="form-control" id="producto_venta" name="producto_venta" placeholder="" value="{{old('producto_venta', $proveedores['PRODUCTO_VENTA'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
           
            @error('producto_venta')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Precio de Producto</label>
            <input type="number" class="form-control" id="precio_producto" name="precio_producto" placeholder="" value="{{old('precio_producto', $proveedores['PRECIO_PRODUCTO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
          
            @error('precio_producto')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
            <label for="">Ciudad</label>
            <input type="text" class="form-control" id="ciudad_proveedor" name="ciudad_proveedor" placeholder="" value="{{old('ciudad_proveedor', $proveedores['CIUDAD_PROVEEDOR'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
           
            @error('ciudad_proveedor')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Observacion</label>
            <input type="text" class="form-control" id="observacion" name="observacion" placeholder="" value="{{old('observacion', $proveedores['OBSERVACION'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
             
            @error('observacion')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
    </div>
        </div>
        <div class="card-footer">
        <a class="btn btn-danger" href="{{ route('proveedor.index') }}">Regresar</a>
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