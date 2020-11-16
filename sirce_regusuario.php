<?php
include('banner_cintillolb.php');
include("libreria.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  	<meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
    <meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0">
  <script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
    <link rel="stylesheet" type="text/css" href="css/regusuario.css">
    <title>REGISTRO DE USUARIOS</title>
</head>
       
<body ontouchstart="" style background ='img/fondonaranja.jpg'>

<div align="center"><br>
<table width="855" height="54" border="0">
  <tr>
    <td Width="152"><div align="center"><a href ="javascript:regresar();"><img src="./img/icono-atras.png" alt="Regresar" width="96" height="59" title="Regresar"></a></td>
    <td Width="47"> <div align="center"><a href ="javascript:dt_novo_usuario();"><img src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
    <td Width="47"> <div align="center"><a href ="javascript:dt_grbr_usuario();"><img src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
    <td Width="47"> <div align="center"><a href ="javascript:dt_bscr_usuario();"><img src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
    <td Width="53"> <div align="center"><a href ="javascript:dt_borr_usuario();"><img src="./img/icono-borrar.png" title="Borrar" alt="Borrar"></a></td>
    <td Width="101"><div align="center"><a href ="reportes/report_regusuarios.php"><img src="./img/icono-impresora.png" title="Imprimir" alt="Imprimir"></a>
    <td width="91"> <div align="center"></td>
    <td Width="38"> <div align="center"></td>
    <td Width="50"><div align="center"><a href ="reportes/report_listados_regestudiantes.php"><img src="./img/icono-imprimircomprobante.png" alt="Imprimir" width="34" height="40" title="Imprimir Listado General"></a></td>
    <td Width="35"> <div align="center"></td>
    <td Width="31"> <div align="center"></td>
    <td Width="93"> <div align="right"><center><img src="./img/icono-usuario.png" width="50" height="50" title="" alt="Registro"></center></td>
  </tr>
  <tr></tr>
</table>

<form name="formu" action="#" id="registrarusuario" method="POST" class="formulario"> 

	<input type="hidden" name="id_usuario" id="id_usuario" value="0" />
	<input type="hidden" name="r_modulo" id="modulo" value="1" />
	<input type="hidden" name="modulo" id="modulo" value="RUSUARIO" />
	<input type="hidden" name="operacion" id="operacion" value="GUARDAR" />
	<center>
	<fieldset style="width:850px; height:455px">

  <br>
    
	<p>REGISTRO DE USUARIOS</p>

      <fieldset style="width:380px; height:340px">
	<br>
  
     <table width="800" height="122" border="0">
       <tr>
		<th width="170" scope="row"><div align="justify"><span>USUARIO:</span></div></th>
		<td colspan="7"><div><input type="text" name="usuario" id="r_usuario" size="50" placeholder="Edite nombre para el usuario" required></div></td>
       </tr>
       <tr>
         <th width="170" scope="row"><div align="justify"><span>CONTRASEÑA:</span></div></th>
         <td colspan="3"><div><input type="password" name="clave" id="clave" size="20" placeholder="Edite una contraseña" required></div></td>
         
         <td><div align="center"><span>CONFIRMAR CONTRASEÑA:</span></div></td>
         <td colspan="3">           
         <div><input type="password" name="clave2" id="clave2" size="22" placeholder="Repita la contraseña" required></div></td>
       <tr>
         <th scope="row"><div align="justify"><span>NOMBRES:</span></div></th>
		 <td colspan="7"><div><input type="text" name="nombres" id="nombres" size="80" placeholder="Edite sus Nombres" onKeyPress="return letra(event)" required></div></td>
       </tr>
       <tr>
         <th scope="row"><div align="justify"><span>APELLIDOS:</span></div></th>
         <td colspan="7"><input name="apellidos" type="text" id="apellidos" size="80" placeholder="Edite sus Apellidos" onKeyPress="return letra(event)" required></td>
       </tr>
       <tr>
         <th scope="row"><div align="justify"><span>NACIONALIDAD:</span></div></th>
         <td colspan="3">
            <div align="center">
              <select name="nacionalidad" id="nacionalidad">
				<option value="selected">Seleccione</option>
                <option value="V"> Venezolana </option>
                <option value="E"> Extranjera </option>
              </select>
            </div>
         </td>
         <td width="202"><div align="center"><span>CEDULA DE IDENTIDAD:<span></div></td>
         <td colspan="2"><div align="left"><input name="r_cedula" type="text" id="cedula" size="22" placeholder="Edite su Número de Cédula" onKeyPress="return solonumeros(event)" required></div></td>
       </tr>
       <tr>
         <th scope="row"><div align="justify"><span>TELF. RESIDENCIAL:</span></div></th>
         <th colspan="3" scope="row"><span><input type="text" name="telf_residencial" id="telf_residencial" size="20" placeholder="00000000000" onKeyPress="return solonumeros(event)" required></span></th>

         <td><div align="center"><span>TELÉFONO CELULAR:</span></div></td>
         <td colspan="2"><input name="telf_celular" type="text" id="telf_celular" size="22" placeholder="00000000000" onKeyPress="return solonumeros(event)" required></td>
       </tr>
       <tr>
         <th scope="row"><div align="justify"><span>DIRECCION:</span></div></th>
         <td colspan="7"><div><input name="direccion" type="text" id="direccion" size="80" placeholder="Edite su Dirección de Habitación" required></div></td>
       </tr>
       <th height="26" scope="row"><div align="justify"><span>E-MAIL:</span></div>
	   </th><td colspan="7"><div><input name="correo" type="text" id="correo" size="80" placeholder="Edite su Correo Electrónico" required></div></td>
    </table>
    <table width="800" height="31" border="0">
       <tr>
        <th width="187" height="27" scope="row"><div align="justify"><span>TIPO DE PERSONAL:</span></div></th>
        <td width="156"><span>
           <select name="tipo_personal" id="tipo_personal">
             <option value="selected"></option>
             <option value="Administravo"> Administrativo </option>
             <option value="Docente"> Docente </option>
             <option value="Obrero"> Obrero </option>
           </select></span>
		</td>
	    <th colspan="3" scope="row"><span>NIVEL USUARIO:</span></th>
         <td width="108"><div>
            <select name="privilegio" id="privilegio">
             <option value="selected"></option>
             <option value="1">Desarrollador</option>
             <option value="2">Administrador</option>
             <option value="3">Usuario</option>
           </select></div>
		 </td>
         <td width="58"><div><span>STATUS:</span></div></td>
         <td width="115">
		 <div align="center">
			<select name="r_status" id="status">
			  <option value="selected"></option>
			  <option value="Activo"> Activo </option>
              <option value="Inactivo"> Inactivo </option>
			</select>
		 </td>
       </tr>         
    </table>
    <table width="800" border="0">
       <tr>
         <td width="169"><span>Pregunta Secreta 1:</span></td>
         <td width="275">
            <select name="pregunta_secreta1" id="pregunta_secreta1">
              <option value="selected">Realice su Selección...</option>
              <option value="A">SEGUNDO NOMBRE DE MI MADRE.</option>
              <option value="B">¿CUÁL ES EL NOMBRE DE MI MACOTA?</option>
              <option value="C">SEGUNDO NOMBRE DE MI PADRE.</option>
              <option value="D">MES DE NACIMIENTO DE MI PRIMER HIJO</option>
              <option value="E">¿CUÁL ES MI COLOR FAVORITO?</option>
              <option value="F">MES ANIVERSARIO DE BODA.</option>
              <option value="G">¿CUÁNTAS HERMANAS TIENE MI PADRE?</option>
            </select>
		</td>
        <td width="162"><div><b><span>Respuesta Secreta 1:</span></b></div></td>
        <td width="168"><input name="repuesta_secreta1" type="password"  id="repuesta_secreta1" size="16" placeholder="Ingresa tu Respuesta" autofocus required></td>
      </tr>
      <tr>
        <td><span>Pregunta Secreta 2:</span></td>
        <td>
			<select name="pregunta_secreta2" id="pregunta_secreta2">
               <option value="selected">Realice su Selección...</option>
               <option value="A">SEGUNDO NOMBRE DE MI MADRE.</option>
               <option value="B">¿CUÁL ES EL NOMBRE DE MI MACOTA?</option>
               <option value="C">SEGUNDO NOMBRE DE MI PADRE.</option>
               <option value="D">MES DE NACIMIENTO DE MI PRIMER HIJO</option>
               <option value="E">¿CUÁL ES MI COLOR FAVORITO?</option>
               <option value="F">MES ANIVERSARIO DE BODA.</option>
               <option value="G">¿CUÁNTAS HERMANAS TIENE MI PADRE?</option>
            </select>
        </td>
        <td><span>Respuesta Secreta 2:</span></td>
        <td><input name="repuesta_secreta2" type="password"  id="repuesta_secreta2" size="16" placeholder="Ingresa tu Respuesta" autofocus required></td>
      </tr>
	</table>
	</center>

</form>
</fieldset>

</fieldset>
<br>
<?php
include('banner_pieln.php'); 
?>
      
</body>
</html>