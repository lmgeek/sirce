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
	<meta name="viewport" content="initial-scale=1.0">
	<script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" language="javascript" src="js/scripts1.js"></script>
    <link rel="stylesheet" type="text/css" href="css/regdocente.css">
    <title>REGISTRO PARA LOS DOCENTES</title>

</head>
       
<body ontouchstart="" style background ='img/fondonaranja.jpg'>

<div align="center"><br>
<table width="855" height="54" border="0">
	<tr>
		<td Width="152"><div align="center"><a href ="javascript:regresar();"><img src="./img/icono-atras.png" alt="Regresar" width="248" height="48" title="Regresar"></a></td>
		<td Width="47"> <div align="center"><a href ="javascript:dt_novo_docente();"><img src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
		<td Width="47"> <div align="center"><a href ="javascript:dt_grbr_docente();"><img src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
		<td Width="47"> <div align="center"><a href ="javascript:dt_bscr_docente();"><img src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
		<td Width="53"> <div align="center"><a href ="javascript:dt_borr_docente();"><img src="./img/icono-borrar.png" title="Borrar" alt="Borrar"></a></td>
		<td Width="101"><div align="center"><a href ="reportes/report_regdocentes.php"><img src="./img/icono-impresora.png" title="Imprimir" alt="Imprimir"></a>
		<td width="91"> <div align="center"></td>
		<td Width="38"> <div align="center"></td>
    <td Width="50"> <div align="center"><a href ="reportes/report_listados_regestudiantes.php"><img src="./img/icono-imprimircomprobante.png" alt="Imprimir" width="34" height="40" title="Imprimir Listado General"></a></td>
		<td Width="35"> <div align="center"></td>
		<td Width="31"> <div align="center"></td>
		<td Width="93"> <div align="right"><center><img src="./img/icono-usuario.png" width="50" height="50" title="" alt="Registro"></center></td>
	</tr>
	<tr></tr>
</table>

 

<form name="formu" action="#" id="registrardocente" method="POST" class="formulario">

	<input type="hidden" name="privilegio" id="privilegio" value="" />
	<input type="hidden" name="id_docente" id="id_docente" value="0" />
	<input type="hidden" name="r_modulo" id="modulo" value="1" />
	<input type="hidden" name="modulo" id="modulo2" value="RDOCENTE" />
	<input type="hidden" name="operacion" id="operacion" value="GUARDAR" />
	
	<center><fieldset style="width:890px; height:520px">

<br>

    <p>REGISTRO PARA EL PERSONAL DOCENTE</p>

   <table width="808" height="37" border="0">
  <tr>
    <td width="642"><span><div align="right">Fecha de Registro:*</div></span></td>
    <td width="150"><div><input name="r_fecharegis" id="fecharegis" type="date" size="13"></div></td>
  </tr>
</table>


<fieldset style="width:840px; height:350px">

<br>

<table width="808" height="37" border="0">
  <tr>
    <td width="135"><span><div>Codigo CARSCE:*</div></span></td>
	
    <td width="135"><div><input type="text" name="r_coddace" id="coddace" size="12" placeholder= "Codigo CARSCE" autofocus></div></td>
	
    <td width="113"><span><div>Nacionalidad:*</div></span></td>
      <td width="55" height="24"><span><select name="r_nacion" id="nacion">
           <option value="selected">--</option>
           <option value="V">V</option>
           <option value="E">E</option>
        </select></span>
	</td>
	
    <td width="150"><span><div>Cédula de Identidad:*</div></span></td>
    
    <td width="180"><input name="r_cedula" id="cedula" type="text" size="20" placeholder="Ingresa N° Cédula" autofocus onKeyPress="return solonumeros(event)"></td>
  </tr>
</table>

<table width="808" height="37" border="0">
  <tr>
    <td width="136" height="37"><span><div>Nombres:*</div></span></td>
    <td width="258"><input name="r_ndocente" id="ndocentes" type="text" size="30" placeholder="Ingresa tu (s) Nombre (s)" onKeyPress="return letra(event)" autofocus></td>
    <td width="138"><span><div>Apellidos:*</div></span></td>
    <td width="248"><input name="r_adocente" id="adocentes" type="text" size="30" placeholder="Ingresa tu (s) Apellido (s)" onKeyPress="return letra(event)" autofocus></td>
  </tr>
