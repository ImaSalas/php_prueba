<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "20.25.51.254";    // sera el valor de nuestra BD 
	$basededatos = "newAzure";    // sera el valor de nuestra BD 
	$usuariodb = "server";    // sera el valor de nuestra BD 
	$clavedb = "123456789";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "propietario"; 	   // tabla de usuarios
	

	//error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>
