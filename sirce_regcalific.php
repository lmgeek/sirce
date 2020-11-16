<?php
//session_start();
include('banner_cintillolb.php');
include('conexion.php');
//include("libreria.php");
//$config = parse_ini_file('sircadmon.ini');
//$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
//mysqli_set_charset($conexion,"utf8");
//$privilegio=$_SESSION['privilegio'];
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, minimum-scale=-1.0, maximum-scale=-1.0"/>
  <link rel="stylesheet" type="text/css" href="css/regcalific.css">
  <meta charset="utf-8"/>
  <link rel="icon" type="image/png" href="favicon.png" />
  <script type="text/javascript" language="javascript" src="js/scripts2.js"></script>
  <link rel="shortcut icon" href="img/favicon.ico" /><!--Codigo para agrega icono a la barra de navegado!-->
  <link rel = "icono de acceso directo" type = "image / x-icon" href = "/ favicon.ico"><!--Codigo para agrega icono a la barra de navegado!-->
  <title>REGISTRO DE CALIFICACIONES EN ACTA</title></head>
       
<body ontouchstart="" style background ='img/fondonaranja.jpg'>

<div align="center"><br>
<Table border="0">
	<tr>
            <td Width="50"><div align="center"><a href ="javascript:regresar();"><img src="./img/icono-atras.png" title="Regresar" alt="Regresar"></a></td>
            <td Width="50"><div align="center"><a href ="javascript:dt_novo_regcalific();"><img src="./img/icono-nuevo.png" title="Nuevo" alt="Nuevo"></a></td>
            <td Width="50"><div align="center"><a href ="javascript:dt_grbr_regcalific();"><img src="./img/icono-guardar.png" title="Guardar" alt="Guardar"></a></td>
            <td Width="50"><div align="center"><a href ="javascript:dt_bscr_calificaciones();"><img src="./img/icono-busqueda.png" title="Buscar" alt="Buscar"></a></td>
            <td Width="50"><div align="center"><a href ="javascript:dt_borr_docente();"><img src="./img/icono-borrar.png" title="Borrar" alt="Borrar"></a></td>
            <td Width="50"><div align="center"><a href ="sirce_regcalificaestudiante.php"><img src="./img/incluir_calificaciones.png" title="Incluir Calificaciones" width="35" height="36"></td>
            <td Width="50"><div align="center"><a href ="#"><img src="./img/icono-impresora.png" title="Imprimir Ficha" width="35" height="36"></td>
            <td Width="50"><div align="center"></td>
            <td Width="50"><div align="center"></td>
            <td Width="50"><div align="center"><a href ="#"><img src="./img/imprimir.png" title="Imprimir Calificaciones" width="35" height="36"></td>
            <td Width="350"><div align="right"><IMG src="./img/icono-usuario.png" width="50" height="50" title="" alt="Registro"></td>
	</tr>
	<tr></tr>
</table></center>

    <center>
	<form action="sirce_regcalific_2.php" method="POST" class="regcalific">
	<br>
		<fieldset style="width:950px; height:190px">
		<br>
		<b><p>INFORMACIÓN DE LA UNIDAD CURRICULAR:</p></b>
		<br>
		
