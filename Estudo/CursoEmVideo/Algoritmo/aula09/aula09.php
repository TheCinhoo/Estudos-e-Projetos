<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Estrutura de Repeticao</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

  <style>
  .content {
    max-width: 500px;
  }

  body {
    background-color: #BCD2EE;
  }

  .container {
    background-color: #EEE;
    text-align: center;
    margin: 50px auto;
    padding: auto;
    border: solid 0.01em #333;
    width: 450px;
    padding-bottom: 20px;
    box-shadow: 4px 4px 4px #888888;
    border-radius: 10px;
  }
  </style>

</head>

<body>
  <div class="container">
    <section class="content">
      <div class="form" role="form">
        <form class="formulario" name="formulario" method="post" action="controller.php">
          <h2>Estrutura de Repeticao</br></h2>
          <div>
            <h2>FOR</h2>
            <label class="col-xs-6">Inicio: </label>
            <input class="col-xs-6" type="text" id="inicio" name="inicio">
            <label class="col-xs-6">Fim: </label>
            <input class="col-xs-6" type="text" id="fim" name="fim">
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