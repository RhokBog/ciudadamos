<?
	$connection=mysql_connect ("mysql.ciudadamos.org","ciudadamosdb", "ciudad135");
	if (!$connection) 
	{
    	die('Could not connect: ' . mysql_error());
	}
	$database_connection="ciudadamos"; 
	mysql_select_db($database_connection,$connection);
	ini_set ('display_errors', '1');
?>