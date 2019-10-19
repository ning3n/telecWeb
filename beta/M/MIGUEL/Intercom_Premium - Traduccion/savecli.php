<center>  <?php
$cantidad=$_POST['cantidad'];
$id=$_POST['id'];
$fecha = date('Y-m-d H:i');



 



for ($i = 1; $i <= $cantidad; $i++) {

$nu=$i;


$cli=$_POST['cli'.$nu];
$descrip=$_POST['descrip'.$nu];
$comentario=$_POST['comentario'.$nu];
	


	
				
	$conexion=mysql_connect("localhost","MOR","MOR") or die ("hay problema en la conexion");
	mysql_select_db("MOR",$conexion) or die ("Problemas en la seleccion en la base de datos");
	$registros=mysql_query("insert into callerids (cli,device_id,description,comment,added_at,created_at,updated_at) values ('$cli','$id','$descrip','$comentario','$fecha','$fecha','$fecha')",$conexion) 
	or die ("Problemas al guardar.".mysql_error());
	mysql_close($conexion);

}



echo "Succesfully saved";
echo "<meta http-equiv=Refresh content=3;url=index_en.php>";








?>


