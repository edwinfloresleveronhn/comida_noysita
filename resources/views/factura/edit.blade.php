@extends('adminlte::page')

@section('title', 'Factura')

@section('content_header')
    <h1>Gestion de facturas</h1>
@stop

@section('content')
<form action="{{ route('factura.update', $facturas) }}" method="POST" class="was-validated">
   @csrf
   @method('PUT')
   <div class="col-md-12"><br>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">factura</h3>
        </div>
        <div class="card-body">
            @csrf
            <div class="row">
            <div class="col-6">
        <div class="form-group">
            <label for="">Numero factura</label>
            <input type="number" class="form-control" id="numero_factura" name="numero_factura" placeholder="" value="{{old('numero_factura',$facturas['NUMERO_FACTURA'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMERO</div>
            @error('numero_factura')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Nombre Cliente</label>
            <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder=""value="{{old('nombre_cliente',$facturas['NOMBRE_CLIENTE'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRA</div>
            @error('nombre_cliente')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
            <label for="">RTN</label>
            <input type="number" class="form-control" id="rtn" name="rtn" placeholder="" value="{{old('rtn',$facturas['RTN_CLIENTE'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMERO</div>
            @error('rtn')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Fecha Facturacion</label>
            <input type="date" class="form-control" id="fecha_facturacion" name="fecha_facturacion" placeholder="" value="{{old('fecha_facturacion',$facturas['FECHA_FACTURACION'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA UNA FECHA</div>
            @error('fecha_facturacion')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Cai</label>
            <input type="text" class="form-control" id="cai" name="cai" placeholder="" value="{{old('cai',$facturas['CAI'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA  LETRA Y  NUMERO</div>
            @error('cai')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Platillo</label>
            <input type="text" class="form-control" id="platillo" name="platillo" placeholder="" value="{{old('platillo',$facturas['PLATILLO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRA</div>
            @error('platillo')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Cantidad Platillo</label>
            <input type="number" class="form-control" id="cantidad_platillo" name="cantidad_platillo" placeholder="" value="{{old('cantidad_platillo',$facturas['CANTIDAD_PLATILLO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRA</div>
            @error('cantidad_platillo')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" placeholder="" value="{{old('precio',$facturas['PRECIO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMERO</div>
            @error('precio')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">IVA</label>
            <input type="number" class="form-control" id="iva" name="iva" placeholder="" value="{{old('iva',$facturas['IVA'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMERO</div>
            @error('iva')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Total Factura</label>
            <input type="number" class="form-control" id="total_factura" name="total_factura" placeholder="" value="{{old('total_factura',$facturas['TOTAL_FACTURA'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMERO</div>
            @error('total_factura')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
        </div>
        <div class="card-footer">
        <a class="btn btn-danger" href="{{ route('factura.index') }}">Regresar</a>
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