<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Condicionais</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

  <style>
  .content {
    max-width: 500px;
  }

  body {
    background-color: #DDD;
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
            <label class="col-xs-6">Dinheiro viagem: </label>
            <input class="col-xs-6" type="text" id="dinheiro" name="dinheiro">
          </div>
          <br><br>
          <div>
            <label class="col-xs-6">Imapar ou Par: </label>
            <input class="col-xs-6" type="text" id="numero" name="numero">
          </div>
          <br><br>
          <div>
            <h2>IMC</h2>
            <label class="col-xs-6">Peso: </label>
            <input class="col-xs-6" type="text" id="peso" name="peso">
            <label class="col-xs-6">Altura: </label>
            <input class="col-xs-6" type="text" id="altura" name="altura">
          </div>
          <br><br>
          <div>
            <br>
            <h4>DEPARTAMENTO DE TRANSITO</h4>
            <br>
            <label class="col-xs-6">Ano Atual:</label>
            <h5 class="col-xs-6"><?php echo date('Y'); ?></h5>
          </div>
          <div>
            <label class="col-xs-6">Ano de Nascimento: </label>
            <input class="col-xs-6" type="text" id="nasc" name="nasc">
          </div>
          <br><br>

          <h4>Notas</h4>
          <div>
            <label class="col-xs-6">Nota 1</label>
            <input class="col-xs-6" type="number" name="n1" id="n1">
          </div>
          <div>
            <label class="col-xs-6">Nota 2</label>
            <input class="col-xs-6" type="number" name="n2" id="n2">
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