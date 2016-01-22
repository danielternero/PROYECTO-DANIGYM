
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
    <link rel="stylesheet" type="text/css" href="proyecto.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600' rel='stylesheet' type='text/css'>



  </head>
  <body>
<div id="contenedor">
<div class="cabecera">
  <div class="logo"><img src="logo.jpg" alt="" /></div>
    <ul><li class="c1"><p>PLAN</p></li>
  <li class="c1"><p>INSTALACIONES</p></li></ul>

  <form class="for" action="login.php" method="post">

      <p>USUARIO<input name="user" required></p>
      <p>CONTRASEÑA<input name="password" type="password" required></p>
      <p><input type="submit" value="ENVIAR"></p>

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

              if ($query->affected_rows===0) {
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
