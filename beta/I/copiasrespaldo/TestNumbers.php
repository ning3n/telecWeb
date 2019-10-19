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

	

	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>Lista de numeros de prueba</h1></center>
		</div>
		<center>
<div id="div2">

</div>
</center>
<br>
<!--<textarea rows=20 cols=50 readonly wrap="hard">-->
<center>
<div id="div1">
<table >
<thead>
				<tr class="centro">
					<td>Número</td>
					<td>Destino</td>
					<td>Codigo de País</td>
					<td>Estado</td>

					
				</tr>
<tbody>

<?php

$username="Miguel11";
$filtrar="ANSWERED";



	$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT username, primary_device_id FROM users where username='$username'",$conexion) 
	or die ("Datos incorrectos");



while ($row = mysql_fetch_array($consulta)){

$dispositivo=$row['primary_device_id'];

	$conexionI=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexionI) or die ("Problemas en la seleccion en la base de datos");
	$consultaI=mysql_query("SELECT username FROM devices where accountcode='$dispositivo'",$conexionI) 
	or die ("Datos incorrectosI!");


	while ($reg=mysql_fetch_array($consultaI)) {

		$mn=$reg['username'];

		$conexionII=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
		mysql_select_db("mor",$conexionI) or die ("Problemas en la seleccion en la base de datos");
		$consultaII=mysql_query("SELECT * FROM calls where src='$mn'",$conexionII) 
		or die ("Datos incorrectosII!");

			while ($regmn=mysql_fetch_array($consultaII)) {
				$prefijo=$regmn['prefix'];
				$ori=$regmn['dst']; 
				$edo=$regmn['disposition']; 


		

				$conexionIII=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
				mysql_select_db("mor",$conexionI) or die ("Problemas en la seleccion en la base de datos");
				$consultaIII=mysql_query("SELECT name, prefix FROM destinations where prefix='$prefijo'",$conexionIII) 
				or die ("Datos incorrectosIII!");
					while ($regmp=mysql_fetch_array($consultaIII)) {
						$nombre=$regmp['name'];
						

$var1="ANSWERED";
$var2="NO ANSWER";
$var3="FAILED";

if ($edo==$var1){
$bu="CONTESTADA";
}
if ($edo==$var2){
$bu="NO CONTESTADA";
}
if ($edo==$var3){
$bu="FALLIDA";
}


            
	echo "<tr><td>"."<center>".$ori."</center>"."</td><td> "."<center>". $nombre."</center>"."</td><td> "."<center>".$prefijo."</center>"."</td><td> "."<center>".$bu."</center>"."</td></tr>";
         //echo $ori. " ". $nombre." ".$prefijo."  \n";
         }
	
		}
    }
 }


?>
  </tbody>
</table>
</div>
</center>
<!--</textarea>-->


</body>
	</html>	
