<?php
include('banner_cintillolb.php');
include("libreria.php");
$config = parse_ini_file('calificaciones.ini');
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']); mysqli_set_charset($conexion,"utf8"); ?>
 
<!DOCTYPE html>
<html lang="es">
<head>
 	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
    <meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/incluirmallayuc.css">
  <script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
    <title>INCLUIR MALLA Y U.C.</title>
</head>
       
<body ontouchstart="" style background ='img/fondonaranja.jpg'>
<div align="center"><br>
<table width="800" border="0">
	<tr>
		<td Width="50"><div align="center"><a href ="javascript:regresar();"><img src="./img/icono-atras.png" alt="Regresar" width="183" height="70" title="Regresar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_novo_incluirmallayuc();"><img src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_grbr_incluirmallayuc();"><img src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_bscr_incluirmallayuc();"><img src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_borr_incluirmallayuc();"><img src="./img/icono-borrar.png" title="Borrar" alt="Borrar"></a></td>
		<td Width="50"><div align="center"><a href ="reportes/report_mallauc.php"><img src="./img/icono-impresora.png" title="Imprimir" alt="Imprimir"></a></td>
		<td Width="50"><div align="center"></div></td>
		<td Width="50"><div align="center"></div></td>
    <td Width="50"><div align="center"><a href ="reportes/report_listados_regestudiantes.php"><img src="./img/icono-imprimircomprobante.png" alt="Imprimir" width="34" height="40" title="Imprimir Listado General"></a></td>
		<td Width="50"><div align="center"></div></td>
		<td Width="300"><div align="right"><img src="./img/icono-usuario.png" alt="Registro" width="60" height="60" title=""></div></td>
	</tr>
	<tr></tr>
</table></div>

<form name="inmalla" action="#" id="regmallaunidades" method="POST" class="malla">

   <center><fieldset style="width:740px; height:635px"><p>MALLA Y UNIDADES CURRICULARES</p>
   
      <center><fieldset style="width:700px; height:100px">
	  <br>
	  <h1>INFORMACIÓN DE LAS MALLAS Y PLANES</h1>
	  
<table width="665" border="0">
  <tr>
    <td width="59" height="29"><div>Malla:*</div></td>
    <td width="95"><strong><input name="documen_rector" type="text" id="documen_rector" size="15"></strong></td>
    <td width="126"><div>Tipo de Malla:*</div></td>
    <td width="217"><span>
      <select name="tipo_malla" id="tipo_malla">
          <option value="selected" selected>---</option>
          <option value="Sede">Sede</option>
          <option value="Municipalización-PERPE">Municipalizaicón-PERPE</option>
        </select></span></td>
    <td width="44"><div>Plan:*</div></td>
    <td width="84"><span>
      <select name="tipo_plan" id="tipo_plan">
          <option value="selected" selected>---</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
        </select></span></td>
  </tr>
</table>
  
  </fieldset></center>

      <center><fieldset style="width:700px; height:135px">
  	<br>
  <h1>INFORMACIÓN DE LOS CÓDIGOS DE LAS UNIDADES CURRICULARES</h1>
<table width="665" border="0">
  <tr>
    <td height="29"><div>Código U.C. CARSCE:*</div></td>
    <td><strong><input name="cod_uc_dace" type="text" id="cod_uc_dace" size="10"></strong></td>
    <td><div>Código U.C. Malla:*</div></td>
    <td><strong><input name="cod_uc_malla" type="text" id="cod_uc_malla" size="10"></strong></td>
  </tr>
</table>

