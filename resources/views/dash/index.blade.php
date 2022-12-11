@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<center>
    <h1>BIENVENIDA AL SISTEMA DE COMIDAS NOYSITA</h1>
</center>
@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">

                <h4>{{$empleados}}</h4>

                <p>Empleados</p>

            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
            <a href="{{route('empleados.index')}}" class="small-box-footer">Ver empleados<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
            <div class="inner">

                <h4>{{$clientes}}</h4>

                <p>Clientes</p>

            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{route('clientes.index')}}" class="small-box-footer">Ver clientes<i class="fas fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
            <div class="inner">

                <h4>{{$proveedores}}</h4>

                <p>Proveedores</p>

            </div>
            <div class="icon">
                <i class="fas fa-box"></i>
            </div>
            <a href="{{route('proveedor.index')}}" class="small-box-footer">Ver proveedores<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
            <div class="inner">

                @foreach($compras as $compra)
                <h4>L {{number_format($compra->total,2)}}</h4>
                @endforeach
                <p>Compras</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="{{route('compra.index')}}" class="small-box-footer">Ver compras<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="card" style="position: relative; left: 0px; top: 0px;">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Grafico
        </h3>
    </div>
    <div class="card-body">
        <div class="tab-content p-0">
            <div id="container">

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

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        // Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
        Highcharts.chart('container', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Compras registradas mensualmente'
            },

            xAxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de compras'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Compras registradas',
                data: @json($conteos)
            }, ]
        });
    </script>
    @stop