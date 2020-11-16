<?php

function getConn(){
	$servidor 	= "localhost"; // Nombre del Servidor de la Base de Datos
	$usuario  	= "root"; // Usuario de la Base de Datos
	$clave 		= ""; // Contraseña de la Base de Datos 
	$basedato 	= "calificaciones"; // Nombre de la Base de Datos 

//Se Crea la Conexion a la Base de Datos
	$mysqli = mysqli_connect('localhost','root','',"calificaciones");
		if(mysqli_connect_errno($mysqli))
	 	echo "FALLO AL CONECTAR CON LA BASE DE DATOS POR FAVOR INTENTE NUEVAMENTE... " . mysqli_connect_error();
	 	$mysqli->set_charset('utf8');
	 	return $mysqli;
}