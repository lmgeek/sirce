<?php
include('banner_cintillolb.php');
//include("js/scripts1.js");
include("libreria.php");
$config = parse_ini_file('calificaciones.ini');
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
mysqli_set_charset($conexion,"utf8");
?>
<?php
  //session_start();
   //if (@!$_SESSION['usuario']) {
   // header("Location:sircadmon_logueo.php");
//}
?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
	<meta name="viewport" content="initial-scale=1.0">
	<script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/validaciones.js"></script>
    <meta charset="utf-8"/>
	<script type="text/javascript" href="#"></script>  
    <link rel="stylesheet" type="text/css" href="css/logeo.css">
	<link rel="icon" sizes="192x192" href="img/icono-puerta.png">
	<style media="screen"></style>
    <title>Logueo</title>
</head>

<!--<script language="javascript" src="js/scripts1.php"></script>-->

<body background ='img/fondonaranja.jpg' style="font-size:20px;font-family:Consolas" onLoad="nobackbutton()">
<br>
<form name="flogueo" action="" method="POST" class="login">
	<input type="hidden" name="status" id="status" value="Activo" />
    <input type="hidden" name="r_modulo" id="modulo" value="1" />
	<input type="hidden" name="privilegi" id="privilegio" value="" />
    <div class="contenedor">
    <center>
    <fieldset style="width:340px; height:350px">
	<br>
    <div><img src="img/sirce_usuarios.png" width="70" height="70"></div>
    <table width="200" border="0">
	<tr>
		<td width="10" height="30"><div>USUARIO:</div></td>
		<td width="10"><input name="r_usuario" type="text" id="Usuario" style='font-size:13px;color:black' size="15" placeholder="Usuario" required></td>
	</tr>
	<tr>
		<td width="10" height="30"><div>CONTRASEÑA:</div></td>
		<td width="10"><input name="password" type="password" id="Password" style='font-size:13px;color:black' size="15" placeholder="Clave" required></td>
	</tr>
	<tr>
		<td colspan="2" align="center" height="90px">
			<div class="scaptcha" align="center">
			<img src="./captcha/captcha.php" width="120" height="40" />&nbsp;&nbsp;&nbsp;
			<a href =""><img src="./img/icono-refrescar.png" height="34%" title="Refrescar" Onclick="return./captcha/captcha.php"/></a>
			<input type="text" size="37" name="tmptxt" id="Captcha" class="input_1" style='font-size:13px;color:black' placeholder="Edite Código Captcha" align="center"/>		
		  </div>
		</td>
	</tr>
		
	<tr>
		<td height="20">
			<div class="validacion" align="center"><a href ="sircadmon_tsistemas.php"><img src="./img/icono-saliratras.png" title="Salir" /></a></div>
		</td>
		<td align="center">
			<div class="validacion" align="center"><a href ="javascript:validaclave();"><img src="./img/icono-entrada.png" width="38%" height="27%" title="Ingresar" /></a></div>
		</td>
	</tr>
	</table>
    <p><a href="javascript:recuperarclave();" style='font-size:14px;color:white'><strong>He Olvidado mi Clave...</strong></a></p>
    </p>
    <center>
	</fieldset>
	</div>
</form>

<?php include('banner_pieln.php'); ?>

</body>
</html>