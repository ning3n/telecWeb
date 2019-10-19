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

<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">

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
 
<img src="bienvenidos.gif"></img>

<table>
<tr>
<td><form action=seleccion.php method=post><input type=hidden name=user value="<?php echo $username;?>">
<input type=hidden name=password value="<?php echo $password;?>"><center> </form><input type=submit value="Ingresar cli"></center></td>
<td><form action=Top10.php method=post><input type=hidden name=user value="<?php echo $username;?>">
<input type=hidden name=password value="<?php echo $password;?>"><center> </form><input type=submit value="ir a Top 10"></center></td>
<td><form action=TestNumbers.php method=post><input type=hidden name=user value="<?php echo $username;?>">
<input type=hidden name=password value="<?php echo $password;?>"><center> </form><input type=submit value="Test"></center></td>
</tr>
</table>

</center>

<?php

$primary_device_id=$reg['primary_device_id'];
}
	mysql_close($conexion);


?>
