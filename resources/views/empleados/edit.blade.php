@extends('adminlte::page')

@section('title', 'Empleado')

@section('content_header')
    <h1>Gestion de empleados</h1>
@stop

@section('content')
<form action="{{ route('empleados.update', $empleados) }}" method="POST" class="was-validated">
   @csrf
   @method('PUT')
   <div class="col-md-12"><br>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Empleados</h3>
        </div>
        <div class="card-body">
            @csrf
            <div class="row">
            <div class="col-6">
        <div class="form-group">
            <label for="">Nombre Empleado</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="{{old('nombre',$empleados['NOMBRE_EMPLEADO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
            @error('nombre')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Identidad</label>
            <input type="number" class="form-control" id="identidad" name="identidad" placeholder=""value="{{old('identidad',$empleados['IDENTIDAD_EMPLEADO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
            @error('identidad')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
            <label for="">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" placeholder="" value="{{old('edad',$empleados['EDAD_EMPLEADO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
            @error('edad')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Correo empleado</label>
            <input type="text" class="form-control" id="correo_empleado" name="correo_empleado" placeholder="" value="{{old('correo_empleado',$empleados['CORREO_EMPLEADO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO CORREO VALIDO</div>
            @error('correo_empleado')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
            <label for="">Numero Celular</label>
            <input type="number" class="form-control"  name="numero_celular" id="numero_celular"  placeholder="" value="{{old('numero_celular',$empleados['NUMERO_CELULAR_EMPLEADO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
            @error('numero_celular')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Estado Civil</label>
            <input type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder="" value="{{old('estado_civil',$empleados['ESTADO_CIVIL_EMPLEADO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
            @error('estado_civil')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
       </div>
 </div>
      <div class="row">
          <div class="col-6">
          <div class="form-group">
            <label for="">Inicio Contrato</label>
            <input type="date" class="form-control" id="inicio_contrato" name="inicio_contrato" placeholder="" value="{{old('inicio_contrato',$empleados['INICIO_CONTRATO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA UNA FECHA</div>
            @error('inicio_contrato')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="col-6">
      <div class="form-group">
          <label for="">Cargo Empleado</label>
          <input type="text" class="form-control" id="cargo_empleado" name="cargo_empleado" placeholder="" value="{{old('cargo_empleado',$empleados['CARGO_EMPLEADO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
          @error('cargo_empleado')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
    </div>       
      </div>
    
      
       <div class="row">
      <div class="col-6">
      <div class="form-group">
          <label for="">Salario</label>
          <input type="number" class="form-control" id="salario" name="salario" placeholder="" value="{{old('salario',$empleados['SALARIO_EMPLEADO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO NUMEROS</div>
          @error('salario')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
    </div>
    <div class="col-6">
      <div class="form-group">
          <label for="">Fecha ingreso</label>
          <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" placeholder="" value="{{old('fecha_ingreso',$empleados['FECHA_INGRESO'])}}"required>    <div class="valid-feedback">DATO VALIDO.</div><div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA UNA FECHA</div>
          @error('fecha_ingreso')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
    </div>
   </div>
  
        </div>
        <div class="card-footer">
        <a class="btn btn-danger" href="{{ route('empleados.index') }}">Regresar</a>
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