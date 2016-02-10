<?php
  session_start();
if (!isset($_SESSION["user"])) {
          header("location: Proyecto1.php");
          }
            $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");
        if ($result = $connection->query("SELECT * FROM plan join usuario on plan.FKDNI=usuario.DNI join conforma on plan.ID_PLAN=conforma.FKID_PLAN join ejercicios on conforma.FKID_EJERCICIO=ejercicios.ID_EJERCICIO join instalaciones on ejercicios.FKID_INSTALACION=instalaciones.ID_INSTALACION WHERE nombre='".$_SESSION['user']."';")) {
              if ($result->num_rows===0) {
                echo "NO TIENE PLAN ASIGNADO";
              } else {
                //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
                 while($obj = $result->fetch_object()) {
               /* echo "<table>";
                     echo "<tr><td>NOMBRE: ".$obj->NOMBRE."</td></tr>";
                      echo "<tr><td>APELLIDOS: ".$obj->APELLIDO."</td></tr>";
                     echo "<tr><td>FECHA DE INICIO: ".$obj->FECHA_INICIO."</td></tr>";
                     echo "<tr><td>FECHA FIN: ".$obj->FECHA_FIN."</td></tr>";
                     echo "<tr><td>PESO INICIO: ".$obj->PESO_INICIO."</td></tr>";
                     echo "<tr><td>PESO FIN: ".$obj->PESO_FIN."</td></tr>";
                     echo "<tr><td>TIPO DE PLAN: ".$obj->TIPO."</td></tr>";
                     echo "<tr><td>DNI: ".$obj->FKDNI."</td></tr>";
              echo "</table>"; */
                     $datos['nombre']=$obj->NOMBRE;
                     $datos['apellidos']=$obj->APELLIDO;
                     $datos['fechainicio']=$obj->FECHA_INICIO;
                     $datos['fechafin']=$obj->FECHA_FIN;
                     $datos['pesoini']=$obj->PESO_INICIO;
                     $datos['pesofin']=$obj->PESO_FIN;
                     $datos['plan']=$obj->TIPO;
                     $datos['dni']=$obj->FKDNI;
                     $datos['planactual']=$obj->TIPO;
                 }
              }
          } else {
            echo "Wrong Query";
            var_dump($result);
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
<?php
        
?>
<div id="contenedor">
  <div id="cabecera">
    <div class="cuadro1">
      <img  class="logo" src="captura.png"/>
      <h1 class="welcome">¡HOLA <?php
 //while($obj2 = $result->fetch_object()) {
//echo "<p>NOMBRE: ".$obj2->NOMBRE."</p>";
// }
echo strtoupper($_SESSION['user']);
?>!
</h1>
    </div>
    <div class="cuadro2">
        <a href="cerrar.php"><img  class="botoncerrar" src="boton-cerrar-sesion.png"/></a>
    </div>
  </div>
  <div id="cuerpo">
   <ul>
    <li>Plan Actual: <?php echo $datos['planactual'];?></li>
    <li>Fecha Inicio: <?php echo $datos['fechainicio'];?></li></li>
    <li>Fecha Fin: <?php echo $datos['fechafin'];?></li></li>
    <li>Peso :<?php echo $datos['pesoini'];?></li></li>
    <li>Peso (objetivo):<?php echo $datos['pesofin'];?></li></li>
    
      
    </ul>
     
  </div>
  <div id="pie">
            <?php
    echo $datos['apellidos'];
?>
</div>




</body>
</html>
