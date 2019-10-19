<center>  <?php
$cantidad=$_POST['cantidad'];
$id=$_POST['id'];
$fecha = date('Y-m-d H:i');



 



for ($i = 1; $i <= $cantidad; $i++) {

$nu=$i;


$cli=$_POST['cli'.$nu];
$descrip=$_POST['descrip'.$nu];
$comentario=$_POST['comentario'.$nu];
	


	include './conexion.php';
$conexion=$misn;
$DB=$misN;
				

	mysql_select_db($DB,$conexion) or die ("Database selection troubles");
	$registros=mysql_query("insert into callerids (cli,device_id,description,comment,added_at,created_at,updated_at) values ('$cli','$id','$descrip','$comentario','$fecha','$fecha','$fecha')",$conexion) 
	or die ("Problemas al guardar.".mysql_error());
	mysql_close($conexion);

}



echo "Succesfully saved";
echo "<meta http-equiv=Refresh content=3;url=suoerlog.php>";








?>


