<?php
include('banner_cintilloln.php');
//include('js/scripts1.js');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
	<link rel="stylesheet" type="text/css" href="css/regcalificaestudianter.css">
	<meta charset="utf-8"/>
	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="shortcut icon" href="img/favicon.ico" /><!--Codigo para agrega icono a la barra de navegado!-->
	<link rel = "icono de acceso directo" type = "image / x-icon" href = "/ favicon.ico"><!--Codigo para agrega icono a la barra de navegado!-->
	<title>REGISTRO DE CALIFICACIONES ESTUDIANTILES</title>
</head>
       
<body background ='img/fondonaranja.jpg' style='font-size:46px;font-family:Arial,Helvetica,sans-serif' onLoad='nobackbutton()'>

<div align="center"><br>
<table border="0">
	<tr>
		<td Width="50"><div align="center"><a href ="javascript:regresar();"><img src="./img/icono-atras.png" alt="Regresar" width="164" height="66" title="Regresar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_novo_estudiante();"><img src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_grbr_estudiante();"><img src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_bscr_estudiante();"><img src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_borr_estudiante();"><img src="./img/icono-borrar.png" alt="Borrar" width="34" height="40" title="Borrar"></a></td>
		<td Width="50"><div align="center"><a href ="reportes/report_regestudiantes.php"><img src="./img/icono-impresora.png" alt="Imprimir" width="34" height="40" title="Imprimir Acta Individual"></a></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
	    <td Width="50"><div align="center"><a href ="reportes/report_listados_regestudiantes.php"><img src="./img/icono-imprimircomprobante.png" alt="Imprimir" width="34" height="40" title="Imprimir Listado General"></a></td>
		<td Width="50"><div align="center"></td>
		<td Width="260"><div align="right">
	    <img src="./img/icono-usuario.png" width="50" height="50" title="<?php $privilegio=$_SESSION['privilegio']; ?>" alt="Registro"></td>
	</tr>
	<tr></tr>
</table>

    <form action="#" method="POST" class="calificaciones">
	
	<center><fieldset style="width:750px; height:180px">
<br>
	<p>REGISTRO INDIVIDUAL DE CALIFICACIONES DE LOS ESTUDIANTES</p>
<br>
<table width="745" border="0">
	  <tr>
		<td width="207" height="30"><b>Código Estudiantil:</b></td>
		<td width="522"><input name="cod_estud" type="text" id="cod_estud" size="8" placeholder="Cod. Estud." required></td>
	  </tr>
</table>

<table width="745" border="0">
	  <tr>
		<td width="155" height="30"><b>Apellidos y Nombres:</b></td>
		<td width="266"><input name="apellidos_nombres" type="text" id="apellidos_nombres" size="35" placeholder="Nombres y Apellidos del Estudiante" required></td>
		<td width="145"><b>Cédula de Identidad:</b></td>
		<td width="151"><input name="nac_ci" type="text" id="nac_ci" size="20" placeholder="Cédula de Identidad" required></td>
	  </tr>
</table>

<table width="745" border="0">
	  <tr>
		<td width="166" height="30"><b>Calificación En Letra:</b></td>
		<td width="122"><select name="nota_letra" id="nota_letra">
           <option value="selected">Seleccione...</option>
           <option value="IN">Inasistente</option>
           <option value="Cero Uno">Cero Uno</option>
		   <option value="Cero Dos">Cero Dos</option>
		   <option value="Cero Tres">Cero Tres</option>
		   <option value="Cero Cuatro">Cero Cuatro</option>
		   <option value="Cero Cinco">Cero Cinco</option>	   
           <option value="Cero Séis">Cero Séis</option>
		   <option value="Cero Siete">Cero Siete</option>
		   <option value="Cero Ocho">Cero Ocho</option>
		   <option value="Cero Nueve">Cero Nueve</option>
		   <option value="Diez">Diez</option>	   
           <option value="Once">Once</option>
		   <option value="Doce">Doce</option>
		   <option value="Trece">Trece</option>
		   <option value="Catorce">Catorce</option>
		   <option value="Quince">Quince</option>
           <option value="Dieciséis">Dieciséis</option>
		   <option value="Diecisiete">Diecisiete</option>
		   <option value="Dieciocho">Dieciocho</option>
		   <option value="Diecinueve">Diecinueve</option>
		   <option value="Veinte">Veinte</option>	   
      </select></span></td>
			
		<td width="169"><b>Calificación En Número:</b></td>
		<td width="124"><select name="nota_numero" id="nota_numero">
           <option value="selected">Seleccione...</option>
           <option value="IN">Inasistente</option>
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

		<td width="47"><b>Aprobó:</b></td>
		<td width="77"><select name="status" id="Status">
           <option value="selected">--</option>
           <option value="SI">SI</option>
           <option value="NO">NO</option>
      </select></td>
    </tr>
</table>


	</fieldset>

	</form>
	
	</center>

<?php
include('sirce_fechalb.php');
include('banner_pieln.php');
?>
</body>


</html>
