<?php
include('banner_cintilloln.php');
?>
<html lang="es">
<head>
<script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/recuperarclave.css">
<meta charset="utf-8"/>
<style media="screen"></style>
<title>Método de Recuperación de Contraseña</title>
<script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#correo, #desafio").toggle(false);
	$(":radio").on("change", function(){
        var iform=$(this).val();
        $("#correo").toggle(iform=="correo");
        $("#desafio").toggle(iform!="correo");
    });
});
</script>

</head>

<body ontouchstart="" style background ='img/fondonaranja.jpg'>

<p>RECUPERAR ACCESO AL SISTEMA</p>

<center><fieldset style="width:500px; height:200px">

<center><h1>Seleccione un Método para Recuperar el Usuario y la Contraseña:</h1></center>

<br>

<form name="formo" id="recuperar" action="#" method="POST">
<input type="hidden" name="id_opcion" id="id_opcion" value="" />
<table width="380" border="0">
<tr>
    <td width="120"><strong>Por Correo:</strong></td>
    <td width="29"><label><input name="opcion" type="radio" value="correo"></label></td>
	<td width="30"></td>
    <td width="130"><strong>Por Desafío:</strong></td>
    <td width="30"><label><input name="opcion" type="radio" value="desafio"></label></td>
</tr>
</table>
<table width="380" border="0">
<tr>
</tr>
<tr id="correo" colspan="1" bgcolor="#FFFFFF">
	<td>
	<div align="center"><b>Correo Registrado:</b><input type="email" size="50" name="email" id="email" placeholder="email@correo.com" autofocus /></div><br>
	<td><input type="submit" value="VALIDAR" onClick="validaremail()"/></td>
	</div>
	</td>
	<br>
</tr>
<tr id="desafio" colspan="1" bgcolor="#FFFFF">
	<div align="center">		
	<td width="30">
		<div align="center"><b>Usuario:<br>
		<input type="text" size="20" name="x_usuario" id="x_usuario" placeholder="Ingrese su usuario" autofocus  /></div>
	</td>
	<td width="40">
		<div align="center"><b>Pregunta de Seguridad:<br>
			<select name="r_pregunta" id="r_pregunta">
				<option value=""></option>
				<option value="A">SEGUNDO NOMBRE DE MI MADRE.</option>
				<option value="B">¿CUÁL ES EL NOMBRE DE MI MACOTA?</option>
				<option value="C">SEGUNDO NOMBRE DE MI PADRE.</option>
				<option value="D">MES DE NACIMIENTO DE MI PRIMER HIJO</option>
				<option value="E">¿CUÁL ES MI COLOR FAVORITO?</option>
				<option value="F">MES ANIVERSARIO DE BODA.</option>
				<option value="G">¿CUÁNTAS HERMANAS TIENE MI PADRE?</option>
			</select>
		</div>
	</td>
	<td width="40"><br>
		<div align="center"><b>Respuesta:<br>
		<input type="password" size="30" name="r_respuesta" id="r_respuesta" placeholder="Ingrese su respuesta" autofocus  /><br><br></div>
	</td>
	<td><br>
	<input type="submit" value="VALIDAR" onClick="desafio();" />
	</td>
</tr>	 
</table>
</form>	
</center>

</fieldset>
</center>

<?php
include('banner_pieln.php'); 
?>

</body>
</html>

