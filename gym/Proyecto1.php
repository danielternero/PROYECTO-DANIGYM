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
          $(".instalaciones").hide();
    });
    $(".instalaciones").hide();
  $("#planboton2").click(function(){
        $(".instalaciones").toggle();
        $(".planes").hide();
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
            <li class="lista1" id="planboton2">HORARIO DE APERTURA</li>
            </ul>


        </div>
        <div class="cuadro2">
        <img class="botoninicio" src="boton-inicio-sesion.png"/>
        </div>
    </div>
    <div id="carrusel">
      <div class="planes">
        <ul>
          <li><span class="subrayado">AUMENTO MASA MUSCULAR</span></br>Entrenamiento cuyo objetivo es ganar masa muscular entrenando
          con una alta carga, para lograr que los musculos aumenten.</li>
          <li><span class="subrayado">DEFINICION</span></br>Entramiento cuyo objetico es definir la musculatura, trabajando con una carga media
          y con un numero de repeticiones especifico.</li>
          <li><span class="subrayado">PERDIDA DE PESO</span></br>Entrenamiento basado en la perdida de peso o "grasa", cuyos principales
            ejercicios se centran en actividades cardiovasculares. </li>
          <li><span class="subrayado">ACONDICIONAMIENTO</span></br>Se centra en el bienestar a nivel fisico y de salud, con ello mejoramos nuestra forma fisica.
           </li>
        </ul>
      </div>
      <div class="instalaciones">
      <ul>
        <li><span class="subrayado">Sala Fitness</span></br></li>
        <li><span class="subrayado">Piscina</span></br></li>
        <li><span class="subrayado">Actividades Dirigidas</span></br></li>
        <li><span class="subrayado">Cardio</span></br></li>
        <li><span class="subrayado">Pista de Atletismo</span></br></li>
      <ul>
    </div>
</div>
</body>
</html>
