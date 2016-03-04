<?php
   include_once("./configuraciondb.php");
   
    $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
    
    $connection->query("DELETE FROM instalaciones WHERE instalaciones.SALA='".$_GET['id']."';");
   
     
        header("Location: admininstalacion.php");
         
          unset($obj);
          unset($connection);
    ?>