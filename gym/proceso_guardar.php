<?php


 $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");
 $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query = "INSERT INTO usuario(IMAGEN_PERSONAL) VALUES('$imagen')";
$resultado =$connection->query($query);
if($resultado){
echo " si se inserto";
}
else{
echo "no se inserto";
echo $imagen;
}
?>