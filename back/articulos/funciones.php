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

		if ($id==5) {
			llamar_proveedores();
		}

		if ($id==6) {
			llamar_marcas();
		}
	}

	function insertar(){
		$conn=conectar();


		$codigo=strtoupper($_POST['cod_barra']);
		$codigo=trim($codigo);
		$codigo=stripcslashes($codigo);
		$codigo=htmlspecialchars($codigo);

		$id_proveedor=intval($_POST['proveedor']);
		$id_proveedor=trim($id_proveedor);
		$id_proveedor=stripcslashes($id_proveedor);
		$id_proveedor=htmlspecialchars($id_proveedor);


		$id_marca=intval($_POST['marca']);
		$id_marca=trim($id_marca);
		$id_marca=stripcslashes($id_marca);
		$id_marca=htmlspecialchars($id_marca);

		$descripcion=strtoupper($_POST['descripcion']);
		$descripcion=trim($descripcion);
		$descripcion=stripcslashes($descripcion);
		$descripcion=htmlspecialchars($descripcion);

		$ubicacion=strtoupper($_POST['ubicacion']);
		$ubicacion=trim($ubicacion);
		$ubicacion=stripcslashes($ubicacion);
		$ubicacion=htmlspecialchars($ubicacion);

		$costo=floatval($_POST['costo']);
		$costo=trim($costo);
		$costo=stripcslashes($costo);
		$costo=htmlspecialchars($costo);

		$iva=floatval($_POST['tipo_iva']);
		$iva=trim($iva);
		$iva=stripcslashes($iva);
		$iva=htmlspecialchars($iva);

		$ganancia=floatval($_POST['ganancia']);
		$ganancia=trim($ganancia);
		$ganancia=stripcslashes($ganancia);
		$ganancia=htmlspecialchars($ganancia);

		$p_siva=floatval($_POST['p_siva']);
		$p_siva=trim($p_siva);
		$p_siva=stripcslashes($p_siva);
		$p_siva=htmlspecialchars($p_siva);

		$p_iva=floatval($_POST['p_iva']);
		$p_iva=trim($p_iva);
		$p_iva=stripcslashes($p_iva);
		$p_iva=htmlspecialchars($p_iva);

		$existencia=floatval($_POST['existencia']);
		$existencia=trim($existencia);
		$existencia=stripcslashes($existencia);
		$existencia=htmlspecialchars($existencia);


		mysqli_query($conn,"INSERT INTO articulos VALUES(DEFAULT,'$codigo',
															$id_proveedor,
															$id_marca,
															'$descripcion',
															'$ubicacion',
															$costo,
															$iva,
															$ganancia,
															$p_siva,
						 									$p_iva,
						 									$existencia)");
		mysqli_close($conn);
	}

	function listar(){
		$conn=conectar();
		$resultado=array();
		//$conn=mysqli_connect("localhost","root","","luconi");
		if (isset($_POST['art'])) {
			$art_ID=intval($_POST['art']);

			$query=mysqli_query($conn,"SELECT proveedores.razon_social, marcas.descripcion AS marca_desc, articulos.id,articulos.codigo, articulos.descripcion, articulos.ubicacion, articulos.costo,articulos.iva, articulos.ganancia, articulos.p_siva, articulos.p_iva, articulos.existencia, articulos.id_proveedor, articulos.id_marca FROM articulos  INNER JOIN proveedores ON articulos.id_proveedor = proveedores.id INNER JOIN marcas ON articulos.id_marca=marcas.id WHERE articulos.id=$art_ID ");


			}else{
				$query=mysqli_query($conn,"SELECT  proveedores.razon_social, marcas.descripcion AS marca_desc, articulos.id,
					articulos.codigo, articulos.descripcion, articulos.ubicacion, articulos.costo,
					articulos.iva, articulos.ganancia, articulos.p_siva, articulos.p_iva, articulos.existencia FROM articulos  INNER JOIN proveedores ON 
					articulos.id_proveedor = proveedores.id 
				    INNER JOIN marcas ON 
				    articulos.id_marca=marcas.id ");

		}
		

		while ($mostrar = $query->fetch_assoc()) {
				    $resultado[] = $mostrar;
				}	
				mysqli_close($conn);

				echo json_encode($resultado);

		
	}

	function editar(){
		$conn=conectar();

		$art= intval($_POST['art']);
		$cod_barra=strtoupper($_POST['cod_barra']);
		$cod_barra=trim($cod_barra);
		$cod_barra=stripcslashes($cod_barra);
		$cod_barra=htmlspecialchars($cod_barra);

		$proveedor=intval($_POST['proveedor']);
		$proveedor=trim($proveedor);
		$proveedor=stripcslashes($proveedor);
		$proveedor=htmlspecialchars($proveedor);

		$marca=intval($_POST['marca']);
		$marca=trim($marca);
		$marca=stripcslashes($marca);
		$marca=htmlspecialchars($marca);

		$descripcion=strtoupper($_POST['descripcion']);
		$descripcion=trim($descripcion);
		$descripcion=stripcslashes($descripcion);
		$descripcion=htmlspecialchars($descripcion);

		$ubicacion=strtoupper($_POST['ubicacion']);
		$ubicacion=trim($ubicacion);
		$ubicacion=stripcslashes($ubicacion);
		$ubicacion=htmlspecialchars($ubicacion);

		$costo=floatval($_POST['costo']);
		$costo=trim($costo);
		$costo=stripcslashes($costo);
		$costo=htmlspecialchars($costo);

		$iva=floatval($_POST['tipo_iva']);
		$iva=trim($iva);
		$iva=stripcslashes($iva);
		$iva=htmlspecialchars($iva);

		$ganancia=floatval($_POST['ganancia']);
		$ganancia=trim($ganancia);
		$ganancia=stripcslashes($ganancia);
		$ganancia=htmlspecialchars($ganancia);

		$p_siva=floatval($_POST['p_siva']);
		$p_siva=trim($p_siva);
		$p_siva=stripcslashes($p_siva);
		$p_siva=htmlspecialchars($p_siva);

		$p_iva=floatval($_POST['p_iva']);
		$p_iva=trim($p_iva);
		$p_iva=stripcslashes($p_iva);
		$p_iva=htmlspecialchars($p_iva);

		$existencia=floatval($_POST['existencia']);
		$existencia=trim($existencia);
		$existencia=stripcslashes($existencia);
		$existencia=htmlspecialchars($existencia);


		mysqli_query($conn,"UPDATE articulos SET codigo='$cod_barra',
													id_proveedor=$proveedor,
													id_marca=$marca,
													descripcion='$descripcion',
													ubicacion='$ubicacion',
													costo=$costo,
													iva=$iva,
													ganancia=$ganancia,
						 							p_siva=$p_siva,
						 							p_iva=$p_iva,
						 							existencia=$existencia
						 							WHERE id=$art");
		mysqli_close($conn);
	}

	function eliminar(){
		$conn=conectar();

		$art= intval($_POST['art']);

		mysqli_query($conn,"DELETE FROM articulos WHERE id=$art");
		mysqli_close($conn);
	}

	function llamar_proveedores(){
		$conn=conectar();
		$resultado=array();
		
		$query=mysqli_query($conn,"SELECT * FROM proveedores");


		while ($mostrar = $query->fetch_assoc()) {
				    $resultado[] = $mostrar;
				}	
				mysqli_close($conn);

				echo json_encode($resultado);

		
	}

	function llamar_marcas(){
		$conn=conectar();
		$resultado=array();
		
		if (isset($_POST['prov'])) {
			$id_prov=intval($_POST['prov']);
			$query=mysqli_query($conn,"SELECT * FROM marcas WHERE id_prov=$id_prov");

		}else{

			$query=mysqli_query($conn,"SELECT * FROM marcas");

		}
		

		while ($mostrar = $query->fetch_assoc()) {
				    $resultado[] = $mostrar;
				}	
				mysqli_close($conn);

				echo json_encode($resultado);

		
	}

?>
