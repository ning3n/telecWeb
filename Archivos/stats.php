
<?php

session_start();
$username=$_SESSION['user'];
$password=$_SESSION['password'];
$usuario=$_SESSION['paracostos'];

?>
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

div#margen{
	margin:0px;
	padding:0px;
	padding:65px;
	padding-right: 55px;
	}

select {
    font-size: 10px;
    
}
input[type="text"] {
    font-size:10px;
}

.ibra {
   font-size:10px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
       
        border:0px;
       /*display:table-cell;  /*Propiedad obligatoria*/
	
	text-align:center;
	/*vertical-align:middle; /*Propiedad obligatoria*/
      
padding-bottom: 1px;
 

  
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 1px;
  
 
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  -o-border-radius: 8px;
  background: #F0F0F0;
  background: linear-gradient( 0deg, #F0F0F0   , #F7F9FA);
  background: -moz-linear-gradient( 0deg, #F0F0F0, #F7F9FA);
  background: -webkit-linear-gradient(left, #F0F0F0, #F7F9FA);
  background: -o-linear-gradient(left, #F0F0F0, #F7F9FA);
  color: #2E3133;




}

</style>

	<body>

		<div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            

            <div id="margen"> 
            	  <form action="suoerlog.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Test Numbers">
							  </form>
							  <form action="lists.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Calls">
							  </form>
							  <form action="select.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Add cli"></form>
<form action=index.php method=post><input type=hidden name=paracostos value="<?php echo $paracostos;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Exit">
</form>
			</div>
     
     		</div>



		<center>
<p align="right">
<span>Change Language:</span>  &nbsp; <a href=stats.php><img src="pictures/bandera1.png" width="30" height="25"></a>
</p>




	<div id="cuadro">
	<img src="pictures/Logo1.png" width="120" height="115" >	


		<div id="titulo">


<center><h1>Call stats</h1></center>


		</div>






<form action="costos.php" method=post><hr>
<font size=1px>Insert Date<br><br>

From
<select name=dd1>
<option><?php $dd1=date("d"); echo $dd1; ?></option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
<select name=mm1>
<option><?php $mm1=date("m");  echo $mm1;?></option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
<select name=aa1>
<option><?php $aa1=date("Y"); echo $aa1;?></option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
</select>

To
<select name=dd2>
<option><?php $dd1=date("d"); echo $dd1; ?></option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
<select name=mm2>
<option><?php $mm1=date("m");  echo $mm1;?></option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
<select name=aa2>
<option><?php $aa1=date("Y"); echo $aa1;?></option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
</select>

</font>




<br>
<font size=1px>Source <input type=text name=src></font>


<font size=1px> Destination <input type=text name=dst></font>


<br><hr>
<input type=submit class=ibra value=buscar>
</form>

<table>
<thead>
				<tr class="centro">
					<td>Date</td>
					<td>Source</td>
					<td>Destination</td>
					<td>Seconds</td>
					<td>Value</td><!--
					<td>Tarifa usuario</td>
					<td>Segundos usr</td>
					<td>Precio usuario</td>
					<td>Tarifa revendedor</td>
					<td>Segundos rev</td>
					<td>Precio revendedor</td>-->
					
				</tr>
				<tbody>
<?php


$dd1=$_POST['dd1'];
$mm1=$_POST['mm1'];
$aa1=$_POST['aa1'];
$dd2=$_POST['dd2'];
$mm2=$_POST['mm2'];
$aa2=$_POST['aa2'];

$fecha1=$aa1."-".$mm1."-".$dd1;
$fecha2=$aa2."-".$mm2."-".$dd2;

$src=$_POST['src'];
$dst=$_POST['dst'];
$filtrar="ANSWERED";


include './conexion.php';
$conexionI=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexionI) or die ("Problemas en la seleccion en la base de datos");
	$consultaI=mysql_query("SELECT * FROM calls where src_device_id='$usuario' and  date between '$fecha1' and '$fecha2' ORDER BY id DESC",$conexionI) 
	or die ("Datos suministrados incorrectosI");
	while ($reg=mysql_fetch_array($consultaI)) {

include './conexion.php';
$conexionII=$misn;
$DB=$misN;
	
		mysql_select_db($DB,$conexionII) or die ("Problemas en la seleccion en la base de datos");
		$consultaII=mysql_query("SELECT * FROM calls where disposition='$filtrar'and src='$src' or dst='$dst' and  date between '$fecha1' and '$fecha2' ORDER BY id DESC",$conexionII) 
		or die ("Datos suministrados incorrectosII");
		while ($row=mysql_fetch_array($consultaII)) {


	$date=$row['date'];
	$src=$row['src'];  
	$dst=$row['dst']; 
	$rate=$row['provider_rate']; 
	$billsec=$row['provider_billsec']; 
	$price=$row['provider_price'];
	$rate_usr=$row['user_rate']; 
	$billsec_usr=$row['user_billsec']; 
	$price_usr=$row['user_price']; 
	$rate_rs=$row['reseller_rate']; 
	$billsec_rs=$row['reseller_billsec']; 
	$price_rs=$row['reseller_price']; 
	$multiplica=($rate_usr*$billsec_usr); 

            


echo "<tr><td>".$date. "</td><td>". $src."</td><td>".$dst."</td><td>".$billsec_usr."</td><td>".$multiplica."</td></tr>";/*."<td>".$rate_usr."</td>"."<td>".$billsec_usr."</td>"."<td>".$price_usr."</td>"."<td>".$rate_rs."</td>"."<td>".$billsec_rs."</td>"."<td>".$price_rs."</td></tr>";*/



	}

    }
 
echo "</table>";

mysql_close($conexion);
?>




            