<table width="920" border="0">
  <tr>
    <td width="64" height="40"><center><strong>Plan:</strong></center></td>
    <td width="117"><select name="cargar_plan" id="cargar_plan">
    <!--<select id="unid_curric" name="cargar_plan" class="form-control">
      <option value="selected">Seleccione</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
	  <option value="C">C</option>	  
	  <option value="D">D</option>
    </select></td>-->
	
    <td width="120"><center><strong>Código U.C. (Malla):</strong></center></td>
    <td width="148">
      <select name="cod_uc_dace" id="cod_uc_dace">
        <option value="selected">Seleccione</option>
        <option value=""></option>
        <option value="">* PENSUM 2009 *</option>
        <option value=""></option>
        <option value="B1AA">B1AA</option>
        <option value="B1BA">B1BA</option>
        <option value="B1CA">B1CA</option>
        <option value="B2AA">B2AA</option>
        <option value="B2BA">B2BA</option>
        <option value="B2CA">B2CA</option>
        <option value="B2DA">B2DA</option>
        <option value="B2EA">B2FA</option>
        <option value="B2GA">B2GA</option>
        <option value="B2HA">B2HA</option>
        <option value="B2IA">B2IA</option>
        <option value="B2JA">B2JA</option>
        <option value="B2KA">B2KA</option>
        <option value="B2LA">B2LA</option>
        <option value="B3AA">B3AA</option>
        <option value="B3BA">B3BA</option>
        <option value="B3CA">B3CA</option>
        <option value="B3DA">B3DA</option>
        <option value="B3EA">B3EA</option>
        <option value="B3FA">B3FA</option>
        <option value="B3GA">B3GA</option>
        <option value="B3HA">B3HA</option>
        <option value="B3JA">B3JA</option>
        <option value="B3KA">B3KA</option>
        <option value="B3LA">B3LA</option>
        <option value="B3MA">B3MA</option>
        <option value="D1AA">D1AA</option>
        <option value="D1BA">D1BA</option>
        <option value="D2AA">D2AA</option>
        <option value="D2BA">D2BA</option>
        <option value="D2CA">D2CA</option>
        <option value="D2DA">D2DA</option>
        <option value="D2EA">D2EA</option>
        <option value="D2FA">D2FA</option>
        <option value="D2GA">D2GA</option>
        <option value="D2HA">D2HA</option>
        <option value="D2IA">D2IA</option>
        <option value="D2JA">D2JA</option>
        <option value="D2KA">D2KA</option>
        <option value="D2LA">D2LA</option>
        <option value="D2MA">D2MA</option>
        <option value="D2NA">D2NA</option>
        <option value="D3AA">D3AA</option>
        <option value="D3BA">D3BA</option>
        <option value="D3CA">D3CA</option>
        <option value="D3DA">D3DA</option>
        <option value="D3EA">D3EA</option>
        <option value="D3FA">D3FA</option>
        <option value="D3GA">D3GA</option>
        <option value="D3HA">D3HA</option>
        <option value="D3IA">D3IA</option>
        <option value="D3JA">D3JA</option>
        <option value="D3KA">D3KA</option>
        <option value=""></option>
        <option value="">* PENSUM 2011 *</option>
        <option value=""></option>
        <option value="B1AB">B1AB</option>
        <option value="B1BB">B1BB</option>
        <option value="B1CB">B1CB</option>
        <option value="B1DB">B1DB</option>
        <option value="B1EB">B1EB</option>
        <option value="F2YB">F2YB</option>
        <option value="B2AB">B2AB</option>
        <option value="B2BB">B2BB</option>
        <option value="B2CB">B2CB</option>
        <option value="B2EB">B2EB</option>
        <option value="B2FB">B2FB</option>
        <option value="B2GB">B2GB</option>
        <option value="B2HB">B2HB</option>
        <option value="B2IB">B2IB</option>
        <option value="B2JB">B2JB</option>
        <option value="B2KB">B2KB</option>
        <option value="B2LB">B2LB</option>
        <option value="B3AB">B3AB</option>
        <option value="B3BB">B3BB</option>
        <option value="B3CB">B3CB</option>
        <option value="B3DB">B3DB</option>
        <option value="B3EB">B3EB</option>
        <option value="B3FB">B3FB</option>
        <option value="B3GB">B3GB</option>
        <option value="B3HB">B3HB</option>
        <option value="B3IB">B3IB</option>
        <option value="B3JB">B3JB</option>
        <option value="B3KB">B3KB</option>
        <option value="B3LB">B3LB</option>
        <option value="B3MB">B3MB</option>
        <option value="D1AB">D1AB</option>
        <option value="D1BB">D1BB</option>
        <option value="F2XB">F2XB</option>
        <option value="D2AB">D2AB</option>
        <option value="D2CB">D2CB</option>
        <option value="D2DB">D2DB</option>
        <option value="D2EB">D2EB</option>
        <option value="D2FB">D2FB</option>
        <option value="D2GB">D2GB</option>
        <option value="D2HB">D2HB</option>
        <option value="D2IB">D2IB</option>
        <option value="D2JB">D2JB</option>
        <option value="D2KB">D2KB</option>
        <option value="D3AB">D3AB</option>
        <option value="D3BB">D3BB</option>
        <option value="D3CB">D3CB</option>
        <option value="D3DB">D3DB</option>
        <option value="D3EB">D3EB</option>
        <option value="D3FB">D3FB</option>
        <option value="D3GB">D3GB</option>
        <option value="D3HB">D3HB</option>
        <option value="D3IB">D3IB</option>
        <option value="D3JB">D3JB</option>
        <option value="D3KB">D3KB</option>
        <option value=""></option>
        <option value="">* PENSUM 2014 *</option>
        <option value=""></option>
        <option value="B0AC">B0AC</option>
        <option value="B0BC">B0BC</option>
        <option value="B0CC">B0CC</option>
        <option value="B0DC">B0DC</option>
        <option value="B0EC">B0EC</option>
        <option value="B1AC">B1AC</option>
        <option value="B1BC">B1BC</option>
        <option value="B1CC">B1CC</option>
        <option value="B1DC">B1DC</option>
        <option value="B1EC">B1EC</option>
        <option value="B1FC">B1FC</option>
        <option value="B1GC">B1GC</option>
        <option value="B1HC">B1HC</option>
        <option value="B1IC">B1IC</option>
        <option value="B1JC">B1JC</option>
        <option value="B1KC">B1KC</option>
        <option value="B1LC">B1LC</option>
        <option value="B1MC">B1MC</option>
        <option value="B2AC">B2AC</option>
        <option value="B2BC">B2BC</option>
        <option value="B2CC">B2CC</option>
        <option value="B2DC">B2DC</option>
        <option value="B2EC">B2EC</option>
        <option value="B2FC">B2FC</option>
        <option value="B2GC">B2GC</option>
        <option value="B2HC">B2HC</option>
        <option value="B2IC">B2IC</option>
        <option value="B2JC">B2JC</option>
        <option value="B2KC">B2KC</option>
        <option value="B2LC">B2LC</option>
        <option value="B2MC">B2MC</option>
        <option value="B2NC">B2NC</option>
        <option value="B2OC">B2OC</option>
        <option value="D0AC">D0AC</option>
        <option value="D0BC">D0BC</option>
        <option value="D0CC">D0CC</option>
        <option value="D0DC">D0DC</option>
        <option value="D0EC">D0EC</option>
        <option value="D0FC">D0FC</option>
        <option value="D3AC">D3AC</option>
        <option value="D3BC">D3BC</option>
        <option value="D3CC">D3CC</option>
        <option value="D3DC">D3DC</option>
        <option value="D3EC">D3EC</option>
        <option value="D3FC">D3FC</option>
        <option value="D3GC">D3GC</option>
        <option value="D3HC">D3HC</option>
        <option value="D3IC">D3IC</option>
        <option value="D3JC">D3JC</option>
        <option value="D3KC">D3KC</option>
        <option value="D3LC">D3LC</option>
        <option value="D3MC">D3MC</option>
        <option value="D4AC">D4AC</option>
        <option value="D4BC">D4BC</option>
        <option value="D4CC">D4CC</option>
        <option value="D4DC">D4DC</option>
        <option value="D4EC">D4EC</option>
        <option value="D4FC">D4FC</option>
        <option value="D4GC">D4GC</option>
        <option value="D4HC">D4HC</option>
        <option value="D4IC">D4IC</option>
        <option value="D4JC">D4JC</option>
        <option value="D4KC">D4KC</option>
        <option value="D4lC">D4lC</option>
        <option value="D4MC">D4MC</option>
      </select></td>
    <td width="140"><center><strong>Código U.C. (Pensum):</strong></center></td>
    <td width="112"><select name="cod_uc_malla" id="cod_uc_malla">
      <option value="selected">Seleccione</option>
      <option value=""></option>
      <option value="">* 2009 *</option>
      <option value=""></option>
      <option value="B1AA">B1AA</option>
      <option value="B1BA">B1BA</option>
      <option value="B1CA">B1CA</option>
      <option value="B2AA">B2AA</option>
      <option value="B2BA">B2BA</option>
      <option value="B2CA">B2CA</option>
      <option value="B2DA">B2DA</option>
      <option value="B2EA">B2FA</option>
      <option value="B2GA">B2GA</option>
      <option value="B2HA">B2HA</option>
      <option value="B2IA">B2IA</option>
      <option value="B2JA">B2JA</option>
      <option value="B2KA">B2KA</option>
      <option value="B2LA">B2LA</option>
      <option value="B3AA">B3AA</option>
      <option value="B3BA">B3BA</option>
      <option value="B3CA">B3CA</option>
      <option value="B3DA">B3DA</option>
      <option value="B3EA">B3EA</option>
      <option value="B3FA">B3FA</option>
      <option value="B3GA">B3GA</option>
      <option value="B3HA">B3HA</option>
      <option value="B3JA">B3JA</option>
      <option value="B3KA">B3KA</option>
      <option value="B3LA">B3LA</option>
      <option value="B3MA">B3MA</option>
      <option value="D1AA">D1AA</option>
      <option value="D1BA">D1BA</option>
      <option value="D2AA">D2AA</option>
      <option value="D2BA">D2BA</option>
      <option value="D2CA">D2CA</option>
      <option value="D2DA">D2DA</option>
      <option value="D2EA">D2EA</option>
      <option value="D2FA">D2FA</option>
      <option value="D2GA">D2GA</option>
      <option value="D2HA">D2HA</option>
      <option value="D2IA">D2IA</option>
      <option value="D2JA">D2JA</option>
      <option value="D2KA">D2KA</option>
      <option value="D2LA">D2LA</option>
      <option value="D2MA">D2MA</option>
      <option value="D2NA">D2NA</option>
      <option value="D3AA">D3AA</option>
      <option value="D3BA">D3BA</option>
      <option value="D3CA">D3CA</option>
      <option value="D3DA">D3DA</option>
      <option value="D3EA">D3EA</option>
      <option value="D3FA">D3FA</option>
      <option value="D3GA">D3GA</option>
      <option value="D3HA">D3HA</option>
      <option value="D3IA">D3IA</option>
      <option value="D3JA">D3JA</option>
      <option value="D3KA">D3KA</option>
      <option value=""></option>
      <option value="">* 2011 *</option>
      <option value=""></option>
      <option value="B1AB">B1AB</option>
      <option value="B1BB">B1BB</option>
      <option value="B1CB">B1CB</option>
      <option value="B1DB">B1DB</option>
      <option value="B1EB">B1EB</option>
      <option value="F2YB">F2YB</option>
      <option value="B2AB">B2AB</option>
      <option value="B2BB">B2BB</option>
      <option value="B2CB">B2CB</option>
      <option value="B2EB">B2EB</option>
      <option value="B2FB">B2FB</option>
      <option value="B2GB">B2GB</option>
      <option value="B2HB">B2HB</option>
      <option value="B2IB">B2IB</option>
      <option value="B2JB">B2JB</option>
      <option value="B2KB">B2KB</option>
      <option value="B2LB">B2LB</option>
      <option value="B3AB">B3AB</option>
      <option value="B3BB">B3BB</option>
      <option value="B3CB">B3CB</option>
      <option value="B3DB">B3DB</option>
      <option value="B3EB">B3EB</option>
      <option value="B3FB">B3FB</option>
      <option value="B3GB">B3GB</option>
      <option value="B3HB">B3HB</option>
      <option value="B3IB">B3IB</option>
      <option value="B3JB">B3JB</option>
      <option value="B3KB">B3KB</option>
      <option value="B3LB">B3LB</option>
      <option value="B3MB">B3MB</option>
      <option value="D1AB">D1AB</option>
      <option value="D1BB">D1BB</option>
      <option value="F2XB">F2XB</option>
      <option value="D2AB">D2AB</option>
      <option value="D2CB">D2CB</option>
      <option value="D2DB">D2DB</option>
      <option value="D2EB">D2EB</option>
      <option value="D2FB">D2FB</option>
      <option value="D2GB">D2GB</option>
      <option value="D2HB">D2HB</option>
      <option value="D2IB">D2IB</option>
      <option value="D2JB">D2JB</option>
      <option value="D2KB">D2KB</option>
      <option value="D3AB">D3AB</option>
      <option value="D3BB">D3BB</option>
      <option value="D3CB">D3CB</option>
      <option value="D3DB">D3DB</option>
      <option value="D3EB">D3EB</option>
      <option value="D3FB">D3FB</option>
      <option value="D3GB">D3GB</option>
      <option value="D3HB">D3HB</option>
      <option value="D3IB">D3IB</option>
      <option value="D3JB">D3JB</option>
      <option value="D3KB">D3KB</option>
      <option value=""></option>
      <option value="">* 2014 *</option>
      <option value=""></option>
      <option value="B0AC">B0AC</option>
      <option value="B0BC">B0BC</option>
      <option value="B0CC">B0CC</option>
      <option value="B0DC">B0DC</option>
      <option value="B0EC">B0EC</option>
      <option value="B1AC">B1AC</option>
      <option value="B1BC">B1BC</option>
      <option value="B1CC">B1CC</option>
      <option value="B1DC">B1DC</option>
      <option value="B1EC">B1EC</option>
      <option value="B1FC">B1FC</option>
      <option value="B1GC">B1GC</option>
      <option value="B1HC">B1HC</option>
      <option value="B1IC">B1IC</option>
      <option value="B1JC">B1JC</option>
      <option value="B1KC">B1KC</option>
      <option value="B1LC">B1LC</option>
      <option value="B1MC">B1MC</option>
      <option value="B2AC">B2AC</option>
      <option value="B2BC">B2BC</option>
      <option value="B2CC">B2CC</option>
      <option value="B2DC">B2DC</option>
      <option value="B2EC">B2EC</option>
      <option value="B2FC">B2FC</option>
      <option value="B2GC">B2GC</option>
      <option value="B2HC">B2HC</option>
      <option value="B2IC">B2IC</option>
      <option value="B2JC">B2JC</option>
      <option value="B2KC">B2KC</option>
      <option value="B2LC">B2LC</option>
      <option value="B2MC">B2MC</option>
      <option value="B2NC">B2NC</option>
      <option value="B2OC">B2OC</option>
      <option value="D0AC">D0AC</option>
      <option value="D0BC">D0BC</option>
      <option value="D0CC">D0CC</option>
      <option value="D0DC">D0DC</option>
      <option value="D0EC">D0EC</option>
      <option value="D0FC">D0FC</option>
      <option value="D3AC">D3AC</option>
      <option value="D3BC">D3BC</option>
      <option value="D3CC">D3CC</option>
      <option value="D3DC">D3DC</option>
      <option value="D3EC">D3EC</option>
      <option value="D3FC">D3FC</option>
      <option value="D3GC">D3GC</option>
      <option value="D3HC">D3HC</option>
      <option value="D3IC">D3IC</option>
      <option value="D3JC">D3JC</option>
      <option value="D3KC">D3KC</option>
      <option value="D3LC">D3LC</option>
      <option value="D3MC">D3MC</option>
      <option value="D4AC">D4AC</option>
      <option value="D4BC">D4BC</option>
      <option value="D4CC">D4CC</option>
      <option value="D4DC">D4DC</option>
      <option value="D4EC">D4EC</option>
      <option value="D4FC">D4FC</option>
      <option value="D4GC">D4GC</option>
      <option value="D4HC">D4HC</option>
      <option value="D4IC">D4IC</option>
      <option value="D4JC">D4JC</option>
      <option value="D4KC">D4KC</option>
      <option value="D4lC">D4lC</option>
      <option value="D4MC">D4MC</option>
    </select></td>
   	  
    <td width="47"><center><strong>Sección:</strong></center></td>
    <td width="138"><select name="seccion" id="seccion">
      <option value="selected">Seleccione</option>
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
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      <option value="32">32</option>
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="61">61</option>
      <option value="62">62</option>
      <option value="63">63</option>
      <option value="64">64</option>
      <option value="65">65</option>
      <option value="66">66</option>
      <option value="67">67</option>
      <option value="68">68</option>
      <option value="69">69</option>
      <option value="70">70</option>
      <option value="71">71</option>
      <option value="72">72</option>
      <option value="73">73</option>
      <option value="74">74</option>
      <option value="75">75</option>
      <option value="76">76</option>
      <option value="77">77</option>
      <option value="78">78</option>
      <option value="79">79</option>
      <option value="80">80</option>
      <option value="81">81</option>
      <option value="82">82</option>
      <option value="83">83</option>
      <option value="84">84</option>
      <option value="85">85</option>
    </select></td>
  </tr>
