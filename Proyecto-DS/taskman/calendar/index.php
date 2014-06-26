<?php 
	session_start();
	$nombre=$_SESSION['nombre'];
	require_once("config.php"); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>:::TASKMAN-PERSONAL:::</title>
		<link rel="stylesheet" type="text/css" href="../css/task.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/calendar.min.js"></script>
		<script src="js/jquery.colorbox-min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href="css/calendar.min.css" rel="stylesheet">
		<link href="css/colorbox.css" rel="stylesheet">
	</head>
	<body>
		<div id="cabecera">
			<p id="bienvenidot"><a href="../personal.php" >←</a> Bienvenido, <b><?php echo  $nombre; ?></b></p>
		</div>
		<br><br><br>
		<div class="calendar" data-color="normal">
			<?php
			/* BUSCAMOS EVENTOS */
			$query_eventos=$db->query("select id,fecha,evento from tcalendario where 1 order by fecha asc");
			if ($eventos=$query_eventos->fetch_array())
			{
				do
				{
				?>
				<div data-role="day" data-day="<?php $fecha=explode("-",$eventos["fecha"]); echo $fecha[0].intval($fecha[1]).intval($fecha[2]); ?>">
					<div data-role="event" data-idevento="<?php echo $eventos["id"]; ?>" data-name="<?php echo utf8_encode($eventos["evento"]); ?>"></div>
				</div>
				<?php
				}
				while($eventos=$query_eventos->fetch_array());
			}
			?>
			<!--<div data-role="day" data-day="<?php echo date("Ynd",mktime(0,0,0,date("m"),date("d")+1,date("Y"))); ?>">
				<div data-role="event" data-name="Soy un evento que siempre saldr&eacute; ma&ntilde;ana" data-start="9.00" data-end="9.30" data-location="martiniglesias.eu"></div>
			</div>-->
		</div>
	<script>
	var yy;
	var calendarArray =[];
	var monthOffset = [6,7,8,9,10,11,0,1,2,3,4,5];
	var monthArray = [["ENE","Enero"],["FEB","Febrero"],["MAR","Marzo"],["ABR","Abril"],["MAY","Mayo"],["JUN","Junio"],["JUL","Julio"],["AGO","Agosto"],["SEP","Septiembre"],["OCT","Octubre"],["NOV","Noviembre"],["DIC","Diciembre"]];
	var letrasArray = ["L","M","X","J","V","S","D"];
	var dayArray = ["7","1","2","3","4","5","6"];
	$(document).ready(function() 
	{
		$(document).on('click','.calendar-day.have-events',activateDay);
		$(document).on('click','.specific-day',activatecalendar);
		$(document).on('click','.calendar-month-view-arrow',offsetcalendar);
		$(window).resize(calendarScale);
		$(".calendar").calendar({
			"2013910": {
				"": {
					idevento: ""
				}
			}
		});
		calendarSet();
		calendarScale();
		
		
		$('body').on('click', '.colorbox', function(e) 
		{
			e.preventDefault();
			$.colorbox({href:$(this).attr('href'), open:true,iframe:true,innerWidth:"600px",innerHeight:"340px",overlayClose:false,onClosed:function() { location.reload(true); } });
			return false;
		});
		
		
		
	});
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-266167-20");
		pageTracker._setDomainName(".martiniglesias.eu");
		pageTracker._trackPageview();
	} catch(err) {}</script>
</body>
</html>