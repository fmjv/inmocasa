<?php
	session_start();
	include("libreria.php");
	comprobar(1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Inicio de usuarios</title>
	<link type="text/css" href="estilo.css" rel="stylesheet"/>
	<link rel="icon" type="image/ico" href="images/favicon.png"/>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div id="titulo"></div>
		</div>
		<div id="main">
			<div id="navbar">
			<?php
				$link=conectar();
					
				$query="SELECT identificador
						FROM usuario
						WHERE codigo=".$_SESSION["codigo"];
						
				$resul=mysql_query($query,$link);
				mysql_close($link);
				if($fila=mysql_fetch_array($resul)){
					echo '<span>'."Hola, ".utf8_encode($fila["identificador"]).'<span>';
				}else{
					echo '<span>'."Tu usuario no está registrado.".'</span>';
				};
			?>
            <br/>
            <br/>
				<ul>
					<li><a href="inicioadmin.php">Inicio</a></li>
					<li><a href="editarpassusu.php">Cambiar mi<br/> contraseña</a></li>
					<li><a href="busqueda2.php">Búsqueda</a></li>
					<li><a href="inmueblesusu.php">Inmuebles</a></li>
					<li><a href="salir.php">Cerrar sesión</a></li>
				</ul>
			</div>
			<div id="content">
				<img id="foto" src="images/usuarios.jpg"/>
				<p>¡BIENVENID@ A ZONA USUARIOS!</p>
			</div>
		</div>
		<div id="footer">
			<p>
    Aplicación para Inmobiliaria</br>
    Ciclo 2ºASIR (2015-2016) IES Juan de la Cierva
    </p>
		</div>
	</div>
</body>
</html>