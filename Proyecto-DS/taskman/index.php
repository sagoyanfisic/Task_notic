<?php 
    session_start();
    $nombre=$_SESSION['nombre'];
?>
<html ng-app="myApp">
    <head>
        <title>:::TASKMAN-PERSONAL:::</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/task.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/taskman.css"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/ionMedia.css">

    </head>
    <body ng-controller="tasksController">
    <div id="cabecera">
        <p id="bienvenidot"><a href="personal.php" >←</a> Bienvenido, <b><?php echo  $nombre; ?></b></p>
    </div>
    <div class="navbar navbar-default" id="navbar">
    <div class="container" id="navbar-container">
	<div class="navbar-header">
		<a href="#" class="navbar-brand">
			<small>
				<i class="glyphicon glyphicon glyphicon-log-out"></i>
				Documentos: 
			</small>
		</a><!-- /.brand -->
		
	</div><!-- /.navbar-header -->
	
	</div>
	</div>
	<div class="row">
    	<div class="container">
    		<blockquote><h1> Historial de Procesos Judiciales</h1></blockquote>
    		<div class="col-sm-9">
    			<div ng-include src="'partials/task.html'"></div>
    		</div>
    	
    	</div>
    </div>
    	
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="app/app.js"></script>
    </body>
</html>
