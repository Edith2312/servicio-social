<?php
	
	include("conexionSC.php");


	$nombre= $_POST['nombre'];
	
	
	$query="INSERT INTO sector(sector_nombre) VALUES ('$nombre')";
	$resultado= $conexion->query($query);

	if ($resultado) {
		header("Location:index.php");
	}
	else{
		echo "insercion no exitosa";
	}


?>