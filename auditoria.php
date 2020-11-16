<!--<?php
//  include("js/validaciones.js");
//  include("libreria.php");
//  $privilegio=$_SESSION['privilegio'];
//  open_database();
?>
-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
    <meta name="viewport" content="initial-scale=1.0">
    <script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" href="js/validaciones.js"></script> 
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>INGRESO DE CALIFICACIONES</title>
  </head>

    <body bgcolor='#990066' style='font-size:46px;font-family:Arial,Helvetica,sans-serif' onLoad='nobackbutton()'>

    <center>
	<form action="fregistro" method="POST" class="login">
	
		<fieldset style="width:910px; height:480px"><span>SISTEMATIZACIÓN DE LA AUDITORIA DE NOTAS ACADÉMICAS DEL PNFA</span>
		
<br><br>		
		<center><table width="382" border="0">
  <tr>
    <td width="206"><b>PERÍODO ACADÉMICO:</b></td>
    <td width="160">
	<select name="periodo" id="periodo">
        <option value="selected">Seleccione</option>
        <option value="I-2009">I-2009</option>
		    <option value="II-2009">II-2009</option>
		    <option value="I-2010">I-2010</option>
		    <option value="II-2010">II-2010</option>
		    <option value="I-2011">I-2011</option>
		    <option value="II-2011">II-2011</option>
		    <option value="III-2011">III-2011</option>
		    <option value="I-2012">I-2012</option>
		    <option value="II-2012">II-2012</option>
		    <option value="III-2012">III-2012</option>
		    <option value="I-2013">I-2013</option>
		    <option value="II-2013">II-2013</option>
		    <option value="I-2014">I-2014</option>
		    <option value="II-2014">II-2014</option>
		    <option value="I-2015">I-2015</option>
		    <option value="II-2015">II-2015</option>
		    <option value="I-2016">I-2016</option>
		    <option value="II-2016">II-2016</option>
		    <option value="I-2017">I-2017</option>
		    <option value="II-2017">II-2017</option>
		    <option value="I-2018">I-2018</option>
		    <option value="II-2018">II-2018</option>
		    <option value="I-2019">I-2019</option>
		<option value="II-2019">II-2019</option>
      </select>
	</td>
  </tr>
</table></center>

<br><br>

<table width="870" border="0">
  <tr>
    <td width="218"><h1>APELLIDOS Y NOMBRES:</h1></td>
    <td width="636"><input type="text" name="nombre_apellido" id="nombre_apellido" size="79" placeholder="Apellidos y Nombres"></td></tr>    
</table>

<table width="870" border="0">
  <tr>
    <td width="219"><h1>CÉDULA DE IDENTIDAD:</h1></td>
    <td width="213"><input type="text" name="cedula_ident" id="cedula_ident" size="20" placeholder="Cédula de Identidad"></td>
    <td width="257"><h1>CÓDIGO INSTITUCIONAL:</h1></td>
    <td width="163"><input type="text" name="cod_institu" id="cod_institu" size="20" placeholder="Código Institucional"></td>
  </tr>
</table>

<table width="870" border="0">
  <tr>
    <td width="218"><h1>UNIDAD CURRICULAR:</h1></td>
    <td width="636"><input type="text" name="unidad_curric" id="unidad_curric" size="79" placeholder="Unidad Curricular"></td></tr>
</table>

<table width="870" border="0">
  <tr>
    <td width="219"><h1>CÓDIGO U.C.:</h1></td>
    <td width="213"><input type="text" name="cod_uc" id="cod_uc" size="20" placeholder="Código Unidad Curricular"></td>
    <td width="257"><h1>TRAYECTO U.C.:</h1></td>
    <td width="163"><input type="text" name="trayecto_uc" id="trayecto_uc" size="20" placeholder="Trayecto de la U.C."></td>
  </tr>
</table>

<table width="870" border="0">
  <tr>
    <td width="219"><h1>SECCIÓN DE LA U.C.:</h1></td>
    <td width="213"><input type="text" name="secc_uc" id="secc_uc" size="20" placeholder="Sección de la U.C.:"></td>
    <td width="257"><h1>N° ESTUDIANTES APROBADOS:</h1></td>
    <td width="163"><input type="text" name="estud_aprob" id="estud_aprob" size="20" placeholder="Estudiantes Aprobado"></td>
  </tr>
</table>

<table width="870" border="0">
  <tr>
    <td width="272"><h1>N° ESTUDIANTES REPROBADOS:</h1></td>
    <td width="149"><input type="text" name="estud_reprob" id="estud_reprob" size="15" placeholder="Estudiantes Reprobados"></td>
    <td width="302"><h1>TOTAL DE ESTUDIANTE/SECCIÓN:</h1></td>
    <td width="129"><input type="text" name="t_estd_secc" id="t_estd_secc" size="15" placeholder="Total de Estudiantes"></td>
  </tr>
</table>

<br>
<table width="870" border="0">
  <tr>
    <td width="218"><h1>OBSERVACIÓN (ES):</h1></td>
    <td width="636"><input type="textarea" name="observacion" id="observacion" size="79" placeholder="Ingrese la (s) Observación (es) presentadas"></td></tr>    
</table>

<br>

<center><table width="212" border="1">
  <tr>
    <td width="56"><img src="img/guardar.jpg" width="50" height="50"></td>
    <td width="56"><img src="img/borrar.jpg" width="50" height="50"></td>
    <td width="56"><img src="img/nuevo.png" width="50" height="50"></td>
    <td width="56"><img src="img/imprimir.png" width="50" height="50"></td>
  </tr>
</table></center>

		</fieldset>
    </body>

</html>