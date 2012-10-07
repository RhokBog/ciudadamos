<?php 
include('mlibrerias/funciones.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ciudadamos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="/css/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    
      <script src="/js/dist/jquery.js"></script>
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
        //seriesColors: ["rgba(240, 100, 100, 0.6)","rgba(240, 240, 100, 0.6)","rgba(100, 240, 100, 0.6)"],
        grid:{background:'transparent',borderColor:'transparent',shadow:false},
        seriesDefaults: {
          renderer: jQuery.jqplot.PieRenderer, 
          rendererOptions: {
            showDataLabels: true,
            show: true, 
            location: 'ne',
            rendererOptions: {numberColumns: 2}
          }
        }, 
        legend: { show:true, location: 'e' }
      }
    );
  });
  
  	
  
  </script>  
  
  
  </head>

  <body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Ciudadamos</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Gobernaciones</a></li>
              <li><a href="#about">Alcaldias</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span8">
          <div class="hero-unit">
            <h2>Los que más gastaron dinero para la gobernación de Antioquía 2010</h2>
            <p>Candidatos a Gobernadores que más dinero han gastado.... .</p>
            <p>
              <div id="chart1" style="height:300px; width:640px;"></div>
            </p>
          </div>
        </div><!--/span-->
        <div class="span4">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Facebook</li>
                <div class="fb-comments" data-href="http://ciudadamos/pruebag.php" data-num-posts="5" data-width="300"></div>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->
      <hr>
      <footer>
        <p>Ciudadamos.org 2012 - Con el apoyo de Transparencia por Colombia</p>
      </footer>
    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="/css/bootstrap/js/bootstrap.js"></script>
  

  </body>
</html>
