<?php 
	session_start();
	include "ajax/edit.php";
	  $coneccione=mysql_connect($host,$user,$pw) or die("No se pudo conectar con el host");
	mysql_select_db($bd,$coneccione)or die ("No se pudo conectar a la base de datos") ;
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
</head>
<body>
	<?php   
		if (isset($_REQUEST['boton'])!=null) {
			//consultar los registros en la base de datos
			if ($_REQUEST['boton']=="login"){ 
				$var1=$_REQUEST['id'];
				$var2=$_REQUEST['pass'];
				 
				$query="SELECT * from usuario  where user='".$var1."'  ";
				$consul=mysql_query($query,$coneccione); 
				$canti=mysql_num_rows($consul);  
				if ($canti!=0) {
					$fila=mysql_fetch_array($consul);  
					$nom=$fila['user'];
					$usu=$fila['pass'];
					$_SESSION['nombre']=$fila['nombre'];
					$_SESSION['id_cliente']=$fila['id_cliente'];
					echo  $nom."_".$usu;
					echo "<script> alert('Bienvenido...! '); </script>";
					echo "<script>window.location='personal.php';</script>";
				}
				else{ 
					echo "<script> alert('No estás Registrado...! '); </script>";
					echo "<script>window.location='../login.html';</script>";
				}

			} 
			if ($_REQUEST['boton']=="registrar"){
				if ($_REQUEST['nombre']!=null || $_REQUEST['correo']!=null || $_REQUEST['user']!=null || $_REQUEST['contra']!=null ) { 
					$var1=$_REQUEST['nombre'];
					$var2=$_REQUEST['correo'];
					$var3=$_REQUEST['user'];
					$var4=$_REQUEST['contra'];
					$query="INSERT INTO usuario(id_cliente,nombre,correo,user,pass) 
							values('','".$var1."','".$var2."','".$var3."','".$var4."')";
					$consul=mysql_query($query,$coneccione); 
					echo $var1.$var2.$var3.$var4;

					echo "<script> alert('Bienvenido, registro completo...!, es hora de Log in. '); </script>";
					echo "<script>window.location='../login.html';</script>";
				}
				else
				{
					echo "<script> alert('Error..! '); </script>";
					echo "<script>window.location='../registrar.html';</script>";
				}
			}
		}
	?>
</body>
</html>