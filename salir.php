<?php
	session_start();
	
	unset($_SESSION["codigo"]);
	unset($_SESSION["tipo"]);
	
	session_destroy();
	header("Location:index.php");
?>