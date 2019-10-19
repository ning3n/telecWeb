<?php 
    session_start(); 
    if(isset($_GET[logout])){ 
        session_unset(); 
    } 



    function check($usuario, $clave){ 
        return ($usuario == "webmaster" && $clave == "123456"); 
    } 
    function logged(){ 
        if(isset($_POST[user]) && isset($_POST[password])){ 
            $_SESSION = $_POST; 
            return check($_POST[user],$_POST[password]); 
        }else{ 
            if(check($_SESSION[user],$_SESSION[password])){ 
                return true; 
            }else{ 
                return false; 
            } 
        }         
    } 


    echo ' 
<html> 
<body> 
'; 
    if(logged()){ 
       echo 'logged<br><a href="index.php?logout">Cerrar sesión</a>';//codigo de la pagina a la que solo se accede logueado 
  echo '<br><br>tress<br><a href="dis.php">check</a>';
    }else{ 
        

echo ' 
        <form action="index.php" method="post"> 
         
<table width="366" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#787878"> 
<tr> 
<td width="358" height="121" valign="middle" bgcolor="#FFFFFF"> 
                     
<table width="358" height="126" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" bordercolor="#787878"> 
<tr bgcolor="#2872ae"> 
<td height="18" colspan="3"> 
<div align="center" class="Estilo4 Estilo4 Estilo10 Estilo3 Estilo1">PERSONAL DE BIBLIOTECA</div> 
</td> 
</tr> 
<tr bgcolor="#FFFFFF"> 
<td width="25" height="36"> </td> 
<td width="150" class="Estilo5 Estilo10">Usuario:</td> 
<td width="183"><input name="user" type="text" id="user" size="20" maxlength="20" /></td> 
</tr> 
<tr bgcolor="#FFFFFF"> 
<td height="36"> </td> 
<td class="Estilo5 Estilo10">Password:</td> 
<td><input type="password" name="password" size="20" maxlength="20" /></td> 
</tr> 
<tr > 
<td colspan="2"> 
<div align="center"> 
                                    <input name="entrar2" type="reset" id="limpiar" value="Reset" style="width:100px;font-size:15px;color:#ffffff;background:#999999" class="cursor" /> 
                                </div> 
</td> 
<td> 
<div align="center"> 
                                    <input name="entrar" type="submit" id="entrar" value="Ingresar" style="width:100px;font-size:15px;color:#ffffff;background:#999999" class="cursor" /> 
                                </div> 
</td> 
</tr> 
</table> 
</td> 
</tr> 
</table> 
</form>'; 



    } 
    echo ' 
     
</body> 
</html> 
'; 
?> 
