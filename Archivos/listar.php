<?php
session_start();
$username=$_SESSION['user'];
$password=$_SESSION['password'];
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
            	  <form action="superlog.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Numeros prueba">
							  </form>
			<form action="seleccion.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Ingresar cli">
							  </form>
							  <form action="costos.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Estadísticas">
							  </form>
<form action=index.php method=post><input type=hidden name=paracostos value="<?php echo $paracostos;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Salir">
</form>
			</div>
     
     		</div>



	<center>
	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>Llamadas activas</h1></center>
		</div>
		
		
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

					<?php




include './conexion.php';
$conexion=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from users where username='$username' and password='$password' order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	if ($reg=mysql_fetch_array($consulta))
{

include './conexion.php';

$conexion=$misn;
$DB=$misN;
$device=$reg['primary_device_id'];	

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consultas=mysql_query("select * from activecalls where src_device_id='$device'",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consultas))
{


	

						$fecha = date('Y-m-j h:i:sa');
						$calculo = $reg['start_time'];
						$segundos = strtotime($fecha) - strtotime($calculo); 



						?>
						<tr>
							<td><?php echo $calculo;?>
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
			
			


			
		</div>
		</center>
		<?php

$primary_device_id=$reg['primary_device_id'];
}



?>

<!------------------------------------------------------------------------------------------------------------------------------------------>





		<meta http-equiv=Refresh content="6;url=listar.php?user1=<?php echo $username1;?>&password1=<?php echo $password1;?>">



</body>

	</html>	




