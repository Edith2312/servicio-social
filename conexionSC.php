<?php

/*$db_host = "localhost";
$db_user = "root";
$db_pasword = "";
$db_name = "servicio social";
*/

$conexion = mysqli_connect("localhost", "root", "", "servicio social");
mysql_query("SET NAMES 'UTF8'");

if (!$conexion) {

	echo "conexion no exitosa";
}
	else {
		echo "Conexion exitosa";
	} 
	
?>