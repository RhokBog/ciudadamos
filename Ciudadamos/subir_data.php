<?php 
include('mlibrerias/funciones.php');
ini_set('display_errors', '1');

if($_POST['Subir']=="Subir")
{
echo 'entre';

	$path="excel/".$_FILES [ 'file' ][ 'name' ];
	echo $path;
	
	move_uploaded_file ( $_FILES [ 'file' ][ 'tmp_name' ], $path);
	$fp = fopen ($path,"r");
	$i=0;
	$ingresar=false;
	$CORPORACION="";
	$CIRCUNSCRIPCION="";
	$DEPARTAMENTO="";
	$MUNICIPIO="";
	$LOCALIDAD="";
	$CANDIDATO_IDENTIFICACION="";
	$CANDIDATO_CODIGO="";
	$CANDIDATO_NOMBRE="";
	$ORGANIZACION="";
	$VALOR=0;
	$CONCEPTO="";
	$TERCERO_TIPO_PERSONA="";
	$TERCERO_DIRECCION="";
	$TERCERO_TELEFONOS="";
	$TERCERO_CELULAR="";
	$TERCERO_DESCRIPCION="";
	$FECHA_REGISTRO="";
	$COMPROBANTE=0;	
	$i=0;
	while ($data = fgetcsv ($fp, 10000000, ";")) 
	{
		if($i>0)
		{
			$CORPORACION="".trim($data[0]);
			$CIRCUNSCRIPCION="".trim($data[1]);
			$DEPARTAMENTO="".trim($data[2]);
			$MUNICIPIO="".trim($data[3]);
			$LOCALIDAD="".trim($data[4]);
			$ORGANIZACION="".trim($data[5]);
			$CANDIDATO_IDENTIFICACION="".trim($data[6]);
			$CANDIDATO_NOMBRE="".trim($data[7]);
			$CANDIDATO_CODIGO="".trim($data[8]);
			$VALOR="".trim($data[9]);
			$CONCEPTO="".trim($data[10]);
			$TERCERO_TIPO_PERSONA="".trim($data[11]);
			$TERCERO_IDENTIFICACION="".trim($data[12]);
			
			$TERCERO_DIRECCION="".trim($data[13]);
			$TERCERO_TELEFONOS="".trim($data[14]);
			$TERCERO_CELULAR="".trim($data[15]);
			$TERCERO_DESCRIPCION="".trim($data[16]);
			$FECHA_REGISTRO="".trim($data[17]);
			$COMPROBANTE=trim($data[18]);
$COMPROBANTE2=0+trim($data[19]);


			$SQL= "insert into publicidad (CORPORACION,CIRCUNSCRIPCION, DEPARTAMENTO,
			MUNICIPIO, LOCALIDAD,ORGANIZACION,IDENTIFICACION_CANDIDATO, NOMBRE_CANDIDATO,
			CODIGO,NOMBRE_PERSONA, VALOR,CONCEPTO, TERCERO_TIPO_PERSONA,
TERCERO_IDENTIFICACION, TERCERO_DIRECCION, TERCERO_TELEFONOS, TERCERO_CELULAR,
TERCERO_DESCRIPCION, FECHA_REGISTRO,COMPROBANTE) values (".
			"'".$CORPORACION."','".
			$CIRCUNSCRIPCION."','".
			$DEPARTAMENTO."','".
			$MUNICIPIO."','".
			$LOCALIDAD."','".
			$ORGANIZACION."','".
			$CANDIDATO_IDENTIFICACION."','".
			$CANDIDATO_NOMBRE."','".
			$CANDIDATO_CODIGO."','".
			$VALOR."',".
			$CONCEPTO.",'".
			$TERCERO_TIPO_PERSONA."','".
			$TERCERO_IDENTIFICACION."','".
			$TERCERO_DIRECCION."','".
			$TERCERO_TELEFONOS."','".
			$TERCERO_CELULAR."','".
			$TERCERO_DESCRIPCION."','".
			$FECHA_REGISTRO."','".
			$COMPROBANTE."',".
			$COMPROBANTE2.");";
echo $SQL;
			$recordSet =  mysql_query($SQL, $connection);
			if($recordSet===false)
			{
				$ERROR.="LINEA= ".$i. " - Query " .$SQL."<br>";
			}
			ELSE
			{
			
			}
			$VENTASFACTURAS=1;
											
		}
		$i=$i+1;
	
	}
	
	/*
	if ($VENTASFACTURAS==1)
	{
		echo "<br><br>VENTAS FACTURAS - CARGO CON EXITO<br><br>";
	
	}
*/
	echo "<br><br>".$ERROR;
	
}
else
{
	?>
	<html>
	<form name='subir' method='post' action='<? echo $_PHPSELF;?>' enctype="multipart/form-data">
		<table align='center' cellpadding='0' cellspacing='10' bgcolor='<?=$table_bg?>'>
			<tr>
			<td align='center'><font color='white'><b>Subir archivo</b></font></td>
			</tr>
			<tr>
				<td align='left'>
					<table>
						<tr>
							<td align='left'>
								<font color='white'><b>Seleccione el archivo .CSV</b></font></td>
								<td align='left'><font color='white'>
								<input type="file" name="file">
								 </font>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
								<input type="submit" value="Subir" name="Subir">
								</td>
							</tr>
						</table>
					</td>
			</tr>
		</table>

	</form>

<?
}
?>