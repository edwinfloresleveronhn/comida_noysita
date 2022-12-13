<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/factura.css')}}">
</head>

<body>
    <form action="{{ route('factura.update', $facturas) }}" method="POST" class="was-validated">
   @csrf
   @method('PUT')
 
   <div class="control-bar">
        <div class="container">
            <div class="row">
                <div class="col-2-4">
                    <div class="slogan">Facturación </div>
                </div>
                <div class="col-4 text-center">
                    <a href="javascript:window.print()">Imprimir</a>
                </div>
                <!--.col-->
            </div>
            <!--.row-->
        </div>
        <!--.container-->
    </div>
    <!--.control-bar-->

    <header class="row">
        <div class="logoholder text-center">
            <img src="{{asset('images/noysita.jpg')}}" width="80px">
        </div>
        <!--.logoholder-->

        <div class="me">
            <p>
                <strong>Comidas Noysita</strong><br>
                CARRETERA CEIBA-TELA, <br>
                San Juan Pueblo.<br>

            </p>
        </div>
        <!--.me-->

        <div class="info">
            <p>
                Correo: <a href="#">comidanoysita@gmail.com</a><br>
                Tel: +504 2436-3185<br>
                Facebook: Comidas Rapidas Noysita
                RTN: 0832837937
            </p>
        </div><!-- .info -->

       

    </header>


    <div class="row section">

        <div class="col-2">
            <h1>Factura</h1>
        </div>
        <!--.col-->

        <div class="col-2 text-right details">
            <p>
                Fecha: {{$facturas['FECHA_FACTURACION']}}  <br>
                Factura #: 000{{$facturas['NUMERO_FACTURA']}} 
            </p>
        </div>
        <!--.col-->



        <div class="col-2">


            <p class="client">
                <strong>Facturar a</strong><br>
                Cliente: {{$facturas['NOMBRE_CLIENTE']}}<br>
                RTN: {{$facturas['RTN_CLIENTE']}}<br>
            </p>
        </div>
        <!--.col-->
        <!--.col-->
    </div>
    <!--.row-->

<!--     <div class="row section" style="margin-top:-1rem">
        <div class="col-1">
            <table style='width:100%'>
                <thead>
                    <tr class="invoice_detail">
                        <th width="25%" style="text-align">Vendedor</th>
                        <th width="25%">Orden de compra </th>
                        <th width="20%">Enviar por</th>
                        <th width="30%">Términos y condiciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="invoice_detail">
                        <td width="25%" style="text-align">John Doe</td>
                        <td width="25%">#PO-2020 </td>
                        <td width="20%">DHL</td>
                        <td width="30%">Pago al contado</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div> -->
    <!--.row-->

    <div class="invoicelist-body">
        <table>
            <thead>
                <th width="60%">Descripción</th>
                <th width="10%">Cant.</th>
                <th width="15%">Precio</th>
                <th class="taxrelated">IVA</th>
                <th width="10%">Total</th>
            </thead>
            <tbody>
                <tr>
                    <td width='60%'><span>{{$facturas ['PLATILLO']}}</span></td>
                    <td class="amount">{{$facturas ['CANTIDAD_PLATILLO']}}</td>
                    <td class="rate">{{$facturas ['PRECIO']}}</td>
                    <td class="tax taxrelated">{{$facturas['IVA']}}</td>
                    <td class="sum">{{$facturas ['TOTAL_FACTURA']}}</td>
                </tr>
            </tbody>
        </table>
      <!--   <a class="control newRow" href="#">+ Nueva fila</a> -->
    </div>
    <!--.invoice-body-->

    <div class="invoicelist-footer">
        <table>
            <tr class="taxrelated">
                <td>IVA:</td>
                <td id="total_tax">{{$facturas['IVA']}}</td>
            </tr>
            <tr>
                <td><strong>Total:</strong></td>
                <td id="total_price">{{$facturas ['TOTAL_FACTURA']}}</td>
            </tr>
        </table>
    </div>

  <!--   <div class="note">
        <h2>Nota:</h2>
    </div> -->
    <!--.note-->

  <!--   <footer class="row">
        <div class="col-1 text-center">
            <p class="notaxrelated">El monto de la factura no incluye el impuesto sobre las ventas.</p>

        </div>
    </footer> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')
    </script>
    <script src="assets/js/main.js"></script>
  </form>
  

    
</body>

</html>