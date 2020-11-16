<?php
include('banner_cintilloln.php');
include("libreria.php");
$config = parse_ini_file('calificaciones.ini');
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
mysqli_set_charset($conexion,"utf8");
?>

<?php
  //session_start();
   //if (@!$_SESSION['usuario']) {
    //header("Location:sirce_logueo.php");
//}
?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
	<meta name="viewport" content="initial-scale=1.0">
	<script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/scripts1.js"></script>
    <meta charset="utf-8"/>
	<script type="text/javascript" href="#"></script>  
    <link rel="stylesheet" type="text/css" href="css/menusuar.css">
	<link rel="icon" sizes="192x192" href="img/icono-puerta.png">
	<style media="screen"></style>
    <title>MENÚ</title>
</head>

<body bgcolor='#F7E9F7' style="font-size:20px;font-family:Consolas" onLoad="nobackbutton()">
<br>

	<center><fieldset style="width:960px; height:520px">
<br>
<?php include('sirce_fechaln_menusuar.php'); ?>

<body ontouchstart="" style="background-color:#EBEBEB">

<!-- INICIO DE LA SECCIÓN DEL CUERPO -->

<center><input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu3" class="topmenu">
	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<li class="topfirst"><a href="#" style="height:15px;line-height:15px;"><span>CALIFICACIONES</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_regcalific.php#">Agregar</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>DOCENTES</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_enconstruccion.php">Agregar</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>CONFIGURACIÓN</span></a>
	<ul>
		<li class="subfirst"><a href="#"><span>Usuarios</span></a>
		<ul>
			<li class="subfirst"><a href="sirce_enconstruccion.php">Nuevo Usuario</a></li>
		</ul></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>ESTUDIANTES</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_enconstruccion.php">Agregar</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>UNIDAD CURRICULAR</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_enconstruccion.php">Agregar Malla y Unidad Curricular</a></li>
		<li><a href="sirce_enconstruccion.php">Agregar Período Académico</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>MANTENIMIENTO</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_agenda.php">Agenda Departamental</a></li>
		<li><a href="#"><span>Base de Dato</span></a>
		<ul>
			<li class="subfirst"><a href="sirce_enconstruccion.php">Respaldo BD</a></li>
			<li><a href="sirce_enconstruccion.php">Restauración de BD</a></li>
		</ul></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>REPORTES</span></a>
	<ul>
		<li class="subfirst"><a href="#">Agenda Departamental</a></li>
		<li><a href="sirce_enconstruccion.php">Calificaciones</a></li>
		<li><a href="sirce_enconstruccion.php">Docentes</a></li>
		<li><a href="sirce_enconstruccion.php">Estudiantes</a></li>
		<li><a href="sirce_enconstruccion.php">Unidad Curricular</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>AYUDA</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_enconstruccion.php">ACERCA DE...</a></li>
		<li><a href="#"><span>MANUALES</span></a>
		<ul>
			<li class="subfirst"><a href="sirce_enconstruccion.php">Usuario (a)</a></li>
		</ul></li>
	</ul></li>
</center>


<table width="685" border="0">
  <tr>
    <td width="685"><center><img src="img/logo_sirce.png" width="445" height="400"></td>
  </tr>
</table>
</center>

	</fieldset></center>


<br>
<?php include('banner_pielb.php'); ?>

</body>
</html>