<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Curso de PHP - Exercicio Aula 11</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <h2>While</h2>

      <?php
        $i = 1;
        while ($i <= 5) {
          $v = "num" . $i;
          $url = "v" . $i;
          $$v = isset($_POST[$url])?$_POST[$url] : 0;
          $i++;
        }
        $i = 1;
        while ($i <= 5) {
          $v = "num" . $i;
          echo "Valor $i : " . $$v . "<br/>";
          $i++;
        }
      ?>
    </div>
  </body>
</html>
