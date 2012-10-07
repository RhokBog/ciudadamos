<?php 
include('mlibrerias/funciones.php');
?>
<html>
<head>
<title>
PRUEBA
</title>
</head>
<body>
	
	<?PHP
		$sql = 'select NOMBRE_CANDIDATO,sum(valor) as total 
from publicidad 
GROUP BY NOMBRE_CANDIDATO;';
	
	$result = mysql_query($sql, $connection) or die("error en querry = ".mysql_error());
	echo "<table>";
	
	while ($myrow = mysql_fetch_array($result)) 
	{
		$SE = $SE +1;
		echo "<tr>";
		echo "<td>";
		echo "CANDIDATO";
		echo "</td><td>";
		
		echo $myrow["NOMBRE_CANDIDATO"];
		echo "</td>";
		
		echo "<td>";
		echo "TOTAL GASTO";
		echo "</td><td>";
		
		echo $myrow["total"];
		echo "</td>";
		
		echo "</tr>";
	}
	echo "</table>";
	
	
	
	?>
	
	</body>
	</html>
