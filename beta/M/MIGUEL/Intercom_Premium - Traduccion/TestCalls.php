<?php

$username=$_POST['user'];
$password=$_POST['password'];

$conexion=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from users where username='$username' and password='$password' order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{


?>
<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>Test numbers list</title>

	</head>

<style>
tbody {
    width: 500px;
    overflow-y: auto;
}

</style>

	<body>

			<div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            

            
            <ul>


            <li>
            <a href="http://www.google.es">
            
                <div class="barra"></div>
                <p class="title-menu"></p>
            
            </a>
            </li>

            <li>
            <div class="contenedor-logos">
                <div class="barra"></div>
                <p class="title-menu"></p>
            </div>
            </li>

            <li>
            
                <div class="barra"></div>
                <p class="title-menu"></p>
            
            </li>

            <li>
            
                <div class="barra"></div>
                <p class="title-menu"></p>
            
            </li>
            </ul>
        </div>



		<center>
	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>Active calls</h1></center>
		</div>
		
		<table>
			<thead>
				<tr class="centro">
					<td>DID</td>
					<td>Length (seg)</td>
					<td>Source</td>
					<td>Start time</td>
					
					
				</tr>
				<tbody>
					<?php 

					$conexion=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
					mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
					$consulta=mysql_query("SELECT * FROM dids",$conexion) 
					or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");




					while ($reg=mysql_fetch_array($consulta)) { 
						

							$did=$reg['did'];

							$conexiones=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
							mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
							$consultas=mysql_query("SELECT * FROM activecalls where dst='$did'",$conexiones) 
							or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");

							while ($reg1=mysql_fetch_array($consultas)) {
								$fecha = date('Y-m-j h:i:sa');
								$calculo = $reg1['start_time'];
								$segundos = strtotime($fecha) - strtotime($calculo); 
$ss=$reg1['src'];
$num = 4;
$xxxI="XXXX";
$cadenas = substr($ss, 0, -$num);
 

$cadenas1=$cadenas.$xxxI;

						?>
						<tr>
							<td><?php echo $reg1['dst'];?>
							</td>
							<td>
								<?php echo $segundos ; ?>
							</td>
							<td>
								<?php echo $cadenas1;?>
							</td>
							<td>
								<?php echo $reg1['start_time'];?>
							</td>
							
							
							
						</tr>
					<?php }} mysql_close($conexion); ?>
				</tbody>
			</table>	
	








	
		
		<div id="titulo">
		<center><h1>Test number list</h1></center>
		</div>
		<br>
<!--<textarea rows=20 cols=50 readonly wrap="hard">-->
<center>
<?php
$limite=0;



	$conexio=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexio) or die ("Problemas en la seleccion en la base de datos");
	$consult=mysql_query("SELECT * FROM dids",$conexio) 
	or die ("Datos incorrectos");



while ($ro = mysql_fetch_array($consult)){

$limite=$limite+1;


}

if ($limite>=20){
echo "<div id='div1'>";
}
?>


<table >
<thead>
				<tr class="centro">
					
					<td>Test number</td>
					<td>Country</td>
					

					
				</tr>
<tbody>

<?php





	$conexion=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
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
	$conexionI=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexionI) or die ("Problemas en la seleccion en la base de datos");
	$consultaI=mysql_query("SELECT * FROM destinations where prefix='$concatenador'",$conexionI) 
	or die ("Datos incorrectos");

while ($rowI = mysql_fetch_array($consultaI)){
$link=$rowI['direction_code'];

}

	$conexionII=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexionII) or die ("Problemas en la seleccion en la base de datos");
	$consultaII=mysql_query("SELECT * FROM directions where code='$link'",$conexionII) 
	or die ("Datos incorrectos");

while ($rowII = mysql_fetch_array($consultaII)){
$linkI=$rowII['name'];

}




            
	echo "<tr><td> "."<center>". $did."</center>"."</td><td> "."<center>".$linkI."</center>"."</td></tr>";
         //echo $ori. " ". $nombre." ".$prefijo."  \n";
$limite=$limite+1;

         }
	


?>
  </tbody>
</table>

<?php

if ($limite>=20){
echo "</div>";
}

?>

<div id="titulo">
		<center><h1>Test Records</h1></center>
		</div><div id="div1">
<table >
<thead>
				<tr class="centro">
					<td>N&deg;</td>
					<td>Test number</td>
					<td>Source</td>
					<td>Length (SEC)</td>
					

					
				</tr>
<tbody>
<?php 

$conexionF=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexionF) or die ("Problemas en la seleccion en la base de datos");
	$consultaF=mysql_query("SELECT * FROM dids",$conexionF) 
	or die ("Datos incorrectos");

$conteo=1;

while ($rowF = mysql_fetch_array($consultaF)){

$didF=$rowF['did'];


?>

<?php
$filtrar="ANSWERED";
$filtrarES="CONTESTADA";

	$conexionn=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexionn) or die ("Problemas en la seleccion en la base de datos");
	$consultaa=mysql_query("SELECT * FROM calls where dst='$didF' and  disposition='$filtrar' ORDER BY id DESC limit 0, 50 ",$conexionn) 
	or die ("Datos suministrados incorrectos");
 

while ($rowFF = mysql_fetch_array($consultaa)){


$srcF=$rowFF['src'];
$dur=$rowFF['real_duration'];

$num = 4;
$num2 = 10;
$xxxII="XXXX";
$cadenasI = substr($srcF, 0, -$num);
$ducadenasI = substr($dur, 0, -$num2);
$cadenas2=$cadenasI.$xxxII;

echo "<tr><td> "."<center>". $conteo."</center>"."</td><td> "."<center>". $didF."</center>"."</td><td> "."<center>".$cadenas2."</center>"."</td><td> "."<center>".$ducadenasI."</center>"."</td></tr>";
$conteo=$conteo+1;
}

}
?>

 </tbody>
</table>




<meta http-equiv=Refresh content=6;url=TestCalls.php>
</div>
</center>
<!--</textarea>-->


</body>
	</html>	
<?php

$primary_device_id=$reg['primary_device_id'];
}
	mysql_close($conexion);


?>