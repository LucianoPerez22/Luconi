<?php 
	require './nuevo_proveedor.php'; 
	require './editar_proveedor.php'; 
	require './aumento_masivo.php'; 

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GesCom 2020 - Proveedores</title>

	<script src="../lib/js/proveedores.js"></script>

	<?php require '../lib/index/index_head.php'; ?>

 <style>
 		body{
 			background-image: url('../lib/img/fondo1.jpg');
 			background-size: cover;

 		}

 		td{
 			white-space: nowrap;
 		}
      
        .withscroll {
        	width: 100%;
            position: relative;
			height: 500px;
			overflow: auto;
        }
    </style>
</head>
<body>
<div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="#f2f2f2" data-image="../index/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://bsapp.site" class="simple-text logo-normal">
          GesCom 2020
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href="../index/dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="../proveedores/inicio.php">
              <i class="material-icons">person</i>
              <p>Proveedores</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../marcas/inicio.php">
              <i class="material-icons">content_paste</i>
              <p>Marcas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../articulos/inicio.php">
              <i class="material-icons">library_books</i>
              <p>Articulos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../clientes/inicio.php">
              <i class="material-icons">supervisor_account</i>
              <p>Clientes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">addchart</i>
              <p>Informes</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>


	<div class="container-fluid" style="width: auto; margin-left: 240px;" >
			<div class="col-12 small">
				<div class="card text-white">
					<table class="table table-responsive withscroll">
						<thead class="thead-dark">
							<tr>
							<!--	<th>Fecha</th> -->
								<th>Razon Social</th>
								<!--<th>Tipo Cuenta</th> -->
								<!--<th>Cod Postal</th> -->
								<th>Provincia</th>
								<th>Localidad</th>
								<th>Direccion</th>
								<th>CUIT</th>
								<th>Tipo Iva</th>
								<th>Telefonos</th>
								<th>E-mail</th>
								<th>Contacto</th>
								<th>Acciones</th>

							</tr>
						</thead>
						<tbody class="small" id="tabla">
							<script>proveedores_listar();</script>
						</tbody>
						
					</table>

					<div class="row" style="width: 350px;">
						<div class="col-6 mt-5 ">
							<div class="card mt-5 small ">
								<button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#nuevoProveedor">
									Nuevo Proveedor
								</button>
							
								<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#aumentoMasivo">
									Aumento Masivo
								</button>
							</div>
							
						</div>

					</div>
			</div>
		</div>
		
	</div>

</div>	


<!-- LIBRERIA BOOTBOX - ALERT MAS BONITOS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
 <?php require '../lib/index/js_core.php'; ?>
	
</body>
</html>