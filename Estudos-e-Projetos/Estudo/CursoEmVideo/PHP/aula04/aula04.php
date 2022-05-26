<!DOCTYPE html>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Curso de PHP - Aula 04</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <h2>Variáveis</h2>
    <form class="formulario" action="controller.php" method="post">
      <?php
        $n    = 04;
        $nome = "Fabrício";
        echo $nome. " " .$n. "<br />";
        echo "$nome tem $n anos!"
      ?>

    </form>
  </div>
</body>
</html>
