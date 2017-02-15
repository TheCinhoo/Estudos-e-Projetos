<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Aula 11</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="http://localhost/Estudo/CursoEmVideo/css/estilo.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <section class = "content">
      <div class="form" role="form">
        <form class="formulario" name="formulario" method="post" action="controller.php">
          <h2>FIBONACCI</br></h2>
          <div>
            <h2>Sequncia Fibonacci</h2>
            <label class="col-xs-6">Contar Ate: </label>
            <input class="col-xs-6" type="number" id="contador" name="contador">
          </div>
          <br><br>
          <div class="col-xs-12">
            <input type="reset" class="btn btn-default btn-sm" name="boton" value="Reset">
            <input type="submit" class="btn btn-default btn-sm" id="submit" name="boton" value="Consultar">
          </div>
        </form>
      </div>
    </section>
  </div>
</body>
