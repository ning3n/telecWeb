<center>  <?php

$cantidad=$_POST['cantidad'];
$id=$_POST['id'];






$conexion=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from devices where id=$id order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{
$name=$reg['name'];
}
	mysql_close($conexion);


?>
</center> 
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

	</style>


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

<form action=guardacli.php method=post>
<table>
<tr>
<td>Nombre del Dispositivo:</td> <td> N&uacute;mero </td>
<td>Suministre CLI</td>
</tr>



<?php 


for ($i = 1; $i <= $cantidad; $i++) {

$nu=$i;



?>
<tr><td><?php echo $name; ?></td><td><?php echo $nu; ?></td><td><input type=text name="cli<?php echo $nu; ?>"></td></textarea></td></tr>

<?php 

}

?>


<tr>
<td colspan=5><center><input type=hidden name=id value="<?php echo $id; ?>"><input type=hidden name=cantidad value="<?php echo $cantidad; ?>"><input type=submit value=Agregar></center></td>
</tr>
</table>
</form>
</div>
</div>
</center>





