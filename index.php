<?php
include('banner_cintilloln.php');
//include('js/scripts1.js');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
  <link rel="stylesheet" type="text/css" href="css/bienvenida.css">
  <meta charset="utf-8"/>
  <link rel="icon" type="image/png" href="favicon.png" />
  <link rel="shortcut icon" href="img/favicon.ico" /><!--Codigo para agrega icono a la barra de navegado!-->
  <link rel = "icono de acceso directo" type = "image / x-icon" href = "/ favicon.ico"><!--Codigo para agrega icono a la barra de navegado!-->
  <title>BIENVENIDO (A)</title>
</head>
       
<body background ='img/fondonaranja.jpg' style='font-size:46px;font-family:Arial,Helvetica,sans-serif' onLoad='nobackbutton()'>
<div>
    <center>
	<form action="sirce_logueo.php" method="POST" class="login">
	
		<fieldset style="width:635px; height:240px">
		<span>BIENVENIDO (A)</span>
		<span>
		<h1>Bienvenidos (as) al Sistema Informático para el Registros de Calificaciones Estudiantiles del Programa Nacional de Formación en Administración (P.N.F.A.), de la Universidad Politécnica Territorial de Falcón “Alonso Gamero” de la Ciudad de Santa Ana de Coro Estado Falcón, Venezuela.</h1>
		</span>
		<span>S.I.R.C.E.</span>
		
	
	<div><input name="entrat" type="submit" value="Entrar"></div>
	</fieldset>
	</form>
	</center>

<?php
include('sirce_fechalb.php');
include('banner_pieln.php');
?>
</body>


</html>