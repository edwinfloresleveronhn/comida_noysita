@extends('adminlte::page')

@section('title', 'Reportes')

@section('content_header')
<h1>Gestion de reportes</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-bullhorn"></i>
                    Reportes de empleados
                </h3>
            </div>
            <div class="card-body">
                <div class="text-center"> <a class="btn btn-success float" href="{{route('export_empleado')}}">
                       <i class="fas fa-file-csv"></i>
                        Generar reporte
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-bullhorn"></i>
                    Reportes de clientes
                </h3>
            </div>
            <div class="card-body">
                <div class="text-center"> <a class="btn btn-success float" href="{{route('export_cliente')}}">
                       <i class="fas fa-file-csv"></i>
                        Generar reporte
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-bullhorn"></i>
                    Reportes de proveedores
                </h3>
            </div>
            <div class="card-body">
                <div class="text-center"> <a class="btn btn-success float" href="{{route('export_proveedores')}}">
                       <i class="fas fa-file-csv"></i>
                        Generar reporte
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-bullhorn"></i>
                    Reportes de inventario
                </h3>
            </div>
            <div class="card-body">
                <div class="text-center"> 
                    <a class="btn btn-success float" href="{{route('export_inventario')}}">
                        <i class="fas fa-file-csv"></i>
                        Generar reporte
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop