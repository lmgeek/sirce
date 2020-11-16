<!DOCTYPE html>
<HTML lang="es">
<HEAD>
<meta charset="utf-8">
<title>* Buscar Calificaciones *</title>
<script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
<?php
include('banner_cintillolb.php');
include("libreria.php");
$config = parse_ini_file('calificaciones.ini');
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
?>
<style>
	*{
		padding-top: 0px;
		margin: 2px;
	}

	body{
		background: #990066; /*CODIGO DEL COLOR DEL FONDO DE LA PÁGINA*/
    	padding-top: 0%;
	}

	div{
		font-family: Arial, "Helvetica";
		font-size: 14px;
		font-weight: bold;
		background-color: #F7E9F7; 
	}

	fieldset{
		font-family: Arial, "Helvetica";
		font-size: 14px;
		font-weight: bold;
		background-color: #F7E9F7;
		border-radius: 5px;
	}

	p{
		font-family: consolas;
		font-size: 20px;
		font-weight: bold;
		color: #000000;
		text-align: center;
		
	}

	p{
		font-family: consolas;
		font-size: 18px;
		font-weight: bold;
		color: #000000;
		text-align: center;		
	}

</style>
</HEAD>
<BODY bgcolor='#F7E9F7'>
<FORM onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_ContentPlaceMain_btnBuscar&#39;)">
	</div>
	<CENTER><fieldset style="width:auto; height:auto">
		<p>ACTA DE CALIFICACIONES DE LOS ESTUDIANTES DEL PNFA</p>
		<br>
		<strong>P.N.F.A.</strong>
	<TABLE border="1" cellpadding="4" with="1281">
		<tr class="style6" align="center">
		  <td width="93"><div>N°</div></td><td width="83"><div>CÉDULA</div></td><td width="82"><div>COD. ESTD.</div></td><td width="202"><div>APELLIDOS Y NOMBRES</div></td><td width="146"><div>CALIFICACIÓN NUMÉRICA</div></td><td width="131"><div>CALIFICACIÓN LITERAL</div></td><td width="64"><div>APROBÓ</div></td>
			<?php
			//die("Error en consulta");
				$sql="SELECT id_califica, cod_estud, apellidos_nombres, nota_numero, nota_letra, status, FROM calificaciones";
				$resultado = mysqli_query($conexion, $sql) or die("Error en consulta");

				while($row=mysqli_fetch_array($resultado)){

					$x_iddo=$row['id_califica'];   // Valor Oculto
					
					$x_dace=$row['cod_estud'];
					$x_fing=$row['fecha_ingre'];
					$x_ndoc=$row['apellidos_nombres'];
					$x_ndoc=str_replace(" ","&nbsp;",$x_ndoc);
					$x_adoc=$row['apellidos_docente'];
					$x_adoc=str_replace(" ","&nbsp;",$x_adoc);
					$x_naci=$row['nacionalidad'];
					$x_cedu=$row['cedula'];
					$x_dire=$row['direccion_habita'];
					$x_dire=str_replace(" ","&nbsp;",$x_dire);
					$x_tlce=$row['telf_celular'];
					$x_tlca=$row['telf_casa'];
					$x_empe=$row['email_personal'];
					$x_emin=$row['email_institucion'];
					$x_ttpr=$row['titulo_pregrado'];
					$x_ttps=$row['titulo_postgrado'];
					$x_cond=$row['condicion'];
					$x_cate=$row['categoria'];
					$x_dedi=$row['dedicacion'];
													
					echo "<tr class='style7' OnMouseOver='resaltar_On(this);' OnMouseOut='resaltar_Off(this);'
							onClick=javascript:dt_rdocente('$x_iddo','$x_dace','$x_fing','$x_ndoc','$x_adoc','$x_naci','$x_cedu','$x_dire','$x_tlce','$x_tlca','$x_empe','$x_emin','$x_ttpr','$x_ttps','$x_cond','$x_cate','$x_dedi')>";
					echo "<td width='20'>$x_dace</td><td width='80'>$x_cedu</td><td width='300'>$x_adoc, $x_ndoc</td>";
					echo "</tr>";
				}
			?>
		</tr>
	</TABLE>
	</CENTER>
</BODY>
</HTML>
