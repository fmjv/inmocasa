<?php
    session_start();
	include("libreria.php");
	comprobar(0);
	
	$link=conectar();
	
	$query="INSERT INTO usuario (identificador,pass) 
	        VALUES ('".$_POST["identificador"]."',
			        '".md5($_POST["pass"])."')";
					
    /*echo $query; */
	
	 if (mysql_query($query,$link))
		    
		 $_SESSION["error"]=$_SESSION["error"]."<br/>"." Usuario creado correctamente";
			
	else
		 $_SESSION["error"]=$_SESSION["error"]."<br/>"." No ha sido posible crear el nuevo usuario";
				
		        
    mysql_close($link);
	header("Location:usuarios.php"); 			

?> 