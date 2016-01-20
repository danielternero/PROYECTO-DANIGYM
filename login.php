
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>

  <form action="login.php" method="post">

      <p><input name="user" required></p>
      <p><input name="password" type="password" required></p>
      <p><input type="submit" value="ENVIAR"></p>

    </form>

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
