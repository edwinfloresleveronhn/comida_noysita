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




<div class="py-5 service-22">
    <div class="container">
        <!-- Row -->
        <div class="row wrap-service-22">

            <!-- Column -->
            <div class="col-lg-6">
                <img src="https://img.freepik.com/foto-gratis/pollo-frito-crujiente-plato-ensalada-zanahoria_1150-20212.jpg?w=740&t=st=1669740471~exp=1669741071~hmac=5649d3e43875d74a6eb8ef5e00dedd224f9dd4c0b3cced426b0448ddb69fffed" class="rounded img-shadow img-fluid" alt="wrapkit" />
            </div>
            <!-- Column -->
            <div class="col-lg-6 mt-4 mt-md-0">
                <div class="text-box">
                    <h1>NUESTRA COMIDA REPRESENTA:</h1>
                    <h2>
                        <p>los sabores de nuestra amada tierra Honduras sansonadas con mucho amor para que su sabor sea el mejor </p>
                    </h2>
                    <h2>
                        <p></p>
                    </h2>

                </div>
            </div>

            <!-- Column -->
            <div class="row wrap-service-22">
                <!-- Column -->
                <div class="col-lg-6">
                    <p></p>
                    <img src="https://img.freepik.com/foto-gratis/vista-superior-mezcla-comida-rapida-hamburguesa-doner-sandwich-nuggets-pollo-arroz-ensalada-vegetales-palitos-pollo-ensalada-cesar-champinones-pizza-ragu-pollo-papas-fritas-mayo_141793-3997.jpg?w=900&t=st=1669335245~exp=1669335845~hmac=ae23755e494da3152a2145d2bc07a4d560a6c23cc7097b190ff639c7e138a986" class="rounded img-shadow img-fluid" alt="wrapkit" />
                </div>
                <!-- Column -->
                <div class="col-lg-6 mt-4 mt-md-0">
                    <div class="text-box">
                        <h1>COMIDAS NOSYSITA DICE: </h1>
                        <h2>
                            <p>Siempre un placer atenderles en nuestras instalaciones de Tela, Atlantida Como equipo de trabajo hacemos lo mejor posible para que su visita sea agradable y que disfrute de nuestra rico sazón casero en un ambiente seguro, familiar.</p>
                        </h2>

                        <a class="btn btn-info-gradiant btn-md text-white border-0" href="#f20"><span>View Details</span></a>
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