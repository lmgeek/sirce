<?php 

	session_start();
	if ($_SESSION['usuario']){
		session_destroy();
		header("Location:sirce_logueo.php");
	}
	else{
		header("Location:sirce_logueo.php");
	}
?>