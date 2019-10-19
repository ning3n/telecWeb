<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>Llamadas frecuentes</title>

	</head>
	<body>

		<div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            

            
            <ul>


            <li>
            <a href="TestCalls.php">
            
                <div class="barra"></div>
                <p class="title-menu">Test Numbers</p>
            
            </a>
            </li>

            
         
            
            <li>
            <a href="list.php">
                <div class="barra"></div>
                <p class="title-menu">Active Calls</p>
            </a>
            </li>
            </ul>
        </div>


	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>TOP 10 most frequent Destinations</h1></center>
		</div>
		<center>
<table>
<tr>
<td>ANI</td>
<td>Marked</td>
<td>Destination</td>
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
</body>
	</html>	



            

