<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="proyecto1.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $(".planes").hide();
    $("#planboton").click(function(){
          $(".planes").toggle();
    });
});

</script>
  </head>
<body>
<div id="contenedor">
    <div id="cabecera">
        <div class="cuadro1">
        <img class="logo" src="Captura.png"/>
            <ul>
            <li class="lista1" id="planboton">PLAN</li>
            <li class="lista1">INSTALACIONES</li>
            </ul>


        </div>
        <div class="cuadro2">
        <img class="botoninicio" src="boton-inicio-sesion.png"/>
        </div>
    </div>
    <div id="carrusel">
      <div class="planes">
        <ul>
          <li>AUMENTO MASA MUSCULAR</li>
          <li>DEFINICION</li>
          <li>PERDIDA DE PESO</li>
          <li>ACONDICIONAMIENTO</li>
        </ul>
      </div>
    </div>
</div>
</body>
</html>
