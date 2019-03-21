<?php
	session_start();
	include("libreria.php");
	comprobar(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestión de inmuebles</title>
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
			include("include/navbarusu.php");
		?>
        <div id="content">
       
        	<p>
        	  <?php
            	$link=conectar();
				
				$query="SELECT numin, foto, codin, tipo, localizacion, superficie, dormitorios, cochera, banco, precio
						FROM inmueble";
						
				
				$resul=mysql_query($query,$link);
				mysql_close($link);
				echo "<h2>Gestión de Inmuebles</h2>";
				echo "<table>
            			<tr>
							<th></th>
							<th>Foto</th>
							<th>Código</th>
							<th>Tipo</th>
							<th>Localización</th>
							<th>Superficie(m²)</th>
							<th>Dormitorios</th>
							<th>Cochera</th>
							<th>Banco</th>
							<th>Precio(€)</th>
							<th></th>
						</tr>";
				
				while ($fila=mysql_fetch_array($resul))
				{
					echo "<tr>
							<td><a href='editarinusu.php?numin=".$fila["numin"]."'><img src='images/editar.png' width='20' /></a></td>
							<td><img src='fotos/".$fila['foto']."' height='70' onmouseover='javascript:this.height=200;' 
 							onmouseout='javascript:this.height=70;'/></td>
							<td>".utf8_encode($fila["codin"])."</td>
							<td>".utf8_encode($fila["tipo"])."</td>
							<td>".utf8_encode($fila["localizacion"])."</td>
							<td>".$fila["superficie"]."</td>
							<td>".$fila["dormitorios"]."</td>
							<td>".$fila["cochera"]."</td>
							<td>".$fila["banco"]."</td>
							<td>".$fila["precio"]."</td>
							<td><a onclick='return confirmarborrado()' href='borrarinusu.php?numin=".$fila["numin"]."'><img src='images/eliminar.png' width='20' /></a></td>
						 </tr>";
					
					
				}
			
			
				echo "</table>";
            ?>
            <div id="centrado">
      	  </p>
        	<form id="form1" name="form1" method="post" action="insertarinusu.php">
        	  <input type="submit" name="enviar" id="enviar" value="Insertar inmueble" />
      	  </form>
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
    </div>
   <?php 
			include("include/footer.php");
		?>
</div>
</body>
</html>