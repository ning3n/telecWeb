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
            <a href="temp.php">
            
                <div class="barra"></div>
                <p class="title-menu">Principal</p>
            
            </a>
            </li>

            <li>
            <a href="login.php">
            <div class="contenedor-logos">
                <div class="barra"></div>
                <p class="title-menu">Ingresar</p>
            </div>
            </li>
            </a>


            <li>
            <a href="new_user.php">
                <div class="barra"></div>
                <p class="title-menu">Registro</p>
            
            </li>
            </a>


            
            </a>
            </a>


            <li>
            <a href="temp.php">
                <div class="barra"></div>
                <p class="title-menu">Contactanos</p>
            
            </li>
            </a>
            </ul>
        </div>



		<center>
<p align="right">
<span>Change Language:</span>  &nbsp; <a href=index_en.php><img src="pictures/bandera1.png" width="30" height="25"></a>
</p>

	<div id="cuadro">
	<img src="pictures/Logo1.png" width="120" height="115" >	
	



	
		
		<div id="titulo">
		<center><h1>Listas</h1></center>
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
	$consulto=mysql_query("select * from dids order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($redg=mysql_fetch_array($consulto))

{


include './conexion.php';

$conexion=$misn;
$DB=$misN;
$device=$redg['did'];	

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consultas=mysql_query("select * from activecalls where dst='$device'",$conexion) 
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
					<?php } }mysql_close($conexion); ?>
				</tbody>
			</table>	
			<br>
			
			


			
		</div>
		</center>		<br>

<!--<textarea rows=20 cols=50 readonly wrap="hard">-->
<table>
<tr><td VALIGN="TOP" width="450">
<div id="titulo">
		<center><h1>N&uacute;meros de prueba</h1></center>
		</div>
<center>
<?php
$limite=0;


include './conexion.php';
$conexio=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexio) or die ("Problemas en la seleccion en la base de datos");
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
					<td bgcolor=#484848>Fecha</td>
					<td bgcolor=#484848>n&uacute;mero de Prueba</td>
					<td bgcolor=#484848>País</td>
					

					
				</tr>
<tbody>

<?php




include './conexion.php';
$conexion=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
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
*/
$Flecha="no";
$valum="no";
$valum2="si";
include './conexion.php';
$conexionIP=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionIP) or die ("Problemas en la seleccion en la base de datos");
	$consultaIP=mysql_query("SELECT * FROM destinations where prefix LIKE'$concatenadores%'",$conexionIP) 
	or die ("Datos incorrectos");

if ($rowIP = mysql_fetch_array($consultaIP)){
$Flecha="si";

}


if ($Flecha==$valum2) 
{
include './conexion.php';
$conexionI=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionI) or die ("Problemas en la seleccion en la base de datos");
	$consultaI=mysql_query("SELECT * FROM destinations where prefix LIKE'$concatenadores%'",$conexionI) 
	or die ("Datos incorrectos");

while ($rowI = mysql_fetch_array($consultaI)){
$link=$rowI['direction_code'];

}
}

if ($Flecha==$valum) 
{
include './conexion.php';
$conexionI=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionI) or die ("Problemas en la seleccion en la base de datos");
	$consultaI=mysql_query("SELECT * FROM destinations where prefix LIKE'$concatenador%'",$conexionI) 
	or die ("Datos incorrectos");

while ($rowI = mysql_fetch_array($consultaI)){
$link=$rowI['direction_code'];

}
}




include './conexion.php';
$conexionII=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionII) or die ("Problemas en la seleccion en la base de datos");
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
		<center><h1>TOP 10 en Destinatarios mas frecuentes</h1></center>
		</div>
<center>
<table>

<tr class="centro">
<td bgcolor=#484848>ANI</td>
<td bgcolor=#484848>Marcado</td>
<td bgcolor=#484848>Destino</td>
</tr>

<?php
$filtrar="ANSWERED";


include './conexion.php';
$conexion=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT dst, count(*) as num FROM calls where disposition='$filtrar' GROUP BY dst ORDER BY num DESC limit 0, 4 ",$conexion) 
	or die ("Datos suministrados incorrectos");
 

while ($row = mysql_fetch_row($consulta)){

$cadena = $row[0];
include './conexion.php';
$conexionI=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionI) or die ("Problemas en la seleccion en la base de datos");
	$consultaI=mysql_query("SELECT DISTINCT src FROM calls where disposition='$filtrar' and dst='$cadena' ORDER BY id DESC limit 0, 7",$conexionI) 
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
		<center><h1>Registro de Pruebas</h1></center>
		</div><div id="div1">
<table >
<thead>
				<tr class="centro">
					<td>N&deg;</td>
<td>Fecha y Hora</td>
					<td>n&uacute;mero de Prueba</td>
					<td>Origen</td>
					<td>Duración (SEG)</td>
					

					
				</tr>
<tbody>


<?php
$filtrar="ANSWERED";
$filtrarES="CONTESTADA";
include './conexion.php';
$conexionn=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexionn) or die ("Problemas en la seleccion en la base de datos");
	$consultaa=mysql_query("SELECT * FROM calls where disposition='$filtrar' ORDER BY calldate DESC limit 0, 50 ",$conexionn) 
	or die ("Datos suministrados incorrectos");
 
$conteo=1;	

while ($rowFF = mysql_fetch_array($consultaa)){

$PIII=$rowFF['dst'];
$srcF=$rowFF['src'];
$dur=$rowFF['real_duration'];
$date=$rowFF['calldate'];
$num = 4;
$num2 = 10;
$xxxII="XXXX";
$cadenasI = substr($srcF, 0, -$num);
$ducadenasI = substr($dur, 0, -$num2);
$cadenas2=$cadenasI.$xxxII;



include './conexion.php';
$conexionF=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionF) or die ("Problemas en la seleccion en la base de datos");
	$consultaF=mysql_query("SELECT * FROM dids where did='$PIII'",$conexionF) 
	or die ("Datos incorrectos");



while ($rowF = mysql_fetch_array($consultaF)){

$didF=$rowF['did'];





echo "<tr><td> "."<center>". $conteo."</center>"."</td><td> "."<center>". $date."</center>"."</td><td> "."<center>". $didF."</center>"."</td><td> "."<center>".$cadenas2."</center>"."</td><td> "."<center>".round($ducadenasI,0)."</center>"."</td></tr>";
$conteo=$conteo+1;

}


}
?>

 </tbody>
</table>




<meta http-equiv=Refresh content=6;url=index.php>
</div>
</center>
<!--</textarea>-->


</body>
	</html>	
