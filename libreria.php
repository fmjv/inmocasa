<?php
	function conectar()
{
	if (!($link=mysql_connect("localhost","root","123456")))
		{$_SESSION["error"]="Imposible conexión con servidor MYSQL";
		header("Location:index.php");
		exit();}
	if (!(mysql_select_db("inmocasa",$link)))
		{$_SESSION["error"]="La base de datos no está disponible";
		header("Location:index.php");}
		return $link;
}
	function comprobar($tipo)
{
	if (!isset($_SESSION["tipo"]) or $_SESSION["tipo"]!=$tipo)
	{
		header("Location:salir.php");
		exit();
	}
}
?>
