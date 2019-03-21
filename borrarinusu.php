<?php
	session_start();
	include("libreria.php");
	comprobar(1);
	
	$link=conectar();
	
	$query="DELETE FROM inmueble WHERE numin=".$_GET["numin"];
	/*echo $query;*/
	if (mysql_query($query,$link))
		$_SESSION["error"]="Inmueble eliminado correctamente";
	else 
		$_SESSION["error"]="No ha sido posible eliminar el inmueble";
	mysql_close($link);
	header("Location:inmueblesusu.php");

?>