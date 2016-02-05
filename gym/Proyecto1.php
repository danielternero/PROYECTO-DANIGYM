<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="libreria/jquery-2.2.0.min.js"></script>
    <script src="libreria/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="proyecto1.css"/>
    <script rel="stylesheet" href="libreria/jquery-ui.css"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600' rel='stylesheet' type='text/css'>
   
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

  $("#botoninicio").click( function() {
      $("#dialog").dialog();
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
        <img id="botoninicio" src="boton-inicio-sesion.png"/>
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
<div id="dialog" style="display:none">
  <form action="Proyecto1.php" method="post" class="login">
  <table border="0">
    <tr>
      <td>USUARIO:  </td>
      <td><input type="text" name="user"  required></td>
    </tr>
    <tr>
      <td>CONTRASEÑA:  </td>
      <td><input type="password" name="password"  required></td>
    </tr>
    <tr>
      <td colspan="2"><input type=submit value="Entrar" id="enviar"></td>
    </tr>
  </table>
  </form>
</div>
 
  </div>

    <?php

        if (isset($_POST["user"])) {

          $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $query = $connection->prepare("SELECT * FROM usuario
            WHERE nombre=? AND contrasena=md5(?)");
        


          $query->bind_param("ss",$_POST["user"],$_POST["password"]);

          if ($query->execute()) {

              $query->store_result();
              
              if ($query->num_rows===0) {
                echo "LOGIN INVALIDO";
              } else {

                $_SESSION["user"]=$_POST["user"];
                $_SESSION["language"]="es";

                header("Location: usuario.php");
              }
          } else {
            echo "Wrong Query";
            var_dump($consulta);
          }
      }
    ?>

</body>
</html>
