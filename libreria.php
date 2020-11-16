<?php

function open_database(){

	// cargando la configuracion
$config = parse_ini_file('calificaciones.ini');

	// hacemos conecion con los datos del 'config.ini'
global $conexion;
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);

	// comprobamos si la conexion falla, aparece un error
if($conexion===false){
	die("Error en conexion!!:");
}
	//cambia el conjunto de caracteres a utf8
mysqli_set_charset($conexion,"utf8");

}

//function rregresar(){
//	$xpvl=$_POST['privilegio'];
//		
//	if($xpvl==1){
//		echo "<script type=''>window.location.href=\"sircadmon_menuadmin.php\"</script>";
//	}
//	if($xpvl==2){
//		echo "<script type=''>window.location.href=\"sircadmon_menusuar.php\"</script>";
//	}
//	if($xpvl==3){
//		echo "<script type=''>window.location.href=\"sircadmon_menucensos.php\"</script>";
//	}
//}
?> 
