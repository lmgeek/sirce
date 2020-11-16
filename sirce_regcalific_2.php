<?php
//session_start();
include('banner_cintillolb.php');
//include("libreria.php");
//$config = parse_ini_file('sircadmon.ini');
//$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
//mysqli_set_charset($conexion,"utf8");
//$privilegio=$_SESSION['privilegio'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
  <link rel="stylesheet" type="text/css" href="css/regcalific.css">
  <meta charset="utf-8"/>
  <link rel="icon" type="image/png" href="favicon.png" />
  <script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
  <link rel="shortcut icon" href="img/favicon.ico" /><!--Codigo para agrega icono a la barra de navegado!-->
  <link rel = "icono de acceso directo" type = "image / x-icon" href = "/ favicon.ico"><!--Codigo para agrega icono a la barra de navegado!-->
  <title>REGISTRO DE CALIFICACIONES EN ACTA</title></head>
       
<body bgcolor='#F7E9F7' style='font-size:46px;font-family:Arial,Helvetica,sans-serif' onLoad='nobackbutton()'>
<div align="center"><br>
<Table border="0">
	<tr>
		<td Width="50"><div align="center"><a href ="javascript:regresar();"><IMG src="./img/icono-atras.png" title="Regresar" alt="Regresar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_novo_regcalific();"><IMG src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_grbr_regcalific();"><IMG src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
		<td Width="50"><div align="center">
	    <a href ="javascript:dt_bscr_calificaciones();"><img src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_borr_docente();"><IMG src="./img/icono-borrar.png" title="Borrar" alt="Borrar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_novo_alumno;"><img src="./img/agregar_estudiante.png" width="35" height="36"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="350"><div align="right"><IMG src="./img/icono-usuario.png" width="50" height="50" title="" alt="Registro"></td>
	</tr>
	<tr></tr>
</table>
</center>

    <center>
	<form action="#" method="POST" class="regcalific">
	
		<br>
			<fieldset style="width:900px; height:220px">
			<br>
			<b>
			<p>Información de Estdudiante y Calificaciones:</p>
			</b>
				<br>
				<table width="679" border="0">
  <tr>
    <td width="185" height="29"><strong>Apellido (s) y Nombre (s):</strong></td>
    <td width="484"><input type="text" name="apellidos_nombres" id="apellidos_nombres" size="50" placeholder= "Ingrese el (los) Apellido (s) y Nombre (s):" onKeyPress="return letra(event)" required></td>
  </tr>
</table>

<table width="679" border="0">
  <tr>
    <td width="165" height="30"><strong>Código Estudiantil:</strong></td>
    <td width="99"><input name="codest" type="text" id="codest" size="10" placeholder= "Ingrese C&oacute;d. Estud." required onKeyPress="return solonumeros(event)"></td>
    <td width="202"><strong>Cédula de Identidad:</strong></td>
    <td width="195"><input name="cedula" type="text" id="cedula" size="20" placeholder="Ingrese C.I. Est." required onKeyPress="return solonumeros(event)"></td>
    
  </tr>
</table>

<table width="679" border="0">
  <tr>
    <td width="92" height="40"><strong>Calificación:</strong></td>
    <td width="61"><strong>Numérica:</strong></td>
    <td width="123"><select name="numerica" id="numerica">
      <option value="selected">Seleccione</option>
      <option value="IN">IN</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>	  
      <option value="05">05</option>	  
      <option value="06">06</option>	  
      <option value="07">07</option>
      <option value="08">08</option>	  
      <option value="09">09</option>	  
      <option value="10">10</option>	  
      <option value="11">11</option>
      <option value="12">12</option>	  
      <option value="13">13</option>	  
      <option value="14">14</option>
      <option value="15">15</option>	  
      <option value="16">16</option>	  
      <option value="17">17</option>	  
      <option value="18">18</option>	  
      <option value="19">19</option>	  
      <option value="20">20</option>	  	  	  	  
    </select></td>
    <td width="47"><strong>Letra: </strong></td>
    <td width="137"><select name="letra" id="letra">
      <option value="selected">Seleccione</option>
      <option value="Inasistente">Inasistente</option>
      <option value="Cero Uno">Cero Uno</option>
      <option value="Cero Dos">Cero Dos</option>
      <option value="Cero Tres">Cero Tres</option>
      <option value="Cero Cuatro">Cero Cuatro</option>
      <option value="Cero Cinco">Cero Cinco</option>
      <option value="Cero S�is">Cero S�is</option>
      <option value="Cero Siete">Cero Siete</option>
      <option value="Cero Ocho">Cero Ocho</option>
      <option value="Cero Nueve">Cero Nueve</option>
      <option value="Diez">Diez</option>
      <option value="Once">Once</option>
      <option value="Doce">Doce</option>
      <option value="Trece">Trece</option>
      <option value="Catorce">Catorce</option>
      <option value="Quince">Quince</option>
      <option value="Dicis�is">Dicis�is</option>
      <option value="Diecisiete">Diecisiete</option>
      <option value="Dieciocho">Dieciocho</option>
      <option value="Diecinueve">Diecinueve</option>
      <option value="Veinte">Veinte</option>
    </select></td>
    <td width="57"><strong>Aprobó:</strong></td>
    <td width="132"><select name="aprobatoria" id="aprobatoria">
      <option value="selected">Seleccione</option>
      <option value="Si">SI</option>
      <option value="NO">NO</option>
    </select></td>
  </tr>
</table>
			</fieldset>


				<br>			
			
			
			
			</fieldset>


	</fieldset></center>
	</form>
	

</body>
<br>
<?php
include('banner_pieln.php');
?>
</body>


</html>
