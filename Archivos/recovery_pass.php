<html>
<head>
<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style>
    .centrado{
  
  background: #4FAEC4;
  color: white;
  text-align: center;
  font-size: 38px;

    }

    #cuadro1{
    width: 75%;
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

</head>
<body>

<div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            

            
            <ul>


            <li>
            <a href="temp.php">
            
                <div class="barra"></div>
                <p class="title-menu">Main</p>
            
            </a>
            </li>

            
            <li>
            <a href="login_en.php">
            <div class="contenedor-logos">
                <div class="barra"></div>
                <p class="title-menu">Login</p>
            </div>
            </a>
            </li>
            
            <li>
            <a href="temp.php">
                <div class="barra"></div>
                <p class="title-menu">Contact us</p>
            </a>
            </li>
            </ul>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="cuadro1">
<div id="div3">
<center>

<div id="titulo">
 <h1>Password recovery</h1>
</div>
 <form action="recuperar_pass.php" method="post"> 


<table >

<tr><td>User:</td><td>
     <input type="text" name="user"  placeholder="Usuario"  required /> 
     </td></tr>
     

   
</table>
     <br>

     <input type="submit" value="Recuperar" /> 
 </form></center>


<?php

$username=$_POST['user'];
if ($username){
include './conexion.php';
$conexion=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from users where username ='$username' order by id DESC limit 1",$conexion) 
	or die ("Problemas al buscar.".mysql_error());
	if ($reg=mysql_fetch_array($consulta))
{
$passwordRE=$reg['password'];
echo "<center>User password: ".$passwordRE."</center>";


}
}else{

echo "<center>User does not exist.</center>";


}
	mysql_close($conexion);

?>



</div>
</div>
</body>
</html>
