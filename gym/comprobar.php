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
      $consulta=$connection->query("select IMAGEN_PERSONAL from usuario where usuario.DNI=55555555P;");
   

	?>

	<tr>
	<td>
		<img src="data:image/jpg;base64,<?php echo base64_encode($consulta);?>"/>
		</td>
	</tr>
</body>
</html>
