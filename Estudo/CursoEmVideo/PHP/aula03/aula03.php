<!DOCTYPE html>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Curso de PHP - Aula 03</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <h2>Olá Mundo PHP</h2>
    <form class="formulario" action="controller.php" method="post">
      <?php echo "Olá Mundo"; ?>

      <div class="col-xs-12">
        <input type="reset" class="btn btn-default btn-sm" name="boton" value="Reset">
        <input type="submit" class="btn btn-default btn-sm" id="submit" name="boton" value="Consultar">
      </div>
    </form>
  </div>
</body>
</html>
