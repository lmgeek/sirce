<?php
session_start();
include('banner_cintillolb.php');
include("libreria.php");

$privilegio=$_SESSION['privilegio'];
$usuario=$_SESSION['usuario'];

if ($_SESSION['privilegio'] == 0) {
    
    echo "<script type=''>alert('ACCESO DENEGADO. Entrada sin autenticarse..!!');
			window.location.href=\"sirce_logueo.php\"</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
	<meta name="viewport" content="initial-scale=1.0">
	<script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
    <meta charset="utf-8"/>
	<script type="text/javascript" href="#"></script>  
    <link rel="stylesheet" type="text/css" href="css/menuadmin.css">
	<link rel="icon" sizes="192x192" href="img/icono-puerta.png">
	<style media="screen"></style>
    <title>MENÚ</title>
</head>

<body background ='img/fondonaranja.jpg' style="font-size:20px;font-family:Consolas" onLoad="nobackbutton()">
<br>

<?php include('sirce_fechaln_menusuar.php'); ?>
<br><br>
<body ontouchstart="" style background ='img/fondonaranja.jpg'>
	
<!-- INICIO DE LA SECCIÓN DEL CUERPO -->

<center><input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu3" class="topmenu">
	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<li class="topfirst"><a href="#" style="height:15px;line-height:15px;"><span>CALIFICACIONES</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_regcalific.php">Agregar</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>DOCENTES</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_regdocente.php">Agregar</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>CONFIGURACIÓN</span></a>
	<ul>
		<li class="subfirst"><a href="#"><span>Usuarios</span></a>
		<ul>
			<li class="subfirst"><a href="sirce_regusuario.php">Nuevo Usuario</a></li>
			<li><a href="sirce_configusuario.php">Modificar Usuario</a></li>
		</ul></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>ESTUDIANTES</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_regestudiante.php">Agregar</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>UNIDAD CURRICULAR</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_incluirmallayuc.php">Agregar Malla y Unidad Curricular</a></li>
		<li><a href="sirce_regperiodo.php">Agregar Período Académico</a></li>
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
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>AYUDA</span></a>
	<ul>
		<li class="subfirst"><a href="sirce_enconstruccion.php">ACERCA DE...</a></li>
		<li><a href="#"><span>MANUALES</span></a>
		<ul>
			<li class="subfirst"><a href="sirce_enconstruccion.php">Administrador (a)</a></li>
			<li><a href="sirce_enconstruccion.php">Usuario (a)</a></li>
		</ul></li>
	</ul></li>
	<li class="toplast"><a href="sirce_salir.php" style="height:15px;line-height:15px;">SALIR</a></li>
</ul></center>
<br>    

<center><table width="604" height="313" border="0">
  <tr>
    <td width="385" rowspan="2"><img src="img/logo_sirce.png" width="445" height="400"></td>
    <td width="203" height="122"><center><?php //*include('sirce_reloj.php');*// ?></center></td>
  </tr>
  
  <tr>
    <td height="92"><center><?php include('sirce_calendario.php');	?></center></td>
  </tr>
</table>
</center>




	</fieldset></center>


<br>
<?php include('banner_pieln.php'); ?>

</body>
</html>