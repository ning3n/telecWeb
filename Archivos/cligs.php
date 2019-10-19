<center>  <?php

$cantidad=$_POST['cantidad'];
$id=$_POST['id'];

include './conexion.php';
$conexion=$misn;
$DB=$misN;



	mysql_select_db($DB,$conexion) or die ("Database selection troubles");
	$consulta=mysql_query("select * from devices where id=$id order by id DESC limit 1",$conexion) 
	or die ("Wrong data <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{
$name=$reg['name'];
}
	mysql_close($conexion);


?>
</center> 
<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
<style>
	.centrado{
  
  background: #4FAEC4;
  color: white;
  text-align: center;
  font-size: 38px;

	}

	#cuadro1{
	width: 95%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
	height:;
	}	

	#div3 table {
    border-collapse: collapse;
 	width: 50%;
 	height: 38%;
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
            	  <form action="suoerlog.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Test numbers">
							  </form>
							  <form action="lists.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Calls">
							  </form>
							  <form action="stats.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Stats"></form>
<form action=index.php method=post><input type=hidden name=paracostos value="<?php echo $paracostos;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Salir">
</form>
			</div>
     
     		</div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>
<div id="cuadro1">
<div id="div3">

<form action=savecli.php method=post>
<table>
<tr>
<td>Device name:</td> <td> Number </td>
<td>Add CLI</td>
</tr>



<?php 


for ($i = 1; $i <= $cantidad; $i++) {

$nu=$i;



?>
<tr><td><?php echo $name; ?></td><td><?php echo $nu; ?></td><td><input type=text name="cli<?php echo $nu; ?>" required ></td></textarea></td></tr>

<?php 

}

?>


<tr>
<td colspan=5><center><input type=hidden name=id value="<?php echo $id; ?>"><input type=hidden name=cantidad value="<?php echo $cantidad; ?>"><input type=submit value=Insert></center></td>
</tr>
</table>
</form>
</div>
</div>
</center>





