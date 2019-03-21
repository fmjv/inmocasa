<?php
	session_start();
	include("libreria.php");
	comprobar(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cambiar contraseña</title>
<link type="text/css" href="estilo.css" rel="stylesheet" />
<link rel="icon" type="image/png" href="images/favicon.png" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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
        <?php
			$link=conectar();
			
			$query="SELECT pass 
			FROM usuario
			WHERE codigo=1 AND perfil=0";
			$resul=mysql_query($query,$link);
			mysql_close($link);
			$fila=mysql_fetch_array($resul);
		?>
        
        <h2>Editar contraseña</h2>
        	 <div id="stylized" class="myform">
<form id="form" name="form" method="post" enctype="multipart/form-data" action="modificarpass.php">
<h3>Introducción de contraseña</h3>
<p></p>
<input type="hidden" name="codigo" value='<?php echo $fila["codigo"] ?>' />



<label>Contraseña actual
<span class="small">Contraseña requerida</span>
</label>
<span id="sprytextfield1">
<input type="password" name="pass" id="pass" />
<span class="textfieldRequiredMsg">*</span></span>
<label>Nueva contraseña
<span class="small">Campo requerido</span>
</label>
<span id="sprytextfield2">
<input type="password" name="nuevapass" />
<span class="textfieldRequiredMsg">*</span><span class="textfieldMinCharsMsg">Mínimo <br/>4 caracteres</span></span>
<label>Repite contraseña
<span class="small">Contraseña requerida</span>
</label>
<span id="sprytextfield3">
<input type="password" name="nuevapass2" id="nuevapass2" />
<span class="textfieldRequiredMsg">*</span><span class="textfieldMinCharsMsg">Mínimo <br/>4 caracteres</span></span>
<button type="submit">Enviar</button>
<div class="spacer"></div>
</form>
</div>
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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {minChars:4});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {minChars:4});
</script>
</body>
</html>