</table>		
		
<table width="920" border="0">
  <tr>
    <td width="163" height="32"><center><strong>Unidad Curricular (U.C.):</strong></center></td>
    <td width="739"><select name="nom_uc" id="nom_uc">
      <option value="selected">Seleccione</option>
      <option value="">* TRAYECTO INICIAL. MALLA O PENSUM 2009 * </option>
      <option value=""> </option>
      <option value="Matemática">Matemática</option>
      <option value="Proyecto Nacional y Nueva Ciudadanía">Proyecto Nacional y Nueva Ciudadanía</option>
      <option value="Taller de Inducción">Taller de Inducción</option>
      <option value=""> </option>
      <option value="">* TRAYECTO I. MALLA O PENSUM 2009 * </option>
      <option value=""> </option>
      <option value="Administración Pública Nacional">Administración Pública Nacional</option>
      <option value="Proyecto I: Análisis y Ejecución de los Procesos Administrativos en las distintas Organizaciones">Proyecto I: Análisis y Ejecución de los Procesos Administrativos en las distintas Organizaciones</option>
      <option value="Contabilidad I">Contabilidad I</option>
      <option value="Educación Física y Cultura I">Educación Física y Cultura I</option>
      <option value="Inglés I">Inglés I</option>
      <option value="Operaciones Financieras">Operaciones Financieras</option>
      <option value="Teoría y Práctica del Mercadeo">Teoría y Práctica del Mercadeo</option>
      <option value="Fundamentos de Administración">Fundamentos de Administración</option>
      <option value="Tecnología de la Información y Comunicación I">Tecnología de la Información y Comunicación I</option>
      <option value="Deberes Formales del Contribuyente I">Deberes Formales del Contribuyente I</option>
      <option value="Redacción de Informes">Redacción de Informes</option>
      <option value="Técnicas Para la Recolección y Análisis de Datos">Técnicas Para la Recolección y Análisis de Datos</option>
      <option value=""> </option>
      <option value="">* TRAYECTO II. MALLA O PENSUM 2009 * </option>
      <option value=""> </option>
      <option value="Proyecto II: Super. y Conduc. Técn. Proc. Admin.">Proyecto II: Super. y Conduc. Técn. Proc. Admin.</option>
      <option value="Economía Sustentable en los Modelos de Desarrollo">Economía Sustentable en los Modelos de Desarrollo</option>
      <option value="Contabilidad">Contabilidad II.</option>
      <option value="Administración de Costos">Administración de Costos</option>
      <option value="Talento Humano Y Ambiente de Trabajo">Talento Humano Y Ambiente de Trabajo</option>
      <option value="Organización y Métodos">Organización y Métodos</option>
      <option value="Electiva I: Calidad y Gestión Ambiental en la Organización">Electiva I: Calidad y Gestión Ambiental en la Organización</option>
      <option value="Electiva II">Electiva II</option>
      <option value="Contabilidad Gubernamental">Contabilidad Gubernamental</option>
      <option value="Tecnología de la Información y Comunicación II">Tecnología de la Información y Comunicación II</option>
      <option value="Marco Legal Vigente de las Organizaciones">Marco Legal Vigente de las Organizaciones</option>
      <option value="Deberes Formales del Contribuyente II">Deberes Formales del Contribuyente II</option>
      <option value=""> </option>
      <option value="">* PROCECUSIÓN. MALLA 2009 * </option>
      <option value=""> </option>
      <option value="Taller de Integración">Taller de Integración</option>
      <option value="Proyecto Nacional y Nueva Ciudanía">Proyecto Nacional y Nueva Ciudanía</option>
      <option value=""> </option>
      <option value="">* TRAYECTO III. MALLA O PENSUM 2009 * </option>
      <option value=""> </option>
      <option value="Administración de la Producción">Administración de la Producción</option>
      <option value="Deporte, Arte Y Recreación I">Deporte, Arte Y Recreación I</option>
      <option value="Proyecto III: Planificación, Diseño, Desarrollo e Innovación de Sistemas Administrativos">Proyecto III: Planificación, Diseño, Desarrollo e Innovación de Sistemas Administrativos</option>
      <option value="Formulación y Evaluación de Proyectos">Formulación Y Evaluación de Proyectos</option>
      <option value="Inglés II">Inglés II</option>
      <option value="Participación Social en la Administración de Producción Dist.">Participación Social en la Administración de Producción Dist.</option>
      <option value="Presupuesto Privado">Presupuesto Privado</option>
      <option value="Administración del Mercadeo">Administración del Mercadeo</option>
      <option value="Presupuesto Público">Presupuesto Público</option>
      <option value="Declaración de Rentas">Declaración de Rentas</option>
      <option value="Creatividad E Innovación">Creatividad E Innovació</option>
      <option value="Tecnología de la Información y Comunicación III">Tecnología de la Información y Comunicación III</option>
      <option value="Planificación">Planificación</option>
      <option value="Metodo Estadístico para la Investigación">Metodo Estadísitco para la Investigación</option>
      <option value=""> </option>
      <option value="">* TRAYECTO IV. MALLA O PENSUM 2009 * </option>
      <option value=""> </option>
      <option value="Proyecto IV: Dirección, Control y Evaluación de Sistemas Administrativos">Proyecto IV: Dirección, Control y Evaluación de Sistemas Administrativos</option>
      <option value="Adm. Proc. Unidad Alc En Nuevo C">Adm. Proc. Unidad Alc En Nuevo C</option>
      <option value="Análisis e Interpretación de los Estados Financieros">Análisis e Interpretación de los Estados Financieros</option>
      <option value="Sistemas Financieros">Sistemas Financieros</option>
      <option value="Administración Financiera">Administración Financiera</option>
      <option value="Electiva III: Administración de Empresas de Propiedad y Producción Social">Electiva III: Administración de Empresas de Propiedad y Producción Social</option>
      <option value="Electiva IV: Nuevos Paradigmas">Electiva IV: Nuevos Paradigmas</option>
      <option value="Control de Gestión Administrativa">Control de Gestión Administrativa</option>
      <option value="Dirección en Organizaciones">Dirección en Organizaciones</option>
      <option value="Plan de Negocio">Plan de Negocio</option>
      <option value="Paquetes Integrales al Proceso Administrativo">Paquetes Integrales al Proceso Administrativo</option>
      <option value=""> </option>
      <option value="">* TRAYECTO IV. MALLA O PENSUM 2011 * </option>
      <option value=""> </option>
      <option value="Matemática">Matemática</option>
      <option value="Proyecto Nacional y Nueva Ciudadanía">Proyecto Nacional y Nueva Ciudadanía</option>
      <option value="Desarrollo Integral">Desarrollo Integral</option>
      <option value="Gestión de Riesgo y Protección Civil">Gestión de Riesgo y Protección Civil</option>
      <option value="Proyecto Inicial Administración en el Nuevo Modelo Social">Proyecto Inicial Administración en el Nuevo Modelo Social</option>
      <option value="Educación Física y Cultura I">Educación Física y Cultura I</option>
      <option value=""> </option>
      <option value="">* TRAYECTO I. MALLA O PENSUM 2011 * </option>
      <option value=""> </option>
      <option value="Proyecto I: Identificación y Conocimiento de los Procesos Administrativos en las Distintas Organizaciones">Proyecto I: Ident. y Conoc. Proc. Admin. en las Distintas Organizaciones</option>
      <option value="Técnicas de Expresión Oral y Escrita">Técnicas de Expresión Oral y Escrita</option>
      <option value="Contabilidad I">Contabilidad I</option>
      <option value="Idiomas I">Idiomas I</option>
      <option value="Operaciones Financieras">Operaciones Financieras</option>
      <option value="Teoría y Práctica del Mercadeo">Teoría y Práctica del Mercadeo</option>
      <option value="Tecnologías de la Información y Comunicación I">Tecnologías de la Información y Comunicación I</option>
      <option value="Estadística">Estadística</option>
      <option value="Deberes Formales del Contribuyente I">Deberes Formales del Contribuyente I</option>
      <option value="Formación Sociocritica I">Formación Sociocritica I</option>
      <option value="Fundamentos de Administración">Fundamentos de Administración</option>
      <option value=""> </option>
      <option value="">* TRAYECTO II. MALLA O PENSUM 2011 * </option>
      <option value=""> </option>
      <option value="Proyecto II: Supervisión y Conducción Técnica de los Procesos Administrativos">Proyecto II: Supervisión y Conducción Técnica de los Procesos Administrativos</option>
      <option value="Contabilidad Gubernamental">Contabilidad Gubernamental</option>
      <option value="Contabilidad II">Contabilidad II</option>
      <option value="Administración de Costos">Administración de Costos</option>
      <option value="Talento Humano Y Ambiente de Trabajo">Talento Humano Y Ambiente de Trabajo</option>
      <option value="Organización y Métodos">Organización y Métodos</option>
      <option value="Electiva I">Electiva I</option>
      <option value="Electiva II">Electiva II</option>
      <option value="Tecnología de la Información y Comunicación II">Tecnología de la Información y Comunicación II</option>
      <option value="Marco Legal Vigente de las Organizaciones">Marco Legal Vigente de las Organizaciones</option>
      <option value="Deberes Formales del Contribuyente II">Deberes Formales del Contribuyente II</option>
      <option value="Formación Sociocritica II">Formación Sociocritica II</option>
      <option value="Habilidades Directivas I">Habilidades Directivas I</option>
      <option value=""> </option>
      <option value="">* PROSECUCIóN. MALLA O PENSUM 2011 * </option>
      <option value=""> </option>
      <option value="Taller de Integración">Taller de Integración</option>
      <option value="Proyecto Nacional y Nueva Ciudadanía">Proyecto Nacional y Nueva Ciudadanía</option>
      <option value=""> </option>
      <option value="">* TRAYECTO III. MALLA O PENSUM 2011 * </option>
      <option value=""> </option>
      <option value="Educación Física y Cultura II">Educación Física y Cultura II</option>
      <option value="Administración de la Producción">Administración de la Producción</option>
      <option value="Proyecto III: Planificación, Diseño, Desarrollo e Innovación de Sistemas Administrativos">Proyecto III: Planificación, Diseño, Desarrollo e Innovación de Sistemas Administrativos</option>
      <option value="Idiomas II">Idiomas II</option>
      <option value="Planificación">Planificación</option>
      <option value="Presupuesto Público y Privado">Presupuesto Público y Privado</option>
      <option value="Administración del Mercadeo">Administración del Mercadeo</option>
      <option value="Declaración de Rentas">Declaración de Rentas</option>
      <option value="Formación Sociocritica III">Formación Sociocritica III</option>
      <option value="Análisis e Interpretación de los Estados Financieros">Análisis e Interpretación de los Estados Financieros</option>
      <option value=""> </option>
      <option value="">* TRAYECTO IV. MALLA O PENSUM 2011 * </option>
      <option value=""> </option>
      <option value="Proyecto IV: Supervisión y Conducción Técnica de los Procesos Administrativos">Proyecto IV: Supervisión y Conducción Técnica de los Procesos Administrativos</option>
      <option value="Control de la Gestión Administrativa">Control de la Gesti{o}n Administrativa</option>
      <option value="Paquetes Informáticos Aplicados a los Procesos Administrativos">Paquetes Informáticos Aplicados a los Procesos Administrativos</option>
      <option value="Sistemas Financieros">Sistemas Financieros</option>
      <option value="Administración Financiera">Administración Financiera</option>
      <option value="Electiva III: Administración de Empresas de Propiedad y Producción Social">Electiva III: Administración de Empresas de Propiedad y Producción Social</option>
      <option value="Electiva IV">Electiva IV</option>
      <option value="Auditoria Administrativa">Auditoria Administrativa</option>
      <option value="Formación Sociocritica IV">Formación Sociocritica IV</option>
      <option value="Habilidades Directivas II">Habilidades Directivas II</option>
      <option value="Formulación y Evaluación de Proyectos">Formulación y Evaluación de Proyectos</option>
      <option value=""> </option>
      <option value="MALLA O PENSUM 2014">* MALLA O PENSUM 2014 *</option>
      <option value=""> </option>
      <option value="">* TRAYECTO INICIAL. MALLA O PENSUM 2014 * </option>
      <option value=""> </option>
      <option value="Proyecto Nacional Y Nueva Ciudadanía">Proyecto Nacional Y Nueva Ciudadanía.</option>
      <option value="Desarrollo Integral">Desarrollo Integral</option>
      <option value="Matemática Aplicada a la Administración">Matemática Aplicada a la Administración</option>
      <option value="Gestión de Riesgo y Protección Civil">Gestión de Riesgo y Protección Civil</option>
      <option value="Proyecto Incial de la Administración en el Nuevo Modelo Social">Proyecto Incial de la Administración en el Nuevo Modelo Social</option>
      <option value=""> </option>
      <option value="">* TRAYECTO I. MALLA O PENSUM 2014 * </option>
      <option value=""> </option>
      <option value="Fundamentos de Administración">Fundamentos de Administración</option>
      <option value="Contabilidad I">Contabilidad I</option>
      <option value="Formación Socio Critica I">Formación Socio Crítica I</option>
      <option value="Proyecto Socio Integrador I">Proyecto Socio Integrador I</option>
      <option value="Expresión Oral y Escrita">Expresión Oral y Escrita</option>
      <option value="Tecnología de Información y Comunicación">Tecnología de Información y Comunicación</option>
      <option value="Estadística">Estadística</option>
      <option value="Marco Jurídico I">Marco Jurídico I</option>
      <option value="Teoría y Práctica del Mercadeo">Teoría y Práctica del Mercadeo</option>
      <option value="Operaciones Financieras">Operaciones Financieras</option>
      <option value="Deberes Formales del Contribuyente (TP)">Deberes Formales del Contribuyente (TP)</option>
      <option value="Electiva I">Electiva I</option>
      <option value="Educación Física y Cultura I">Educación Física y Cultura I</option>
      <option value=""> </option>
      <option value="">* TRAYECTO II. MALLA O PENSUM 2014 * </option>
      <option value=""> </option>
      <option value="Contabilidad II*">Contabilidad II*</option>
      <option value="Formación Socio Crítica II">Formación Socio Critica II</option>
      <option value="Proyecto Socio Integrador II">Proyecto Socio Integrador II</option>
      <option value="Organización y Sistemas">Organización y Sistemas</option>
      <option value="Gestión del Talento Humano">Gestión del Talento Humano</option>
      <option value="Habilidades Directivas I">Habilidades Directivas I</option>
      <option value="Marco Jurídico II"></option>
      <option value="Fundamentos de  Economía">Fundamentos de Economía</option>
      <option value="Administración de Costos I">Administración de Costos I</option>
      <option value="Presupuesto Público y Privado">Presupuesto Público y Privado</option>
      <option value="Gestión Ecológica Ambiental">Gestión Ecológica Ambiental</option>
      <option value="Deberes Formales del Contribuyente">Deberes Formales del Contribuyente</option>
      <option value="Electiva II">Electiva II</option>
      <option value="Idiomas I">Idiomas I</option>
      <option value="Prácticas Profesionales">Prácticas Profesionales</option>
      <option value=""> </option>
      <option value="">* TRANSICIóN. MALLA O PENSUM 2014 * </option>
      <option value=""> </option>
      <option value="ética en el  Ejercicio Profesional">ética en el Ejercicio Profesional</option>
      <option value="Administración del Nuevo Modelo Social">Administración del Nuevo Modelo Social</option>
      <option value="Gestión Ecológica y Ambiental">Gestión Ecológica y Ambiental</option>
      <option value="Proyecto Nacional y Nueva Ciudadanía">Proyecto Nacional y Nueva Ciudadanía</option>
      <option value="Seminario I: Área Contable">Seminario I: Área Contable</option>
      <option value="Seminario II: Desarrollo Social Comunitario">Seminario II: Desarrollo Social Comunitario</option>
      <option value=""> </option>
      <option value="">* TRAYECTO III. MALLA O PENSUM 2014 * </option>
      <option value=""> </option>
      <option value="Formación Socio Crítica III">Formación Socio Critica III</option>
      <option value="Administración de Mercadeo">Administración de Mercadeo</option>
      <option value="Administración de la Producción">Administración de la Producción</option>
      <option value="Contabilidad Gubernamental">Contabilidad Gubernamental</option>
      <option value="Sistemas Administrativos">Sistemas Administrativos</option>
      <option value="Proyecto Socio Integrador III">Proyecto Socio Integrador III</option>
      <option value="Estadística II">Estadística II</option>
      <option value="Habilidades Directivas II">Habilidades Directivas II</option>
      <option value="Análisis e Interpretación Estados Financieros">Análisis e Interpretación Estados Financieros</option>
      <option value="Planificación y Gestión">Planificación y Gestión</option>
      <option value="Administración de Costos II">Administración de Costos II</option>
      <option value="Electiva III">Electiva III</option>
      <option value="Educación Física y Cultura II">Educación Física y Cultura II</option>
      <option value=""> </option>
      <option value="">* TRAYECTO IV. MALLA O PENSUM 2014 * </option>
      <option value=""> </option>
      <option value="Formación Socio Critica  IV">Formación Socio Critíca IV</option>
      <option value="Proyecto Socio Integrador IV">Proyecto Socio Integrador IV</option>
      <option value="Administración Financiera">Administración Financiera</option>
      <option value="Auditoria Administrativa">Auditoria Administrativa</option>
      <option value="Formulación y Evaluación de Proyectos">Formulación y Evaluación de Proyectos</option>
      <option value="Sistemas Financieros">Sistemas Financieros</option>
      <option value="Paquetes Informáticos Aplicados a la Administración">Paquetes Informáticos Aplicados a la Administración</option>
      <option value="Gestión Pública">Gestión Píblica</option>
      <option value="Investigación de Operaciones">Investigación de Operaciones</option>
      <option value="Electiva IV">Electiva IV</option>
      <option value="Control de Gestión Administrativa">Control de Gestión Administrativa</option>
      <option value="Prácticas Profesionales">Prácticas Profesionales</option>
      <option value="Idiomas II">Idiomas II</option>
    </select></td>
  </tr>
