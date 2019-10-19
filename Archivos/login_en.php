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
 <form action="suoerlog.php" method="post"> 
	<table>
	 <thead>
				<tr class="centrado">
					<td>Login</td>
										
				</tr>
	 </thead>
	 <tbody>	
	 <td>
	 <center>
     <input type="text" name="user" placeholder="User" /> 
     </center>
     </td>
     </tr>
     <tr>
     <td>
     <center> 
     <input type="password" name="password" placeholder="Password" /> 
     </center>
     </td>
     </tr>

   
   

     <tr><td><center> 
     <input type="submit" value="INSERT" />
     </center></td></tr> 
     </tbody>
     </table>
 </form>
 </div>
 <h5><a href=new_user.php>Create Account</a></h5>
 <h5><a href=recovery_pass.php>Password recovery</a></h5>
 </div>
<center> 
<h3>Cambiar idioma</h3>

<form action="login.php" method="post">
<input type=image class="redondo" src="pictures/bandera2.png" width="50" height="45"> 
</form>

</center>

</center>
</body>
</html>
