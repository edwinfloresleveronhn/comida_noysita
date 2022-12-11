@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Gestion de clientes</h1>
@stop

@section('content')
<form action="{{ route('clientes.update', $clientes) }}" method="POST" class="was-validated">
   @csrf
   @method('PUT')
<div class="col-md-12"><br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Clientes</h3>
            </div>
            <div class="card-body">
               
                <div class="row">
                <div class="col-6">
            <div class="form-group">
                <label for="">Nombre Cliente</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="{{old('nombre', $clientes['NOMBRE_CLIENTE'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Identidad</label>
                <input type="text" class="form-control" id="identidad" name="identidad" placeholder="" value="{{old('identidad', $clientes['IDENTIDAD_CLIENTE'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
                @error('identidad')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
                <label for="">RTN</label>
                <input type="text" class="form-control" id="rtn" name="rtn" placeholder="" value="{{old('rtn', $clientes['RTN_CLIENTE'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
                @error('rtn')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Tipo Pago</label>
                <input type="text" class="form-control" id="tipo_pago" name="tipo_pago" placeholder="" value="{{old('tipo_pago', $clientes['TIPO_PAGO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                @error('tipo_pago')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
                <label for="">Direccion</label>
                <input class="form-control" rows="3" name="direccion" id="direccion"  placeholder="" value="{{old('dirreccion',$clientes['DIRECCION'] )}}"required>  <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
                @error('direccion')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Ingreso Cliente</label>
                <input type="date" class="form-control" id="ingreso_cliente" name="ingreso_cliente" placeholder="" value="{{old('ingreso_cliente', $clientes['FECHA_INGRESO_CLIENTE'])}}"equired>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA UNA FECHA</div>
                @error('ingreso_cliente')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
        </div>
            </div>
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('clientes.index') }}">Regresar</a>
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