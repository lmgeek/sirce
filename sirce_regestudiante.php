<?php 
session_start();
include('banner_cintillolb.php');
include("libreria.php");
$config = parse_ini_file('calificaciones.ini');
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
mysqli_set_charset($conexion,"utf8");
$privilegio=$_SESSION['privilegio'];
?>

<!DOCTYPE html> 
<html lang="es"> 
<head>
   	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
    <meta charset="utf-8"/>
    <meta name="author" content="Ing. José G. Quero R.">
	  <meta name="viewport" content="initial-scale=1.0">
	  <script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" language="javascript" src="js/scripts1.min.js"></script>
	  <script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
    <link rel="stylesheet" type="text/css" href="css/regestudiante.css">
    <title>REGISTRO DE ESTUDIANTES</title>

</head>
       
<body ontouchstart="" style background ='img/fondonaranja.jpg'>
<div align="center"><br>
<table border="0">
	<tr>
		<td Width="50"><div align="center"><a href ="javascript:regresar();"><img src="./img/icono-atras.png" alt="Regresar" width="164" height="66" title="Regresar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_novo_estudiante();"><img src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_grbr_estudiante();"><img src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_bscr_estudiante();"><img src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_borr_estudiante();"><img src="./img/icono-borrar.png" alt="Borrar" width="34" height="40" title="Borrar"></a></td>
		<td Width="50"><div align="center"><a href ="reportes/report_regestudiantes.php"><img src="./img/icono-impresora.png" alt="Imprimir" width="34" height="40" title="Imprimir"></a></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
    <td Width="50"><div align="center"><a href ="reportes/report_listados_regestudiantes.php"><img src="./img/icono-imprimircomprobante.png" alt="Imprimir" width="34" height="40" title="Imprimir Listado General"></a></td>
		<td Width="50"><div align="center"></td>
		<td Width="260"><div align="right">
	    <img src="./img/icono-usuario.png" width="50" height="50" title="" alt="Registro"></td>
	</tr>
	<tr></tr>
</table>
  
<form name="formu" action="#" id="registrarestudiante" method="POST" class="formulario">
	
	<input type="hidden" name="id_estudiante" id="id_estudiante" value="0" />
	<input type="hidden" name="r_modulo" id="modulo" value="1" />
	<input type="hidden" name="modulo" id="modulo" value="RDOCENTE" />
	<input type="hidden" name="operacion" id="operacion" value="GUARDAR" />
	
	<center><fieldset style="width:850px; height:360px">

<br>
    <p>REGISTRO PARA ESTUDIANTES</p>

   <fieldset style="width:740px; height:250px">


<table width="808" border="0">
  <tr>
    <td width="654" height="37" align="right"><span><div>Fecha de Registro:</div></span></td>
	<td width="138"><div><input name="fecha_regis" id="fecha_regis" type="date" size="13"></div></td>
  </tr>
</table>

<table width="808" height="37"border="0">
  <tr>
    <td width="137"><span><div>Código CARSCE:*</div></span></td>
    <td width="81"><div><input type="text" name="cod_dace" id="cod_dace" size="08" placeholder= "Codigo DACE" autofocus></div></td>
    <td width="110"><span><div>Nacionalidad:*</div></span></td>
    <td width="111"><span>
         <select name="nacionalidad" id="nacionalidad">
           <option value="selected">Seleccione...</option>
           <option value="V">Venezolana</option>
           <option value="E">Extranjera</option>
      </select></span></td>
    <td width="155"><span><div>Cédula de Identidad:*</div></span></td>
    <td width="174"><input type="text" name="cedula" id="cedula" size="20" placeholder="Ingresa N° Cédula" autofocus onKeyPress="return solonumeros(event)"></td>
	</tr>
</table>

<table width="808" height="37" border="0">
  <tr>
    <td width="136"><span><div>Nombres*:</div></span></td>
    <td width="221"><input type="text" name="nomb_estudiante" id="nomb_estudiante" size="30" placeholder="Ingresa tu (s) Nombre (s)" onKeyPress="return letra(event)" autofocus></td>
    <td width="179"><span>
      <div>Apellidos:*</div></span></td>
    <td width="244"><input type="text" name="apell_estudiante" id="apell_estudiante" size="30" placeholder="Ingresa tu (s) Apellido (s)" onKeyPress="return letra(event)" autofocus></td>
  </tr>
</table>

<table width="808" height="37" border="0">
  <tr>
    <td width="135"><span><div>Estado Civil:*</div></td>
    <td width="165"><span>
         <select name="estado_civil" id="estado_civil">
           <option value="selected">Seleccione...</option>
           <option value="Casado (a)">Casado (a)</option>
           <option value="Concubino (a)">Concubino (a)</option>
		   <option value="Divorciado (a)">Divorciado (a)</option>
		   <option value="Soltero (a)">Soltero (a)</option>
      </select></span></td>
    <td width="353" align="right"><span><div>Fecha de Nacimiento:*</div></span></td>
    <td width="127"><div><input name="fecha_nacimiento" id="fecha_nacimiento" type="date" size="13"></div></td>
  </tr>
</table>

<table width="808" height="37" border="0">
  <tr>
    <td width="187"><span>
      <div>Teléfono de Contacto:*</div></span></td>
    <td width="206"><input type="text" name="telf_contacto" id="telf_contacto" size="20" placeholder="Ingresa tu Número Telefónico" onKeyPress="return letra(event)" autofocus></td>
    <td width="156"><span>
      <div>Corre Electrónico:*</div></span></td>
    <td width="241"><input type="email" name="correo_electronico" id="correo_electronico" size="30" placeholder="Ingresa tu (s) Correo" onKeyPress="return letra(event)" autofocus></td>
  </tr>
</table>

<table width="809" border="0">
  <tr>
    <td width="136" height="28"><span><div>PNF:*</div></span></td>
    <td width="257"><select name="pnf" id="pnf">
      <option value="selected">Seleccione el PNF</option>
      <option value="PNF en Administración">PNF en Administración</option>
      <option value="PNF en Agroalimentación">PNF en Agroalimentación</option>
v     <option value="PNF en Contaduría Pública ">PNF en Contaduría Pública</option>
      <option value="PNF en Contrucción Civil">PNF en Contrucción Civil</option>
      <option value="PNF en Electricidad">PNF en Electricidad</option>
      <option value="PNF en Electrónica">PNF en Electrónica</option>      
      <option value="PNF en Mecánica">PNF en Mecánica</option>
      <option value="PNF en Instrumentación y Control">PNF en Instrumentación y Control</option>
      <option value="PNF en Informática">PNF en Informática</option>
      <option value="PNF en Procesos Químicos">PNF en Procesos Químicos</option>
      <option value="PNF en Química">PNF en Química</option>
    </select></td>

    <td width="138"><span><div>Ubicación:*</div></span></td>
    <td width="148"><span>
      <select name="ubicacion" id="ubicacion">
        <option value="selected">Seleccione...</option>
        <option value="Cecilio Acosta">Cecilio Acosta</option>
        <option value="Dabajuro">Dabajuro</option>
        <option value="Los Taques">Los Taques</option>
        <option value="Pedregal">Pedregal</option>
		<option value="Sede">Sede</option>
      </select>
    </span></td>
  </tr>
</table>
<br><br>
</form>

</fieldset>
</fieldset>

</body>

</html>