</table>

 <table width="808" height="37" border="0">
  <tr>
    <td width="208" height="37"><span><div>Telefono Residencial:*</div></span></td>
    <td width="187"><input name="r_tlfcasa" id="tlfcasa" type="text" size="20" placeholder="00000000000" autofocus onKeyPress="return solonumeros(event)"></td>
    <td width="204"><span><div>Teléfono Celular:*</div></span></td>
    <td width="181"><input name="r_tlfcelular" id="tlfcelular" type="text" size="20" placeholder="00000000000" autofocus onKeyPress="return solonumeros(event)"></td>
  </tr>
</table>
 
<table width="808" border="0">
  <tr>
    <td width="94" height="37"><span><div>Dirección:*</div></span></td>
	<td width="698"><input name="r_dirhabita" id="dirhabita" type="text" size="94" placeholder="Ingresa tu Direccion Residencia Completa" autofocus></td>
  </tr>
</table>
 
 
 <table width="808" height="37" border="0">
  <tr>
    <td width="204" height="37"><span><div>E-Mail Personal:*</div></span></td>
    <td width="198"><input name="r_email" id="email" type="text" size="20" placeholder="Ingresa tu E-Mail" autofocus></td>
    <td width="196"><span><div>E-Mail Institucional:*</div></span></td>
    <td width="182"><input name="r_emailinst" id="emailinst" type="text" size="20" placeholder="Ingresa tu E-Mail" autofocus></td>
  </tr>
</table>

<table width="808" height="37" border="0">
  <tr>
    <td width="230" height="37"><span><div>Título Pre Grado:*</div></span></td>
    <td width="192"><input name="r_tpregrado" id="tpregrado" type="text" size="20" placeholder="Ingresa tu Título" autofocus onKeyPress="return letra(event)"></td>
    <td width="177"><span><div>Título Post Grado:*</div></span></td>
    <td width="181"><input name="r_tpostgrado" id="tpostgrado" type="text" size="20" placeholder="Ingresa tu Título" autofocus onKeyPress="return letra(event)"></td>
  </tr>
</table>
 
<table width="808" border="0">
  <tr>
    <td width="121" height="28"><span><div>Condición:*</div></span></td>
    <td width="128"><span><select name="r_condicion" id="condicion">
        <option value="selected">Seleccione</option>
        <option value="Contratado"> Contratado </option>
        <option value="Ordinario"> Ordinario </option>
      </select>
    </span></td>
    <td width="80"><span><div>Categoría:*</div></span></td>
    <td width="151"><span><select name="r_categoria" id="categoria">
        <option value="selected">Seleccione</option>
        <option value="Asisitente">Asistente</option>
        <option value="Asociado">Asociado</option>
        <option value="Agregado">Agregado</option>
        <option value="Aux.Docente">Aux.Docente</option>
		<option value="Instructor">Instructor</option>
      </select>
    </span></td>
    <td width="119"><span><div>Dedicación:*</div></span></td>
    <td width="167"><span><select name="r_dedicacion" id="dedicacion">
        <option value="selected"></option>
        <option value="Dedicación Exclusiva">Dedicación Exclusiva</option>
        <option value="Tiempo Completo">Tiempo Completo</option>
        <option value="Tiempo Convencional">Tiempo Convencional</option>
        <option value="Medio Tiempo">Medio Tiempo</option>
      </select>
    </span></td>
  </tr>

</table>


<table width="808" border="0">
  <tr>
    <td width="381" height="28"><span><div>Programa Nacional de Formación:*</div></span></td>
    <td width="417"><span><select name="r_pnf" id="pnf">
        <option value="selected">Seleccione...</option>
        <option value="PNFA"> Programa Nacional de Formación en Administración </option>
        <option value="PNFAV"> Programa Nacional de Formación Avanzada </option>          
        <option value="PNFAG"> Programa Nacional de Formación en Agroalimentación </option>
        <option value="PNFCP"> Programa Nacional de Formación en Contaduría Pública </option>
        <option value="PNFCC"> Programa Nacional de Formación en Construcción Civil </option>
        <option value="PNFE"> Programa Nacional de Formación en Electricidad </option>
        <option value="PNFEL"> Programa Nacional de Formación en Electrónica </option>
        <option value="PNFI"> Programa Nacional de Formación en Informática </option>
        <option value="PNFIC"> Programa Nacional de Formación en Instrumentación y Control </option>
        <option value="PNFM"> Programa Nacional de Formación en Mecánica </option>
        <option value="PNFPQ"> Programa Nacional de Formación en Procesos Químicos </option>
        <option value="PNFQ"> Programa Nacional de Formación en Química </option>
      </select>
    </span></td></tr>
</table></form>

</fieldset>

</fieldset>

<br>  
<!--
<?php
include('banner_pieln.php'); 
?>
-->
</body>

</html>