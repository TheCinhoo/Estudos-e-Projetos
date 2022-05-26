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
      <form action="controller.php" method="post">
        <?php
        $a = 1;
        while ($a <= 5) {
          echo "
          <div class='while'>
            <label>Valor $a:</label>
            <input type='number' name='v$a' max='100' min='0' value='0'>
          </div>";
          $a++;
        }


        ?>
        <input type="submit" name="submit" class="btn btn-default"value="ENVIAR">
      </form>
    </div>
  </body>
</html>
