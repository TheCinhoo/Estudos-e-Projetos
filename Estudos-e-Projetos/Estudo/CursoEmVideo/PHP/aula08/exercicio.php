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
      <form action="exercicioController.php" method="post">
        <label for="texto">Texto:</label>
        <input type="text" name="texto" id="texto" value=""><br>
        <label for="tamanho">Tamanho</label>
        <select name="tamanho" id="tamanho">
          <option value="8pt">8</option>
          <option value="10pt">10</option>
          <option value="12pt">12</option>
          <option value="16pt">16</option>
          <option value="20pt">20</option>
        </select><br>
        <label for="cor">Cor:</label>
        <input type="color" name="cor" id="cor"><br>
        <input type="submit" value="Gerar">
      </form>
    </div>
  </body>
</html>
