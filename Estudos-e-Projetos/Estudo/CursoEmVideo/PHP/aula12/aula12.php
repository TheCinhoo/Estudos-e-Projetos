<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 12 - Curso de PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <h2>DO WHILE</h2>
      <form action="controller.php" method="post">
        Valor: <input type="number" name="val"/>
        <input type="submit" class="btn btn-default" value="Fatorial"/>
      </form>
    </div>
  </body>
</html>
