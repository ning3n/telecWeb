<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
		<title>Lista de numeros de prueba</title>

	</head>

<style>
tbody {
    width: 500px;
    overflow-y: auto;
}

</style>

	<body>
		<center>
	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>Llamadas activas</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="centro">
					<td>DID</td>
					<td>Duracion (seg)</td>
					<td>Orígen</td>
					<td>Hora de Inicio</td>
					
					
				</tr>
				<tbody>
					<?php 

					$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
					mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");
					$consulta=mysql_query("SELECT * FROM dids",$conexion) 
					or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");




					while ($reg=mysql_fetch_array($consulta)) { 
						

							$did=$reg['did'];

							$conexiones=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
							mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");
							$consultas=mysql_query("SELECT * FROM activecalls where dst='$did'",$conexiones) 
							or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");

							while ($reg1=mysql_fetch_array($consultas)) {
								$fecha = date('Y-m-j h:i:sa');
								$calculo = $reg1['start_time'];
								$segundos = strtotime($fecha) - strtotime($calculo); 

						?>
						<tr>
							<td><?php echo $reg1['dst'];?>
							</td>
							<td>
								<?php echo $segundos ; ?>
							</td>
							<td>
								<?php echo $reg1['src'];?>
							</td>
							<td>
								<?php echo $reg1['start_time'];?>
							</td>
							
							
							
						</tr>
					<?php }} mysql_close($conexion); ?>
				</tbody>
			</table>	
	








	
		
		<div id="titulo">
		<center><h1>Lista de numeros de prueba</h1></center>
		</div>
		<br>
<!--<textarea rows=20 cols=50 readonly wrap="hard">-->
<center>
<div id="div1">
<table >
<thead>
				<tr class="centro">
					
					<td>Numero de Prueba</td>
					<td>País</td>
					

					
				</tr>
<tbody>

<?php





	$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM dids",$conexion) 
	or die ("Datos incorrectos");



while ($row = mysql_fetch_array($consulta)){

$did=$row['did'];

$concatenador=substr($row['did'],0,2);  
$null="";
/*
$num = 6;
$xxx="XXXXXX";
$cadena1 = substr($did, 0, -$num);
substr($row["nombre_campo"],0,100).'...';    
$cadena2=$cadena1.$xxx;
*/
	$conexionI=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexionI) or die ("Problemas en la seleccion en la base de datos");
	$consultaI=mysql_query("SELECT * FROM destinations where prefix='$concatenador'",$conexionI) 
	or die ("Datos incorrectos");

while ($rowI = mysql_fetch_array($consultaI)){
$link=$rowI['direction_code'];

}

	$conexionII=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexionII) or die ("Problemas en la seleccion en la base de datos");
	$consultaII=mysql_query("SELECT * FROM directions where code='$link'",$conexionII) 
	or die ("Datos incorrectos");

while ($rowII = mysql_fetch_array($consultaII)){
$linkI=$rowII['name'];

}




            
	echo "<tr><td> "."<center>". $did."</center>"."</td><td> "."<center>".$linkI."</center>"."</td></tr>";
         //echo $ori. " ". $nombre." ".$prefijo."  \n";
         }
	



?>
  </tbody>
</table>
<meta http-equiv=Refresh content=6;url=TestNumbers.php>
</div>
</center>
<!--</textarea>-->


</body>
	</html>	
