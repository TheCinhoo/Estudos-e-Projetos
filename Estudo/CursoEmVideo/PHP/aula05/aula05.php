<!DOCTYPE html>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>

<head>
  <meta charset="utf-8">
  <title>Curso de PHP - Aula 05</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <h2>Operações Aritméticas</h2>
  </div>

  <div class="container">
    <?php
    $n1    = $_GET['a'];
    $n2    = $_GET['b'];
    $media = ($n1 + $n2) / 2;
    echo "<div class='margin'>";
    echo "<h4> Soma:          " . ($n1 + $n2) . " </h4>";
    echo "<h4> Subtração:     " . ($n1 - $n2) . " </h4>";
    echo "<h4> Multiplicação: " . ($n1 * $n2) . " </h4>";
    echo "<h4> Divisão:       " . ($n1 / $n2) . " </h4>";
    echo "<h4> Modulo:        " . ($n1 % $n2) . " </h4>";
    echo "<h4> Média:         " . $media . "</h4>";
    echo "</div>";
    ?>
  </div>
</body>

</html>