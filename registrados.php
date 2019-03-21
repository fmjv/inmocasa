<?php
	session_start();
	include("libreria.php");
	comprobar(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestión de clientes</title>
<link type="text/css" href="estilo.css" rel="stylesheet" />
<script type="text/javascript" src="validacion.js"></script>
<link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>
<div id="wrapper">
	<?php 
		include("include/header.php");
	?>
    <div id="main">
    	<?php 
			include("include/navbaradmin.php");
		?>
        <div id="content">
      
        	<p>
        	  <?php
            	$link=conectar();
				
				$query="SELECT identificador,pass,perfil,codigo FROM usuario
				WHERE perfil > 0
				ORDER BY codigo";
				
				$resul=mysql_query($query,$link);
				mysql_close($link);
				echo "<h2>Gestión de usuarios</h2>";
				echo "<table>
            			<tr>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Perfil</th>
							<th>Código</th>
							<th></th>
						</tr>";
				
				while ($fila=mysql_fetch_array($resul))
				{
					echo "<tr>
							<td>".utf8_encode($fila["identificador"])."</td>
							<td>".utf8_encode($fila["pass"])."</td>
							<td>".$fila["perfil"]."</td>
							<td>".$fila["codigo"]."</td>
							<td><a onclick='return confirmarborrado()' href='borrarusu.php?codigo=".$fila["codigo"]."'><img src='images/eliminar.png' width='20' /></a></td>
						 </tr>";
					
					
				}
			
			
				echo "</table>";
            ?>
            <p>&nbsp;</p>
            <?php
			if (isset($_SESSION["error"]))
	{
		echo "<div id='mensaje'>".$_SESSION["error"]."</div>";
		unset($_SESSION["error"]);
	}
			?>
            
        </div>
    </div>
   <?php 
			include("include/footer.php");
		?>
</div>
</body>
</html>