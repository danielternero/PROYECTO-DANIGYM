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
    <link rel="stylesheet" type="text/css" href="usuario.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600' rel='stylesheet' type='text/css'>
    


  </head>
<body>
<?php
        if (!isset($_SESSION["user"])) {
          header("location: proyecto1.php");
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
<div id="contenedor">
  <div id="cabecera">
    <div class="cuadro1">
      <img  class="logo" src="captura.png"/>
      <h1 class="welcome">NOMBRE <?php
 //while($obj2 = $result->fetch_object()) {
//echo "<p>NOMBRE: ".$obj2->NOMBRE."</p>";
// }
echo strtoupper($_SESSION['user']);
?>
</h1>
    </div>
    <div class="cuadro2">
        <a href="cerrar.php"><img  class="botoncerrar" src="boton-cerrar-sesion.png"/></a>
    </div>
  </div>
  <div id="cuerpo">
  </div>
  <div id="pie">
  <div>
</div>




</body>
</html>
