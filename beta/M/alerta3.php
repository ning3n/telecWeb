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
					<td>INTENTOS</td>
					<td>ORIGEN</td>
					<td>DESTINO</td>
					
	
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

$conte=60;
$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");

$consulta=mysql_query("select  DISTINCT (src) from calls where date='$fecha' order by src",$conexion) 
	or die ("Datos suministrados incorrectosI <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{
$conteo=0;
$contro1=$reg['src'];
$conex=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
$consul=mysql_query("SELECT src, dst from calls where date='$fecha' and src='$contro1' order by src",$conex) 
	or die ("Datos suministrados incorrectosII <meta http-equiv=Refresh content=3;url=index.php>");
	while ($regu=mysql_fetch_array($consul))
{

$contro2=$regu['src'];
$conteo=$conteo+1;
$dst=$regu['dst'];
if ($conteo==$conte)
{
$alerta=$contro2;
$alerta2=$dst;
?>
<tr><td><?php echo $conteo; ?></td>
<td><?php echo $alerta; ?></td>
<td><?php echo $alerta2; ?></td></tr>
<?php

}


}


}







	
?>


	
</tbody>
			</table>


<center><table>
<tr>
<td><center><form action=alerta.php><input type=submit name=boton value="Filtrar 20"></form></center></td><td><center><form action=alerta2.php><input type=submit name=boton value="Filtrar 40"></form></center></td>
</tr>
</table></center>
			
		</div>
		</center>		

		

<meta http-equiv=Refresh content="6;url=alerta3.php">

</body>

	</html>	

