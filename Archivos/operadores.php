<?php
$cambios=$_POST['cambios'];
$change=$_POST['change'];
if ($cambios)
{


$cone=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
				mysql_select_db("mor",$cone) or die ("Problemas en la seleccion en la base de datos");
				$onsulta=mysql_query("UPDATE lcrproviders set active=$change where id=$cambios ORDER BY provider_id",$cone);
}

?>

<html>
	<head>
	<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
		<title>OPERADORES</title>
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
	</head>
	<body>




	<center>
	<div id="cuadro">
		
		<div id="titulo">
		<center><h1>Operadores</h1></center>
		</div>
		
		<table>

			<thead>
				<tr class="centro">
					<td>Operador</td>
					<td>Estatus</td>
					<td>Accion</td>
					
					
				</tr>
				<tbody>
				<?php



				$conexion=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
				mysql_select_db("mor",$conexion) or die ("Problemas en la seleccion en la base de datos");
				$consulta=mysql_query("SELECT * from lcrproviders where lcr_id='5' ORDER BY provider_id",$conexion) 
				or die ("Datos suministrados incorrectos");
				while ($reg=mysql_fetch_array($consulta))
				{
					$idpro=$reg['provider_id'];
					$id=$reg['id'];					
					$estatus=$reg['active'];
					if ($estatus==1){
						$mirar="ACTIVO";
							}
					if ($estatus==0){
						$mirar="DESACTIVADO";
							}
					$conexion2=mysql_connect("localhost","mor","mor") or die ("hay problema en la conexion");
					mysql_select_db("mor",$conexion2) or die ("Problemas en la seleccion en la base de datos");
					$consulta2=mysql_query("SELECT * from providers where id='$idpro' ",$conexion2) 
					or die ("Datos suministrados incorrectos");

	
	
					 if ($row=mysql_fetch_array($consulta2)) {
								$nombre=$row['name'];



						?>
						<tr>
							<td>
							<?php echo"<center>"; echo $nombre; echo"</center>";?>
							</td>
							<td>
							<?php echo"<center>"; echo $mirar; echo"</center>";?>
							</td>
							<td><center><?php
							if ($mirar=="ACTIVO"){
?>
<form action=operadores.php method=post>
<input type=hidden name=cambios value="<?php echo $id; ?>">
<input type=hidden name=change value="0">
<input type=submit value=DESACTIVAR>
</form>
<?php
						
							}
							if ($mirar=="DESACTIVADO"){
						?>
<form action=operadores.php method=post>
<input type=hidden name=cambios value="<?php echo $id; ?>">
<input type=hidden name=change value="1">
<input type=submit value=ACTIVAR>
</form>
<?php
							}?>
							</center></td>
							
							
							
						</tr>
					<?php }} mysql_close($conexion); ?>
				</tbody>
			</table>	
		</body>

	</html>	




