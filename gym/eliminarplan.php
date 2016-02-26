<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head><body>
<?php
   
   
    $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");
    $dni=$_GET['id'];
        
    $consulta=$connection->query("select ID_PLAN from plan where plan.FKDNI='".$_GET['id']."';");
     while($obj = $consulta->fetch_object()){
            
            $idplan=$obj->ID_PLAN;

         
     }
    $connection->query("DELETE  FROM conforma WHERE conforma.FKID_PLAN='".$idplan."';");
    $connection->query("DELETE  FROM plan WHERE plan.FKDNI='".$dni."';");

    header("Location: administrador.php");
         
          unset($obj);
          unset($connection);
    ?>
    </body>
</html>