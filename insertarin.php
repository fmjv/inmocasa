<?php
	session_start();
	include("libreria.php");
	comprobar(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insertar inmueble</title>
<link type="text/css" href="estilo.css" rel="stylesheet" />
<script type="text/javascript" src="datepickercontrol.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="images/favicon.png" />
<link type="text/css" rel="stylesheet" href="datepickercontrol.css">
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
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
            <h2>Insertar inmueble</h2>
        	 <div id="stylized" class="myform">
<form id="form" name="form" method="post" action="grabarin.php"  enctype="multipart/form-data">
<h3>Datos del inmueble</h3>
<p></p>
<label>Código
<span class="small">Código requerido</span>
</label>
<span id="sprytextfield1">
<input type="text" name="codin" id="codin" />
<span class="textfieldRequiredMsg">*</span></span>
<label>Tipo
<span class="small">Tipo requerido</span>
</label>
<span id="sprytextfield2">
<input type="text" name="tipo" id="tipo" />
<span class="textfieldRequiredMsg">*</span></span>
<label>Localización
<span class="small">Localización requerida</span>
</label>
<span id="sprytextfield3">
<input type="text" name="localizacion" id="localizacion" />
<span class="textfieldRequiredMsg">*</span></span>
<label>Superficie(m²)
<span class="small">Superficie requerida</span>
</label>
<span id="sprytextfield4">
<input type="text" name="superficie" id="superficie" />
<span class="textfieldRequiredMsg">*</span><span class="textfieldInvalidFormatMsg">No válido.</span></span>
<label>Dormitorio(s)
<span class="small">Número dormitorios requerido</span>
</label>
<span id="sprytextfield5">
<input type="text" name="dormitorios" id="dormitorios" />
<span class="textfieldRequiredMsg">*</span><span class="textfieldInvalidFormatMsg">No válido.</span></span>
<span id="sprytextfield7">
<label for="precio">Precio(€)</label>
<span id="sprytextfield7">
<input type="text" name="precio2" id="precio" />
<span class="textfieldRequiredMsg">*</span><span class="textfieldInvalidFormatMsg">No válido.</span></span>
<label>¿Cochera?</label>
<input type="checkbox" name="cochera" value="on"/>
<label>¿Banco?</label>
<input type="checkbox" name="banco" value="on"/>
<label>¿Subir foto?</label>
<input type="checkbox" name="fotoperfil" id="fotoperfil" onchange="document.form.fotosubida.disabled=false" />

<label>Elige imagen</label>
<input type="file" name="fotosubida" id="fotosubida" disabled="disabled" />
<button type="submit">Enviar</button>
<div class="spacer"></div>
</form>
</div>
        </div>
    </div>
   <?php 
			include("include/footer.php");
		?>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "currency");
</script>
</body>
</html>
