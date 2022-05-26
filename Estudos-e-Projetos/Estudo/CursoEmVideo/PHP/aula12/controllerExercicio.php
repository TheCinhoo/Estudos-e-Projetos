<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Curso de PHP - Exercicio Aula 12</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <?php

      $tabuada = $_POST['tabuada'];
      $a = 0;
      echo "<h2>Tabuada de $tabuada</h2>";
      do {
        $i = $a*$tabuada;
        echo "$tabuada x $a = $i <br />";
        $a++;
      } while ($a <= 10);



      ?>
    </div>
  </body>
</html>
