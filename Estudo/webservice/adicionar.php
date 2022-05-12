<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>INSERIR Usuarios</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
    border: solid 1px #333;
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
        <form class="formulario" name="formulario" method="post" action="cliente2.php">
          <h2>INSERIR USUARIO</h2>

          <div>
            <label class="col-xs-4">ID: </label>
            <input class="col-xs-6" type="text" maxlength="2" id="id" name="id">
          </div>

          <div>
            <label class="col-xs-4">NOME: </label>
            <input class="col-xs-6" type="text" id="nome" name="nome">
          </div>

          <div>
            <label class="col-xs-4">SOBRENOME: </label>
            <input class="col-xs-6" type="text" id="sobrenome" name="sobrenome">
          </div>

          <div>
            <label class="col-xs-4">IDADE: </label>
            <input class="col-xs-6" type="text" maxlength="2" id="idade" name="idade">
          </div>

          <div class="col-xs-12">
            <input type="reset" name="boton" value="Reset">
            <input type="submit" id="submit" name="boton" value="Consultar">
          </div>
        </form>
      </div>
    </section>
  </div>
</body>
<script>
$('#submit').bind('click', function() {
  var obj = {
    id: $('#id').val(),
    nome: $('#nome').val(),
    sobrenome: $('#sobrenome').val(),
    idade: $('#idade').val()
  };

  $.post("client2.php", obj).done(function(data) {
    var retorno = jQuery.parseJSON(data);
    if (retorno.sucesso == 1) {
      location.href = "www.google.com";
    }
  });
});
</script>

</html>