<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>

<head>
  <?php
  $texto    = isset($_POST['texto'])    ? $_POST['texto']     : "[Texto Não Informado]";
  $tamanho  = isset($_POST['tamanho'])  ? $_POST['tamanho']   : "72pt";
  $cor      = isset($_POST['cor'])      ? $_POST['cor']       : "#000";

  ?>
  <meta charset="utf-8">
  <title>Curso de PHP - Exercicio Aula 08</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet" />
  <style media="screen">
  span.texto {
    font-size: <?php echo $tamanho;
    ?>;
    color: <?php echo $cor;
    ?>
  }
  </style>
</head>

<body>
  <div class="container">
    <?php
    echo "<span class='texto'> $texto </span>";
    ?>

  </div>
</body>

</html>