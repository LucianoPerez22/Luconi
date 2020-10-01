<?php	
	require '../conexion/conexion.php';

	date_default_timezone_set('America/Argentina/Buenos_Aires');

	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		if ($id==1) {
			insertar();
		}

		if ($id==2) {
			listar();
		}

		if ($id==3) {
			editar();
		}

		if ($id==4) {
			eliminar();
		}
	}

	function insertar(){
		$conn=conectar();

		//$conn=mysqli_connect("localhost","root","","luconi");

		$fecha=date("Y-m-d");
		$razon_social=strtoupper($_POST['razon_social']);
		$razon_social=trim($razon_social);
		$razon_social=stripcslashes($razon_social);
		$razon_social=htmlspecialchars($razon_social);

		$tipo_cuenta=strtoupper($_POST['tipo_cuenta']);
		$tipo_cuenta=trim($tipo_cuenta);
		$tipo_cuenta=stripcslashes($tipo_cuenta);
		$tipo_cuenta=htmlspecialchars($tipo_cuenta);

		$cod_postal=strtoupper($_POST['cod_postal']);
		$cod_postal=trim($cod_postal);
		$cod_postal=stripcslashes($cod_postal);
		$cod_postal=htmlspecialchars($cod_postal);

		$provincia=strtoupper($_POST['provincia']);
		$provincia=trim($provincia);
		$provincia=stripcslashes($provincia);
		$provincia=htmlspecialchars($provincia);

		$localidad=strtoupper($_POST['localidad']);
		$localidad=trim($localidad);
		$localidad=stripcslashes($localidad);
		$localidad=htmlspecialchars($localidad);

		$direccion=strtoupper($_POST['direccion']);
		$direccion=trim($direccion);
		$direccion=stripcslashes($direccion);
		$direccion=htmlspecialchars($direccion);

		$cuit=strtoupper($_POST['cuit']);
		$cuit=trim($cuit);
		$cuit=stripcslashes($cuit);
		$cuit=htmlspecialchars($cuit);

		$tipo_iva=strtoupper($_POST['tipo_iva']);
		$tipo_iva=trim($tipo_iva);
		$tipo_iva=stripcslashes($tipo_iva);
		$tipo_iva=htmlspecialchars($tipo_iva);

		$telefonos=strtoupper($_POST['telefonos']);
		$telefonos=trim($telefonos);
		$telefonos=stripcslashes($telefonos);
		$telefonos=htmlspecialchars($telefonos);

		$email=$_POST['email'];
		$email=trim($email);
		$email=stripcslashes($email);
		$email=htmlspecialchars($email);

		$contacto=strtoupper($_POST['contacto']);
		$contacto=trim($contacto);
		$contacto=stripcslashes($contacto);
		$contacto=htmlspecialchars($contacto);


		mysqli_query($conn,"INSERT INTO proveedores VALUE(DEFAULT,'$fecha',
															'$razon_social',
															'$tipo_cuenta',
															'$cod_postal',
															'$provincia',
															'$localidad',
															'$direccion',
															'$cuit',
															'$tipo_iva',
						 									'$telefonos',
						 									'$email',
						 									'$contacto')");
		mysqli_close($conn);
	}

	function listar(){
		$conn=conectar();
		$resultado=array();
		//$conn=mysqli_connect("localhost","root","","luconi");
		if (isset($_POST['prov'])) {
			$prov_id=intval($_POST['prov']);

			$query=mysqli_query($conn,"SELECT * FROM proveedores WHERE id=$prov_id");


			}else{
				$query=mysqli_query($conn,"SELECT * FROM proveedores");

		}
		

		while ($mostrar = $query->fetch_assoc()) {
				    $resultado[] = $mostrar;
				}	
				mysqli_close($conn);

				echo json_encode($resultado);

		
	}

	function editar(){
		$conn=conectar();

		$user= intval($_POST['user']);
		$razon_social=strtoupper($_POST['razon_social']);
		$tipo_cuenta=strtoupper($_POST['tipo_cuenta']);
		$cod_postal=strtoupper($_POST['cod_postal']);
		$provincia=strtoupper($_POST['provincia']);
		$localidad=strtoupper($_POST['localidad']);
		$direccion=strtoupper($_POST['direccion']);
		$cuit=strtoupper($_POST['cuit']);
		$tipo_iva=strtoupper($_POST['tipo_iva']);
		$telefonos=strtoupper($_POST['telefonos']);
		$email=$_POST['email'];
		$contacto=strtoupper($_POST['contacto']);


		mysqli_query($conn,"UPDATE proveedores SET razon_social='$razon_social',
													tipo_cuenta='$tipo_cuenta',
													cod_postal='$cod_postal',
													provincia='$provincia',
													localidad='$localidad',
													direccion='$direccion',
													cuit='$cuit',
													tipo_iva='$tipo_iva',
						 							telefonos='$telefonos',
						 							email='$email',
						 							contacto='$contacto' WHERE id=$user");
		mysqli_close($conn);
	}

	function eliminar(){
		$conn=conectar();

		$user= intval($_POST['user']);

		mysqli_query($conn,"DELETE FROM proveedores WHERE id=$user");
		mysqli_close($conn);
	}

	
	
?>
