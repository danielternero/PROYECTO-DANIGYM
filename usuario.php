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

  
    <?php

        if (!isset($_SESSION["user"])) {
          header("location: login.php");
          }
            $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");


        if ($result = $connection->query("SELECT * FROM plan join usuario on plan.FKDNI=usuario.DNI
            WHERE nombre='".$_SESSION['user']."';")) {

              if ($result->num_rows===0) {
                echo "NO TIENE PLAN ASIGNADO";
              } else {
                //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
                 while($obj = $result->fetch_object()) {
                echo "<table>";

                     echo "<tr><td>NOMBRE: ".$obj->NOMBRE."</td></tr>";
                      echo "<tr><td>APELLIDOS: ".$obj->APELLIDO."</td></tr>";
                     echo "<tr><td>FECHA DE INICIO: ".$obj->FECHA_INICIO."</td></tr>";
                     echo "<tr><td>FECHA FIN: ".$obj->FECHA_FIN."</td></tr>";
                     echo "<tr><td>PESO INICIO: ".$obj->PESO_INICIO."</td></tr>";
                     echo "<tr><td>PESO FIN: ".$obj->PESO_FIN."</td></tr>";
                     echo "<tr><td>TIPO DE PLAN: ".$obj->TIPO."</td></tr>";
                     echo "<tr><td>DNI: ".$obj->FKDNI."</td></tr>";

              echo "</table>";
                 }

              }
          } else {
            echo "Wrong Query";
            var_dump($result);
          }


?>
</body>
    </hmtl>
