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
    
      $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
?>   

<div id="contenedor">
  <div id="cabecera">
    <div class="cuadro1">
      <img  class="logo" src="captura.png"/>
         <h1 class="welcome">ZONA DE ADMINISTRACION</h1>
    </div>
  </div>
  <div id="cuerpo">
    
    <form method="post">
    
    <fieldset class="formulario">
    <legend ><span class="subrayado">ASIGNAR PLAN</span></legend></br>
    ID_PLAN:
    <input type="text" name="ID_PLAN"/></br></br>
    FECHA INICIO:
    <input type="date" name="FECHA_INICIO"/></br></br>
    FECHA FIN:
    <input type="date" name="FECHA_FIN"/></br></br>
    PESO INICIO:
    <input type="text" name="PESO_INICIO"/></br></br>
    PESO FIN:
    <input type="text" name="PESO_FIN"/></br></br>
    TIPO:
    <input type="text" name="TIPO"/></br></br>
    </fieldset>
    <fieldset class="formulario"></br>
    EJERCICIO:
    <input type="text" name="EJERCICIO" value=""></select></br></br>
    REPETICIONES:
    <input type="text" name="REPETICIONES"/></br></br>
    TIEMPO ESTIMADO:
    <input type="text" name="TIEMPO_ESTIMADO"/></br></br>
    SERIES:
    <input type="text" name="SERIES"/></br></br>
    DIA DE LA SEMANA:
    <input type="text" name="DIA_SEMANA"/></br></br>
    <input type="submit" value="enviar" />
    </fieldset>
    
</form>


    </div>
  <div id="pie">
    </div>

<?php  else: ?>
        <?php
        $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");
    if (isset($_POST['TIPO'])) {
        $idplan=$_POST["ID_PLAN"];
        $fechaini=$_POST["FECHA_INICIO"];
        $fechafin=$_POST["FECHA_FIN"];
        $pesoini=$_POST["PESO_INICIO"];
        $pesofin=$_POST["PESO_FIN"];
        $tipo=$_POST["TIPO"];
        $ejercicios=$_POST["EJERCICIO"];
        $repeticiones=$_POST["REPETICIONES"];
        $tiempo=$_POST["TIEMPO_ESTIMADO"];
        $series=$_POST["SERIES"];
        $diasemana=$_POST["DIA_SEMANA"];
   

$insert="INSERT INTO plan (`ID_PLAN`, `FECHA_INICIO`, `FECHA_FIN`, `PESO_INICIO`, `PESO_FIN`, `TIPO`, `FKDNI`) VALUES ('$idplan', '$fechaini', '$fechafin', '$pesoini', '$pesofin', '$tipo', '".$_GET['id']."')";

$insert2="INSERT INTO `conforma` (`FKID_PLAN`, `FKID_EJERCICIO`, `REPETICIONES`, `TIEMPO_ESTIMADO`, `SERIES`, `DIA_SEMANA`) VALUES ('$idplan', '$ejercicios', '$repeticiones', '$tiempo', '$series', '$diasemana')";

$connection->query( $insert );
$connection->query( $insert2 );
 $insert;
//header('Location: Proyecto1.php');
         }
   ?>

        <?php endif ?>
    
    
</body>
</html>