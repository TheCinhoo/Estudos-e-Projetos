<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Boas Vindas</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  //Enviar Submit
  function enviar(formulario) {
    document.getElementById(formulario).submit();
  }
  </script>
</head>

<body>
  <div class="container">
    <section id="content">
      <form method="post" action="aula3.php">
        <h2>Boas Vindas</h2>
        <div>
          <label>Informe seu nome:</label>
          <input type="text" id="nome" name="nome">
        </div>

        <div>
          <input type="submit" name="boton" value="Go!">
        </div>

      </form>
      <br>
      <form method="post" action="soma.php">
        <h2>Soma:</h2>
        <div>
          <label>Informe N1:</label>
          <input type="number" id="n1" name="n1">
        </div>

        <div>
          <label>Informe N2:</label>
          <input type="number" id="n2" name="n2">
        </div>

        <div>
          <input type="submit" name="boton" value="Somar">
        </div>

      </form>
    </section>
  </div>
</body>

</html>