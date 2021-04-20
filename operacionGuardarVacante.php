<?php
	
	include("conexionSC.php");
	

	$puesto= $_POST['puesto'];
	$descripcion= $_POST['descripcion'];
	
	$query="INSERT INTO vacante(vacante_puesto, vacante_descripcion) VALUES ('$puesto', '$descripcion')";
	$resultado= $conexion->query($query);

	if ($resultado) {
		header("Location:index.php");
	}
	else{
		echo "insercion no exitosa";
	}

?>