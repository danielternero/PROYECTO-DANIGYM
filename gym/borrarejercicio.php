<?php
   include_once("./configuraciondb.php");
   
    $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
    
    $connection->query("DELETE FROM ejercicios WHERE ejercicios.NOMBRE_EJER='".$_GET['id']."';");
   
     
        header("Location: adminejercicio.php");
         
          unset($obj);
          unset($connection);
    ?>