</table>


<table width="920" border="0">
  <tr>
    <td width="138" height="40"><center><strong>Unidad de Cédito:</strong></center></td>
    <td width="122"><select name="select" id="select">
      <option value="selected">Seleccione</option>
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
    </select></td>
    <td width="230"><center><strong>Calificación Mímima Aprobatoria:</strong></center></td>
    <td width="137"><span>
      <select name="seccion" id="seccion">
      <option value="selected">Seleccione</option>
      <option value="10">10</option>
      <option value="12">12</option>
      <option value="16">16</option>
    </select></td>
    <td width="119"><center><strong>Fecha Emisión:</strong></center></td>
    <td width="134"><strong>
      <input name="fecha" type="date" id="fecha" size="13">
    </strong></td>
  </tr>
</table>
	  </fieldset>
<br>
			<fieldset style="width:950px; height:160px">
<br>
			<b><p>INFORMACIÓN DEL (LA) ESTUDIANTE:</p></b>
			
<br>			
				<table width="920" border="0">
                  <tr>
                    <td width="150" height="40"><strong>Apellido(s) y Nombre(s):</strong></td>
                    <td width="267"><input type="text" name="apell_nomb_estud" id="apell_nomb_estud" size="35" placeholder="Ingrese el (los) Nombre (s)" onKeyPress="return letra(event)" required></td>
                    <td width="123"><strong>Cédula de Identidad:</strong></td>
                    <td width="136"><input type="text" name="cedula" id="cedula" size="14" placeholder="Cédula del (la) Estudiante" onKeyPress="return numero(event)" required></td>
                    <td width="103"><strong>Código CARSCE: </strong></td>
                    <td width="115"><strong>
                      <input name="cod_casce" type="text" id="cod_casce" size="13" placeholder="Ingrese el Código" required>
                    </strong></td>
                  </tr>
            </table>
			
				<table width="920" border="0">
                  <tr>
                    <td width="139" height="40"><strong>Calificación En Número:</strong></td>
                    <td width="100"><select name="ultima_nota_numero" id="ultima_nota_numero">
                      <option value="selected">Seleccione</option>
                      <option value="IN">IN</option>
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
                    <td width="131"><strong>Calificación En Letra:</strong></td>
                    <td width="143"><select name="ultima_nota_letra" id="ultima_nota_letra">
                      <option value="selected">Seleccione</option>
                      <option value="INASISTENTE">INASISTENTE</option>
                      <option value="CERO UNO">01</option>
                      <option value="CERO DOS">02</option>
                      <option value="CERO TRES">03</option>
                      <option value="CERO CUATRO">04</option>
                      <option value="CERO CINCO">05</option>
                      <option value="CERO SEIS">06</option>					  					  
                      <option value="CERO SIETE">07</option>
                      <option value="CERO OCHO">08</option>
                      <option value="CERO NUEVE">09</option>
                      <option value="CERO DIEZ">10</option>
                      <option value="ONCE">ONCE</option>
                      <option value="DOCE">DOCE</option>
                      <option value="TRECE">TRECE</option>
                      <option value="CATORCE">CATORCE</option>
                      <option value="QUINCE">QUINCE</option>
                      <option value="DIECISÉIS">DIECISÉIS</option>
                      <option value="DIECISIETE">DIECISIETE</option>
                      <option value="DIECIOCHO">DIECIOCHO</option>
                      <option value="DIECINUEVE">DIECINUEVE</option>
                      <option value="VEINTE">VEINTE</option>
                    </select></td>
                    <td width="62"><strong>APROBÓ:</strong></td>
                    <td width="76" align="center"><strong>SI:</strong></td>
                    <td width="76" align="center"><label><input name="radiobutton" type="radio" id="SI" value="radiobutton"></label></td>
                    <td width="76" align="center"><strong>NO:</strong></td>
                    <td width="79" align="center"><label><input name="radiobutton" type="radio" id="NO" value="radiobutton"></label></td>
                  </tr>
            </table>
				<br>

						
			</fieldset>

