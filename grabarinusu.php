<?php
	session_start();
	include("libreria.php");
	comprobar(1);
	
	$link=conectar();
	
	$destino='fotos/';
	
	$_SESSION["error"]="";
	
	
	
	if(isset($_POST['cochera'])) 
	{ 
    	$cochera=1; 
	} 
	else 
	{ 
    	$cochera=0; 
	}
	if(isset($_POST['banco']))
	{ 
    	$banco=1; 
	} 
	else 
	{ 
    	$banco=0; 
	}  
	
	if (isset($_POST["fotoperfil"]))
	{
	 $destino=$destino.basename($_FILES['fotosubida']['name']);
	 if (move_uploaded_file($_FILES['fotosubida']['tmp_name'],$destino))
	   { $_SESSION['error']="El archivo".basename($_FILES['fotosubida']['name'])."ha sido subido corectamente";}
	 else
	   { $_SESSION['error']="El archivo".basename($_FILES['fotosubida']['name'])." no ha sido subido corectamente";} 
	
			$query="INSERT INTO inmueble (codin,tipo,localizacion,superficie,dormitorios,cochera,banco,precio,foto) 
			VALUES ('".utf8_decode($_POST["codin"])."',
					'".utf8_decode($_POST["tipo"])."',
					'".utf8_decode($_POST["localizacion"])."',
					'".$_POST["superficie"]."',
					'".$_POST["dormitorios"]."',
					'".$cochera."',
					'".$banco."',
					'".$_POST["precio"]."',
					'".basename($_FILES['fotosubida']['name'])."')";
			
			} 
			else 
			{
				$query="INSERT INTO inmueble (codin,tipo,localizacion,superficie,dormitorios,cochera,banco,precio,foto) 
			VALUES ('".utf8_decode($_POST["codin"])."',
					'".utf8_decode($_POST["tipo"])."',
					'".utf8_decode($_POST["localizacion"])."',
					'".$_POST["superficie"]."',
					'".$_POST["dormitorios"]."',
					'".$cochera."',
					'".$banco."',
					'".$_POST["precio"]."',
					'default.jpg')";
			}
	/*echo $query;*/
	if (mysql_query($query,$link))
		$_SESSION["error"]="Inmueble insertado correctamente";
	else 
		$_SESSION["error"]="No ha sido posible insertar el inmueble";
	mysql_close($link);
	header("Location:inmueblesusu.php");
?>