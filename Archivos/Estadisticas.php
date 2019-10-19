
<?php
$filtrar="ANSWERED";

//////////////AGENTES//////////////////
$agente03="11";
$agente04="12";
$agente05="15";
$agente06="16";
$agente07="17";
$agente08="18";
$agente09="19";
$agente10="20";
$agente11="21";
$agente12="22";
$agente13="23";
$agente14="24";
$agente15="25";
$agente16="26";
$agente17="27";
$agente18="28";
$agente19="29";
$agente20="30";
///////////////////////////////////////


$fechaACTUAL = date('Y-m-j');
$fechaINICO = "2017-06-22";
include './conexion.php';
$conexion=$misn;
$DB=$misN;
$CONTEO=0;

echo"<center><h3>Listado de las llamadas contestadas de los Agentes correspondiente al lapso desde ".$fechaINICO." al ".$fechaACTUAL."</h3></center>";

echo"<center><table border=1><tr><th>Nombre</th><th>LLamadas contestadas</th></tr>";

	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente03' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente03</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente04' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente04</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente05' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente05</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente06' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente06</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;

mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente08' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente08</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente09' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente09</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente10' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente10</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente11' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente11</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente12' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente12</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente13' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente13</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente14' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente14</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente15' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente15</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente17' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente17</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente18' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente18</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente19' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente19</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;
mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM calls where provider_id='$agente20' and disposition='$filtrar' and date BETWEEN '$fechaINICO' AND '$fechaACTUAL' ",$conexion) 
	or die ("Datos suministrados incorrectos");
 	
while ($reg=mysql_fetch_array($consulta)) {

//$ori=$reg['src']; 

$CONTEO=$CONTEO+1;
  }
echo"<tr><td>Agente20</td><td><center>".$CONTEO."</center></td></tr>";
$CONTEO=0;



echo"</table></center>";
?>



