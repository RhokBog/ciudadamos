<?php 
include('mlibrerias/funciones.php');
?>
<html>
<head>
<title>
PRUEBA
</title>
<script type="text/javascript" src="/js/dist/jquery.js"></script>
<script type="text/javascript" src="/js/dist/jquery.jqplot.js"></script>
<script type="text/javascript" src="/js/dist/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="/js/dist/plugins/jqplot.donutRenderer.min.js"></script>

<script class="code" type="text/javascript">
$(document).ready(function(){

  var data = [
	<?PHP
		$sql = 'select NOMBRE_CANDIDATO,sum(valor) as total 
from publicidad 
GROUP BY NOMBRE_CANDIDATO;';
	
	$result = mysql_query($sql, $connection) or die("error en querry = ".mysql_error());
  $num_rows = mysql_num_rows($result);
	$info = array();
	$i = 0;
	while ($myrow = mysql_fetch_array($result)) 
	{
	  $i += 1;
    echo "['".$myrow["NOMBRE_CANDIDATO"]."',".$myrow["total"]."]";
    if ($i < $num_rows) {
      echo ",";
    }
	}
	?>  
  ];
  var plot1 = jQuery.jqplot ('chart1', [data], 
    { 
      seriesDefaults: {
        // Make this a pie chart.
        renderer: jQuery.jqplot.PieRenderer, 
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      }, 
      legend: { show:true, location: 'e' }
    }
  );
});

	

</script>
</head>
<body>

<div id="chart1" style="height:300px; width:700px;"></div>
<div class="code prettyprint">
<pre class="code prettyprint brush: js"></pre>
</div>
	
	</body>
	</html>
