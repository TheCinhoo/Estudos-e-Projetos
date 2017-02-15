<!DOCTYPE html>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Curso de PHP - Aula 06</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <h2>Operadores de Atribuição</h2>
    <form class="" action="aula06.php" method="post">
      <div>
        <label class="col-xs-6">Valor:</label>
        <input class="col-xs-6" type="number" name="valor">
      </div>

      <div class="col-xs-12 botao">
        <input type="submit" class="btn btn-default" name="boton" value="Consultar">
      </div>
    </form>
  </div>
  <?php
    $valor = $_POST['valor'];
    $total = $valor - ($valor * 0.1);
    $total = number_format($total, 2, ',', ".");
    $valor = number_format($valor, 2, ",", ".");
    if ($valor != "") {

  ?>

  <div class="container">
    <?php
      echo "<div class='margin'>";
      echo "<p>O Valor sem desconto é de R$:   $valor</p>";
      echo "<p>O Valor com desconto de 10% é de R$: $total </p>";

      echo "</div>";
    ?>
  </div>
  <?php } ?>
</body>
</html>
