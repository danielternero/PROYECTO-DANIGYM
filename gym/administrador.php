<?php
 
            $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");
        if ($result = $connection->query("SELECT * FROM usuario where NIVEL_DE_USUARIO=1;")) {
              if ($result->num_rows===0) {
              echo "No hay ningun usuario";
              }
            else {
            $x=0;
            while($obj = $result->fetch_object()){
            
            $usuario[$x]=$obj->NOMBRE;
            $dni[$x]=$obj->DNI;
            $x++;
            
                }
            }
        }
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
    
<div id="contenedor">
  <div id="cabecera">
    <div class="cuadro1">
      <img  class="logo" src="captura.png"/>
         <h1 class="welcome">ZONA DE ADMINISTRACION</h1>
    </div>
  </div>
  <div id="cuerpo">
        <table class="tableentreno">  
        <tr>
            <td>ELIMINAR USUARIO</td>
            <td>USUARIOS</td>
            <td>ASIGNAR PLAN</td>
            <td>BORRAR PLAN</td>
        </tr>
<?php
        for($y=0;$y<sizeof($usuario);$y++){
        echo "<tr>";
        echo "<td><a href='borrar.php?id=$dni[$y]'><img class='logoeliminar' src='../img/eliminar.jpg'></a></td>";
        echo "<td>".$usuario[$y]."</td>";
        echo "</tr>";
        }
        ?>
      </table>  
    </div>
  <div id="pie">

</div>
</body>
</html>