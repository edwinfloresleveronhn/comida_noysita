<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="La3v9AOshPcuz7eqP7WbsRNGAmJio5xddh4CDTGK">

    
    
    
    <title>
                Respaldo            </title>

    
    
    
            <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

        
        
        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">

                    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            
    
    
    
            <link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">     

    
    
</head>

<body class="sidebar-mini" >

    
        <div class="wrapper">

        
                    <div class="preloader flex-column justify-content-center align-items-center">

    
    <img src="http://127.0.0.1:8000/vendor/adminlte/dist/img/noysita.jpg"
         class="animation__shake"
         alt="AdminLTE Preloader Image"
         width="200"
         height="200">

</div>
        
        
                    <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">

    
    <ul class="navbar-nav">
        
        <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"
                        >
        <i class="fas fa-bars"></i>
        <span class="sr-only">Toggle navigation</span>
    </a>
</li>
        
        
        
            </ul>

    
    <ul class="navbar-nav ml-auto">
        
        
        
        
        
                                    <li class="nav-item dropdown user-menu">

    
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span >
            comidas noysita
        </span>
    </a>

    
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        
                            
        
        
        
        
        
        <li class="user-footer">
                        <a class="btn btn-default btn-flat float-right  btn-block "
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off text-red"></i>
                Log Out
            </a>
            <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="La3v9AOshPcuz7eqP7WbsRNGAmJio5xddh4CDTGK">
            </form>
        </li>

    </ul>

</li>
                    
        
            </ul>

</nav>
        
        
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">

    
            <a href="http://127.0.0.1:8000/home"
            class="brand-link "
    >

    
    <img src="http://127.0.0.1:8000/vendor/adminlte/dist/img/AdminLTELogo.png"
         alt="Admin Logo"
         class="brand-image img-circle elevation-3"
         style="opacity:.8">

    
    <span class="brand-text font-weight-light ">
        <b>COMIDAS   </b>NOYSITA
    </span>

</a>
    
    
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column "
                data-widget="treeview" role="menu"
                                >
                
                <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/dash"        >

        <i class="fas fa-hamburger "></i>

        <p>
            Panel de Bienvenida

                    </p>

    </a>

</li>

<li  class="nav-header ">

    MODULOS SISTEMA

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-id-card "></i>

        <p>
             Empleados
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/empleados"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Gestion de Empleado

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-fw fa-user "></i>

        <p>
             Clientes
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/cliente"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Gestion de Cliente

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-box "></i>

        <p>
             Gestion de Suministros
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/proveedor"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
             Proveedores

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/compra"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Compra de Producto

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/platillos"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Catalogo de Platillos

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/inventario"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Inventario

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-folder "></i>

        <p>
             Gestion de factura
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/cai"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
             Gestion del CAI

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-fw fa-file "></i>

        <p>
             Facturacion 
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/factura"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
             Creacion de Factura

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-header ">

    ADMINISTRACION DE SISTEMA

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-shield-alt "></i>

        <p>
             seguridad
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/logs"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Gestion de Logs

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-user-shield "></i>

        <p>
             Rol de usuarios y bitacora
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/usuarios"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Usuarios

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/rol"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Roles

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/bitacora"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            bitacora

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-bullhorn "></i>

        <p>
             Reportes
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="http://127.0.0.1:8000/reportes"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Reportes

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-header ">

    RESPALDO DEL SISTEMA

</li>

<li  class="nav-item has-treeview menu-open">

    
    <a class="nav-link active "
       href="" >

        <i class="fas fa-download "></i>

        <p>
             Respaldo 
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link active "
       href="http://127.0.0.1:8000/respaldo"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Gestion de Respaldo

                    </p>

    </a>

</li>

    </ul>

</li>

            </ul>
        </nav>
    </div>

</aside>
        
        
                    <div class="content-wrapper ">

    
            <div class="content-header">
            <div class="container-fluid">
                    <h1>Respaldo de sistema</h1>
            </div>
        </div>
    
    
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12"><br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Respaldo</h3>
            </div>
            <div class="card-body">
                <input type="hidden" name="_token" value="La3v9AOshPcuz7eqP7WbsRNGAmJio5xddh4CDTGK">                <div class="card-content">
                <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Fuente Web | Backup DB</title>
		<meta name="description" content="Backup my database es un software de respaldo de base de datos gratuito que cualquier desarrollador puede usar en su sitio para respaldar una BASE DE DATOS reciente." />
		<meta name="keywords" content="database, mysql, db, backup, localhost, username, user, password, phpmyadmin" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		<link href="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
		
		<!-- switchery CSS -->
		<link href="vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
			
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">RESPALDO DE BASE DE DATOS</h3>
											
											<!DOCTYPE html>
											<html>
											<head>
												<meta charset="UTF-8">

											<body>
												<h1 class="text-center txt-dark mb-10">PRESIONE EL BOTON PARA GENERAR LA COPIA</h1>
												<div class="container my-3 bg-light">
													<div class="col-md-12 text-center">
												<a href="./respaldo" download="noysita_fin.sql" download="">
													
													<button ><i class="fas fa-download"></i> Descargar archivo</button>
													</div>
												</a>
											</body>
											</html>
											
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="dist/js/toast-data.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>

                   
                    
                </table>
                </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
        </div>
    </div>

</div>
        
        
        
        
        
    </div>

    
            <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        
        
        <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
    
    
    
    
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
    $('#respaldo').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
    } );
} );
</script>



</body>

</html>
