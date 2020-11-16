<?php
include('banner_cintillolb.php');
include("libreria.php");
$config = parse_ini_file('calificaciones.ini');
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
mysqli_set_charset($conexion,"utf8");
?>

<!DOCTYPE html>
<html lang="es">

<head>   	
	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximun-scale=-1.0"/>
    <meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/apertucenso.css">
	<script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
    <title>REGISTRAR PERIODOS ACADÉMICOS</title>
</head>
       
<body ontouchstart="" style background ='img/fondonaranja.jpg'>
<div align="center"><br>
<table width="800" border="0">
	<tr>
		<td Width="50"><div align="center"><a href ="javascript:regresar();"><img src="./img/icono-atras.png" alt="Regresar" width="183" height="70" title="Regresar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_novo_periodoacad();"><img src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_grbr_periodoacad();"><img src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_bscr_periodoacad();"><img src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_borr_periodoacad();"><img src="./img/icono-borrar.png" title="Borrar" alt="Borrar"></a></td>
		<td Width="50"><div align="center"><a href ="reportes/report_periodo_academico.php"><img src="./img/icono-impresora.png" title="Imprimir" alt="Imprimir"></a></td>
		<td Width="50"><div align="center"></div></td>
		<td Width="50"><div align="center"></div></td>
		<td Width="50"><div align="center"></div><a href ="reportes/report_listados_regestudiantes.php"><img src="./img/icono-imprimircomprobante.png" alt="Imprimir" width="34" height="40" title="Imprimir Listado General"></td>
		<td Width="50"><div align="center"></div></td>
		<td Width="300"><div align="right"><img src="./img/icono-usuario_2.png" alt="Registro" width="60" height="60" title=""></div></td>
	</tr>
	<tr></tr>
</table></div>

<form  name="formu" action="#" method="POST" class="regperacad">
	<input type="hidden" name="id_periodo" id="id_periodo" value="0" />
	<center><fieldset style="width:480px; height:240px"> <p>REGISTRAR PERIODOS ACADÉMICOS</p>
   
   			<center><fieldset style="width:450px; height:140px">

   		<br>

   <center><table width="396" border="0">
  <tr>
    <td width="270" height="32"><div>Descripción del Periodo:*</div></td>
	<td width="116"><input name="periodo" type="text" id="periodo" style='font-size:13px;color:black' size="10" placeholder="Período" required></td>
  </tr>
  <tr>
    <td width="270" height="32"><div>Fecha Incio:*</div></td>
	<td width="116"><input name="fecha_inicio" id="fecha_inicio" type="date" size="10"></td>
  </tr>
  <tr>	
	<td width="270" height="32"><div>Fecha culminación:*</div></td>
	<td width="116"><input name="fecha_final" id="fecha_final" type="date" size="10"></td>
  </tr>
 
</table></center>

</form>
  </fieldset></center>

  </fieldset></center>

</body>
</html>