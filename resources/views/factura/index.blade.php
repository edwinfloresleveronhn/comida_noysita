@extends('adminlte::page')

@section('title', 'factura')

@section('content_header')
    <h1>Gestion de Factura</h1>
@stop

@section('content')
<div class="col-md-12"><br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Factura</h3>
            </div>
            <div class="card-body">
                @csrf
                <div class="card-content">
                    <a class="btn btn-success float-right" href="{{ route('factura.create') }}">
                        <i class="fas fa-plus"></i>
                       Crear nueva Factura
                        </a>
                        <br>
                        <br>
                </div>
                <table id="facturas" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Numero Factura</th>
                            <th>Nombre Cliente</th>
                            <th>Rtn</th>
                            <th>Fecha facturacion</th>
                            <th>Cai</th>
                            <th>Platillo</th>
                            <th>Cantidad Platillo</th>
                            <th>Precio</th>
                            <th>IVA</th>
                            <th>Total Factura</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                       @foreach($facturas as $factura)
                            <tr>
                                <td>{{$factura ['NUMERO_FACTURA']}}</td>
                                <td>{{$factura ['NOMBRE_CLIENTE']}}</td>
                                <td>{{$factura ['RTN_CLIENTE']}}</td>
                                <td>{{$factura ['FECHA_FACTURACION']}}</td>
                                <td>{{$factura ['CAI']}}</td>
                                <td>{{$factura ['PLATILLO']}}</td>
                                <td>{{$factura ['CANTIDAD_PLATILLO']}}</td>
                                <td>{{$factura ['PRECIO']}}</td>
                                <td>{{$factura ['IVA']}}</td>
                                <td>{{$factura ['TOTAL_FACTURA']}}</td>
                                <td width='10px'>
                                    <form >
                                        <a class="btn btn-warning " 
                                        href="{{route('factura.edit', $factura['COD_FACTURA'])}}">
                                                <i class="far fa-edit">
                                                </i>
                                            </a>
                                            @csrf
                                        </form>
                                       
                                        </td>
                                    </tr>
                   @endforeach
                    </tbody>
                </table>
                </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">  
@stop

@section('js')
<script> console.log('Hi!'); </script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script> 
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>



<script>
    $(document).ready(function() {
    $('#facturas').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

<script>
  @if(Session::has('agregado'))
  toastr.options =
  {
  	"closeButton" : false,
  	"progressBar" : true,
    "timeOut" : 3000

  }
  		toastr.success("{{ session('agregado') }}");
  @endif
</script>

  <script>
    @if(Session::has('editado'))
    toastr.options =
    {
        "closeButton" : false,
        "progressBar" : true,
      "timeOut" : 3000
  
    }
            toastr.success("{{ session('editado') }}");
    @endif
  </script>
@stop