<html>
	<head>
<LINK REL=StyleSheet HREF="../pruebas/styles1.css" TYPE="text/css">
<title>Intercom Premium</title>

	</head>
	<body>
	<style>
	.centrado{
  
  background: #4FAEC4;
  color: white;
  text-align: center;
  font-size: 38px;

	}

	#cuadro1{
	width: 55%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
	height:;
	}

	.redondo{
  
  border-radius:100%;

	}

	a{
		border-radius: 100%;
		}


	#div3 table {
    border-collapse: collapse;
 	width: 50%;
 	height: 38%;
	}

	</style>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div id="cuadro1">
<div id="div3">
 <form action="log.php" method="post"> 
	<table>
	 <thead>
				<tr class="centrado">
					<td>Acceder</td>
										
				</tr>
	 </thead>
	 <tbody>	
	 <td>
	 <center>
     <input type="text" name="user" placeholder="Usuario" /> 
     </center>
     </td>
     </tr>
     <tr>
     <td>
     <center> 
     <input type="password" name="password" placeholder="Contraseña" /> 
     </center>
     </td>
     </tr>

   
   

     <tr><td><center> 
     <input type="submit" value="INGRESAR" />
     </center></td></tr> 
     </tbody>
     </table>
 </form>
 </div>
 <h5>Si no posee cuenta Cree una <a href=new_user.php>Aqui!!!</a></h5>
 <h5>Si no recuerda su contraseña ingresa <a href=recuperar_pass.php>Aqui!!!</a></h5>
 </div>
<center> 
<h3>Change language</h3>

<form action="login_en.php" method="post">
<input type=image class="redondo" src="pictures/bandera1.png" width="50" height="45"> 
</form>

</center>

</center>
</body>
</html>
