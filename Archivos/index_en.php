<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>Intercom Premium</title>

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
            <a href="temp_en.php">
            
                <div class="barra"></div>
                <p class="title-menu">Main</p>
            
            </a>
            </li>

            <li>
            <a href="login_en.php">
            <div class="contenedor-logos">
                <div class="barra"></div>
                <p class="title-menu">Login</p>
            </div>
            </li>
            </a>


            <li>
            <a href="new_users.php">
                <div class="barra"></div>
                <p class="title-menu">Register</p>
            
            </li>
            </a>
            </a>


            <li>
            <a href="list.php">
                <div class="barra"></div>
                <p class="title-menu">Active calls</p>
            
            </li>
            </a>

            <li>
            <a href="temp_en.php">
                <div class="barra"></div>
                <p class="title-menu">Contact us</p>
            
            </li>
            </a>
            </ul>
        </div>



		<center>
<p align="right">
<span>Cambiar idioma:</span>  &nbsp; <a href=index.php><img src="pictures/bandera2.png" width="30" height="25"></a>
</p>

	<div id="cuadro">
	<img src="pictures/Logo1.png" width="120" height="115" >	
		<div id="titulo">

<center><h1>Active calls</h1></center>


		</div>
		
		<table>
			<thead>
				<tr class="centro">
					<td>DID</td>
					<td>Length (sec)</td>
					<td>Source</td>
					<td>Start Time</td>
					
					
				</tr>
				<tbody>
					<?php 
include './conexion.php';
$conexion=$misn;
$DB=$misN;

					
					mysql_select_db($DB,$conexion) or die ("Database selection trouble");
					$consulta=mysql_query("SELECT * FROM dids",$conexion) 
					or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");




					while ($reg=mysql_fetch_array($consulta)) { 
						

							$did=$reg['did'];

include './conexion.php';
$conexiones=$misn;
$DB=$misN;
							
							mysql_select_db($DB,$conexion) or die ("Database selection trouble");
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
		<center><h1>Listas</h1></center>
		</div>
		<br>
<!--<textarea rows=20 cols=50 readonly wrap="hard">-->
<table>
<tr><td VALIGN="TOP" width="450">
<div id="titulo">
		<center><h1>Test Numbers</h1></center>
		</div>
<center>
<?php
$limite=0;


include './conexion.php';
$conexio=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexio) or die ("Database selection trouble");
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
					<td bgcolor=#484848>Date</td>
					<td bgcolor=#484848>Test number</td>
					<td bgcolor=#484848>Country</td>
					

					
				</tr>
<tbody>

<?php




include './conexion.php';
$conexion=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexion) or die ("Database selection trouble");
	$consulta=mysql_query("SELECT * FROM dids",$conexion) 
	or die ("Datos incorrectos");



while ($row = mysql_fetch_array($consulta)){

$did=$row['did'];

$didfecha=$row['closed_till'];
$concatenador=substr($row['did'],0,2);
$concatenadores=substr($row['did'],0,3);  
$null="";
/*
$num = 6;
$xxx="XXXXXX";
$cadena1 = substr($did, 0, -$num);
substr($row["nombre_campo"],0,100).'...';    
$cadena2=$cadena1.$xxx;
*/include './conexion.php';
$conexionI=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionI) or die ("Database selection trouble");
	$consultaI=mysql_query("SELECT * FROM destinations where prefix LIKE'$concatenador%'",$conexionI) 
	or die ("Datos incorrectos");

while ($rowI = mysql_fetch_array($consultaI)){
$link=$rowI['direction_code'];

}
include './conexion.php';
$conexionII=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionII) or die ("Database selection trouble");
	$consultaII=mysql_query("SELECT * FROM directions where code='$link'",$conexionII) 
	or die ("Datos incorrectos");

while ($rowII = mysql_fetch_array($consultaII)){
$linkI=$rowII['name'];

}




            
	echo "<tr><td> "."<center>". $didfecha."</center>"."</td><td> "."<center>". $did."</center>"."</td><td> "."<center>".$linkI."</center>"."</td></tr>";
         //echo $ori. " ". $nombre." ".$prefijo."  \n";
$limite=$limite+1;

         }
	


?>
  </tbody>
</table>
</td>

<td>
<div id="titulo">
		<center><h1>TOP 10 most frequent destinations</h1></center>
		</div>
<center>
<table>

<tr class="centro">
<td bgcolor=#484848>ANI</td>
<td bgcolor=#484848>Dialed</td>
<td bgcolor=#484848>Destination</td>
</tr>

<?php
$filtrar="ANSWERED";


include './conexion.php';
$conexion=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexion) or die ("Database selection trouble");
	$consulta=mysql_query("SELECT dst, count(*) as num FROM calls where disposition='$filtrar' GROUP BY dst ORDER BY num DESC limit 0, 7 ",$conexion) 
	or die ("Datos suministrados incorrectos");
 

while ($row = mysql_fetch_row($consulta)){

$cadena = $row[0];
include './conexion.php';
$conexionI=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionI) or die ("Database selection trouble");
	$consultaI=mysql_query("SELECT DISTINCT src FROM calls where disposition='$filtrar' and dst='$cadena' ORDER BY id DESC",$conexionI) 
	or die ("Datos suministrados incorrectosI");
while ($reg=mysql_fetch_array($consultaI)) {

$ori=$reg['src']; 


            
$num = 4;
$xxx="XXXX";
$cadena1 = substr($cadena, 0, -$num);
$cadena3 = substr($ori, 0, -$num);
$cadena2=$cadena1.$xxx;
$cadena4=$cadena3.$xxx;
         echo "<tr><td>".$cadena4. "</td><td>". $row[1]."</td><td>".$cadena2."</td></tr>";
    }
 

}
?>

</table>
</center>


</td></tr></table>
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
<td>Date and time</td>
					<td>Test number</td>
					<td>Source</td>
					<td>Length (SEC)</td>
					

					
				</tr>
<tbody>
<?php 
include './conexion.php';
$conexionF=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionF) or die ("Database selection trouble");
	$consultaF=mysql_query("SELECT * FROM dids",$conexionF) 
	or die ("Datos incorrectos");

$conteo=1;

while ($rowF = mysql_fetch_array($consultaF)){

$didF=$rowF['did'];


?>

<?php
$filtrar="ANSWERED";
$filtrarES="CONTESTADA";
include './conexion.php';
$conexionn=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexionn) or die ("Database selection trouble");
	$consultaa=mysql_query("SELECT * FROM calls where dst='$didF' and  disposition='$filtrar' ORDER BY id DESC limit 0, 50 ",$conexionn) 
	or die ("Datos suministrados incorrectos");
 

while ($rowFF = mysql_fetch_array($consultaa)){


$srcF=$rowFF['src'];
$dur=$rowFF['real_duration'];
$date=$rowFF['calldate'];
$num = 4;
$num2 = 10;
$xxxII="XXXX";
$cadenasI = substr($srcF, 0, -$num);
$ducadenasI = substr($dur, 0, -$num2);
$cadenas2=$cadenasI.$xxxII;

echo "<tr><td> "."<center>". $conteo."</center>"."</td><td> "."<center>". $date."</center>"."</td><td> "."<center>". $didF."</center>"."</td><td> "."<center>".$cadenas2."</center>"."</td><td> "."<center>".round($ducadenasI,0)."</center>"."</td></tr>";
$conteo=$conteo+1;
}

}
?>

 </tbody>
</table>




<meta http-equiv=Refresh content=6;url=index_en.php>
</div>
</center>
<!--</textarea>-->


</body>
	</html>	
