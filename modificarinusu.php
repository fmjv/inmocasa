<?php
	session_start();
	include("libreria.php");
	comprobar(1);
	
	$link=conectar();
	
    $_SESSION["error"]="";
	
	 $destino='fotos/';
	
	if(isset($_POST['cochera']))
	/*if($_POST['cochera']=="on")*/

	{ 
    	$cochera=1; 
	} 
	else 
	{ 
    	$cochera=0; 
	}
	
	if(isset($_POST['banco']))
	/*if($_POST['banco']=="on")*/
	 
	{ 
    	$banco=1;
	} 
	else 
	{ 
    	$banco=0; 
	} 
	
	 if (isset($_POST["fotoperfil"]))
	{/*hay que movel el archivo a la carpeta y hay que obtener el nombre del archivo */
	 $destino=$destino.basename($_FILES['fotosubida']['name']);
	 if (move_uploaded_file($_FILES['fotosubida']['tmp_name'],$destino))
	   { $_SESSION['error']="El archivo".basename($_FILES['fotosubida']['name'])." ha sido subido corectamente";}
	 else
	   { $_SESSION['error']="El archivo".basename($_FILES['fotosubida']['name'])." no ha sido subido corectamente";} 
        	
				$query="UPDATE inmueble 
			    SET foto='".basename($_FILES['fotosubida']['name'])."',
					codin='".utf8_decode($_POST["codin"])."',
					tipo='".utf8_decode($_POST["tipo"])."',
					localizacion='".utf8_decode($_POST["localizacion"])."',
					superficie='".$_POST["superficie"]."',
					dormitorios='".$_POST["dormitorios"]."',
					cochera='".$cochera."',
					banco='".$banco."',
					precio='".$_POST["precio"]."' WHERE
					numin=".$_POST["numin"];
			
			} 
			else 
			{
				$query="UPDATE inmueble 
			    SET foto='default.jpg',
					codin='".utf8_decode($_POST["codin"])."',
					tipo='".utf8_decode($_POST["tipo"])."',
					localizacion='".utf8_decode($_POST["localizacion"])."',
					superficie='".$_POST["superficie"]."',
					dormitorios='".$_POST["dormitorios"]."',
					cochera='".$cochera."',
					banco='".$banco."',
					precio='".$_POST["precio"]."' WHERE
					numin=".$_POST["numin"];
			}
	/*echo $query;*/
	if (mysql_query($query,$link))
		$_SESSION["error"]="Inmueble modificado correctamente";
	else 
		$_SESSION["error"]="No ha sido posible modificar el inmueble";
	mysql_close($link);
	header("Location:inmueblesusu.php");
?>