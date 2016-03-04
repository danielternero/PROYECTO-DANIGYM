<?php
include_once("./configuraciondb.php");
 session_start();
if ($_SESSION['nivel']==1) {
             header('location: Proyecto1.php');
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
 	  $_SESSION['idejer']=$_GET['id'];
      $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
      $consulta=$connection->query("select * from conforma, ejercicios  WHERE conforma.FKID_EJERCICIO=ejercicios.ID_EJERCICIO and FKID_PLAN=".$_GET['idplan']." and FKID_EJERCICIO=".$_GET['idejer']."';");
     
    while($obj = $consulta->fetch_object()){
            
            
            
            $nombre=$obj->NOMBRE_EJER;
            $clasificacion=$obj->CLASIFICACION;
            $maquina=$obj->REQUIERE_MAQUINA;
            $enlace=$obj->ENLACE;
			
			
     }
if (isset($_POST['NOMBRE_EJER'])){
$connection->query("UPDATE ejercicios SET  NOMBRE_EJER = '".$_POST['NOMBRE_EJER']."', CLASIFICACION = '".$_POST['CLASIFICACION']."', REQUIERE_MAQUINA ='".$_POST['REQUIERE_MAQUINA']."', ENLACE = '".$_POST['ENLACE']."' where ejercicios.ID_EJERCICIO='".$_SESSION['idejer']."';");
unset( $_SESSION['idejer']);

header('Location: adminplan.php');
}

    ?>

<div id="contenedor">
  <div id="cabecera">
    <div class="cuadro1">
      <img  class="logo" src="Captura.png"/>
         <h1 class="welcome">EDITAR EJERCICIOS</h1>
    </div>
	  	<div class="cuadro2">
		   	<a href="adminejercicio.php"><img  class="botonsalir" src="salir.png"/></a>
	  	</div>
  </div>
  <div id="cuerpo">
<form method="post" enctype="multipart/form-data">
    <fieldset class="formulario">
        <legend><span class="subrayado">EJERCICIO </span></legend></br>
    
   
    Nombre:
    <input type="text" name="NOMBRE_EJER" required value="<?php echo $nombre; ?>"/></br></br>
    Clasificacion:
    <input type="text" name="CLASIFICACION" required value="<?php echo $clasificacion; ?>"/></br></br>
    Requiere Maquina:
    <input type="text" name="REQUIERE_MAQUINA" required value="<?php echo $maquina; ?>"/></br></br>
    Video:
    <input  name="ENLACE"  value="<?php echo $enlace; ?>"/></br></br>
<input type="submit" value="Cambiar" />
    </fieldset>
</form>

    </div>
  <div id="pie">

</div>
    
</body>
</html>