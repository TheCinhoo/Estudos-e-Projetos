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
      <h2>Tabuada</h2>
      <form action="controllerExercicio.php" method="post">
        <div>
          <label class="col-xs-6">Tabuada:</label>
          <select class="col-xs-6" name="tabuada" >
            <option value="1" selected>1</option>
            <?php
              $a = 1;
              while ($a < 10) {
                $a++;
                echo "<option value='$a'>$a</option>";
              }
            ?>
          </select>
        </div>

        <input type="submit" name="submit" class="btn btn-default"value="ENVIAR">
      </form>
    </div>
  </body>
</html>
