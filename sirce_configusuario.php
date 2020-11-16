<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
	<script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
    <meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/configusuario.css">
    <title>CONFIGURACIÓN DE USUARIOS</title>
	<script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
<?php
session_start();
	include('banner_cintillolb.php');
	include("libreria.php");
	$privilegio=$_SESSION['privilegio'];
	open_database();
?>

</head>
       
<body bgcolor="#F7E9F7">
<div align="center"><br>
<TABLE border="0">
	<tr>
		<td Width="50"><div align="center"><a href ="javascript:regresar();"><IMG src="./img/icono-atras.png" title="Regresar" alt="Regresar"></a></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_grbr_status();"><IMG src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="350"><div align="right"><IMG src="./img/icono-clave2.png" title="" alt=""></td>
	</tr>
	<tr></tr>
</TABLE>
 <center>
<form name="formu"action="#" method="POST" class="login">
	<input type="hidden" name="privilegio" id="privilegio"/>
	<input type="hidden" name="id_usuario" id="id_usuario" value="" />
	<input type="hidden" name="modulo" id="modulo" value="GSTATUS" />
	<input type="hidden" name="operacion" id="operacion" value="GUARDAR" />
	<fieldset style="width:420px; height:210px"><p>CONFIGURACIÓN DE USUARIOS</p>
   	
	<table width="400" height="160" border="0">
	<tr>
		<td width="180" height="32">
			<div>Usuario:  
			<select id="r_usuario" name="r_usuario" >
				<option value="0"></option>
					<?php
						$sql1="SELECT * FROM usuarios";
						$resultado1 = mysqli_query($conexion,$sql1);
						while($fila1=mysqli_fetch_array($resultado1)){
							echo "<option value=".$fila1['id_usuario'].">".$fila1['usuario']."</option>";
						}
					?>
			</select></div>
		</td>
		<td width="50">
		<IMG src="./img/help-icono.png" title="Seleccione Usuario Registrado " alt="">
		</td>
		
	</tr>
	<tr>
		<td height="32"><div>Cambio de Contraseña:</div></td>
		<td><input type="password" id="r_password" name="r_password" id="clave" size="24" placeholder="Ingrese nueva contraseña" required></td>
	</tr>
	<tr>
		<td height="32"><div>Confirme la Contraseña:</div></td>
		<td><input type="password" id="r_password2" name="r_password2" id="clave2" size="24" placeholder="Repita la contraseña" required></td>
	</tr>
	<tr colspan="2">
		<td height="36">
		<div>STATUS:    
		<select name="r_status" id="r_status" >
			<option value="Activo"></option>
			<option value="Activo">Activo</option>
			<option value="Bloqueado"> Bloqueado </option>
			<option value="Inactivo"> Inactivo </option>
		</select></div>
		</td>
		<td width="50">
		<IMG src="./img/help-icono.png" title="Cambie el Status del usuario seleccionado " alt="">td>
		</td>
	</tr>
</table>
</center>
  </form>
  </fieldset></center>
  
<br><br><br>

<?php
echo "valos del privilegio: ".$_SESSION['privilegio'];
include('banner_pielb.php'); 
?>

</body>
</html>