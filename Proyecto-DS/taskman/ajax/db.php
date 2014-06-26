<?php 
include "edit.php";
define('DB_SERVER', $host);
define('DB_USERNAME',$user);
define('DB_PASSWORD', $pw);
define('DB_DATABASE', $bd);
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>