<br>
			<fieldset style="width:950px; height:120px">
<br>
			<b><p>INFORMACIÓN DEL (LA) DOCENTE:</p></b>
			
<br>			
				<table width="920" border="0">
                  <tr>
                    <td width="151" height="40"><strong>Apellido(s) y Nombre(s):</strong></td>
                    <td width="270"><input type="text" name="apellidos_nombres_doc" id="apellidos_nombres_doc" size="35" placeholder="Ingrese el (los) Nombre (s)" onKeyPress="return letra(event)" required></td>
                    <td width="120"><strong>Cédula de Identidad:</strong></td>
                    <td width="135"><input type="text" name="cedula3" id="cedula3" size="14" placeholder="Cédula del (la) Docente" onKeyPress="return numero(event)" required></td>
                    <td width="103"><strong>Código CARSCE: </strong></td>
                    <td width="115"><strong>
                      <input name="cod_casce" type="text" id="cod_casce" size="13" placeholder="Ingrese el Código" required>
                    </strong></td>
                  </tr>
            </table>
				<br>			
			
			</fieldset>

<br>
			<fieldset style="width:950px; height:120px">
			<br>
			<b><p>INFORMACIÓN DEL (LA) VOCERO (A):</p></b>
			
<br>			
				<table width="922" border="0">
                  <tr>
                    <td width="177" height="40"><strong>Apellido(s) y Nombre(s):</strong></td>
                    <td width="247"><input type="text" name="apellidos_nombres_doc2" id="apellidos_nombres_doc2" size="35" placeholder="Ingrese el (los) Nombre (s)" onKeyPress="return letra(event)" required></td>
                    <td width="146"><strong>Cédula de Identidad:</strong></td>
                    <td width="107"><input type="text" name="cedula2" id="cedula2" size="14" placeholder="Cédula del Docente" onKeyPress="return numero(event)" required></td>
                    <td width="94"><strong>Cód. Estudi.: </strong></td>
                    <td width="111"><strong>
                      <input name="cod_casce" type="text" id="cod_casce" size="13" placeholder="Ingrese el Código" required>
                    </strong></td>
                  </tr>
            </table>
				<br>			
      </form>			
			
			
			</fieldset>


	</fieldset></center>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  </script>
  <script type="text/javascript" src="js/scripts1.js"></script>	

</body>
<br>
<?php
include('banner_pieln.php');
?>
</body>


</html>
