<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>IDADE</title>
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
        <form class="formulario" name="formulario" method="post" action="comander.php">
          <h2>IDADE</h2>

          <div>
            <label class="col-xs-4">Nascimento: </label>
            <input class="col-xs-6" type="text" maxlength="4" id="nascimento" name="nascimento">
          </div>
          <br><br>
          <div>
            <label class="col-xs-4">Ano Ataul: </label>
            <label class="col-xs-6"> <?php echo date("Y"); ?> </label>
          </div>
          <br><br>
          <h2>Conversor Real/Dolar</h2>
          <div>
            <label class="col-xs-4">Quantidade: </label>
            <input class="col-xs-6" type="text" id="real" name="real">
          </div>
          <br><br>
          <h2>Conversor Fahrenheit/Celsius</h2>
          <div>
            <label class="col-xs-4">Temperatura em Fahrenheit: </label>
            <input class="col-xs-6" type="text" id="fahrenheit" name="fahrenheit">
          </div>
          <br><br>
          <h2>Imposto</h2>
          <div>
            <label class="col-xs-4">Total Gasto: </label>
            <input class="col-xs-6" type="text" id="total" name="total">
          </div>
          <br><br>
          <h2>Imprestimo</h2>
          <div>
            <label class="col-xs-4">Valor: </label>
            <input class="col-xs-6" type="number" id="pedido" name="pedido">
          </div>
          <div>
            <label class="col-xs-4">Vezes: </label>
            <input class="col-xs-6" type="number" id="vezes" name="vezes">
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