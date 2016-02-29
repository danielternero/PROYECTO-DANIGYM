<?php
include_once("./configuraciondb.php");
if (isset($_SESSION['id'])){
unset($_SESSION['id']);						  
}
 session_start();
if ($_SESSION["nivel"]==1) {
            
            header("location: Proyecto1.php");
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

	$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
 	$_SESSION['id']=$_GET['id'];

if (isset($_POST['EJERCICIO'])){
		
     	$tipo=$_POST["TIPO"];
        $ejercicios=$_POST["EJERCICIO"];
        $repeticiones=$_POST["REPETICIONES"];
        $tiempo=$_POST["TIEMPO_ESTIMADO"];
        $series=$_POST["SERIES"];
        $diasemana=$_POST["DIA_SEMANA"];
  


$insert2="INSERT INTO `conforma` (`FKID_PLAN`, `FKID_EJERCICIO`, `REPETICIONES`, `TIEMPO_ESTIMADO`, `SERIES`, `DIA_SEMANA`) VALUES ('".$_SESSION['id']."', '$ejercicios', '$repeticiones', '$tiempo', '$series', '$diasemana')";

$connection->query( $insert2 );


header('Location: administrador.php');
}

    ?>

<div id="contenedor">
  <div id="cabecera">
    	<div class="cuadro1">
      		<img  class="logo" src="captura.png"/>
         	<h1 class="welcome">ASIGNAR PLAN</h1>
		</div>
	  	<div class="cuadro2">
		   	<a href="cerrar2.php"><img  class="botonsalir" src="salir.png"/></a>
	  	</div>
  </div>
  <div id="cuerpo">
<form method="post">
    
    <fieldset class="formulario">
		<legend><span class="subrayado">INCLUIR EJERCICIOS</span></legend>
    EJERCICIO:<?php
    echo "<select name='EJERCICIO'>";
	
	$consulta2=$connection->query("select * from ejercicios;");
	  while($obj2 = $consulta2->fetch_object()){
	echo "<option value='".$obj2->ID_EJERCICIO."'>".$obj2->NOMBRE_EJER."</option>"; 
	}
	echo "</select></br></br>";
		?>
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
    
</body>
</html>