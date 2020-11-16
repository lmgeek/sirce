
<!DOCTYPE html>
<html lang="es">
  <head>
        <link rel="stylesheet" type="text/css" href="css/agenda.css">
	    <title>CONTACTOS TELEFÓNICOS</title>
		<meta charset="utf-8"/>
    <script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
	  <?php
    session_start();
	include('banner_cintillolb.php');
	include("libreria.php");
	$privilegio=$_SESSION['privilegio'];
	open_database();
?>
</head>
 
 <body bgcolor="#990066">
  <br>
<div align="center">
<TABLE border="0">
	<tr>
		<td Width="50"><div align="center"><a href ="javascript:regresar();"><IMG src="./img/icono-atras.png" title="Regresar" alt="Regresar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_novo_periodo();"><IMG src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_grbr_periodo();"><IMG src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
		<td Width="50"><div align="center"><a href ="javascript:dt_bscr_periodo();"><IMG src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="50"><div align="center"></td>
		<td Width="350"><div align="right"><IMG src="./img/icono-usuario.png" title="" alt="Registro"></td>
	</tr>
	<tr></tr>
</TABLE>  </div>  
<form action="/sistemita/sircadmon_connect_agenda.php" method="POST" enctype="multipart/form-data" class="menu">

   <center><fieldset style="width:160px; height:250px"><p>REGISTRO DE CONTACTOS</p>

   <table width="546" border="0">
         <tr>
       <td width="240"><span><b>NOMBRES:</b></span></td>
       <td width="296">
          <input type="text" name="nombres" id="nombres" size="35" placeholder="Ingrese el (los) Nombre (s)" onkeypress="return letra(event)" required></td>
     </tr>

     <tr>
       <td><span class="style9"><strong><b>APELLIDOS:</b></strong></span></td>
       <td>
         <span><input type="text" name="apellidos" id="apellidos" size="35" placeholder="Ingrese el (los) Apellido (s)" onkeypress="return letra(event)" required></td>
     </tr>
             
       <td><span><strong><b>TELEFONO RESIDENCIAL:</b></strong></span></td>
       <td>
         <span><input type="text" name="telf_residencial" id="telf_residencial" size="35" placeholder="00000000000" onkeypress="return solonumeros(event)" required>
         </span></td>
     
     <tr>
       <td><span><strong><b>TELÉFONO CELULAR:</b></strong></span></td>
       <td><input name="telf_celular" type="text" id="telf_celular" size="35" placeholder="00000000000" onkeypress="return solonumeros(event)" required></td>
     </tr>
     <tr>
       <td><span><strong><b>CORREO ELECTRÓNICO:</b></strong></span></td>
       <td>
         <span><input type="text" name="email" id="email" size="35" placeholder="ejemplo@gmail.com" required>
     </td></tr>
   </table>

    
      </form>
      </fieldset></center>

<br>

<?php
include('banner_pielb.php'); 
?>

</body>
</html>