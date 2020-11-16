<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  		<title>RELOJ DIGITAL DE 12 HORAS - JS</title>
  		<!--<link rel="stylesheet" href="estilos.css">-->
  		<style type="text/css">
* {
	margin: -0px;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	padding: -5px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border box;

}

body {
	background: /img/.css/fondonaranja.jpg;
	background-size: cover;
	color: #000000;
	font-size: 14px;
	padding-top: 6px;
	text-align: center;
}

.wrap {
	position:center;
	width: 100%;
	max-width: 40em;
	/*margin:auto;*/
}

.widget {
	width: 80%;
	max-width: 40em;
	/*margin:32px; */
}

.widget p {
	display: inline-block;
	line-height: 1em;
	background: #F17E03; /**/
}

.fecha {
	font-family: Oswald, Arial;
	text-align: center;
	font-size: 1em;
	font-weight: bold;
	margin-bottom: 0.3125rem;
	/*margin-bottom: 5px;*/
	background: #F17E03;
	padding: 4px;
	width: 210%;
	border-radius: 5px 0px 5px 0px;
	margin-left: 0px;
}

.reloj {
	font-family: Oswald, Arial;
	font-weight: bold;
	width: 210%;
	padding: 2px;		
	text-align: center;
	font-size: 1.5em;
	background: #F17E03;
	border-radius: 0px 5px 0px 5px;
	margin-left: 0px;
}

.caja-segundos {
	display: inline-block;
	background: #F17E03;
	font-weight: bold;
}

.reloj .segundos,
.reloj .ampm {
	font-size: 0.7rem;
	display: block;
}
  		</style>	

  		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	</head>

<body>
	<div class="wrap">
		<div class="widget">
			<div class="fecha">
				<p id="diaSemana" class="diaSemana"></p>
				<p id="dia" class="dia"></p>
				<p>/ </p>
				<p id="mes" class="mes"></p>
				<p>/ </p>
				<p id="year" class="year"></p>
			</div>	

				<div class="reloj">
					<p id="horas" class="horas"></p>
					<p>:</p>
					<p id="minutos" class="minutos"></p>
					<p>:</p>

				<div class="caja-segundos">
					<p id="ampm" class="ampm"></p>
					<p id="segundos" class="segundos"></p>
				</div>
			</div>
		</div>
	</div>

	<script src="js/reloj.js"></script>

</body>
</html>