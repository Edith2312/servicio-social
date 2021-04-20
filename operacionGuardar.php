
<?php

	include("conexionSC.php");


	$nombre= $_POST['nombre'];
	$direccion= $_POST['direccion'];
	$correo= $_POST['correo'];
	$telefono= $_POST['telefono'];
	
	$query="INSERT INTO institucion(institucion_nombre, institucion_direccion, institucion_correo, institucion_telefono) VALUES ('$nombre','$direccion','$correo', '$telefono')";

	$resultado= $conexion->query($query);

	if ($resultado) {
		header("Location:index.php");
	}
	else{
		echo "insercion no exitosa";
	}

	?>