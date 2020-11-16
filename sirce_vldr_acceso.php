<html lang="es">
<head>
<meta charset="utf-8"/>
</head>
<?php
$config = parse_ini_file('calificaciones.ini');
$conexion = mysqli_connect($config['server'],$config['username'],$config['password'],$config['dbname']);

mysqli_set_charset($conexion,"utf8");
session_start();
$_usuario=$_POST['r_usuario'];
//$_password=md5(sha1($_POST['password']));
$_password=$_POST['password'];
$_status=$_POST['status'];
$_intentos=$_POST['intentos'];
//die($_password);
$sqll=("SELECT * FROM usuarios WHERE usuario='$_usuario' AND password='$_password'");	// Se realiza una consulta
$resultado=mysqli_query($conexion, $sqll);												// si la consulta es exitosa al encontrar nombre de usuario
$fila=mysqli_fetch_array($resultado);													// Se construye un arreglo con las coincidencias de usuario 


$sql2=("SELECT * FROM usuarios WHERE usuario='$_usuario'");								// Se realiza una consulta solo usuario
$resultado2=mysqli_query($conexion, $sql2);		
$fila2=mysqli_fetch_array($resultado2);			

if ($fila2['usuario']==$_usuario){														// Intentos al sistema solo si el usuario existe
		$_intentos=$fila2['intentos']+1;
}
if(!$resultado){
	die("ERROR EN SOLICITUD EN CONSULTA");
}else{
	if((mysqli_num_rows($resultado)>0)){
		
		if($_POST['tmptxt']==$_SESSION['tmptxt']){										// Evalua si el codigo CAPTCHA se escribio correctamente
						
			if($fila['status'] == $_status){											// se verifica el estatus del usuario	
			
				$sql3=("UPDATE usuarios SET intentos=0 WHERE usuario='$_usuario'");
				$liberarintentos=mysqli_query($conexion, $sql3);						// se verifica si la consulta es exitosa al encontrar nombre de usuario
				
				// el valor de privilegio del usuario en el sistema
				setcookie("usuario", time()+180);
				$_SESSION['usuario']=$_usuario;
				$_SESSION['privilegio']=$fila['privilegio'];
				$_autenticado = $fila['privilegio'];
				
				if($fila['privilegio']==1){												// Privilegio como Administrador
					$_SESSION["privilegio"]=1;

					echo "<script type=''>window.location.href=\"sirce_menuadmin.php?usuario=$_usuario&privilegio=$_autenticado\"</script>";
				}
				if($fila['privilegio']==2){												// Privilegio commo Usuario Operador
				
					$_SESSION["privilegio"]=2;
					echo "<script type=''>window.location.href=\"sirce_menusuar.php?usuario=$_usuario&privilegio=$_autenticado\"</script>";
				}
				
			}else{
				die('');
				echo "<script type=''>alert('Este usuario se encuentra INACTIVO o BLOQUEADO....\\n\\n Comuniquese con el Administrador del sistema.')</script>";				
			}
		}else{
			
			if ($fila2['usuario']==$_usuario){	
			
				$sql5=("UPDATE usuarios SET intentos='$_intentos' WHERE usuario='$_usuario'");
				$addintentos=mysqli_query($conexion, $sql5);
			
			}
			
			if($_intentos == 2){
			
				echo "<script type=''>alert('El codigo CAPTCHA no coincide..!!. \\n\\n Al siguiente intento Fallido será Bloquedo el usuario.!!')</script>";
				echo "<script type=''>window.location.href=\"sirce_logueo.php?intentos=$_intentos&usuario=$_usuario&status=$_status\"</script>";
			}
			
			echo "<script type=''>alert('El codigo CAPTCHA no coincide..!!')</script>";
				
		}
	
	}else{	// usuario y/o contraseña no existen
		
		if($fila2['status']!=$_status){														// Se compara para ver si Bloqueado == Bloqueado 
			$_intentos=0;	
			echo "<script type=''>alert('Este usuario se encuentra INACTIVO o BLOQUEADO....\\n\\n Comuniquese con el Administrador del sistema.')</script>";
			echo "<script type=''>window.location.href=\"sirce_logueo.php?intentos=$_intentos&usuario=$_usuario&status=$_status\"</script>";
		}
		if($_intentos == 2){
					
			echo "<script type=''>alert('Usuario y/o contraseña no Coniciden..!!.\\n Al siguiente intento Fallido será Bloquedo el usuario.!!')</script>";
			echo "<script type=''>window.location.href=\"sirce_logueo.php?intentos=$_intentos&usuario=$_usuario&status=$_status\"</script>";
			
		}
		if($_intentos >= 3){
			
			$sql4=("UPDATE usuarios SET status='Bloqueado', intentos='$_intentos' WHERE usuario='$_usuario'");
			$cambiarstatus=mysqli_query($conexion, $sql4);												// se verifica si la consulta es exitosa al encontrar nombre de usuario
			
			echo "<script type=''>alert('El Usuario se ha  Bloqueado por intentos fallidos..!!')</script>";
			echo "<script type=''>window.location.href=\"sirce_logueo.php?intentos=$_intentos&usuario=$_usuario&status=$_status\"</script>";
		}
		if ($fila2['usuario']==$_usuario){	
		
			$sql5=("UPDATE usuarios SET intentos='$_intentos' WHERE usuario='$_usuario'");
			$addintentos=mysqli_query($conexion, $sql5) ;
			
		}
		
		echo "<script type=''>alert('Usuario y/o conraseña no coinciden..!!')</script>";
	}
}
echo "<script type=''>window.location.href=\"sirce_logueo.php?intentos=$_intentos&usuario=$_usuario&status=$_status\"</script>";
?>
</html>