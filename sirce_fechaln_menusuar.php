<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="utf-8">
	</head>
<style type="text/css">
	/*! SEGUIR TERMINANDO LA CODIFICACIÓN DE STRONG (ESTILO DONDE VA EL NOMBRE DE LA SESION) */
strong{
	aling:center;
	background: #F17E03;
	border-radius: 5px 0px 5px 0px;
	box-shadow: 5px 5px 5px #000000;
	color: #000000;
	font-family: consolas;
	font-size: 15px;
	margin-left: 36px;
	margin-right: 5px;
	padding: 5px;
	padding-top: 5px;
	padding-left: 9px;
	padding-right: 400px;
	position: absolute;
	text-decoration: none;
	word-spacing: 5px;
	left: 52px; /*UBICACIÓN LATERAL DE LA INFORMACION DE LA FECHA Y USUARIO*/
	width: 420px; /*TAMAÑO DE LA BARRA DONDE SE ENCUENTRA LA INFORMACION DE LA FECHA Y USUARIO*/
}	
</style>

<body>

 
 <strong><center><table width="813" border="0">
  <tr> 
    <td width="353">
      <div align="left">
        <?php	echo "<b>Santa Ana de Coro; ".date("d/m/Y"); ?>
      </div></td>
    <td width="444"><div align="right">BIENVENIDO: <?php echo $_SESSION['usuario'];?></div></td>
  </tr>
</table>
 </center>
</strong>


</body>

</html>
