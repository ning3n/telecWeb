

<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>Active calls</title>
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

			<div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            

            <div id="margen"> 
            	  <form action="suoerlog.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="TestNumbers">
		  <form action="select.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Add cli">
							  </form>
							  <form action="stats.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Stats">
							  </form>
<form action=index.php method=post><input type=hidden name=paracostos value="<?php echo $paracostos;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Exit">
</form>
			</div>
     
     		</div>



	<center>
	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>Active calls</h1></center>
		</div>
		<?php

session_start();
$username=$_SESSION['user'];
$password=$_SESSION['password'];


include './conexion.php';
$conexion=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from users where username='$username' and password='$password' order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{




	
?>
		<?php echo $reg['start_time'];?>
		<table>
			<thead>
				<tr class="centro">
					<td>Start time</td>
					<td>Length (sec)</td>
					<td>Source</td>
					<td>Destination</td>
					<td>Rate</td>
					
				</tr>
				<tbody>
				<?php
				include './conexion.php';
$conexion=$misn;
$DB=$misN;
$device=$reg['primary_device_id'];	

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consultas=mysql_query("select * from activecalls where src_device_id='$device'",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consultas))
{
				?>
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
					<td>Calls by destination</td>
							
				</tr>
				<tbody>
			<tr>
					<td><center><?php 
						$contadortotal=0;
include './conexion.php';
$conexion1=$misn;
$DB=$misN;
						
						mysql_select_db($DB,$conexion1) or die ("Problemas en la seleccion en la base de datos");
						$consulta1=mysql_query("select DISTINCT(prefix) from activecalls ORDER by prefix ",$conexion1) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");


						while ($row=mysql_fetch_array($consulta1)) { 



						$prefijo=$row['prefix'];

						$contadorparcial=0;

include './conexion.php';
$conexion=$misn;
$DB=$misN;
						
						mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
						$consulta=mysql_query("select * from activecalls where prefix='$prefijo' ORDER by prefix ",$conexion) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	

						while ($reg=mysql_fetch_array($consulta)) {
include './conexion.php';
$conexiones=$misn;
$DB=$misN;
							
									mysql_select_db($DB,$conexiones) or die ("Problemas en la seleccion en la base de datos");
									$consultas=mysql_query("select * from destinations where prefix='$prefijo' ORDER by prefix ",$conexiones) 
									or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");

								while ($row=mysql_fetch_array($consultas)) {
									$nombre=$row['name'];
									}


						$contadorparcial=$contadorparcial+1;
						$contadortotal=$contadortotal+1;

						}
						
						

						//echo $prefijo." ".$nombre.": ".$contadorparcial;

						

						echo "<br>";
						echo "<br>";
						echo "ACTIVE CALLS:".$contadortotal;
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
					<td>USER</td>
					<td colspan=2>ACTIVE CALLS</td>
	
				</tr>
				<tbody>
<?php			
include './conexion.php';
$conexion2=$misn;
$DB=$misN;

						mysql_select_db($DB,$conexion2) or die ("Problemas en la seleccion en la base de datos");
						$consulta2=mysql_query("select DISTINCT(src) from activecalls  ",$conexion2) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");


while ($row1=mysql_fetch_array($consulta2)) { 


$contro1=$row1['src'];

?>
<tr><td><?php echo $contro1; ?></td><td>

<?php


$contadortotal=0;
include './conexion.php';
$conexion1=$misn;
$DB=$misN;

						mysql_select_db($DB,$conexion1) or die ("Problemas en la seleccion en la base de datos");
						$consulta1=mysql_query("select DISTINCT(prefix) from activecalls where src='$contro1' ORDER by prefix ",$conexion1) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");


while ($row=mysql_fetch_array($consulta1)) { 



$prefijo=$row['prefix'];

$contadorparcial=0;
include './conexion.php';
$conexion=$misn;
$DB=$misN;

						mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
						$consulta=mysql_query("select * from activecalls where prefix='$prefijo' and src='$contro1' ",$conexion) 
						or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	

						while ($reg=mysql_fetch_array($consulta)) {
include './conexion.php';
$conexiones=$misn;
$DB=$misN;
							
									mysql_select_db($DB,$conexiones) or die ("Problemas en la seleccion en la base de datos");
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


 echo "</td><td>ACTIVE CALLS:".$contadortotal."</td></tr>";

}
		
			
			?>	
			</tbody>
			</table>



			
		</div>
		</center>
		<?php

$primary_device_id=$reg['primary_device_id'];
}



?>

<!------------------------------------------------------------------------------------------------------------------------------------------>
<?php
$username1=$username;
$password1=$password;
if (!$username1) {
$username1=$_GET['user1'];
$password1=$_GET['password1'];

include './conexion.php';
$conexion=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from users where username='$username1' and password='$password1' order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos");
	while ($reg=mysql_fetch_array($consulta))
{
$device=$reg['primary_device_id'];
include './conexion.php';
$conexion=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from activecalls where src_device_id='$device'",$conexion) 
	or die ("Datos suministrados incorrectos");
	


	
?>

<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>Llamadas activas</title>
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

			<div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            

            <div id="margen"> 
            	  <form action="javascript:history.go(-1);" method=post><input type=hidden name=user value="<?php echo $username1;?>">
		  <input type=hidden name=password value="<?php echo $password1;?>"><input type=submit value="Volver">
							  </form>
<form action=index.php method=post><input type=hidden name=paracostos value="<?php echo $paracostos;?>">
<input type=hidden name=password value="<?php echo $password1;?>"><input type=submit value="Salir">
</form>
			</div>
     
     		</div>



	<center>
	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>ACTIVE CALLS</h1></center>
		</div>
		<?php echo $reg['start_time'];?>
		<table>
			<thead>
				<tr class="centro">
					<td>Start time</td>
					<td>Length (sec)</td>
					<td>Source</td>
					<td>Destination</td>
					<td>Rate</td>
					
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
					<td>Calls by destination</td>
							
				</tr>
				<tbody>
			<tr>
					<td><center><?php 
						$contadortotal=0;
include './conexion.php';
$conexion1=$misn;
$DB=$misN;
						
						mysql_select_db($DB,$conexion1) or die ("Problemas en la seleccion en la base de datos");
						$consulta1=mysql_query("select DISTINCT(prefix) from activecalls ORDER by prefix ",$conexion1) 
						or die ("Datos suministrados incorrectos");


						while ($row=mysql_fetch_array($consulta1)) { 



						$prefijo=$row['prefix'];

						$contadorparcial=0;
include './conexion.php';
$conexion=$misn;
$DB=$misN;

						
						mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
						$consulta=mysql_query("select * from activecalls where prefix='$prefijo' ORDER by prefix ",$conexion) 
						or die ("Datos suministrados incorrectos");
	

						while ($reg=mysql_fetch_array($consulta)) {
include './conexion.php';
$conexiones=$misn;
$DB=$misN;
					
									mysql_select_db($DB,$conexiones) or die ("Problemas en la seleccion en la base de datos");
									$consultas=mysql_query("select * from destinations where prefix='$prefijo' ORDER by prefix ",$conexiones) 
									or die ("Datos suministrados incorrectos ");

								while ($row=mysql_fetch_array($consultas)) {
									$nombre=$row['name'];
									}


						$contadorparcial=$contadorparcial+1;
						$contadortotal=$contadortotal+1;

						}
						
						

						echo $prefijo." ".$nombre.": ".$contadorparcial;

						

						echo "<br>";
						echo "<br>";
						echo "ACTIVE CALLS:".$contadortotal;
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
					<td>USER</td>
					<td colspan=2>ACTIVE CALLS</td>
	
				</tr>
				<tbody>
<?php			
include './conexion.php';
$conexion2=$misn;
$DB=$misN;

						mysql_select_db($DB,$conexion2) or die ("Problemas en la seleccion en la base de datos");
						$consulta2=mysql_query("select DISTINCT(src) from activecalls  ",$conexion2) 
						or die ("Datos suministrados incorrectos");


while ($row1=mysql_fetch_array($consulta2)) { 


$contro1=$row1['src'];

?>
<tr><td><?php echo $contro1; ?></td><td>

<?php


$contadortotal=0;
include './conexion.php';
$conexion1=$misn;
$DB=$misN;

						mysql_select_db($DB,$conexion1) or die ("Problemas en la seleccion en la base de datos");
						$consulta1=mysql_query("select DISTINCT(prefix) from activecalls where src='$contro1' ORDER by prefix ",$conexion1) 
						or die ("Datos suministrados incorrectos");


while ($row=mysql_fetch_array($consulta1)) { 



$prefijo=$row['prefix'];

$contadorparcial=0;
include './conexion.php';
$conexion=$misn;
$DB=$misN;

						mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
						$consulta=mysql_query("select * from activecalls where prefix='$prefijo' and src='$contro1' ",$conexion) 
						or die ("Datos suministrados incorrectos");
	

						while ($reg=mysql_fetch_array($consulta)) {
include './conexion.php';
$conexiones=$misn;
$DB=$misN;
							
									mysql_select_db($DB,$conexiones) or die ("Problemas en la seleccion en la base de datos");
									$consultas=mysql_query("select * from destinations where prefix='$prefijo' ORDER by prefix ",$conexiones) 
									or die ("Datos suministrados incorrectos ");

								while ($row=mysql_fetch_array($consultas)) {
									$nombre=$row['name'];
									}


$contadorparcial=$contadorparcial+1;
$contadortotal=$contadortotal+1;




}


echo $prefijo." ".$nombre.": ".$contadorparcial." "; echo "<br>";


}


 echo "</td><td>ACTIVE CALLS:".$contadortotal."</td></tr>";

}
		
			
			?>	
			</tbody>
			</table>



			
		</div>
		</center>
		<?php

$primary_device_id=$reg['primary_device_id'];
}


}
}
?>






		<meta http-equiv=Refresh content="6;url=lists.php?user1=<?php echo $username1;?>&password1=<?php echo $password1;?>">



</body>

	</html>	




