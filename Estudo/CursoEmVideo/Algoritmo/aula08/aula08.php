<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Condicionais - Aninhadas</title>
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
          <h2>CONDICIONAIS</br></h2>

          <div>
            <h2>Nota Final</h2>
            <label class="col-xs-6">Nota 1: </label>
            <input class="col-xs-6" type="text" id="n1" name="n1">
            <label class="col-xs-6">Nota 2: </label>
            <input class="col-xs-6" type="text" id="n2" name="n2">
          </div>
          <br><br>

          <div>
            <h2>Calculo IMC com ELSEIF</h2>
            <label class="col-xs-6">Massa: </label>
            <input class="col-xs-6" type="number" name="massa" ip="massa">
            <label class="col-xs-6">Altura: </label>
            <input class="col-xs-6" type="text" name="altura" ip="altura">
          </div>

          <div>
            <p>[1] - Para doar R$ 10</p>
            <p>[2] - Para doar R$ 25</p>
            <p>[3] - Para doar R$ 50</p>
            <p>[4] - Para doar Outros Valores</p>
            <p>[5] - Para cancelar</p>
            <input type="number" name="doar" id="doar">
          </div>

          <div class="col-xs-12">
            <input type="reset" class="btn btn-default btn-sm" name="boton" value="Reset">
            <input type="submit" class="btn btn-default btn-sm" id="submit" name="boton" value="Consultar">
          </div>
        </form>
      </div>
    </section>
  </div>
</body>