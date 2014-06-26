<?php 
	session_start();
	  $nombre=$_SESSION['nombre'];
		
	include "ajax/edit.php";
	  $coneccione=mysql_connect($host,$user,$pw) or die("No se pudo conectar con el host");
	mysql_select_db($bd,$coneccione)or die ("No se pudo conectar a la base de datos") ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>:::TASKMAN-PERSONAL:::</title>
	<meta  charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/task.css">
</head>
<body>
	<div id="cabecera">
		<p id="bienvenidot"><a href="../index.php" id="end">Salir</a> Bienvenido, <b><?php echo  $nombre; ?></b></p>
	</div>
	<div id="botones">
		<a href="calendar/index.php"><p>Calendario</p></a>
		<a href="index.php"><p>Historial de Procesos Judiciales</p></a>
		<a href="correo.php"><p>Correo</p></a>
		<a href="archivos.php"><p>Guardar Archivos</p></a>
	</div>
	<div id="tarjetas">
		<br>
		<div id="capsulas" style=" background:rgb(197, 182, 228);">
			<h2>Eventos</h2>
			<hr>
			<?php 

				$query="SELECT * from tcalendario  ";
				$consul=mysql_query($query,$coneccione); 
				$canti=mysql_num_rows($consul);  
				
				for ($i=0; $i <$canti ; $i++){
					$fila=mysql_fetch_array($consul);
					$evento=$fila['evento'];
					$fecha=$fila['fecha'];
					echo "<p id='tarjetas'>".$evento." <br> <i>".$fecha."</i></p>";
				}

			?> 

		</div>
	</div>
</body>
</html>