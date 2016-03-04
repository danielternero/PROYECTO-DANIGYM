<?php
   include_once("./configuraciondb.php");
   
    $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
    
        
    $consulta=$connection->query("select ID_PLAN from plan where plan.FKDNI='".$_GET['id']."';");
     while($obj = $consulta->fetch_object()){
            
            $idplan=$obj->ID_PLAN;

     }
    $connection->query("DELETE FROM conforma WHERE conforma.FKID_PLAN='".$idplan."';");
    $connection->query("DELETE FROM plan WHERE plan.FKDNI='".$_GET['id']."';");
    $connection->query("DELETE FROM usuario WHERE usuario.DNI='".$_GET['id']."';");
   
     
        header("Location: adminusuario.php");
         
          unset($obj);
          unset($connection);
    ?>