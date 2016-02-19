<?php
  session_start();
if (!isset($_SESSION["user"])) {
          header("location: Proyecto1.php");
          }
            $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");
        if ($result = $connection->query("SELECT * FROM plan join usuario on plan.FKDNI=usuario.DNI  WHERE                  nombre='".$_SESSION['user']."';")) {
              if ($result->num_rows===0) {
                if ($result2 = $connection->query("SELECT * FROM usuario WHERE nombre='".$_SESSION['user']."';")) {
                    if ($result2->num_rows===0){
                    echo "usuario inexistente";
                    } 
                else {
                      while($obj2 = $result2->fetch_object()) {
                     $datos['nombre']=$obj2->NOMBRE;
                     $datos['apellidos']=$obj2->APELLIDO;
                     $datos['pesoini']=$obj2->PESO;
                     $datos['dni']=$obj2->DNI;
                     $datos['fotousuario']=$obj2->IMAGEN_PERSONAL;
                     $datos['edad']=$obj2->EDAD;
                     $datos['alta']=$obj2->FECHA_ALTA;
                     $datos['correo']=$obj2->CORREO_ELECTRONICO;
                 }
                    }
                }
                
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
                     $datos['fotousuario']=$obj->IMAGEN_PERSONAL;
                     $datos['edad']=$obj->EDAD;
                     $datos['alta']=$obj->FECHA_ALTA;
                      $datos['correo']=$obj->CORREO_ELECTRONICO;
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
echo strtoupper($_SESSION['user']);
?>!
</h1>
    </div>
    <div class="cuadro2">
        <a href="cerrar.php"><img  class="botoncerrar" src="boton-cerrar-sesion.png"/></a>
    </div>
  </div>
  <div id="cuerpo">

    <div id="contenidofoto"><img id="fotousuario" src="<?php echo $datos['fotousuario'];?>" ></div> 
      <div id="contenidodatos">
          <p><span class="subrayado">DATOS PERSONALES:</span></p>
          <p>NOMBRE Y APELLIDOS: <?php echo $datos['nombre']." ".$datos['apellidos'];?></p>
          <p>DNI: <?php echo $datos['dni']?></p><p>EDAD <?php echo $datos['edad']?></p>
          <p>PESO: <?php echo $datos['pesoini'];?></p>
          <p>FECHA ALTA: <?php echo $datos['alta'];?></p>
            <p>CORREO ELECTRONICO : <?php echo $datos['correo'];?></p>
    </div>
      <?php 
    if (!isset($result2)){   
        echo "<div  id='contenidoplan'>";
           echo "<p><span class='subrayado'>ENTRENAMIENTO:</span></p>";
            echo "<p>PLAN ACTUAL:".$datos['planactual']."</p>";
            echo "<p>FECHA INICIO:".$datos['fechainicio']."</p>";
            echo "<p>FECHA FIN:".$datos['fechafin']."</p>";
            echo "<p>PESO (objetivo):".$datos['pesofin']."</p></br>";
    echo "<p><strong>IR AL ENTRENAMIENTO </strong><a href='entreno_usuario.php'><img id='logoentreno' src='../img/entreno.jpg'></a></p>";
    echo "</div>";
    }
    else{
     echo "<div  id='contenidoplan'>";
    echo "<p>El entrenador aun no te ha asignado ningun plan</p>";
    echo "</div>";
    }    
    ?>
            
        </div>
         
   
  </div>
  <div id="pie">

</div>




</body>
</html>
