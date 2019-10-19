<?php 
    session_start(); 
    if(isset($_GET[logout])){ 
        session_unset(); 
    } 
    require_once('./funciones.php'); 
    echo ' 
<html> 
<body> 
'; 
    if(logged()){ 
       echo 'hola mundo';//codigo de la pagina a la que solo se accede logueado 

    }else{ 
        include("form.php"); 
        show_form(); 
    } 
    echo ' 
     
</body> 
</html> 
'; 
?> 
