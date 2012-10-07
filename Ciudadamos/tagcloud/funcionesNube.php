<?
	include('../mlibrerias/funciones.php');
	/****tag cloud****/
	function nube_etiquetas()
	{
	
global $connection;
	$urlSitio= 'http://www.ciudadamos.org';
    global $urlSitio ; // vamos a utilizar la direccion del sitio
    $sql='SELECT TERCERO_DESCRIPCION FROM PUBLICIDAD LIMIT 10';
		$result = mysql_query($sql, $connection);
 
 print_r($result);
 exit;

    while ($myrow = mysql_fetch_row($result)) 
	{
	//$TEMP=str_replace(" ",",",$row['TERCERO_DESCRIPCION']);
        //$var1 .= $row['TERCERO_DESCRIPCION'].',';//$TEMP.','; 
			echo "<br>".$myrow[0];
	}
	
	/*
	$numrow =  @mysql_num_rows($result);
if($numrow > 0){
 $row = mysql_fetch_array($result);
 $resultado_compatibilidad = $row['compatibilidad'];
}

	
    $var1=substr($var1,0,strlen($var1)-1); 
    $array_sustitucion = array(',,','.','/',':'); // por si acaso tengas alguno de estos caracteres
    $etiquetas=str_replace($array_sustitucion, ",", $var1);
    $etiquetas=explode(",",$etiquetas); // creamos y llenamos un array
   
    array_walk($etiquetas,'quitaEspacio');
    $total=count($etiquetas);
    $etiquetasOk = array_count_values($etiquetas); // devuelve array("prueba"=>2, "chicos"=>2, "chicas"=>1)
 
    echo 'Total de etiquetas'.$total.'<br />';   
     foreach($etiquetasOk as $palabra=>$valor) {
          $porcentaje = round($valor*100/$total);
            if($porcentaje>= 70){
                $estilo = 6;
            }elseif($porcentaje>= 35){
                $estilo = 5;
            }elseif($porcentaje>= 30){
                $estilo = 4;
            }elseif($porcentaje>= 22){
                $estilo = 3;
            }elseif($porcentaje>= 10){
                $estilo = 2;
            }else{
                $estilo = 1;
            }
      echo '<a href="'.$urlSitio.'" class="etiqueta'.$estilo.'">'.$palabra.'<span  class="etiqueta0">'.'('.$valor.')</span> </a>';     
        }
		*/
}
 
function quitaEspacio($elemento=' '){
    $elemento = trim($elemento);
}
/**** fin tag cloud****/
	
?>