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



<div id="contenedor">
  <div id="cabecera">
    <div class="cuadro1">
      <img  class="logo" src="captura.png"/>
         <h1 class="welcome">ZONA DE ADMINISTRACION</h1>
    </div>
  </div>
  <div id="cuerpo">
    
    <form method="post">
    
    <fieldset class="formulario">
    <legend ><span class="subrayado">AÑADIR PLAN</span></legend></br>
    ID_PLAN:
    <input type="text" name=""/></br></br>
    FECHA INICIO:
    <input type="date" name=""/></br></br>
    FECHA FIN:
    <input type="date" name=""/></br></br>
    P:
    <input type="date" name=""/></br></br>
    <select name="USUARIO"></select></br></br>
    
    Contraseña:
    <input type="password" name="CONTRASENA"  /></br></br>
    Imagen personal (url):
    <input type="text" name="IMAGEN_PERSONAL"  /></br></br>
<input type="submit" value="Crear" />
    </fieldset>
    
</form>

    </div>
  <div id="pie">
    </div>
     
    
</body>
</html>