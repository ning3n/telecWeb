<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>Intercom Premium</title>

	</head>
	<body>

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

		<div id="barra-lateral">

            
           <div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            

            <div id="margen"> 
            	  <form action="superlog.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Main">
							  </form>
							  <form action="listar.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Calls">
							  </form>
							  <form action="costos.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Stats">
							  </form>
<form action=index.php method=post><input type=hidden name=paracostos value="<?php echo $paracostos;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Close">
</form>
			</div>
     
     		</div>
</div>
<div id="cuadro">
<center>
<div id="titulo">


<center><h1>ASIGNED DEVICE</h1></center>


		</div>
<?php


session_start();
$username=$_SESSION['user'];
$password=$_SESSION['password'];

include './conexion.php';
$conex=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conex) or die ("Problemas en la seleccion en la base de datos");
	$cons=mysql_query("SELECT * FROM users where username='$username' and password ='$password'",$conex) 
	or die ("Datos incorrectos");

if ($roww = mysql_fetch_array($cons)){

$user=$roww['id'];
}

?>

<table >
<thead>
				<tr class="centro">
					
					<td bgcolor=#484848>Asigned number</td>
					<td bgcolor=#484848>Country</td>
					

					
				</tr>
				</thead>
<tbody>

<?php




include './conexion.php';
$conexion=$misn;
$DB=$misN;
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("SELECT * FROM dids where user_id='$user'",$conexion) 
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
</center>
</div>
</body>
</html>
