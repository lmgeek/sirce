<!DOCTYPE html>
<html lang="es">
<head>
	<title>Calendario</title>
	<meta charset="utf-8">
	<style>
	body{
		max-width: 100%;
	}

		#calendar {
			font-family:Arial; /*CODIGO DEL TIPO DE LETRA DE LOS FECHAS*/
			font-size:12px; /*CODIGO DEL TAMAÑO DE LOS FECHAS*/
			color: #000000; /*CODIGO DE COLOR DE LAS FECHAS*/
		}

		#calendar caption {
			text-align: left;/*CODIGO DE ALINEACIÓN DE LOS DIAS DE LA SEMANA*/
			padding: 5px 10px;/*CODIGO DE LA POSICIÓN DE LOS DIAS DE LA SEMANA*/
			background-color: #F17E03; /*COLOR DE LA FRANJA QUE MUESTRA EL MES Y AÑO*/
			color: #000000; /*CODIGO DEL COLOR DE LOS DIAS DE LA SEMANA*/
			font-weight: bold; /*CODIGO DEL GROSOR (NEGRITA) DE LOS DIAS DE LA SEMANA*/
			font-size: medium;/*CODIGO DEL TAMAÑO DE DIAS DE LA SEMANA*/
		}

		#calendar caption div:nth-child(1) {float: left;}
		#calendar caption div:nth-child(2) {float: right;}
		#calendar caption div:nth-child(2) a {cursor: pointer;}
		#calendar th {
			background-color: #000000; /*COLOR DE LA FRANJA QUE MUESTRA EL LOS DIAS*/
			color: #FFFFFF;
			width: 40px;
		}

		#calendar td {
			text-align:right;
			padding: 2px 5px;
			background-color: white; /*COLOR DEL DEL FONDO DE LOS DIAS*/;
			font-weight: bold;
		}

		#calendar .hoy {
			background-color: #F17E03; /*COLOR DEL CUADRO DEL DIA RESALTADO*/;
		}
@media screen and (max-widht: 100px){
    body{
        widht:50px;
    }
}

	</style>
</head>
 
<body>
 
<center>
<table id="calendar">
	<caption></caption>
	<thead>
		<tr>
			<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
 
</body>
</html>
 
<script>
var actual=new Date();
function mostrarCalendario(year,month)
{
	var now=new Date(year,month-1,1);
	var last=new Date(year,month,0);
	var primerDiaSemana=(now.getDay()==0)?7:now.getDay();
	var ultimoDiaMes=last.getDate();
	var dia=0;
	var resultado="<tr bgcolor='white'>";
	var diaActual=0;
	console.log(ultimoDiaMes);
 
	var last_cell=primerDiaSemana+ultimoDiaMes;
 
	// hacemos un bucle hasta 42, que es el máximo de valores que puede
	// haber... 6 columnas de 7 dias
	for(var i=1;i<=42;i++)
	{
		if(i==primerDiaSemana)
		{
			// determinamos en que dia empieza
			dia=1;
		}
		if(i<primerDiaSemana || i>=last_cell)
		{
			// celda vacia
			resultado+="<td>&nbsp;</td>";
		}else{
			// mostramos el dia
			if(dia==actual.getDate() && month==actual.getMonth()+1 && year==actual.getFullYear())
				resultado+="<td class='hoy'>"+dia+"</td>";
			else
				resultado+="<td>"+dia+"</td>";
			dia++;
		}
		if(i%7==0)
		{
			if(dia>ultimoDiaMes)
				break;
			resultado+="</tr><tr>\n";
		}
	}
	resultado+="</tr>";
 
	var meses=Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
 
	// Calculamos el siguiente mes y año
	nextMonth=month+1;
	nextYear=year;
	if(month+1>12)
	{
		nextMonth=1;
		nextYear=year+1;
	}
 
	// Calculamos el anterior mes y año
	prevMonth=month-1;
	prevYear=year;
	if(month-1<1)
	{
		prevMonth=12;
		prevYear=year-1;
	}
 
	document.getElementById("calendar").getElementsByTagName("caption")[0].innerHTML="<div>"+meses[month-1]+" / "+year+"</div><div><a onclick='mostrarCalendario("+prevYear+","+prevMonth+")'>&lt;</a> <a onclick='mostrarCalendario("+nextYear+","+nextMonth+")'>&gt;</a></div>";
	document.getElementById("calendar").getElementsByTagName("tbody")[0].innerHTML=resultado;
}
 
mostrarCalendario(actual.getFullYear(),actual.getMonth()+1);
</script></center>