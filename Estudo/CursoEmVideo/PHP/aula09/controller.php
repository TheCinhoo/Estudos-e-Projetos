<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Curso de PHP - Exercicio Aula 08</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet" />
</head>

<body>
  <div class="container">

    <?php
    $nome       = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $idade      = date("Y") - $nascimento;
    if ($idade < 16) {
      $tipoVoto = "Não vota";
      $dirigir  = "Não dirige";
    } elseif ($idade >= 16 || $idade < 18) {
      $tipoVoto = "Voto opcional";
      $dirigir  = "Não dirige";
    } else {
      $tipoVoto = "Voto Obrigatório";
      $dirigir  = "Pode dirigir";
    }
    echo "<h2>Olá $nome você tem $idade e $tipoVoto e tambem $dirigir</h2>";
    ?>

  </div>
</body>

</html>