<?php

	include("conexionSC.php");


	$nombre= $_POST['nombre'];
	$vacante= $_POST['vacante'];
	$sector= $_POST['sector'];
	$numvacante= $_POST['numvacante'];
	
	
	$query="INSERT INTO servicio(servicio_institucion, servicio_vacante, servicio_sector, servicio_numvacante) VALUES ('$nombre','$vacante','$sector', '$numvacante')";


	$resultado= $conexion->query($query);

	if ($resultado) {
		header("Location:index.php");
	}
	else{
		echo "insercion no exitosa";
	}

	

	?>