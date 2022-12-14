@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Gestion de Usuarios</h1>
@stop

@section('content')
  <div class="col-md-12"><br>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Usuarios</h3>
      </div>
      <div class="card-body">
       @if ($errors->any())
       <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>Revise los campos</strong>
           @foreach($errors->all() as $error)
                 <span class="badge bage-danger">{{$error}}</span>
           @endforeach
       </div>  
       @endif

       {!! Form::model($user,['method' => 'PUT' , 'route'=>['usuarios.update', $user->id]]) !!}
      
       <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="name">Nombre</label>
              {!! Form::text('name', null,array('class'=> 'form-control'))!!}
              
            <!--   <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{old('name')}}" required pattern="^[a-zA-Z ]*$"> -->
              <!-- <div class="valid-feedback">DATO VALIDO.</div> -->
              <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INTRODUZCA SOLO LETRAS</div>
              @error('name')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="email">Correo</label>
              {!! Form::text('email', null,array('class'=> 'form-control'))!!}
             <!--  <input type="email" class="form-control" id="email" name="email" placeholder="" value="{{old('email')}}" required> -->
              <!-- <div class="valid-feedback">DATO VALIDO.</div> -->
              <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
              @error('email')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="password">Contraseña</label>
  
             <input type="password" class="form-control" id="password" name="password" placeholder="" value="{{old('password')}}" > 
              <!-- <div class="valid-feedback">DATO VALIDO.</div> -->
              <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
              @error('password')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="confirm-password">Confirmar Contraseña</label>
             
              <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="" value="{{old('confirm-password')}}" >
              <!-- <div class="valid-feedback">DATO VALIDO.</div> -->
              <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
              @error('confirm-password')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="roles">Roles</label>
             {!! Form::select('roles[]',$roles,$userRole, array('class' => 'form-control')) !!}
              <!-- <div class="valid-feedback">DATO VALIDO.</div> -->
              @error('roles')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="card-footer">
        <a class="btn btn-danger" href="{{ route('usuarios.index') }}">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
      
       
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