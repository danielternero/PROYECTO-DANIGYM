<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="libreria/jquery-2.2.0.min.js"></script>
    <script src="libreria/jquery-ui.js"></script>

      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
       <link rel="stylesheet" href="libreria/jquery-ui.css">

    <link rel="stylesheet" type="text/css" href="proyecto1.css"/>
    <script rel="stylesheet" href="libreria/jquery-ui.css"></script>
      <script type="text/javascript" src="libreria/jssor.slider.mini.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600' rel='stylesheet' type='text/css'>

    <script>
    $(document).ready(function(){
      $(".planes").hide();
    $("#planboton").click(function(){
          $(".planes").fadeToggle(500);
          $(".instalaciones").hide();
    });
    $(".instalaciones").hide();
  $("#planboton2").click(function(){
        $(".instalaciones").fadeToggle(500);
        $(".planes").hide();
  });

  $("#botoninicio").click( function() {
      $("#dialog").dialog();
  });
// -------------------------AQUI VA EL SCRIPT DEL CARRUSEL DEPORRRTIVOOOO ------------------ //
        
         var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},{b:11000,d:500,c:{x:-87.50,t:87.50}}],
              [{b:0,d:600,x:410,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 2000,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //   ---------------------AQUI ACABA EL SCRIPT DEL CARRUSEL --------------- //
});


</script>
  </head>
<body>
<div id="contenedor">
    <div id="cabecera">
        <div class="cuadro1">
        <img class="logo" src="Captura.png"/>
            <ul>
            <li class="lista1" id="planboton">PLAN</li>
            <li class="lista1" id="planboton2">HORARIO DE APERTURA</li>
            </ul>


        </div>
        <div class="cuadro2">
        <img id="botoninicio" src="boton-inicio-sesion.png"/>
        </div>
    </div>
    <div id="carrusel">
      <div class="planes">
        <ul>
          <li><p><span class="subrayado">AUMENTO MASA MUSCULAR</span></p></br>Entrenamiento cuyo objetivo es ganar masa muscular entrenando
          con una alta carga, para lograr que los musculos aumenten.</li>
          <li><p><span class="subrayado">DEFINICION</span></p></br>Entramiento cuyo objetico es definir la musculatura, trabajando con una carga media
          y con un numero de repeticiones especifico.</li>
          <li><p><span class="subrayado">PERDIDA DE PESO</span></p></br>Entrenamiento basado en la perdida de peso o "grasa", cuyos principales
            ejercicios se centran en actividades cardiovasculares. </li>
          <li><p><span class="subrayado">ACONDICIONAMIENTO</span></p></br>Se centra en el bienestar a nivel fisico y de salud, con ello mejoramos nuestra forma fisica.
           </li>
        </ul>
      </div>
      <div class="instalaciones">
      <ul>
        <li><span class="subrayado">Sala Fitness</span></br></li>
        <li><span class="subrayado">Piscina</span></br></li>
        <li><span class="subrayado">Actividades Dirigidas</span></br></li>
        <li><span class="subrayado">Cardio</span></br></li>
        <li><span class="subrayado">Pista de Atletismo</span></br></li>
      <ul>
    </div>
<!-- -------------------------AQUI EMPIEZA EL CARRUSEL ----------------------------- -->
<div id="carrusel_automatico">
    <div id="jssor_1" style="float: left; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
      <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;margin-left: 250px;">
      <div data-p="112.50" style="display: none;">
        <img data-u="image" src="../img/instalaciones/actividadesdirigidas.jpg" />
    </div>
    <div data-p="112.50" style="display: none;">
      <img data-u="image" src="../img/007.jpg" />
    </div>
    <div data-p="112.50" style="display: none;">
      <img data-u="image" src="../img/003.jpg" />
    </div>
    <div data-p="112.50" style="display: none;">
      <img data-u="image" src="../img/004.jpg" />
    </div>
    <div data-p="112.50" style="display: none;">
      <img data-u="image" src="../img/005.jpg" />
    </div>

</div>


<!-- Arrow Navigator -->
<span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"><img src="../img/izquierda.png"></span>
<span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"><img src="../img/derecha.png"></span>
</div>
</div>
<!-- -------------------------AQUI ACABA EL CARRUSEL ----------------------------- -->



</div>


 <div id="dialog" title="INICIAR SESIÓN" style="display:none">
  <form action="Proyecto1.php" method="post" class="login">
  <table border="0">
    <tr>
      <td>USUARIO:  </td>
      <td><input type="text" name="user" maxlength="10" size="10" required></td>
    </tr>
    <tr>
      <td>CONTRASEÑA:  </td>
      <td><input type="password" name="password"  maxlength="10" size="10" required></td>
    </tr>
    <tr>
      <td colspan="2"><input type=submit value="Entrar" id="enviar"></td>
    </tr>
  </table>
  </form>
</div>

  </div>

    <?php

        if (isset($_POST["user"])) {

          $connection = new mysqli("localhost", "gymadmin", "vasygym", "danigym");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $query = $connection->prepare("SELECT * FROM usuario
            WHERE nombre=? AND contrasena=md5(?)");



          $query->bind_param("ss",$_POST["user"],$_POST["password"]);

          if ($query->execute()) {

              $query->store_result();

              if ($query->num_rows===0) {
                echo "LOGIN INVALIDO";
              } else {

                $_SESSION["user"]=$_POST["user"];
                $_SESSION["language"]="es";

                header("Location: usuario.php");
              }
          } else {
            echo "Wrong Query";
            var_dump($consulta);
          }
      }
    ?>

</body>
</html>
