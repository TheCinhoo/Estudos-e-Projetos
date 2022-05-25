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
    $numero  = $_POST['numero'];
    $escolha = $_POST['escolha'];

    switch ($escolha) {
      case 1:
        $resultado  = $numero * 2;
        $msg        = "O dobro";
        break;

      case 2:
        $resultado  = pow($numero, 3);
        $msg        = "O cubo";
        break;

      case 3:
        $resultado  = sqrt($numero);
        $msg        = "A raiz";
        break;

      default:
        echo "OPÇÃO INVÁLIDA";
        break;
    }

    echo "<h2>$msg de $numero é $resultado</h2>";
    ?>

  </div>
</body>

</html>