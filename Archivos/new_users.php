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
 <h1>Register</h1>
</div>
 <form action="3.php" method="post"> 
<table >

<tr><td>User:</td><td>
     <input type="text" name="user" placeholder="Usuario"  required /> 
     </td><td> 
     Password:</td><td> 
     <input type="password" name="password" placeholder="Contraseña" required/> 
     </td></tr>
     <tr><td>
     E-mail:</td><td colspan=4>
     <input type="text" name="email" placeholder="E-mail" required /> 
   </td></tr>
<tr><td>
    Language</td><td>
    <input type="radio" name="idioma" id="idioma" value="es" />Es
    <input type="radio" name="idioma" id="idioma" value="en" />En
    </td></tr>
    <tr><td>
    Plan type</td><td>
    <input type="radio" name="plan" id="plan" value="1" />Premium
    <input type="radio" name="plan" id="plan" value="2" />VozIP
    </td></tr>
   
</table>
     <br>

     <input type="submit" value="REGISTER" /> 
 </form></center>
</div>
</div>
</body>
</html>