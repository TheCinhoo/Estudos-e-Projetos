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
    <?php
    header("Content-type: text/html; charset=utf-8");
    $nome       = isset($_POST['nome'])       ? $_POST['nome']       : "[Não Informado]";
    $nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : "[Não Informado]";
    $sexo       = isset($_POST['sexo'])       ? $_POST['sexo']       : "[Não Informado]";
    $idade      = date("Y") - $nascimento;

    echo "$nome é $sexo e tem $idade anos";
    ?>
    <br />

    <a href="aula08.php" class="btn btn-default">Voltar</a>
  </div>
</body>

</html>