<?php

$config = parse_ini_file('calificaciones.ini');
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);
mysqli_set_charset($conexion,"utf8");

switch ($_POST['opcion']){

	case 'correo':
	$_correo=$_POST['email'];
	
	$sql="SELECT correo FROM usuarios WHERE correo='$_correo'";
	$consulta=mysqli_query($conexion,$sql);
	$fila=mysqli_fetch_array($consulta);
	if($fila['correo']==$_correo){
		
		echo "<script type='text/javascript'>alert('La informacion fue suministrada al correo indicado..!!')</script>";
	}else{
		echo "<script type='text/javascript'>alert('El correo que coloco no esta registrado..!!'')</script>";
	}
	break;
	case 'desafio':
	$_usuario=$_POST['x_usuario'];
	$_pregunta=$_POST['r_pregunta'];
	$_respuesta=$_POST['r_respuesta'];
		
	$sql="SELECT * FROM usuarios WHERE usuario='$_usuario'";
	$consulta=mysqli_query($conexion,$sql);
	$fila=mysqli_fetch_array($consulta);
	$_password=$fila['password'];
	//$contrasenha=password($_password);
	if($fila['usuario']==$_usuario){
		if(($fila['pregunta_secreta1']==$_pregunta)&&($fila['pregunta_secreta2']==$_pregunta)){
			if(($fila['respuesta_secreta1']==$_respuesta)&&($fila['respuesta_secreta2']==$_respuesta)){
				
				echo "<script type='text/javascript'>alert('El usuario es: '+ $_usuario+' y la clave es: '+$_password)</script>";	
			}
		}
	}else{
	
		echo "<script type='text/javascript'>alert('Usuario NO registrado..!!')</script>";
	}
}
echo "<script type=''>window.location.href=\"sirce_recuperaclave.php\"</script>";	
?>
