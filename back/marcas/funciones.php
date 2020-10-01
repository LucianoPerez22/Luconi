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
	}

	function insertar(){
		$conn=conectar();

		$id_prov=intval($_POST['proveedor']);
		$id_prov=trim($id_prov);
		$id_prov=stripcslashes($id_prov);
		$id_prov=htmlspecialchars($id_prov);

		$descripcion=strtoupper($_POST['descripcion']);
		$descripcion=trim($descripcion);
		$descripcion=stripcslashes($descripcion);
		$descripcion=htmlspecialchars($descripcion);

		
		mysqli_query($conn,"INSERT INTO marcas VALUE(DEFAULT,$id_prov,
															'$descripcion')");
		mysqli_close($conn);
	}

	function listar(){
		$conn=conectar();
		$resultado=array();
		//$conn=mysqli_connect("localhost","root","","luconi");
		if (isset($_POST['marca'])) {
			$marca_id=intval($_POST['marca']);

			$query=mysqli_query($conn,"SELECT marcas.id,  proveedores.razon_social, marcas.descripcion, 
										proveedores.id 
			 							FROM marcas 
										INNER JOIN proveedores 
										ON marcas.id_prov=proveedores.id WHERE marcas.id=$marca_id");


			}else{
				$query=mysqli_query($conn,"SELECT marcas.id,  proveedores.razon_social, marcas.descripcion 							FROM marcas 
												INNER JOIN proveedores 
												ON marcas.id_prov=proveedores.id");

		}
		

		while ($mostrar = $query->fetch_assoc()) {
				    $resultado[] = $mostrar;
				}	
				mysqli_close($conn);

				echo json_encode($resultado);

		
	}

	function editar(){
		$conn=conectar();

		$marca_id= intval($_POST['marcas']);
		$id_prov=$_POST['proveedor'];
		$descripcion=strtoupper($_POST['editar_descripcion']);
		


		mysqli_query($conn,"UPDATE marcas SET id_prov='$id_prov',
													descripcion='$descripcion'
													 WHERE id=$marca_id");
		mysqli_close($conn);
	}

	function eliminar(){
		$conn=conectar();

		$marca_id= intval($_POST['marca_id']);

		mysqli_query($conn,"DELETE FROM marcas WHERE id=$marca_id");
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

	
	
?>
