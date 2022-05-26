<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Curso de PHP - Exercicio Aula 08</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <form action="controller.php" method="post">
        <input class="form-control" type="number" name="numero" placeholder="NUMERO"><br>
        <fieldset>
          <legend>Escolha</legend>
          <div class="col-xs-4">
            <label for="dobro">Dobro</label>
            <input type="radio" name="escolha" id="dobro" value="1" checked="">
          </div>
          <div class="col-xs-4">
            <label for="cubo">Cubo</label>
            <input type="radio" name="escolha" id="cubo" value="2">
          </div>
          <div class="col-xs-4">
            <label for="raiz">Raiz</label>
            <input type="radio" name="escolha" id="raiz" value="3">
          </div>
        </fieldset>
        <input type="submit" name="submit" class="btn btn-default"value="ENVIAR">
      </form>
    </div>
  </body>
</html>
