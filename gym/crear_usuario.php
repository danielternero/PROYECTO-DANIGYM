<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="usuario.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600' rel='stylesheet' type='text/css'>
    


  </head>
<body>
<?php
        
?>
<div id="contenedor">
  <div id="cabecera">
    <div class="cuadro1">
      <img  class="logo" src="captura.png"/>
    
    </div>
    <div class="cuadro2">
        
    </div>
  </div>
  <div id="cuerpo">
<form>
    Nombre de usuario:
  <input type="text" name="nombre"  /></br></br>
    Apellidos:
    <input type="text" name="apellidos"  /></br></br>
    Dni:
    <input type="text" name="dni" maxlength="9" /></br></br>
    Edad:
    <input type="number" name="edad" /></br></br>
    Peso:   
    <input type="number" name="peso"  /></br></br>
    Enfermedad:
<textarea  name="enfermedad" placeholder="Indique si padece alguna enfermedad" /></textarea></br></br>
    Correo electronico:
    <input type="email" name="email"  /></br></br>
    Contraseña:
    <input type="password" name="contrasena"  /></br></br>
    
  <br/>
 
  <input type="submit" value="Enviar" />
</form>

    </div>
  <div id="pie">

</div>




</body>
</html>