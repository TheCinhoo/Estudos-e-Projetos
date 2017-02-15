<!DOCTYPE html>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Curso de PHP - Aula 07</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <h2>Operadores de Relacionais</h2>
    <form class="" action="aula07.php" method="post">
      <div>
        <label class="col-xs-6">Valor 1 :</label>
        <input class="col-xs-6" type="number" name="n1">
      </div>
      <div>
        <label class="col-xs-6">Valor 2:</label>
        <input class="col-xs-6" type="number" name="n2">
      </div>
      <div>
        <label class="col-xs-6">Escolha a Operação</label>
        <input class="col-xs-6" type="text" name="escolha">
      </div>

      <div class="col-xs-12 botao">
        <input type="submit" class="btn btn-default" name="boton" value="Consultar">
      </div>
    </form>
  </div>

  <?php
    $n1       = $_POST['n1'];
    $n2       = $_POST['n2'];
    $escolha  = $_POST['escolha'];

    $r = ($escolha == "+")? $n1 + $n2: $n1 * $n2;


  ?>

  <div class="container">
    <div class="margin">
      <?php
        echo "Os Valores recebidos foram: $n1 $escolha $n2";
        echo " = $r";   
       ?>
    </div>
  </div>
</body>
</html>
