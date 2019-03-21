<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>InmoCasa</title>
	<link type="text/css" href="estilo.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div id="titulo"></div>
		</div>
		<div id="main">
			<div id="stylized" class="myform">
				<form id="form" name="form" method="post" action="conectar.php">
					<h1>Iniciar Sesión</h1>
					<p></p>
					<label>Usuario <span class="small">Añadir dirección válida</span>
					</label>
					<input type="text" name="identificador" id="identificador" />
					<label>Contraseña
						<span class="small">Mínimo de 6 caracteres</span>
					</label>
					<input type="password" name="pass" id="pass" />
					<button type="submit">Enviar</button>
                    
					<div class="spacer"></div>
                    
				</form>
			</div>
			<?php
				if(isset($_SESSION["error"]))
				{
					echo "<div id='error'>".$_SESSION["error"]."</div>";
					unset($_SESSION["error"]);
				}
			?>
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