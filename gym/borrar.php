<?php
   
   
    $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");
    
        
    $consulta=$connection->query("select ID_PLAN from plan where plan.FKDNI='".$_GET['id']."';");
     while($obj = $consulta->fetch_object()){
            
            $idplan=$obj->ID_PLAN;

     }
    $connection->query("DELETE FROM conforma WHERE conforma.FKID_PLAN='".$idplan."';");
    $connection->query("DELETE FROM plan WHERE plan.FKDNI='".$_GET['id']."';");
    $connection->query("DELETE FROM usuario WHERE usuario.DNI='".$_GET['id']."';");
   
     
        header("Location: administrador.php");
         
          unset($obj);
          unset($connection);
    ?>