<?php
	session_start();
	include("libreria.php");
	
	$link=conectar();
	$pass=$_POST["pass"];
	$identificador=$_POST["identificador"];
	$query="SELECT * FROM usuario WHERE identificador='".$identificador."' AND pass='".md5($pass)."'";
	/*echo $query;*/
	$resul=mysql_query($query,$link);
	
	
	if ($fila=mysql_fetch_array($resul))
	{
		$_SESSION["tipo"]=$fila["perfil"];
		switch($fila["perfil"])
		{	case 0: $_SESSION["tipo"]=0; header("Location:inicioadmin.php"); break;
			case 1: $_SESSION["tipo"]=1; $_SESSION["codigo"]=$fila["codigo"]; header("Location:iniciousu.php"); break;
		}
	} else
	{
		$_SESSION["error"]="Usuario o contraseña incorrectos";
		header("Location:index.php");	
	}
	/*Si se puede extraer una fila es que el usuario existe y la contraseña coincide*/
?>