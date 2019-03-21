<?php
   session_start();
   include("libreria.php");
   comprobar(1);
   
   $link=conectar();
   
   $query="SELECT pass 
			FROM usuario 
			WHERE codigo=".$_SESSION["codigo"].
			" AND perfil=1";
			
			$resul=mysql_query($query,$link);
			$fila=mysql_fetch_array($resul);
		
	if (md5($_POST["pass"])==$fila["pass"])
		{
		$query2="UPDATE usuario
				SET pass='".md5($_POST["nuevapass"])."'
				WHERE codigo=".$_SESSION["codigo"]."
				AND perfil=1";
	if (mysql_query($query2,$link))
			$_SESSION["error"]="Contraseña modificada correctamente";
			else
			$_SESSION["error"]="No ha sido posible modificar la contraseña";
			}
			
	else 
		$_SESSION["error"]="La contraseña es incorrecta";
	mysql_close($link);
	header("Location:editarpassusu.php");


?>