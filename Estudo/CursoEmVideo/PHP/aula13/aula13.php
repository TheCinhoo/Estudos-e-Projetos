<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Curso de PHP - Aula 13</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <h2>FOR</h2>
    <?php
    for ($i = 0; $i <= 10; $i++) {
      echo "$i ";
    }
    echo "<br />";
    for ($i = 10; $i >= 0; $i--) {
      echo "$i ";
    }
    echo "<br />";
    for ($i = 0; $i <= 20; $i += 2) {
      echo "$i ";
    }



    ?>
  </div>
</body>

</html>