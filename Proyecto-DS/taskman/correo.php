<?php 
	session_start();
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
		<p id="bienvenidot"><a href="personal.php" >←</a> Bienvenido, <b><?php echo  $nombre; ?></b></p>
		
	</div> 
	<?php 

		if (isset($_REQUEST['enviar'])!=null) { 

		    //Datos recibidos del formulario:
		     $nombres = utf8_decode($_REQUEST["nombres"]); 
		     $email = $_REQUEST["correo"]; 
		     $asunto = utf8_decode($_REQUEST["asunto"]); 
		     $comentario = utf8_decode($_REQUEST["comentario"]); 

		     //Ordenaremos los datos a enviar:
		      $mensajeFinal="<b>Nombre </b>".$comentario; 

		    //cabecera del mensaje:
		     $cabecera = "From: $nombres <$email> \r\n"; 
		     $cabecera .= "Reply-To: $email \r\n"; 
		     $cabecera .= "Content-type: text/html; charset=iso-8859-1";

		     //enviar al correo: 
		     $enviar = mail("consulta@example.com.pe",$asunto,$mensajeFinal,$cabecera); 
		      
		     if($enviar){ 
		         echo "
		         	<script> alert('Gracias por enviar su consulta.Nos pondremos en contacto con usted lo antes posible.');
		         	</script>"; 
		     }else{ 
		         echo "
		         	<script> alert('Lo sentimos pero se ha producido un error en el envío. Vuelva a intentarlo mas tarde.');
		         	</script>"; 
		     } 
		}
    ?> 
    <form id="formr" action="" method="POST">
	    <p id="titulor">Envio Correo</p> 
		<div>Nombre</div>
		<input name="nombres" type="name" placeholder="Juan Perez" required/> 

		<div>Asunto</div>
		<input name="asunto" type="name" placeholder="Asunto / Tema" required/> 

		<div>Mensaje</div> 
		<textarea height="220" name="comentario" placeholder="Comentanos tus dudas" required></textarea>

		<div>Correo</div>
		<input name="correo" type="email" placeholder="JuanPerez@gmail.com" required/> 
  
		<br>
		<button type="submit" name="enviar" value="enviar">Enviar</button><br><br> 
	</form>
	<link rel="stylesheet" type="text/css" href="../estilos/css/estilor.css">
	<link rel="stylesheet" type="text/css" href="../estilos/css/ionMediaQuery.css">
</body>
</html>