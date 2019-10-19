<?php
	
						


	$conexion=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from activecalls ",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	


	
?>

<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>Llamadas activas</title>

	</head>
	<body>

			<div id="barra-lateral">

			
			<div id="logo-menu">
			
			<p class="title-menu">Intercom Premium</p>
			
			</div>
			

			
			<ul>


			<li>
			<a href="http://www.google.es">
			
				<div class="barra"></div>
				<p class="title-menu">Principal</p>
			
			</a>
			</li>

			<li>
			<div class="contenedor-logos">
				<div class="barra"></div>
				<p class="title-menu">Login</p>
			</div>
			</li>

			<li>
			
				<div class="barra"></div>
				<p class="title-menu">Registro</p>
			
			</li>

			<li>
			
				<div class="barra"></div>
				<p class="title-menu">ejemplo</p>
			
			</li>
			</ul>
		</div>



	<center>
	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>Llamadas activas</h1></center>
		</div>
		<?php echo $reg['start_time'];?>
		<table>
			<thead>
				<tr class="centro">
					<td>Hora de inicio</td>
					<td>Duracion (seg)</td>
					<td>Orígen</td>
					<td>Destino</td>
					<td>Tarifa</td>
					
				</tr>
				<tbody>
					<?php while ($reg=mysql_fetch_array($consulta)) { 

						$fecha = date('Y-m-j h:i:sa');
						$calculo = $reg['start_time'];
						$segundos = strtotime($fecha) - strtotime($calculo); 



						?>
						<tr>
							<td><?php echo $reg['start_time'];?>
							</td>
							<td>
								<?php echo $segundos ; ?>
							</td>
							<td>
								<?php echo $reg['src'];?>
							</td>
							<td>
								<?php echo $reg['dst'];?>
							</td>
							<td>
								<?php echo substr($reg['user_rate'], 0, 6);?>
							</td>
							
							
						</tr>
					<?php } mysql_close($conexion); ?>
				</tbody>
			</table>	
			<br>
			<table>
			
			<thead>
				<tr class="centro">
					<td>Numero de llamadas por destinatario</td>
							
				</tr>
				<tbody>
			<tr>
					<td><center><?php 
						$contadortotal=0;
						$conexion1=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
						mysql_select_db("MOR",$conexion1) or die ("Problemas en la seleccion en la base de datos");
						$consulta1=mysql_query("select DISTINCT(prefix) from activecalls ORDER by prefix ",$conexion1) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");


						while ($row=mysql_fetch_array($consulta1)) { 



						$prefijo=$row['prefix'];

						$contadorparcial=0;

						$conexion=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
						mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
						$consulta=mysql_query("select * from activecalls where prefix='$prefijo' ORDER by prefix ",$conexion) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	

						while ($reg=mysql_fetch_array($consulta)) {
								$conexiones=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
									mysql_select_db("MOR",$conexiones) or die ("Problemas en la seleccion en la base de datos");
									$consultas=mysql_query("select * from destinations where prefix='$prefijo' ORDER by prefix ",$conexiones) 
									or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");

								while ($row=mysql_fetch_array($consultas)) {
									$nombre=$row['name'];
									}


						$contadorparcial=$contadorparcial+1;
						$contadortotal=$contadortotal+1;

						}
						
						

						echo $prefijo." ".$nombre.": ".$contadorparcial;

						

						echo "<br>";
						echo "<br>";
						echo "TOTAL DE LLAMADAS ACTIVAS:".$contadortotal;
						}
						
							
						mysql_close($conexion);
						?>
						</center> 
					</td>
			</tr>	
			</tbody>
			</table>
			<br>
			<table>
			<thead>
				<tr class="centro">
					<td>USUARIO</td>
					<td colspan=2>LLAMADAS ACTIVAS</td>
	
				</tr>
				<tbody>
<?php			
$conexion2=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
						mysql_select_db("MOR",$conexion2) or die ("Problemas en la seleccion en la base de datos");
						$consulta2=mysql_query("select DISTINCT(src) from activecalls  ",$conexion2) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");


while ($row1=mysql_fetch_array($consulta2)) { 


$contro1=$row1['src'];

?>
<tr><td><?php echo $contro1; ?></td><td>

<?php


$contadortotal=0;
$conexion1=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
						mysql_select_db("MOR",$conexion1) or die ("Problemas en la seleccion en la base de datos");
						$consulta1=mysql_query("select DISTINCT(prefix) from activecalls where src='$contro1' ORDER by prefix ",$conexion1) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");


while ($row=mysql_fetch_array($consulta1)) { 



$prefijo=$row['prefix'];

$contadorparcial=0;

$conexion=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
						mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
						$consulta=mysql_query("select * from activecalls where prefix='$prefijo' and src='$contro1' ",$conexion) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	

						while ($reg=mysql_fetch_array($consulta)) {
							$conexiones=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
									mysql_select_db("MOR",$conexiones) or die ("Problemas en la seleccion en la base de datos");
									$consultas=mysql_query("select * from destinations where prefix='$prefijo' ORDER by prefix ",$conexiones) 
									or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");

								while ($row=mysql_fetch_array($consultas)) {
									$nombre=$row['name'];
									}


$contadorparcial=$contadorparcial+1;
$contadortotal=$contadortotal+1;




}


echo $prefijo." ".$nombre.": ".$contadorparcial." "; echo "<br>";


}


 echo "</td><td>TOTAL DE LLAMADAS ACTIVAS:".$contadortotal."</td></tr>";

}
		
			mysql_close($conexion);
			?>	
			</tbody>
			</table>



			<meta http-equiv=Refresh content=6;url=listado.php>
		</div>
		</center>
		</body>
	</html>	




