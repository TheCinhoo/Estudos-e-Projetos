<?php

  $contador = $_POST['contador'];

  $somador1 = 0;
  $somador2 = 1;
  $somador3 = 0;

  echo $somador1. "<br>";
  echo $somador2. "<br>";

for ($i=1; $i <= $contador; $i++) {
  $somador3 = $somador1 + $somador2;
  echo $somador3. "<br> ";
  $somador1 = $somador2;
  $somador2 = $somador3;
}
?>
