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
      <h2>Contador</h2>
      <form action="exercicioController.php" method="post">
        <div>
          <label class="col-xs-6">Inicio:</label>
          <input class="col-xs-6" type="number" name="inicio" value="0">
        </div>
        <div>
          <label class="col-xs-6">Fim:</label>
          <input class="col-xs-6" type="number" name="fim" value="0">
        </div>
        <div>
          <label class="col-xs-6">Encremento:</label>
          <select class="col-xs-6" name="encremento">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>

        <input type="submit" name="submit" class="btn btn-default"value="ENVIAR">
      </form>
    </div>
  </body>
</html>
