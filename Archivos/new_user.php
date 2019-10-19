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
            <a href="index.php">
            
                <div class="barra"></div>
                <p class="title-menu">Main</p>
            
            </a>
            </li>

            
            <li>
            <a href="login.php">
            <div class="contenedor-logos">
                <div class="barra"></div>
                <p class="title-menu">Ingresar</p>
            </div>
            </a>
            </li>
            
            <li>
            <a href="temp.php">
                <div class="barra"></div>
                <p class="title-menu">Contactanos</p>
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
 <h1>Registrarse</h1>
</div>
 <form action="2.php" method="post" onsubmit = "return validar(this)"> 
<script>
function validar(frm) {
  if (frm.user.value.length<8) {
    alert('El usuario debe tener mas de 8 caracteres');
    frm.user.focus();
    return false;
  }
  else{
  	function email( email ) {
	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) )
        alert("Error: La dirección de correo " + email + " es incorrecta.");
}
  }
 }
</script>

<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

    
</script>


<table >

<tr><td>Usuario:</td><td>
     <input type="text" name="user" onkeypress="return soloLetras(event)" placeholder="Usuario"  required /> 
     </td><td> 
     Contraseña:</td><td> 
     <input type="password" name="password" placeholder="Contraseña" required/> 
     </td></tr>
     <tr><td>
     E-mail:</td><td colspan=4>
     <input type="email" name="email" onkeypress="return email(event)" placeholder="E-mail" required /> 
   </td></tr>
<tr><td>
    Idioma</td><td>
    <input type="radio" name="idioma" id="idioma" value="es" />Es
    <input type="radio" name="idioma" id="idioma" value="en" />En
    </td></tr>
    <tr><td>
    Tipo de Plan</td><td>
    <input type="radio" name="plan" id="plan" value="1" />Premium
    <input type="radio" name="plan" id="plan" value="2" />VozIP
    </td></tr>
   
</table>
     <br>

     <input type="submit" value="REGISTRAR" /> 
 </form></center>
</div>
</div>
</body>
</html>
