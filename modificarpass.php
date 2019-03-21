<?php
   session_start();
   include("libreria.php");
   comprobar(0);
   
   $link=conectar();
   
   $query="SELECT pass
		   FROM usuario
		   WHERE codigo=1 AND perfil=0";
   $resul=mysql_query($query,$link);
 
   $fila=mysql_fetch_array($resul);
	
   if (md5($_POST["pass"])==$fila["pass"])
      { $query2="UPDATE usuario
	             SET pass='".md5($_POST["nuevapass"])."'
				  WHERE codigo=1 AND perfil=0";
         if (mysql_query($query2,$link))
		   $_SESSION["error"]="Contraseña modificada correctamente";
		 else
		   $_SESSION["error"]="No se ha podido modificar la contraseña";
	  }
   else
   	  $_SESSION["error"]="La contraseña actual es incorrecta"; 	   
   header("Location:editarpass.php");


?>