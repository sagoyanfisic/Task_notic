<?php 
	session_start();
	  $nombre=$_SESSION['nombre'];
	  $host='127.0.0.1';
	  $user='root';
	  $pw='root';
	  $bd='angularcore';
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
        if (isset($_REQUEST['archive'])!=null) { 
  
       
          if($_FILE['archivo']["error"] > 0)
          {
              echo"Error" .$_FILES['archivo']["Error"] ."<br />";
          }
          else
          {
              $formato=array('.pdf');
              $peso=substr(($_FILES['archivo']["size"])/1048576,0,4);
              $prefijo = substr(md5(uniqid(rand())),0,2);
              $nombre=$_FILES['archivo']["name"];   
              $ext=substr($nombre, strrpos($nombre, '.'));  
              
              if (in_array($ext,$formato)) { 
                if ($peso<=2) {  
                    if(!file_exists('pdfTrabajo')) 
                    {mkdir('pdfTrabajo');} 

                    
				 
 					
                    $ubicacion="pdfTrabajo/0_".$prefijo."_".$nombre;
                    if (copy($_FILES['archivo']["tmp_name"],$ubicacion) ) { 

	                    $idcliente=$_SESSION['id_cliente'];
	                    $query="INSERT INTO archivos(id_archivo,archivoNombre,cliente_id) 
								values('','".$nombre."',".$idcliente.")";
					$consul=mysql_query($query,$coneccione); 
                    }
                    //_______COPIA EL DOCUMENTO, ADJUNTADO  
                }//__________TERMINA LA CONDICIÓN DEL PESO 
                else{
                  echo "el peso, excede los 2MBytes.";
                }    
              }//____________TERMINA LA CONDICIÓN DE LA COMPARACIÓN SI ES PDF
               

          }

        } 
    ?>   

				
 
    <form id="formr" action="archivos.php" method="POST" enctype="multipart/form-data">
	    <p id="titulor">Adjuntar Archivo</p> 
		<div>Nombre</div>
		<input name="archivo" id="archivo"   type="file" required/> 
 
  
		<br>
		<button type="submit" name="archive" value="archive">Guardar</button><br><br> 
	</form>
	<link rel="stylesheet" type="text/css" href="../estilos/css/estilor.css">
	<link rel="stylesheet" type="text/css" href="../estilos/css/ionMediaQuery.css">
</body>
</html>