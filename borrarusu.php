<?php
	session_start();
	include("libreria.php");
	comprobar(0);
	
	$link=conectar();
	
	$query="DELETE FROM usuario WHERE codigo=".$_GET["codigo"];
	/*echo $query;*/
	if (mysql_query($query,$link))
		$_SESSION["error"]="Usuario eliminado correctamente";
	else 
		$_SESSION["error"]="No ha sido posible eliminar el usuario";
	if (mysql_query($query,$link))
		$_SESSION["error"]=$_SESSION["error"]."<br/>Usuario borrado correctamente";
	else
		$_SESSION["error"]=$_SESSION["error"]."<br/>No ha sido posible eliminar el usuario";
	mysql_close($link);
	header("Location:registrados.php");

?>