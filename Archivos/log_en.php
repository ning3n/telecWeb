<?php

$username=$_POST['user'];
$password=$_POST['password'];

$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from users where username='$username' and password='$password' order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{


?>


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

div#margen{
	margin:0px;
	padding:0px;
	padding:65px;
	padding-right: 55px;
	}

</style>

	<body>

			<div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            
                       
            <div id="margen"> <form action=temp_en.php method=post><input type=hidden name=user value="<?php echo $username;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Home">
</form>
 <form action=list.php method=post><input type=hidden name=user value="<?php echo $username;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Calls">
</form>
		 <form action=select.php method=post><input type=hidden name=user value="<?php echo $username;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Add cli">
</form>
		</div>

        </div>



		<center>
<p align="right">
<span>Cambiar Idioma:</span>  &nbsp; <a href=TestNumbers.php><img src="pictures/bandera2.png" width="30" height="25"></a>
</p>




	<div id="cuadro">
	<img src="pictures/Logo1.png" width="120" height="115" >	


		<div id="titulo">


<center><h1>Active Calls</h1></center>


		</div>
		


		<table>
			<thead>
				<tr class="centro">
					<td>DID</td>
					<td>Length (sec)</td>
					<td>Source</td>
					<td>Start time</td>
					
					
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
			<center><h1>List</h1></center>
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



	$conexio=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexio) or die ("Problemas en la seleccion en la base de datos");
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





	$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM dids",$conexion) 
	or die ("Datos incorrectos");



while ($row = mysql_fetch_array($consulta)){

$did=$row['did'];

$didfecha=$row['closed_till'];
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
	$consultaI=mysql_query("SELECT * FROM destinations where prefix LIKE'$concatenador%'",$conexionI) 
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



	$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT dst, count(*) as num FROM calls where disposition='$filtrar' GROUP BY dst ORDER BY num DESC limit 0, 7 ",$conexion) 
	or die ("Datos suministrados incorrectos");
 

while ($row = mysql_fetch_row($consulta)){

$cadena = $row[0];

$conexionI=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexionI) or die ("Problemas en la seleccion en la base de datos");
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
					<td>Length (SEG)</td>
					

					
				</tr>
<tbody>
<?php 

$conexionF=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexionF) or die ("Problemas en la seleccion en la base de datos");
	$consultaF=mysql_query("SELECT * FROM dids",$conexionF) 
	or die ("Datos incorrectos");

$conteo=1;

while ($rowF = mysql_fetch_array($consultaF)){

$didF=$rowF['did'];


?>

<?php
$filtrar="ANSWERED";
$filtrarES="CONTESTADA";

	$conexionn=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
	mysql_select_db("mor",$conexionn) or die ("Problemas en la seleccion en la base de datos");
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



<!--<meta http-equiv=Refresh content=6;url=TestNumbers.php>-->

</div>
</center>

<?php

$primary_device_id=$reg['primary_device_id'];
}
	mysql_close($conexion);


?>

</body>
	</html>	
