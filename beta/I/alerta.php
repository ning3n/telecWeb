<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>Aviso de llamadas</title>
		<style>
		tbody {
    	width: 500px;
    	overflow-y: auto;
		}	

div#margen{
	margin:0px;
	padding:0px;
	padding:65px;
	padding-right: 55px;
	}

</style>
	</head>
	<body>

		

	<center>
	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>Llamadas</h1></center>
		</div>
		
		
			<table>
			<thead>
				<tr class="centro">
					<td></td>
					
	
				</tr>
				<tbody>
<?php
include './conexion.php';
$conexion=$misn;
$DB=$misN;

$contadorparcial=0;
$contadortotal=0;
$fecha = date('Y-m-j');


//$fecha = date('Y-m-j h:i:sa');

$conte=20;
$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");

$consulta=mysql_query("select  DISTINCT (src) from calls where date='$fecha' order by src",$conexion) 
	or die ("Datos suministrados incorrectosI <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{
$conteo=0;
$contro1=$reg['src'];
$conex=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
$consul=mysql_query("select src from calls where date='$fecha' and src='$contro1' order by src",$conex) 
	or die ("Datos suministrados incorrectosII <meta http-equiv=Refresh content=3;url=index.php>");
	while ($regu=mysql_fetch_array($consul))
{

$contro2=$regu['src'];
$conteo=$conteo+1;
if ($conteo==$conte)
{
$alerta=$contro2;
?>
<tr><td><?php echo $alerta; ?></td>
<?php

}


}


}







	
?>


	
</tbody>
			</table>



			
		</div>
		</center>		

		



</body>

	</html>	

