<!DOCTYPE html>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>

<head>
  <meta charset="utf-8">
  <title>Curso de PHP - Aula 08</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <h2>Interação com HTML</h2>
    <form action="controller.php" method="post">
      <div>
        <label class="col-xs-6">Nome:</label>
        <input class="col-xs-6" type="text" name="nome">
      </div>
      <div>
        <label class="col-xs-6">Ano de Nascimento:</label>
        <input class="col-xs-6" type="text" name="nascimento" />
      </div>
      <fildset>
        <legend>Sexo</legend>
        <label for="masc" class="col-xs-2">Masculino:</label>
        <input class="col-xs-2" type="radio" name="sexo" id="masc" value="homem" checked>
        <label for="fem" class="col-xs-2">Feminino:</label>
        <input class="col-xs-2" type="radio" name="sexo" id="fem" value="mulher">
      </fildset>
      <div class="col-xs-12 botao">
        <input type="submit" class="btn btn-default" name="boton" value="Enviar">
      </div>
    </form>
  </div>
</body>

</html>