<table width="665" border="0">
  <tr>
    <td height="29"><div>Peso U.C.:*</div></td>
    <td><strong><input name="peso_uc" type="text" id="peso_uc"  size="5"></strong></td>
    <td><div>Trayecto:*</div></td>
    <td><span><select name="tray_perten_uc" id="tray_perten_uc">
          <option value="selected" selected>Seleccione</option>
          <option value="TRAYECTO I">TRAYECTO I</option>
          <option value="TRAYECTO II">TRAYECTO II</option>
          <option value="TRANSICIÓN">TRANSICIÓN</option>
          <option value="NIVELACIÓN">NIVELACIÓN</option>
          <option value="TRAYECTO III">TRAYECTO III</option>
          <option value="TRAYECTO IV">TRAYECTO IV</option>
        </select></span></td>
		
    <td><div>Trimestre:*</div></td>
    <td><span><select name="trim_perten_uc" id="trim_perten_uc">
          <option value="selected" selected>Seleccione</option>
          <option value="TRIMESTRE I">TRIMESTRE I</option>
          <option value="TRIMESTRE II">TRIMESTRE II</option>
          <option value="TRIMESTRE III">TRIMESTRE III</option>
        </select></span></td></td>
  </tr>
</table>
   
   </fieldset></center>

      <center><fieldset style="width:700px; height:145px">
	  <br>
<h1>INFORMACIÓN DE LA UNIDAD CURRICULAR</h1>
<table width="665" border="0">
  <tr>
    <td width="63" height="29"><div>U.C.:*</div></td>
	<td width="533"><strong><input name="unid_curric" type="text" id="unid_curric"  size="72"></strong></td>
    <td width="47"><div><a href ="javascript:dt_borr_incluirmallayuc();"><center><img src="./img/icono-agregaruc.png" alt="Agregar Unidad Curricular" width="29" height="29"  title="Agregar Unidad Curricular">
    </center></a></div></td>
  </tr>
</table>

<table width="665" border="0">
  <tr>
    <td width="113" height="29"><div>N° Trayecto:*</div></td>
    <td width="69"><span><select name="n_trayecto" id="n_trayecto">
        <option value="selected">...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select></span></td>
	  
	<td width="128"><div>N° Trimestre:*</div></td>
    <td width="60"><span>
      <select name="n_trayecto" id="n_trayecto">
        <option value="selected">...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select></span></td>
	  
    <td width="123"><div>N° de Semanas:*</div></td>
    <td width="132"><span><select name="duracion" id="duración">
        <option value="selected">...</option>
        <option value="12">12 Semanas</option>
        <option value="24">24 Semanas</option>
        <option value="36">36 Semanas</option>
      </select></span></td>
  </tr>
</table>

	</fieldset></center>

      <center><fieldset style="width:700px; height:135px" class="hte">
<br>
<h1>HORAS DE ESTUDIOS DE ACOMPAÑAMIENTO E INDEPENDIENTE</h1>

<table width="665" border="0">
  <tr>
    <td height="28"><div>HEA:*</div></td>
    <td><strong><input name="hea" type="text" id="hea"  size="4"></strong></td>
    <td><div>HEI:*</div></td>
    <td><strong><input name="hei" type="text" id="hei"  size="4"></strong>;</td>
    <td><div>HTE:*</div></td>
    <td><strong><input name="hte" type="text" id="hte"  size="4"></strong></td>
    <td><div>HEA 2:*</div></td>
    <td><strong><input name="hea_2" type="text" id="hea_2"  size="4"></strong></td>
    <td><div>HEI 2:*</div></td>
    <td><strong><input name="hei_2" type="text" id="hea_2"  size="4"></strong></td>
    <td><div>HTE 2:*</div></td>
    <td><strong><input name="hte_2" type="text" id="hte_2"  size="4"></strong></td>
  </tr>
</table>

<table width="665" border="0">
  <tr>
    <td height="29"><div>HTAE:*</div></td>
    <td><strong><input name="htae" type="text" id="htae"  size="5"></strong></td>
    <td><div>HTEI:*</div></td>
    <td><strong><input name="htei" type="text" id="htei"  size="5"></strong></td>
    <td><div>HTTE:*</div></td>
    <td><strong><input name="htte" type="text" id="htte"  size="5"></strong></td>
    <td><div>PRELA:*</div></td>
    <td><strong><input name="prela" type="text" id="prela"  size="5"></strong></td>
  </tr>
</table>

   </fieldset></center>
</form>     
   </fieldset></center>
<br>

<?php
include('banner_pieln.php'); 
?>

</body>
</html>