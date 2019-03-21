<?php 
   session_start(); 
   include("libreria.php");
   comprobar(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insertar Usuario</title>
<link type="text/css" href="estilo.css"  rel="stylesheet" />
<link rel="icon" type="image/png" href="images/favicon.png" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>
<body>
	<div id="wrapper">
    
    	<?php include("include/header.php"); ?>
        
        <div id="main">
        	<?php include("include/navbaradmin.php"); ?>
            <div id="content">
                <h2>Insertar Usuario</h2>           
                <div id="stylized" class="myform">
                
                   <form id="form" name="form" method="post" action="grabarusu.php">
                    <h1>Datos usuario</h1>
                    <p></p>
                    
                    <label>Usuario
                    <span class="small">Usuario requerido</span>
                    </label>
                    <span id="sprytextfield1">
                    <input type="text" name="identificador" id="identificador" />
                    <span class="textfieldRequiredMsg">*</span><span class="textfieldMinCharsMsg">Mínimo<br/> de caracteres</span></span>
                    <label>Contraseña
                    <span class="small">Contraseña requerida</span>
                    </label>
                    <span id="sprytextfield2">
                    <input type="password" name="pass" id="pass" />
                    <span class="textfieldRequiredMsg">*</span><span class="textfieldMinCharsMsg">Mínimo<br/> de caracteres</span></span>
                    <label>Repite contraseña
                    <span class="small">Contraseña requerida</span>
                    </label>
                    <span id="sprytextfield3">
                    <input type="password" name="pass2" id="pass2" />
                    <span class="textfieldRequiredMsg">*</span><span class="textfieldMinCharsMsg">Mínimo<br/> de caracteres</span></span>
                    <button type="submit">Enviar</button>
                    <div class="spacer"></div>
            
                  </form>
               </div>
		<div id="centrado">
      	  	</p>
        	
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
        
         <?php include("include/footer.php"); ?>
        
    </div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {minChars:4});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {minChars:4});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {minChars:4});
</script>
</body>
</html>